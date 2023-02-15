<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rents Books | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<style>
    .main{
        height: 100vh;
    }

    .sidebar{
        background-color: #674188;
    }

    .sidebar a{
        text-decoration: none;
        padding: 20px 2px;
        color: #ECF9FF;
        display: block;
    }
    
    .sidebar a:hover{
        background-color: #58287F;
    }

    .sidebar a.active{
        background-color: #58287F;
        border-right: solid 4px #AEE2FF;
    }

    .books {
        background-color: teal;
    }

    .card-data {
        border-radius: 5px;
        padiing: 20px 50px;
        border: solid 1px;
        color: white;
    }

    .card-data i{
        font-size: 50px;
    }

    desc {
        font-size: 20px;
    }

    .count {
        font-size: 30px;
    }

    .category {
        background-color: brown;
    }
    
    .user {
        background-color: green;  
    }


</style>
<body>
    <div class="main d-flex flex-column justify-content-between">
        {{-- navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light border bg-light">
        <div class="container">
          <a class="navbar-brand"><i class="bi bi-book-half"></i>Rent Book's</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
          </div>
        </div>
      </nav>

      <div class="body-main h-100">
        <div class="row g-0 h-100">
            <div class="col-lg-2 sidebar collapse d-lg-block" id="navbarSupportedContent">
                @if(Auth::user()->roles_id == 1)
                <a href="/dashboard" @if(request()->route()->uri == 'dashboard') class= 'active'> @endif><i class="bi bi-house p-2"></i>Dashboard</a>
                <a href="/users" @if(request()->route()->uri == 'users') class= 'active'> @endif><i class="bi bi-person p-2"></i>User</a>
                <a href="/category" @if(request()->route()->uri == 'category') class= 'active'> @endif><i class="bi bi-tags p-2"></i>Category</a>
                <a href="/books"@if(request()->route()->uri == 'books') class= 'active'> @endif><i class="bi bi-book p-2"></i>Books</a>
                <a href="/rentlog" @if(request()->route()->uri == 'rentlog') class= 'active'> @endif><i class="bi bi-bookmark-plus p-2"></i>Rent Logs</a>
                <a href="/logout"><i class="bi bi-box-arrow-in-left p-2"></i>Logout</a>
                @else
                <a href="/profile" @if(request()->route()->uri == 'profile') class= 'active'> @endif><i class="bi bi-person p-2"></i>Profile</a>
                <a href="/logout"><i class="bi bi-box-arrow-in-left p-2"></i>Logout</a>
                @endif
            </div>
            <div class="col-lg-10 p-5 content">
                @yield('content')

            </div>
        </div>
      </div>
    </div>
</body>
</html>