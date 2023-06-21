<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio | Annisa</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/bootstrap.bundle.min.js"></script>
    <style type="text/css">
      #home {
        background-color:;
      }
      #navbar {
        background-color:#13283d;
      }
      #about{
        background-color:#1a3e5f;
      }
      /* .form-label > span {
        color: #145d8a;
      } */
      #projects {
        background-color:#1f5684;
      }
      /* #contact {
        background-color: #209fd9;
      } */
    </style>
  </head>
  <body>
    <!-- Awal Navbar -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Portfolio Restoran</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#projects">Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->
@foreach ($profil as $item)
    

    <!-- Home -->
    <section id="home" class="pt-5">
      <div class="container-fluid p-0">
        <div class="p-5 text-center">
          <img src="storage/{{ $item -> foto }}" alt="" width="200" class="rounded-circle img-thumbnail" />
          <h2 class="mt-3 fw-bold">{{ $item -> nama }}</h2>
          {{-- <p class="fs-5">Student | Web Programmer</p> --}}
        </div>
      </div>
     
    </section>

    
    <!-- Akhir Home -->

    <!-- About me -->
    <section id="about" class="pt-5">
      <div class="container">
        <div class="p-5 text-center text-light">
          <h3 class="fw-bold mb-3">About</h3>
          <div class="row justify-content-center">
            <div class="col-md-4">
              <p>
               {{ $item -> about }}
              </p>
            </div>
            {{-- <div class="col-md-4">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod laboriosam quas, repellat pariatur, impedit atque fugit dolorum voluptates magni in laudantium, quae quisquam. Unde nihil expedita minima quae facere ea.</p>
            </div> --}}
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir About me -->
    @endforeach

    <!-- My Project -->
    <section id="projects" class="pt-5">
      <div class="container">
        <div class="p-5 text-bg-light text-center">
          <h3 class="fw-bold mb-3"></h3>
          <div class="row justify-content-center">
            @foreach ($portofolio as $item)
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="storage/{{ $item -> foto_porto }}" class="card-img-top" alt="Project 1" />
                <div class="card-body">
                  <p class="card-text">
                    {{ $item->deskripsi }}
                  </p>
                </div>
              </div>
            </div>
            {{-- <div class="col-md-4 mb-3">
              <div class="card">
                <img src="img/japan.jpg" class="card-img-top" alt="Project 2" />
                <div class="card-body">
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur consectetur modi suscipit maiores ab doloremque nam sapiente quo repudiandae excepturi? Suscipit laudantium voluptatem qui laborum culpa minima earum,
                    ut iusto?
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="img/inazuma3.jpg" class="card-img-top" alt="Project 2" />
                <div class="card-body">
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit pariatur cupiditate quod a autem ex voluptate numquam dignissimos perspiciatis est. Cumque atque accusantium quo, incidunt vero animi autem porro
                    praesentium?
                  </p>
                </div>
              </div>
            </div> --}}
            {{-- <div class="col-md-4 mb-3">
              <div class="card">
                <img src="img/japan2.jpg" class="card-img-top" alt="Project 2" />
                <div class="card-body">
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, ad incidunt exercitationem corporis placeat sit. Hic aperiam magnam nostrum sequi natus reiciendis est neque? Commodi tempora architecto vel quae quidem.
                  </p>
                </div>
              </div>
            </div> --}}
            {{-- <div class="col-md-4 mb-3">
              <div class="card">
                <img src="img/inazuma2.jpg" class="card-img-top" alt="Project 2" />
                <div class="card-body">
                  <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt repudiandae ipsam nam accusantium tempora eius reprehenderit dolorum architecto cupiditate minima dolor quod porro voluptas magni quaerat blanditiis
                    minus, dicta eum!
                  </p> --}}
                {{-- </div>
              </div>
            </div> --}}
            @endforeach
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Projects -->
    <!-- contact -->
    <section id="contact">
      <div class="container">
        <div class="p-5">
          <h3 class="fw-bold text-center mb-3">Contact Me</h3>
          <div class="row justify-content-center">
            <div class="col-md-6">
              <form action="contact/create" method="post" id="form-contact">
                @csrf
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama Lengkap<span>*</span></label>
                  <input type="text" class="form-control" id="text" name="nama" autocomplete="off" />
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email<span>*</span></label>
                  <input type="email" class="form-control" id="email" name="email" autocomplete="off" />
                </div>
                <div class="mb-3">
                  <label for="pesan" class="form-label">Pesan<span>*</span></label>
                  <textarea class="form-control" id="pesan" name="pesan" rows="3"></textarea>
                </div>
                <div class="mb-3 d-flex justify-content-center">
                  <button type="submit" class="btn btn-success">Kirim</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir contact -->

    <!-- footer -->
    <div class="container-fluid">
      <footer class="py-3 my-3 border-top">
        <p class="text-center">&copy;2023 <a href="https://instagram.com/rzzafrr?igshid=YmMyMTA2M2Y=" target="_blank" class="fw-bold text-decoration-none">Annisa</a></p>
      </footer>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#1f5684" fill-opacity="1" d="M0,224L30,234.7C60,245,120,267,180,229.3C240,192,300,96,360,85.3C420,75,480,149,540,202.7C600,256,660,288,720,272C780,256,840,192,900,181.3C960,171,1020,213,1080,245.3C1140,277,1200,299,1260,277.3C1320,256,1380,192,1410,160L1440,128L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
    </svg>
    <!-- Akhir footer -->
  </body>
  <script type="text/javascript">
    var links = document.getElementsByClassName('nav-link');
    for (var i = 0; i < links.length; i++) {
      c;
      links[i].addEventListener('click', function () {
        var current = document.getElementsByClassName('active');
        if (current.length > 0) {
          current[0].className = current[0].className.replace(' active', '');
        }
        this.className += ' active';
      });
    }
  </script>
</html>
