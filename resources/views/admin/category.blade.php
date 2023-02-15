@extends('layouts.main')
@section('title', 'Category')
@section('content')
    <h1>Ini Halaman Category</h1>
    <div class="mt-4 d-flex justify-content-end">
        <a href="/category-add" class="btn btn-success">+ Add Category</a>
        @if(session('status'))
            <div class="alert alert-success mt-3">
                {{session('status')}}
            </div>
        @endif
    </div>
        <div class="mt-4 d-flex justify-content-end"></div>
        <div class="mt-5">
            <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->name}}</td>
                    <td>
                        <a href="category-edit/{{$item->slug}}" class="btn btn-primary">Edit</a>
                        <a href="category-delete/{{$item->slug}}" class="btn btn-danger">Delate</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
@endsection