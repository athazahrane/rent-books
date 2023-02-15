<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    {{-- link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    {{-- css --}}
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/navbar.css')}}" rel="stylesheet">
    <title>Rent Book's</title>
</head>

{{-- navbar --}}
<body>
    <nav class="navbar navbar-white navbar-expand-lg bg-white border">
        <div class="container">
          <a class="navbar-brand" href="#">Rent Book's</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Category
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Romance</a></li>
                      <li><a class="dropdown-item" href="#">Horror</a></li>
                      <li><a class="dropdown-item" href="#">Comedy</a></li>

                    </ul>
                  </li>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="login">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
{{-- end navbar --}}

{{-- slide --}}
<div class="slider">
  <input type="radio" name="toggle" id="btn-1" checked>
  <input type="radio" name="toggle" id="btn-2">
  <input type="radio" name="toggle" id="btn-3">

  <div class="slider-controls">
    <label for="btn-1"></label>
    <label for="btn-2"></label>
    <label for="btn-3"></label>
  </div>

  <ul class="slides">
    <li class="slide">
      <div class="slide-content">
        <h2 class="slide-title">Top #1</h2>
        <p class="slide-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat dignissimos commodi eos totam perferendis possimus dolorem, deleniti vitae harum? Enim. Quisquam quod ut quasi, vero obcaecati laudantium asperiores corporis ad atque. Expedita fugit dicta maxime vel doloribus sequi, facilis dignissimos</p>
      </div>
      <p class="slide-image">
        <img src="https://th.bing.com/th/id/OIP.vQqya08RZM4ZtzwZLIIKtgHaLE?pid=ImgDet&rs=1" alt="stuff" width="320" height="240">
      </p>
    </li>
    <li class="slide">
      <div class="slide-content">
        <h2 class="slide-title">Top #2</h2>
        <p class="slide-text">Nisi ratione magni ea quis animi incidunt velit voluptate dolorem enim possimus, nam provident excepturi ipsam nihil molestiae minus delectus! Quisquam quod ut quasi, vero obcaecati laudantium asperiores corporis ad atque. Expedita fugit dicta maxime vel doloribus sequi, facilis dignissimos</p>
      </div>
      <p class="slide-image">
        <img src="https://www.anime-planet.com/images/manga/covers/kaiju-no-8-52632.jpg" alt="stuff" width="320" height="240">
      </p>
    </li>
    <li class="slide">
      <div class="slide-content">
        <h2 class="slide-title">Top #3</h2>
        <p class="slide-text">Quisquam quod ut quasi, vero obcaecati laudantium asperiores corporis ad atque. Expedita fugit dicta maxime vel doloribus sequi, facilis dignissimos. Quisquam quod ut quasi, vero obcaecati laudantium asperiores corporis ad atque. Expedita fugit dicta maxime vel doloribus sequi, facilis dignissimos</p>
      </div>
      <p class="slide-image">
        <img src="https://th.bing.com/th/id/OIP.gJ8ii0wnG8rYi13dZz3TwQHaJF?pid=ImgDet&w=750&h=920&rs=1" alt="stuff" width="320" height="240">
      </p>
    </li>
  </ul>
</div>
{{-- end slide --}}

{{-- body --}}
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-3">
                <h1>Rent Book's</h1>
                <a href="#" type="button" class="btn btn-primary btn-lg">Ayo Daftar Sekarang</a>
            </div>
            <div class="col-lg-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
            </div>
        </div>
    </div>
{{-- end body --}}

{{-- card Books --}}
<div class="container">
    <div class="row text-center">
        <h2>Most popular book's</h2>
    </div>
        <div class="row my-4">
        <div class="col-lg-4">
            <div class="card">
                <img class="card-img-top" style="height: 500px" src="https://www.anime-planet.com/images/manga/covers/kaiju-no-8-52632.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Kaiju No. 8</h5>
                  <p class="card-text"></p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      <a href="/daftar" class="btn btn-primary">Read Now  </a>
                </div>
              </div>         
        </div>
        <div class="col-lg-4">
            <div class="card">
                <img class="card-img-top" style="height: 500px" src="https://th.bing.com/th/id/OIP.vQqya08RZM4ZtzwZLIIKtgHaLE?pid=ImgDet&rs=1" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Blue Lock</h5>
                  <p class="card-text"></p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      <a href="/daftar" class="btn btn-primary">Read Now  </a>
                </div>
              </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <img class="card-img-top" style="height: 500px" src="https://th.bing.com/th/id/OIP.gJ8ii0wnG8rYi13dZz3TwQHaJF?pid=ImgDet&w=750&h=920&rs=1" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Shingeki No Kyojin</h5>
                  <p class="card-text"></p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      <a href="/daftar" class="btn btn-primary">Read Now  </a>
                </div>
              </div>
        </div>
    </div>
</div>

{{-- kontak --}}
<div class="container">
    <div class="row text-center">
        <h2>Contact Admin</h2>
    </div>
    <div class="row">
        <div class="col-lg-7">
            <form>
                <div class="mb-3">
                  <label for="name" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="name">
                </div>
                <div class="mb-4">
                  <label for="message" class="form-label">Message</label>
                  <textarea class="form-control" id="message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</div>

{{-- footer --}}
<footer class="bg-secondary text-white text-center mt-3" style="height: 25px">
    <p>Create By <a href="https://portfolio-huntara.netlify.app/" class="text-white fw-bold" style="text-decoration: none" target="_blank">Huntara fabian Suba</p>
</footer>
{{-- script --}}
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>