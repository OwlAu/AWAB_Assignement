@extends('layouts.app')

<style>
    .container {
        margin-top: 10px;
    }

    .address {
        color: red;
    }
</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profile') }}
                    <!-- Trigger the modal with a button -->
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                        data-target="#myModal">Edit</button>

                    <!-- Modal -->
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Edit profile</h4>
                                </div>
                                <div class="modal-body">
                                    <form action='/update_user_profile/{{$userinfo->id}}' method='POST'
                                        enctype="multipart/form-data">
                                        @csrf
                                        {{method_field('PUT')}}
                                        <div class='form-group'>
                                            <label>Name:</label>
                                            <div>
                                                <input id="name" type="text"
                                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                                    value="{{$userinfo->name}}" required autocomplete="name" autofocus>

                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class='form-group'>
                                            <label>Email:</label>
                                            <div>
                                                <input id="email" type="text"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    name="email" value="{{$userinfo->email }}" required
                                                    autocomplete="email" autofocus>

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class='form-group'>
                                            <label>Home Address:</label>
                                            <div>
                                                <input id="address" type="text"
                                                    class="form-control @error('address') is-invalid @enderror"
                                                    name="address" value="{{$userinfo->address }}" required
                                                    autocomplete="address" autofocus>

                                                @error('address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class='form-group'>
                                            <label>Profile Picture:</label>
                                            <div class="input-group mb-3">
                                                <div> <input type="file" name='profilePic' class="form-control p-1"
                                                        id="inputGroupFile01">
                                                    <span
                                                        style='color:red'>@error('profilePic'){{$message}}@enderror</span>

                                                </div>
                                            </div>
                                        </div>
                                        <div></div>
                                        <button type='submit' class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <p>Profile Picture:</p>
                            </div>
                            <div class="col">
                                @if($userinfo->profilePic)
                                <img style='width:30%' src='{{asset('uploads/profilePic/'.$userinfo->profilePic)}}'
                                    alt='profilePic'>

                                @else
                                <img style='width:30%' src='{{asset('uploads/profilePic/defaultProfilepic.png')}}'
                                    alt='profilePic'>

                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <p>Name:</p>
                            </div>
                            <div class="col">
                                <p>{{$userinfo->name}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <p>Email:</p>
                            </div>
                            <div class="col">
                                <p>{{$userinfo->email}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <p>Home Address:</p>
                            </div>
                            <div class="col">
                                @if($userinfo->address)
                                <p>{{$userinfo->address}}</p>
                                @else
                                <p class='address'>Please update your home address.</p>
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection