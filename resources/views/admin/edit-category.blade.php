@extends('layouts.main')
@section('title', 'Update Category')
@section('content')
<h1>Update Category</h1>
@if ($errors->any())
    <div class="alert alert-danger w-50">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
         </ul>
    </div>
@endif
<form action="/category-edit/{{$category->slug}}" method="post" class="mt-4">
    @csrf
    @method('put')
    <label for="name" class="form-label">Category Name</label>
    <input type="text" name="name" id="name" class="form-control w-50" value="{{$category->name}}">
    <a class="btn btn-primary mt-2" href="/category" role="button">Back</a>
    <button type="submit" class="btn btn-success mt-2">Save</button>

</form>
@endsection