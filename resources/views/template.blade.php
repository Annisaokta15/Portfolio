<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyProfil</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    <section id="admin"></section>
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark ">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Admin Page</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav ">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="\profil">Profil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="\portofolio">Portofolio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="\contact">Contact</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="\tampilan">Tampilan</a>
                  </li>
                  <li class="nav-item">
                    <form action="\logout" method="POST">
                      @csrf
                      <button type="submit" class="btn btn-dark nav-link">Logout</button>
                    </form>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <div class="container">
            @yield('content')
          </div>
</body>
</html>