@extends('layouts.master')
@section('content')

    <!-- Page Header Start -->
    <div
      class="container-fluid page-header py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <h1 class="display-4 animated slideInDown mb-4">Galeri Kami</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="/">Beranda</a></li>
            <li class="breadcrumb-item"><a href="#">Halaman</a></li>
            <li class="breadcrumb-item active" aria-current="page">
              Galeri
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->

    <!-- Galeri Start -->
    <div class="container-xxl py-5">
      <div class="container">
          <div class="row g-4">
              <!-- Batas -->
              <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="team-item rounded">
                      <a href="img/about.jpg" target="_blank">
                          <img class="img-fluid" src="img/about.jpg" alt="" />
                      </a>
                      <div class="text-center p-4">
                          <h5>Dr. KH. Nur Fauzi Palestin, S.Hum., M.Pd.</h5>
                      </div>
                  </div>
              </div>
              <!-- Batas -->
              <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="team-item rounded">
                      <a href="img/about.jpg" target="_blank">
                          <img class="img-fluid" src="img/about.jpg" alt="" />
                      </a>
                      <div class="text-center p-4">
                          <h5>Dr. Ahmad Zainuddin</h5>
                      </div>
                  </div>
              </div>

              <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="team-item rounded">
                      <a href="img/about.jpg" target="_blank">
                          <img class="img-fluid" src="img/about.jpg" alt="" />
                      </a>
                      <div class="text-center p-4">
                          <h5>Ustadzah Fatimah</h5>
                      </div>
                  </div>
              </div>

              <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="team-item rounded">
                      <a href="img/about.jpg" target="_blank">
                          <img class="img-fluid" src="img/about.jpg" alt="" />
                      </a>
                      <div class="text-center p-4">
                          <h5>Dr. H. Moh. Nur Kholis, M.Pd.</h5>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Galeri End -->

@endsection