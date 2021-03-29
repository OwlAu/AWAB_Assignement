@extends('layouts.app')
<style>
    .bookImage {
        width: 30%;
        height: 30%;
    }

    .header {
        font-weight: bold;
        font-size: 20px;
    }

    .info {
        font-size: 18px;
    }

    .flex-container {
        display: flex;
        flex-direction: row;
        justify-content: flex-start;

    }
</style>
@section('content')
<div class="container">
    <div>
        <h2>{{$book->title}}</h2>
        <div id='addfavorite'></div>
    </div>

    <hr>
    <div class="flex-container">
        <img class='bookImage' src="{{asset('uploads/bookImage/'.$book->image)}}" alt="$book->title">
        <div class='container'>
            <p class='header'>Description:</p>
            <p class='info'>{{$book->description}}</p>
            <hr>
            <p class='header'>Genre:</p>
            <p class='info'>{{$book->genre}}</p>
            <hr>
            <p class='header'>Author:</p>
            <p class='info'>{{$book->author}}</p>
            <hr>
            <p class='header'>Publisher:</p>
            <p class='info'>{{$book->publisher}}</p>
            <hr>
            <p class='header'>Publication date:</p>
            <p class='info'>{{$book->publication_date}}</p>
            <hr>
            <p class='header'>ISBN:</p>
            <p class='info'>{{$book->ISBN}}</p>
            <hr>
            <p class='header'>Stocks:</p>
            <p class='info'>{{$book->quantity}}</p>
            <hr>
            <p class='header'>Price:</p>
            <p class='info'>RM{{$book->price}}</p>
            <hr>
            <p class='header'>Place order:</p>
            <form action='{{route('/create_new_purchase')}}' method='POST'>
                @csrf
                <div class='form-group'>
                    <label>Quantity:</label>
                    <div>
                        <input id="quantity" type="number" class="form-control @error('quantity') is-invalid @enderror"
                            name="quantity" value="{{ old('quantity') }}" required autocomplete="quantity" autofocus>

                        @error('quantity')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <input hidden id="book_id" type="number" class="form-control @error('book_id') is-invalid @enderror"
                        name="book_id" value="{{ $book->id }}" required autocomplete="book_id" autofocus>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <hr>
        </div>
    </div>
</div>
@endsection