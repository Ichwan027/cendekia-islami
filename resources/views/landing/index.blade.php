@extends('layouts.master')
@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image" />
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <h1 class="display-3 text-dark mb-4 animated slideInDown">
                                        Segera Daftarkan Putra Putri Terbaik Anda.
                                    </h1>
                                    {{-- <p class="fs-5 text-body mb-5">
                    Pondok Pesantren Cendekia Islami
                  </p> --}}
                                    <a href="{{ Route('ttg') }}" class="btn btn-primary py-3 px-5">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image" />
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <h1 class="display-3 text-dark mb-4 animated slideInDown">
                                        Kami Siap Mencetak Generasi Rahmatan Lil Alamin.
                                    </h1>
                                    {{-- <p class="fs-5 text-body mb-5">
                    Clita erat ipsum et lorem et sit, sed stet lorem sit clita
                    duo justo magna dolore erat amet
                  </p> --}}
                                    {{-- <a href="{{ Route('ttg') }}" class="btn btn-primary py-3 px-5">Selengkapnya</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

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
                        <a href="{{ route('ttg') }}" class="btn btn-primary py-3 px-5">Selengkapnya</a>
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

    <!-- Galeri Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto" style="max-width: 500px">
                <h1 class="display-6 mb-5">Galeri</h1>
            </div>
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

    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-2">Kenapa Harus Memilih Pondok Cendekia Islami ?</h1>
                    <p class="mb-2">
                        Pondok Cendekia Islami mengintegrasikan pendidikan pesantren dan modern untuk membentuk generasi
                        cendekiawan yang unggul. Dengan kurikulum yang fokus pada pengembangan karakter dan keterampilan
                        praktis, serta fasilitas yang lengkap, kami berkomitmen untuk mendidik anak-anak dalam suasana yang
                        islami dan mendukung pertumbuhan moral serta intelektual mereka.
                    </p>
                    <div class="row g-3">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="bg-light rounded h-100 p-3">
                                <div
                                    class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3">
                                    <img class="align-self-center mb-3" src="img/icon/icon-06-primary.png"
                                        alt="" />
                                    <h5 class="mb-0">Daily Islamic Value</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="bg-light rounded h-100 p-3">
                                <div
                                    class="bg-white d-flex flex-column justify-content-center text-center rounded py-4 px-3">
                                    <img class="align-self-center mb-3" src="img/icon/icon-04-primary.png"
                                        alt="" />
                                    <h5 class="mb-0">Daily Communication</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="bg-light rounded h-100 p-3">
                                <div
                                    class="bg-white d-flex flex-column justify-content-center text-center rounded py-4 px-3">
                                    <img class="align-self-center mb-3" src="img/icon/icon-05-primary.png"
                                        alt="" />
                                    <h5 class="mb-0">Daily Leadership Activities</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="bg-light rounded h-100 p-3">
                                <div
                                    class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3">
                                    <img class="align-self-center mb-3" src="img/icon/icon-10-primary.png"
                                        alt="" />
                                    <h5 class="mb-0">Daily Innovative Thinking</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative rounded overflow-hidden h-100" style="min-height: 400px">
                        <img class="position-absolute w-100 h-100" src="img/feature.jpg" alt=""
                            style="object-fit: cover" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto" style="max-width: 500px">
                <h1 class="display-6 mb-5">
                    Jenis Program Pendidikan
                </h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded h-100 p-5">
                        <div class="d-flex align-items-center ms-n5 mb-4" style="text-align: center;">
                            {{-- <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                <img class="img-fluid" src="img/icon/icon-10-light.png" alt="" />
                            </div> --}}
                            <h4 class="mb-0">Akselerasi Pendidikan Berbasis Salaf Modern</h4>
                        </div>
                        <p class="mb-4">
                            Aliqu diam amet eos erat ipsum et lorem et sit, sed stet lorem
                            sit clita duo justo erat amet
                        </p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded h-100 p-5">
                        <div class="d-flex align-items-center ms-n5 mb-4">
                            <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                <img class="img-fluid" src="img/icon/icon-01-light.png" alt="" />
                            </div>
                            <h4 class="mb-0">Takhossus Ahlussunnah Wal Jama'ah</h4>
                        </div>
                        <p class="mb-4">
                            Aliqu diam amet eos erat ipsum et lorem et sit, sed stet lorem
                            sit clita duo justo erat amet
                        </p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded h-100 p-5">
                        <div class="d-flex align-items-center ms-n5 mb-4">
                            <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                <img class="img-fluid" src="img/icon/icon-05-light.png" alt="" />
                            </div>
                            <h4 class="mb-0">Pelatihan Komputer</h4>
                        </div>
                        <p class="mb-4">
                            Aliqu diam amet eos erat ipsum et lorem et sit, sed stet lorem
                            sit clita duo justo erat amet
                        </p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded h-100 p-5">
                        <div class="d-flex align-items-center ms-n5 mb-4">
                            <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                <img class="img-fluid" src="img/icon/icon-08-light.png" alt="" />
                            </div>
                            <h4 class="mb-0">Pembelajaran Cepat Baca Kitab (Metode Al-Miftah Sidogiri)</h4>
                        </div>
                        <p class="mb-4">
                            Aliqu diam amet eos erat ipsum et lorem et sit, sed stet lorem
                            sit clita duo justo erat amet
                        </p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded h-100 p-5">
                        <div class="d-flex align-items-center ms-n5 mb-4">
                            <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                <img class="img-fluid" src="img/icon/icon-07-light.png" alt="" />
                            </div>
                            <h4 class="mb-0">Pembalajaran Bahasa Arab, Inggris, dan Bahasa Korea(Kurikulum Pare Kediri)
                            </h4>
                        </div>
                        <p class="mb-4">
                            Aliqu diam amet eos erat ipsum et lorem et sit, sed stet lorem
                            sit clita duo justo erat amet
                        </p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded h-100 p-5">
                        <div class="d-flex align-items-center ms-n5 mb-4">
                            <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                <img class="img-fluid" src="img/icon/icon-06-light.png" alt="" />
                            </div>
                            <h4 class="mb-0">Property Insurance</h4>
                        </div>
                        <p class="mb-4">
                            Aliqu diam amet eos erat ipsum et lorem et sit, sed stet lorem
                            sit clita duo justo erat amet
                        </p>

                    </div>
                </div>
                <a href="{{ route('ttg') }}" class="btn btn-primary py-3 px-5">Selengkapnya</a>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Appointment Start -->
    <div class="container-fluid appointment my-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-6 text-white mb-5">
                        Hubungi Kami
                    </h1>
                    <p class="text-white mb-5">
                        Kami selalu siap mendengarkan dan membantu Anda. Jika Anda memiliki pertanyaan atau membutuhkan
                        informasi lebih lanjut, jangan ragu untuk menghubungi kami. Tim kami akan siap memberikan respons
                        cepat dan solusi terbaik untuk kebutuhan Anda. Keterbukaan komunikasi adalah prioritas kami,
                        sehingga Anda dapat merasa nyaman dan puas dalam setiap interaksi.
                    </p>
                    <div class="bg-white rounded p-3">
                        <div class="d-flex align-items-center bg-primary rounded p-3">
                            <img class="flex-shrink-0 rounded-circle me-3" src="img/profile.jpg" alt="" />
                            <h5 class="text-white mb-0">Telepon Kami: +62 813 3207 0381</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white rounded p-5">
                        <form>
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="gname"
                                            placeholder="Gurdian Name" />
                                        <label for="gname">Nama Lengkap</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="gmail"
                                            placeholder="Gurdian Email" />
                                        <label for="gmail">Email Aktif</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="cname"
                                            placeholder="Child Name" />
                                        <label for="cname">Nomor Telepon</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="cage"
                                            placeholder="Child Age" />
                                        <label for="cage">Subjek</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 80px"></textarea>
                                        <label for="message">Pesan</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary py-3 px-5" type="submit">
                                        Kirim
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->

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
                                <a class="btn btn-square btn-light m-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
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

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto" style="max-width: 500px">
                <h1 class="display-6 mb-5">Alumni</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="testimonial-left h-100">
                        <img class="img-fluid animated pulse infinite" src="img/testimonial-1.jpg" alt="" />
                        <img class="img-fluid animated pulse infinite" src="img/testimonial-2.jpg" alt="" />
                        <img class="img-fluid animated pulse infinite" src="img/testimonial-3.jpg" alt="" />
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item text-center">
                            <img class="img-fluid rounded mx-auto mb-4" src="img/testimonial-1.jpg" alt="" />
                            <p class="fs-5">
                                Dolores sed duo clita tempor justo dolor et stet lorem kasd
                                labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy
                                et labore et tempor diam tempor erat.
                            </p>
                            <h5>Client Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <img class="img-fluid rounded mx-auto mb-4" src="img/testimonial-2.jpg" alt="" />
                            <p class="fs-5">
                                Dolores sed duo clita tempor justo dolor et stet lorem kasd
                                labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy
                                et labore et tempor diam tempor erat.
                            </p>
                            <h5>Client Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <img class="img-fluid rounded mx-auto mb-4" src="img/testimonial-3.jpg" alt="" />
                            <p class="fs-5">
                                Dolores sed duo clita tempor justo dolor et stet lorem kasd
                                labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy
                                et labore et tempor diam tempor erat.
                            </p>
                            <h5>Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="testimonial-right h-100">
                        <img class="img-fluid animated pulse infinite" src="img/testimonial-1.jpg" alt="" />
                        <img class="img-fluid animated pulse infinite" src="img/testimonial-2.jpg" alt="" />
                        <img class="img-fluid animated pulse infinite" src="img/testimonial-3.jpg" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
