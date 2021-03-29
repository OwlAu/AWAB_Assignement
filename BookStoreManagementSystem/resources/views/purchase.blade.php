@extends('layouts.app')
@php
use App\Models\Book;
@endphp
<style>
    .w-5 {
        display: none
    }
</style>
<style>
    .flex-container {
        display: flex;
        justify-content: space-evenly;
    }

    .w-5 {
        display: none
    }
</style>
@section('content')
<div class="row justify-content-center m-3">
    <h3>Book Record</h3>
</div>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Book Image</th>
            <th scope="col">Book Title</th>
            <th scope="col">Stocks</th>
            <th scope="col">Price</th>
            <th scope="col">Status</th>
            <th scope='col'>Purchase Date</th>
            <th scope='col'>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($purchases as $purchase)
        <tr>
            <th scope="row">{{$purchase->id}}</th>
            <td> <img width=100px height=100px
                    src='{{asset('uploads/bookImage/'. Book::find($purchase->book_id)->image)}}' alt='image'>
            <td>{{Book::find($purchase->book_id)->title}}</td>
            <td>{{Book::find($purchase->book_id)->quantity}}</td>
            <td>RM{{Book::find($purchase->book_id)->price}}</td>
            <td>{{$purchase->status}}</td>
            @if($purchase->status == 'paid')
            <td>{{$purchase->updated_at}}</td>
            @else
            <td></td>
            @endif
            <td>
                @if($purchase->status == 'pending')
                <!-- Trigger the modal with a button -->
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Make
                    payment</button>

                <!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Purchase {{Book::find($purchase->book_id)->title}}</h4>
                            </div>
                            <div class="modal-body">
                                <p>Do you wish to buy {{Book::find($purchase->book_id)->title}}?</p>
                            </div>
                            <div class="modal-footer">
                                <a href='/update_purchase_info/{{$purchase->id}}' type="button"
                                    class="btn btn-success">Confirm</a>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>
                @endif

                @if($purchase->status == 'pending')
                <!-- Trigger the modal with a button -->
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Delete</button>

                <!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Delete purchase record</h4>
                            </div>
                            <div class="modal-body">
                                <p>Do you wish to delete {{Book::find($purchase->book_id)->title}}?</p>
                                <p>This action is irreversible.</p>
                            </div>
                            <div class="modal-footer">
                                <a href='/delete_purchase_info/{{$purchase->id}}' type="button"
                                    class="btn btn-danger">Delete</a>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="d-flex">
    <div class="mx-auto">
        {{$purchases->links('pagination::bootstrap-4')}}
    </div>
</div>
</div>




@endsection