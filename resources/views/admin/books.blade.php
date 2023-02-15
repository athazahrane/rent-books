@extends('layouts.main')

@section('title', 'Books')

@section('content')

<h1>Halaman Books</h1>
<div class="mt-5 d-flex justify-content-end">
    <a href="/books-add" class="btn btn-success">Add Book</a>
</div>
@if(session('status'))
<div class="alert alert-info mp-3">
    {{ session('status') }}
</div>
@endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Book Code</th>
                <th>Title</th>
                <th>Cover</th>
                <th>Category</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($book as $value)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$value->book_code}}</td>
                <td>{{$value->title}}</td>
                <td>
                    @if($value->cover != '')
                    <img src="{{asset('storage/cover/'.$value->cover)}}" alt="" width="85px" ></td>
                    @else
                    <img src="{{asset('img/assets/not-found.jpg')}}" alt="" width="75px">
                    @endif
                <td>
                    @foreach($value->categories as $category)
                    {{$category->name}} <br>
                    @endforeach
               </td>
                <td>{{$value->status}}</td>
                <td>
                    <a href="/books-edit/{{$value->slug}}" class="btn btn-warning">Edit</a>
                    <a href="/books-delete/{{$value->slug}}" class="btn btn-danger">Delate</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection


