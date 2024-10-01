@extends('layouts.master')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 animated slideInDown mb-4">Tentang Kami</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="#">Halaman</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tentang Kami</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <!-- Gambar -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden rounded ps-2 pt-5 h-100" style="min-height: 400px">
                        <img class="position-absolute w-100 h-100" src="img/about.jpg" alt=""
                            style="object-fit: cover; object-position: center;" />
                    </div>
                </div>

                <!-- Tentang Kami -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100 d-flex flex-column justify-content-center">
                        <h1 class="display-6 mb-3">Tentang Kami</h1>
                        <p class="mb-4">
                            Sekolah cendekia islami merupakan sekolah perpaduan sistem Salaf-Modern yang berbasis
                            nilai-nilai pesantren bermanhaj Ahlus sunnah wal jamaah yang mengedepankan pada pendidikan
                            karakter: memiliki corak kecerdasan intelektual, spiritual, sosial.
                            Serta menjadikan penguasaan bahasa asing dan Teknologi sebagai pokok capaian.
                            Diharapkan dari sekolah ini menjadi cikal bakal lahirnya para cendekiawan yang islami, bermoral
                            tinggi, modern, dan punya daya saing.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Fasilitas -->
    <div class="container-fluid overflow-hidden my-5 px-lg-0">
        <div class="container facts px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 facts-text wow fadeIn" data-wow-delay="0.1s">
                    <div class="h-100 px-4 ps-lg-0">
                        <h1 class="text-white mb-4">VISI</h1>
                        <p class="text-light mb-5">
                            Terwujudnya Generasi Islam yang bermoral tinggi berlandasan iman dan ilmu. menguasai bahasa
                            asing dn tekhnologi Melalui Penerapan Kurikulum Integratif.
                        </p>
                        <h1 class="text-white mb-4">MISI</h1>
                        <p class="text-light mb-5">
                            1. Mewujudkan Lulusan Berkepribadian mulia Melalui Pendidikan dan Keteladanan ala pesantren
                            salaf.<br>
                            2. Mengembangkan Proses Pembelajaran kebahasaan, Sains, dan teknologi.<br>
                            3. Menyelenggarakan Kurikulum sistem takhossus dan terfokus pada capaian dengan metode
                            salaf-modern.
                        </p>

                    </div>
                </div>
                <div class="col-lg-6 facts-counter wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100 px-4 pe-lg-0">
                        <h1 class="text-primary mb-4" style="text-align: center;">FASILITAS</h1>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <h1 class="display-5" data-toggle="counter-up">1</h1>
                                <p class="fs-5 text-primary">Tenaga pendidik profesional lulusan pesantren dan kampus
                                    ternama
                                </p>
                            </div>
                            <div class="col-sm-6">
                                <h1 class="display-5" data-toggle="counter-up">2</h1>
                                <p class="fs-5 text-primary">Masjid representatif</p>
                            </div>
                            <div class="col-sm-6">
                                <h1 class="display-5" data-toggle="counter-up">3</h1>
                                <p class="fs-5 text-primary">Ruangan Belajar Ber AC</p>
                            </div>
                            <div class="col-sm-6">
                                <h1 class="display-5" data-toggle="counter-up">4</h1>
                                <p class="fs-5 text-primary">Kamar Mandi Yang Bersih</p>
                            </div>
                            <div class="col-sm-6">
                                <h1 class="display-5" data-toggle="counter-up">5</h1>
                                <p class="fs-5 text-primary">Asrama</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fasilitas End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto" style="max-width: 500px">
                <h1 class="display-6 mb-5">Jajaran Pengurus</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded">
                        <img class="img-fluid" src="img/team-1.jpg" alt="" />
                        <div class="text-center p-4">
                            <h5>Dr. KH. Nur Fauzi Palestin, S.Hum., M.Pd.</h5>
                            <span>Pengasuh</span>
                        </div>
                        <div class="team-text text-center bg-white p-4">
                            <h5>Dr. KH. Nur Fauzi Palestin, S.Hum., M.Pd.</h5>
                            <p>Pengasuh</p>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item rounded">
                        <img class="img-fluid" src="img/team-2.jpg" alt="" />
                        <div class="text-center p-4">
                            <h5>Full Name</h5>
                            <span>Designation</span>
                        </div>
                        <div class="team-text text-center bg-white p-4">
                            <h5>Full Name</h5>
                            <p>Designation</p>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded">
                        <img class="img-fluid" src="img/team-3.jpg" alt="" />
                        <div class="text-center p-4">
                            <h5>Full Name</h5>
                            <span>Designation</span>
                        </div>
                        <div class="team-text text-center bg-white p-4">
                            <h5>Full Name</h5>
                            <p>Designation</p>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item rounded">
                        <img class="img-fluid" src="img/team-4.jpg" alt="" />
                        <div class="text-center p-4">
                            <h5>Full Name</h5>
                            <span>Designation</span>
                        </div>
                        <div class="team-text text-center bg-white p-4">
                            <h5>Full Name</h5>
                            <p>Designation</p>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection
