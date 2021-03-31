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
                <a href='/update_purchase_info/{{$purchase->id}}' type="button" class="btn btn-success">Confirm</a>
                <a href='/delete_purchase_info/{{$purchase->id}}' type="button" class="btn btn-danger">Delete</a>
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