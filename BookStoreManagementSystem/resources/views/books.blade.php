@extends('layouts.app')
<style>
    .card {
        display: flex;
        flex-wrap: wrap;
        margin: 10px;
    }

    .flex-container {
        flex-direction: row;
        display: flex;
        flex-wrap: wrap;
        margin-left: 30px;
        margin-right: 30px;
        justify-content: center;
    }

    .societyContainer {
        margin-left: 30px;
        margin-right: 30px;
        padding: 0px;
        justify-content: center;
        position: absolute;
    }

    .w-5 {
        display: none
    }

    .card-img-top {
        width: 100%;
        height: 15vw;
        object-fit: cover;
    }
</style>
@section('content')
<div class="container">
    <div class="col-md-15">
        <h3>Pick your books here! There are {{$books->count()}} for you to pick from!</h3>

        <div class='flex-container'>
            @foreach($books as $book)
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{asset('uploads/bookImage/'.$book->image)}}" alt="Card image cap">
                <div class="card-body">
                    <p style='float:left;' class="card-text">{{$book->title}}</p>
                    <a style='float:right;' href='/books/{{$book->id}}'>Learn More></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection