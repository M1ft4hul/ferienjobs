<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Ferienjobs</title>
    <meta name="robots" content="noindex, nofollow">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="<?= base_url() ?>/assets/img/favicon.png" rel="icon">
    <link href="<?= base_url() ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/css/style.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        span.mata {
            position: relative;
            top: -30px;
            margin: 0 10px;
            float: right;
            font-size: 18px;
        }
    </style>
</head>

<body>
    <div class="swal" data-swal="<?= session()->get('pesan'); ?>"></div>


    <header id="header" class="fixed-top ">

        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="/">FERIENJOBS<br><small style="font-size: .8rem;">Kerja di Musim Liburan</small></a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto " href="<?= base_url('/') ?>">Home</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('/') ?>#about">Tentang</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('/') ?>#why-us">Keuntungan</a></li>
                    <!-- <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li> -->
                    <li><a class="nav-link scrollto" href="<?= base_url('/') ?>#team">Tim</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url() ?>/partner">Partner</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('/') ?>#faq">FAQ</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url() ?>/dokumen">Dokumen</a></li>
                    <!--<li><a class="nav-link scrollto" href="<?= base_url('/') ?>#biaya">Biaya</a></li>-->
                    <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a> -->
                    <!-- <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul> -->
                    <!-- </li> -->
                    <li><a class="nav-link scrollto" href="<?= base_url('/') ?>#contact">Kontak</a></li>
                    <!-- <li><a class="getstarted scrollto" href="whatsapp://send?text=Salam Admin ferienjobs, saya membutuhkan informasi lengkap, apakah ada waktu untuk konsultasi?.&phone=+6285298649951&abid=+6285298649951'">Daftar</a></li> -->
                    <li><a class="getstarted scrollto" href="<?= base_url() ?>/login">Login</a></li>
                </ul> <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center  pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1>Partner</h1>
                    <h2>Perusahaan-perusahaan mana saja di Indonesia maupun di Jerman yang terlibat dan mensukseskan ferienjobs ke Jerman bagi Mahasiswa Indonesia adalah 6 perusahaan tersebut di laman ini.</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start"><a href="whatsapp://send?text=Salam Admin ferienjobs, saya membutuhkan informasi lengkap terkait menjadi Kandidat Ferienjobs, apakah ada waktu untuk konsultasi?.&phone=+6285298649951&abid=+6285298649951'" class="btn-get-started scrollto">Informasi Detail</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200"> <img src="<?= base_url() ?>/assets/img/hero-img2.png" class="img-fluid animated" alt="ferienjobs" style="max-width:80%"></div>
            </div>
        </div>
    </section>
    <main id="main">
        <section id="clients" class="clients section-bg">

        </section>
        <section class="about">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>PARTNER FERIENJOBS</h2>
                </div>
                 <div class="mb-4"> 
                 <h4>PARTNER DARI INDONESIA</h4> 
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 row-cols-xxl-6  g-1">
                    <div class="col">
                        <div class="card h-100 m-1 tampil_mobil">
                            <img src="<?= base_url('assets/img/partner/shb.jpeg') ?>" class="card-img-top" style="width: 100%; height: 150px; object-fit: cover;" alt="ferienjobs">
                            <div class="card-body p-2">
                                <h5 class="card-title small">Sinar Harapan Bangsaku</h5>
                                <p class="card-text mb-0 small">sebagai satu satunya konsultan ferienjobs mahasiswa Indonesia ke Jerman</p>

                            </div>
                            <div class="card-footer p-1 text-center">
                                <!-- <a href="#" class="btn btn-primary"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="btn btn-primary"><i class="bi bi-telephone-fill"></i></a> -->
                                <a href="mailto:germany@sinarharapanbangsaku.com" class="btn btn-primary"><i class="bi bi-envelope-fill"></i></a>
                                <a href="https://sinarharapanbangsaku.com/" target="_blank" class="btn btn-primary"><i class="bi bi-globe"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 m-1 tampil_mobil">
                            <img src="<?= base_url('assets/img/partner/cvgen.jpeg') ?>" class="card-img-top" style="width: 100%; height: 150px; object-fit: fill;" alt="ferienjobs">
                            <div class="card-body p-2">
                                <h5 class="card-title small">CV-GEN</h5>
                                <p class="card-text mb-0 small">sebagai partner koordinator universitas dan mahasiswa di Indonesia</p>

                            </div>
                            <div class="card-footer p-1 text-center">
                                <!-- <a href="#" class="btn btn-primary"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="btn btn-primary"><i class="bi bi-telephone-fill"></i></a> -->
                                <a href="mailto:ami@cv-gen.com" class="btn btn-primary"><i class="bi bi-envelope-fill"></i></a>
                                <a href="https://www.cv-gen.com/" target="_blank" class="btn btn-primary"><i class="bi bi-globe"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 m-1 tampil_mobil">
                            <img src="<?= base_url('assets/img/partner/timur.png') ?>" class="card-img-top" style="width: 100%; height: 150px; object-fit: fill;" alt="ferienjobs">
                            <div class="card-body p-2">
                                <h5 class="card-title small">Universitas Indonesia Timur</h5>
                                <p class="card-text mb-0 small">Universitas Partner</p>

                            </div>
                            <div class="card-footer p-1 text-center">
                                <!-- <a href="#" class="btn btn-primary"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="btn btn-primary"><i class="bi bi-telephone-fill"></i></a> -->
                                <a href="mailto:info@uit.ac.id" class="btn btn-primary"><i class="bi bi-envelope-fill"></i></a>
                                <a href="https://uit.ac.id/" target="_blank" class="btn btn-primary"><i class="bi bi-globe"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 m-1 tampil_mobil">
                            <img src="<?= base_url('assets/img/partner/uho.png') ?>" class="card-img-top" style="width: 100%; height: 150px; object-fit: fill;" alt="ferienjobs">
                            <div class="card-body p-2">
                                <h5 class="card-title small">Universitas Halu Oleo</h5>
                                <p class="card-text mb-0 small">Universitas Penyangga</p>

                            </div>
                            <div class="card-footer p-1 text-center">
                                <!-- <a href="#" class="btn btn-primary"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="btn btn-primary"><i class="bi bi-telephone-fill"></i></a> -->
                                <a href="mailto:info@uho.ac.id" class="btn btn-primary"><i class="bi bi-envelope-fill"></i></a>
                                <a href="https://uho.ac.id/" target="_blank" class="btn btn-primary"><i class="bi bi-globe"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 m-1 tampil_mobil">
                            <img src="<?= base_url('assets/img/partner/alaudin.png') ?>" class="card-img-top" style="width: 100%; height: 150px; object-fit: fill;" alt="ferienjobs">
                            <div class="card-body p-2">
                                <h5 class="card-title small">Universitas Islam Negeri Alauddin Makassar</h5>
                                <p class="card-text mb-0 small">Universitas Penyangga</p>

                            </div>
                            <div class="card-footer p-1 text-center">
                                <!-- <a href="#" class="btn btn-primary"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="btn btn-primary"><i class="bi bi-telephone-fill"></i></a> -->
                                <a href="mailto:kontak@uin-alauddin.ac.id" class="btn btn-primary"><i class="bi bi-envelope-fill"></i></a>
                                <a href="https://uin-alauddin.ac.id/" target="_blank" class="btn btn-primary"><i class="bi bi-globe"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 m-1 tampil_mobil">
                            <img src="<?= base_url('assets/img/partner/unifa.png') ?>" class="card-img-top" style="width: 100%; height: 150px; object-fit: fill;" alt="ferienjobs">
                            <div class="card-body p-2">
                                <h5 class="card-title small">Universitas Fajar</h5>
                                <p class="card-text mb-0 small">Universitas Penyangga</p>

                            </div>
                            <div class="card-footer p-1 text-center">
                                <!-- <a href="#" class="btn btn-primary"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="btn btn-primary"><i class="bi bi-telephone-fill"></i></a> -->
                                <a href="mailto:info@unifa.ac.id" class="btn btn-primary"><i class="bi bi-envelope-fill"></i></a>
                                <a href="https://unifa.ac.id/" target="_blank" class="btn btn-primary"><i class="bi bi-globe"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 m-1 tampil_mobil">
                            <img src="<?= base_url('assets/img/partner/binawan.png') ?>" class="card-img-top" style="width: 100%; height: 150px; object-fit: fill;" alt="ferienjobs">
                            <div class="card-body p-2">
                                <h5 class="card-title small">Universitas Binawan</h5>
                                <p class="card-text mb-0 small">Universitas Partner</p>

                            </div>
                            <div class="card-footer p-1 text-center">
                                <!-- <a href="#" class="btn btn-primary"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="btn btn-primary"><i class="bi bi-telephone-fill"></i></a> -->
                                <a href="mailto:pmb@binawan.ac.id" class="btn btn-primary"><i class="bi bi-envelope-fill"></i></a>
                                <a href="https://pmb.binawan.ac.id/" target="_blank" class="btn btn-primary"><i class="bi bi-globe"></i></a>
                            </div>
                        </div>
                    </div>
                     </div>
                    </div>
                    <div class="mb-4">
                    <h4>PARTNER DARI JERMAN</h4>
                    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 row-cols-xxl-6  g-1">
                    
                    <!--
                     <div class="col">
                        <div class="card h-100 m-1 tampil_mobil">
                            <img src="<//?= base_url('assets/img/partner/unistaff.jpeg') ?>" class="card-img-top" style="width: 100%; height: 150px; object-fit: fill;" alt="ferienjobs">
                            <div class="card-body p-2">
                                <h5 class="card-title small">UNISTAFF GmbH</h5>
                                <p class="card-text mb-0 small">Sebagai perusahaan pemberi kerja di Jerman</p>

                            </div>
                            <div class="card-footer p-1 text-center">
                                <!-- <a href="#" class="btn btn-primary"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="btn btn-primary"><i class="bi bi-telephone-fill"></i></a> -->
                                <!-- <a href="https://ferienjobs.cv-gen.com/login" class="btn btn-primary"><i class="bi bi-envelope-fill"></i></a>
                                <a href="https://ferienjobs.cv-gen.com/login" target="_blank" class="btn btn-primary"><i class="bi bi-globe"></i></a>
                            </div>
                        </div>
                    </div> 
                    <!--
                    <div class="col">
                        <div class="card h-100 m-1 tampil_mobil">
                            <img src="<?= base_url('assets/img/partner/raj.png') ?>" class="card-img-top" style="width: 100%; height: 150px; object-fit: fill;" alt="ferienjobs">
                            <div class="card-body p-2">
                                <h5 class="card-title small">Raj Services GmbH</h5>
                                <p class="card-text mb-0 small">Sebagai perusahaan pemberi kerja di Jerman</p>

                            </div>
                            <div class="card-footer p-1 text-center">
                                <!-- <a href="#" class="btn btn-primary"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="btn btn-primary"><i class="bi bi-telephone-fill"></i></a> -->
                            <!--
                                <a href="https://ferienjobs.cv-gen.com/login" class="btn btn-primary"><i class="bi bi-envelope-fill"></i></a>
                                <a href="https://ferienjobs.cv-gen.com/login" target="_blank" class="btn btn-primary"><i class="bi bi-globe"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col">
                        <div class="card h-100 m-1 tampil_mobil">
                            <img src="<//?= base_url('assets/img/partner/agentur.jpeg') ?>" class="card-img-top" style="width: 100%; height: 150px; object-fit: fill;" alt="ferienjobs">
                            <div class="card-body p-2">
                                <h5 class="card-title small">ACB Agentur</h5>
                                <p class="card-text mb-0 small">sebagai konsultan ferienjob mahasiswa Indonesia di Jerman</p>

                            </div>
                            <div class="card-footer p-1 text-center">
                                <!-- <a href="#" class="btn btn-primary"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="btn btn-primary"><i class="bi bi-telephone-fill"></i></a> -->
                            <!--
                                <a href="https://ferienjobs.cv-gen.com/login" class="btn btn-primary"><i class="bi bi-envelope-fill"></i></a>
                                <a href="https://ferienjobs.cv-gen.com/login" target="_blank" class="btn btn-primary"><i class="bi bi-globe"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <!--<div class="col">-->
                    <!--    <div class="card h-100 m-1 tampil_mobil">-->
                    <!--        <img src="" class="card-img-top" style="width: 100%; height: 150px; object-fit: fill;" alt="ferienjobs">-->
                    <!--        <div class="card-body p-2">-->
                    <!--            <h5 class="card-title small">Runtime GmbH</h5>-->
                    <!--            <p class="card-text mb-0 small">Sebagai perusahaan pemberi kerja di Jerman</p>-->

                    <!--        </div>-->
                    <!--        <div class="card-footer p-1 text-center">-->
                    <!--             <a href="#" class="btn btn-primary"><i class="bi bi-facebook"></i></a>-->
                    <!--        <a href="#" class="btn btn-primary"><i class="bi bi-telephone-fill"></i></a> -->
                    <!--            <a href="https://ferienjobs.cv-gen.com/login" class="btn btn-primary"><i class="bi bi-envelope-fill"></i></a>-->
                    <!--            <a href="https://ferienjobs.cv-gen.com/login" target="_blank" class="btn btn-primary"><i class="bi bi-globe"></i></a>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    
                    <div class="col">
                        <div class="card h-100 m-1 tampil_mobil">
                            <img src="<?= base_url('assets/img/partner/lsc.jpeg') ?>" class="card-img-top" style="width: 100%; height: 150px; object-fit: fill;" alt="ferienjobs">
                            <div class="card-body p-2">
                                <h5 class="card-title small">Mina Mulia (Life & Study Coach)</h5>
                                <p class="card-text mb-0 small">Penulis Buku <strong>Willkomen</strong></p>

                            </div>
                            <div class="card-footer p-1 text-center">
                                <!-- <a href="#" class="btn btn-primary"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="btn btn-primary"><i class="bi bi-telephone-fill"></i></a> -->
                                <a href="https://ferienjobs.cv-gen.com/login" class="btn btn-primary"><i class="bi bi-envelope-fill"></i></a>
                                <a href="https://ferienjobs.cv-gen.com/login" target="_blank" class="btn btn-primary"><i class="bi bi-globe"></i></a>
                            </div>
                        </div>
                    </div>
                </div> <br> <br> <br>
                <div class="mb-4"> 
                 <h4><a href="https://drive.google.com/file/d/1Xc6Uyz8nKHzYNjwyTwwlTI9K0C5EQI0X/view?usp=sharing" target="_blank">KLIK DI SINI UNTUK MENJADI UNIVERSITAS PARTNER</a></h4>
            </div>

            <!-- <div class="row content">
                <div class="col-lg-6">
                    <h3>1. Partner di Indonesia</h3>
                    <p><strong>SHB (Sinar Harapan bangsaku)</strong> sebagai satu satunya konsultan ferienjobs mahasiswa Indonesia ke Jerman</p>
                    <ul>
                        <li>Website: <a href="https://sinarharapanbangsaku.com/" target="_blank">Sinar Harapan Bangsaku</a></li>
                        <li>Email: germany@sinarharapanbangsaku.com</li>
                    </ul>
                    <br>
                    <p><strong>CV-GEN (Curriculum Vitae Generator)</strong> sebagai partner koordinator universitas dan mahasiswa di Indonesia</p>
                    <ul>
                        <li>Website: <a href="https://cv-gen.com/" target="_blank">CV-GEN</a></li>
                        <li>News: <a href="https://news.cv-gen.com/" target="_blank">News CV-GEN</a></li>
                        <li>Email: ami@cv-gen.com</li>
                    </ul>
                    <br>
                    <p><strong>Universitas Indonesia Timur, Makassar, Sulawesi Selatan</strong> Universitas Partner. Artinya universitas tersebut ini telah MoU dengan perusahaan di Jerman melalui cvgen</p>
                    <p><strong>Universitas Hasanuddin, Makassar, Sulawesi Selatan</strong> Universitas Penyangga. Artinya universitas ini juga turut mengirimkan mahasiswa ke Jerman untuk Ferienjob melalui cvgen namun belum menandatangani MoU dan dapat digantikan oleh universitas lainnya Yang telah MoU.</p>
                    <p><strong>Universitas Katolik Santo Thomas, Medan, Sumatera Utara</strong> Universitas Penyangga</p>
                    <p><strong>Universitas Halu Oleo, Kendari, Sulawesi Tenggara</strong> Universitas Penyangga</p>
                    <p><strong>Universitas Islam Negeri Alauddin Makassar, Sulawesi Selatan</strong> Universitas Penyangga</p>
                    <p><strong>Universitas Fajar, Makassar, Sulawesi Selatan</strong> Universitas Penyangga</p>

                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <h3>2. Partner di Jerman</h3>
                    <p><strong>UNISTAFF GmbH</strong> sebagai perusahaan pemberi kerja di Jerman</p>
                    <ul>
                        <li>Website: <a href="https://www.unistaff.de/" target="_blank">UNISTAFF GmbH</a></li>
                        <li>Email: franz@unistaff.de</li>
                    </ul>
                    <br>
                    <p><strong>Raj Services GmbH</strong> sebagai perusahaan pemberi kerja di Jerman</p>
                    <ul>
                        <li>Website: <a href="https://www.raj-personalservices.de/" target="_blank">Raj Services GmbH</a></li>
                        <li>Email: info@raj-personalservices.de</li>
                    </ul>
                    <br>
                    <p><strong>Runtime GmbH</strong> sebagai perusahaan pemberi kerja di Jerman</p>
                    <ul>
                        <li>Website: <a href="https://www.runtime.de" target="_blank">Runtime GmbH</a></li>
                        <li>Email: astian.woeste@runtime.de</li>
                    </ul>
                    <br>
                    <p><strong>ACB Agentur</strong> sebagai konsultan ferienjob mahasiswa Indonesia di Jerman</p>
                    <ul>
                        <li>Website: <a href="https://job-agentur-cb.de/" target="_blank">ACB Agentur</a></li>
                        <li>Email: kontakt@job-acb.de</li>
                    </ul>
                </div>
            </div> -->
        </section>
    </main>
    <footer id="footer">
        <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- <div class="col-lg-6">
                        <h4>Join Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post"> <input type="email" name="email"><input type="submit" value="Subscribe"></form>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-6 footer-contact">
                        <h3>Ferienjobs Indonesia</h3>
                        <p>Jl. Elang Blok D No.1, BTN Medibrata Indah,
