@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create new book record') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form action='{{route('/create_new_book')}}' method='POST' enctype="multipart/form-data">
                        @csrf
                        <div class='form-group'>
                            <label>Title:</label>
                            <div>
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror"
                                    name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class='form-group'>
                            <label>Description:</label>
                            {{-- <input type='textarea' name='description' class='form-control' placeholder="Enter description:"> --}}
                            <textarea name="description" class='form-control' rows="5" cols="30">
                            </textarea>
                            <span style='color:red'>@error('description'){{$message}}@enderror</span>
                        </div>
                        <div class='form-group'>
                            <label>Book author:</label>
                            <div>
                                <input id="author" type="text"
                                    class="form-control @error('author') is-invalid @enderror" name="author"
                                    value="{{ old('author') }}" required autocomplete="author" autofocus>

                                @error('author')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class='form-group'>
                            <label>Publisher:</label>
                            <div>
                                <input id="publisher" type="text"
                                    class="form-control @error('publisher') is-invalid @enderror" name="publisher"
                                    value="{{ old('publisher') }}" required autocomplete="publisher" autofocus>

                                @error('publisher')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class='form-group'>
                            <label>Genre:</label>
                            <div>
                                <input id="genre" type="text" class="form-control @error('genre') is-invalid @enderror"
                                    name="genre" value="{{ old('genre') }}" required autocomplete="genre" autofocus>

                                @error('genre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="example-date-input" class="col-form-label">Publication Date</label>
                            <div>
                                <input class="form-control" type="date" name='publication_date' id="example-date-input">
                            </div>
                        </div>
                        <div class='form-group'>
                            <label>ISBN:</label>
                            <div>
                                <input id="ISBN" type="text" class="form-control @error('ISBN') is-invalid @enderror"
                                    name="ISBN" value="{{ old('ISBN') }}" required autocomplete="ISBN" autofocus>

                                @error('ISBN')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class='form-group'>
                            <label>Quantity:</label>
                            <div>
                                <input id="quantity" type="number" class="form-control @error('quantity') is-invalid @enderror" name="quantity" value="{{ old('quantity') }}" required autocomplete="quantity" autofocus>
                        
                                @error('quantity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class='form-group'>
                            <label>Price(RM):</label>
                            <div>
                                <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>
                        
                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class='form-group'>
                            <label>Image:</label>
                            <div class="input-group mb-3">
                                <input type="file" name='image' class="form-control p-1" id="inputGroupFile01">
                            </div>
                            <span style='color:red'>@error('image'){{$message}}@enderror</span>
                        </div>
                        <button type='submit' class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection