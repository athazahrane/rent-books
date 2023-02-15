@extends('layouts.main')

@section('title', 'Edit Book')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<h1>Edit book</h1>

<form action="/books-edit/{{$books->slug}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <label for="book_code" class="form-label">Book Code</label>
    <input type="text" name="book_code" id="book_code" class="form-control w-50" placeholder="Book Code" value="{{$books->book_code}}">
    <label for="title" class="form-label mt-2">Title</label>
    <input type="text" name="title" id="title" class="form-control w-50" placeholder="title" value="{{$books->title}}">
    <div class="mb-3">
        <label for="currentImage" class="form-label d-block">Current Cover</label>
         @if($books->cover != '')
            <img src="{{asset('storage/cover/'.$books->cover)}}" alt="" width="200px" ></td>
            @else
            <img src="{{asset('img/assets/not-found.jpg')}}" alt="" width="75px">
            @endif
        </div>
        <label for="categories" class="form-label">Category</label>
        <select name="categories[]" multiple="multiple"class="form-control select" id="categories">
            @foreach($categories as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
    </select>
    <label for="listcategory" class="form-label">Current category</label>
        <ul>
            @foreach($books->categories as $category)
            <li>{{$category->name}}</li>
            @endforeach
        </ul>

    <button type="submit" class="btn btn-danger mt-3 w-10">Back</button>
    <button type="submit" class="btn btn-success mt-3 w-10">Save</button>
</form>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
        $('.select').select2();
        });
    </script>
@endsection