Kota Baubau, Sulawesi Tenggara, 93157<br><br> <strong>Phone:</strong>+6285298649951<br> <strong>Email:</strong> <a href="#">ami@cv-gen.com</a><br></p>
                    </div>
                    <!-- <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul> 
                    </div>-->
                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Media Sosial</h4>
                        <p>Follow dan ikuti media sosial kami.</p>
                        <div class="social-links mt-3"> <a href="https://www.facebook.com/cvgenoverseas" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a> <a href="https://www.instagram.com/cvgencom/" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a> <a href="https://www.linkedin.com/in/amsulistiani-ensch-85379824/" class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a>
                        </div>
                        <br>
                        <h4><a href="<?php echo base_url('/privacy') ?>">Privacy policy</a></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="container footer-bottom clearfix">
            <div class="copyright"> &copy; Copyright <strong><span>cv-gen.com</span></strong>. All Rights Reserved</div>
            <!-- <div class="credits"> Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a></div> -->
        </div>
    </footer>

    <div class="modal fade" id="kode_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Kode Koordinator</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Masukkan KODE KOORDINATOR Anda, jika belum memiliki koordinator, ketikkan saja <strong>CVGEN</strong>
                </div>
            </div>
        </div>
    </div>
    <div id="preloader"></div> <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="<?= base_url() ?>/assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="<?= base_url() ?>/assets/js/main.js"></script>
    <script>
        $(document).ready(function() {
            $(function() {
                $("#show_eye").click(function() {
                    $(this).toggleClass("bi bi-eye-slash-fill");
                    var type = $(this).hasClass("bi-eye-slash-fill") ? "text" : "password";
                    $("#password").attr("type", type);
                });
            });
        })

        const toastTrigger = document.getElementById('liveToastBtn')
        const toastLiveExample = document.getElementById('liveToast')
        if (toastTrigger) {
            toastTrigger.addEventListener('click', () => {
                const toast = new bootstrap.Toast(toastLiveExample)

                toast.show()
            })
        }

        const swal = $('.swal').data('swal');
        if (swal) {
            Swal.fire({
                text: swal,
            })
        }
    </script>
</body>

</html>