@extends('layouts.app')

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
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Author</th>
            <th scope="col">Publisher</th>
            <th scope="col">Genre</th>
            <th scope="col">Publication Date</th>
            <th scope="col">ISBN</th>
            <th scope="col">Quantity</th>
            <th scope="col">Price</th>
            <th scope="col">Image</th>
            <th scope='col'>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($books as $book)
        <tr>
            <th scope="row">{{$book->id}}</th>
            <td>{{$book->title}}</td>
            <td>{{$book->description}}</td>
            <td>{{$book->author}}</td>
            <td>{{$book->publisher}}</td>
            <td>{{$book->genre}}</td>
            <td>{{$book->publication_date}}</td>
            <td>{{$book->ISBN}}</td>
            <td>{{$book->quantity}}</td>
            <td>{{$book->price}}</td>
            <td> <img width=100px height=100px src='{{asset('uploads/bookImage/'.$book->image)}}' alt='image'>
            </td>
            <td>
                <a href='/update_book_record/{{$book->id}}' type="button" class="btn btn-warning">Edit</a>
                {{-- <a href='/delete_book_record/{{$book->id}}' type="button" class="btn btn-danger" >Delete</a> --}}
                <!-- Trigger the modal with a button -->
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Delete</button>

                <!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Delete book record</h4>
                            </div>
                            <div class="modal-body">
                                <p>Do you wish to delete {{$book->title}}?</p>
                                <p>This action is irreversible.</p>
                            </div>
                            <div class="modal-footer">
                                <a href='/delete_book_record/{{$book->id}}' type="button" class="btn btn-danger" >Delete</a>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="d-flex">
    <div class="mx-auto">
        {{$books->links('pagination::bootstrap-4')}}
    </div>
</div>
</div>

<script>
    $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>


@endsection