@extends('layouts.main')
@section('title', 'Dashboard')
@section('content')

    <h3>Welcome, {{Auth::user()->username}}!</h3>

    <!-- Cards -->
        <div class="row mt-4">
            <div class="col-4 books card-data">
                <div class="row">
                    <div class="col-6">
                        <i class="bi bi-bookmarks"></i>
                    </div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="desc">
                            Books
                        </div>
                        <div class="count">
                            {{$book_count}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 category card-data">
                <div class="row">
                    <div class="col-6">
                        <i class="bi bi-tags"></i>
                    </div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="desc">
                            Category
                        </div>
                        <div class="count">
                            {{$category_count}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 user card-data">
                <div class="row">
                    <div class="col-6">
                        <i class="bi bi-person-fill"></i>
                    </div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="desc">
                            User
                        </div>
                        <div class="count">
                            
                            {{$user_count}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Ecnd Cards -->

    {{-- table --}}
        <div class="mt-4">
            <table class="table">
                <thead>
                    <tr>
                        <th>
                            No
                        </th>
                        <th>
                            Username
                        </th>
                        <th>
                            Book title
                        </th>
                        <th>
                            Rent Date
                        </th>
                        <th>
                            Return Date
                        </th>
                        <th>
                            Actual Return Date
                        </th>
                        <th>
                            Status
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="7"
                        class="text-center">No Data</td> 
                    </tr>
                </tbody>
            </table>
        </div>

    {{-- end table --}}
@endsection