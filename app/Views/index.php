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
        .tim {
            max-width: 100% !important;
        }

        .aaa {
            position: absolute;
            right: 10px;
            font-size: 30px;
            top: 10px;
        }

        .modalpopup {
            padding: 5px;
        }

        .gambarpopup {
            max-width: 100%;
            height: auto;
        }
    </style>

</head>

<body>
    <div class="swal" data-swal="<?= session()->get('pesan'); ?>"></div>
     <div class="modal fade" id="popup" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header modalpopup">
                    <a href="<?= base_url() ?>/kandidat">
                        <img src="<?= base_url() ?>/assets/img/banner2.jpg" alt="rentalmo" class="img-fluid gambarpopup">
                    </a>
                    <button type="button" class="btn-close aaa" data-bs-dismiss="modal"></button>
                </div>
            </div>
        </div>
    </div>

    <header id="header" class="fixed-top ">

        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="/">FERIENJOBS<br><small style="font-size: .8rem;">Kerja di Musim Liburan</small></a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="<?= base_url() ?>#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url() ?>#about">Tentang</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url() ?>#why-us">Keuntungan</a></li>
                    <!-- <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li> -->
                    <li><a class="nav-link scrollto" href="<?= base_url('/') ?>#team">Tim</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url() ?>/partner">Partner</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('/') ?>#faq">FAQ</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url() ?>/dokumen">Dokumen</a></li>
                    <!--<li><a class="nav-link scrollto" href="<?= base_url('/') ?>#bibaya">Biaya</a></li>-->
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
                    <li>
                        <?php if (session()->get('logged_in') == true && session()->get('level') == 9) { ?>
                            <a class="getstarted scrollto" href="<?= base_url() ?>/admin">Dashboard</a>
                        <?php } elseif (session()->get('logged_in') == true && session()->get('level') == 1) { ?>
                            <a class="getstarted scrollto" href="<?= base_url() ?>/profil-kandidat">Dashboard</a>
                        <?php } elseif (session()->get('logged_in') == true && session()->get('level') == 0) { ?>
                            <a class="getstarted scrollto" href="<?= base_url() ?>/profil">Dashboard</a>
                        <?php } else { ?>
                            <a class="getstarted scrollto" href="<?= base_url() ?>/login">Login</a>
                        <?php } ?>
                    </li>
                </ul> <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1>Ferienjobs</h1>
                    <h2>Adalah program kerja di musim liburan di Jerman, khusus untuk Mahasiswa aktif dari Universitas di Indonesia<br>"Pengalaman dan masa depan adalah Prioritas."</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start"> <a href="<?= base_url() ?>/kandidat" class="btn-get-started scrollto">Daftar Kandidat</a> <span class="px-2"></span> <a href="<?= base_url() ?>/koordinator" class="btn-get-started scrollto">Daftar Koordinator</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200"> <img src="<?= base_url() ?>/assets/img/hero-img.png" class="img-fluid animated" alt="ferienjobs" style="max-width:100%"></div>
            </div>
        </div>
    </section>
    <main id="main">
        <section id="clients" class="clients section-bg">
            <div class="container">
                <div class="row d-flex align-items-center justify-content-around flex-wrap" data-aos="zoom-in">
                    <img src="<?= base_url() ?>/assets/img/clients/client-1.png" class="img-fluid " style="width:5%" alt="">
                    <img src="<?= base_url() ?>/assets/img/clients/client-2.png" class="img-fluid " style="width:5%" alt="">
                    <!--<img src="<?= base_url() ?>/assets/img/clients/client-3.png" class="img-fluid " style="width:5%" alt="">-->
                    <img src="<?= base_url() ?>/assets/img/clients/client-4.png" class="img-fluid " style="width:5%" alt="">
                    <img src="<?= base_url() ?>/assets/img/clients/client-5.png" class="img-fluid " style="width:5%" alt="">
                    <img src="<?= base_url() ?>/assets/img/clients/client-6.png" class="img-fluid " style="width:5%" alt="">
                    <!--<img src="<?= base_url() ?>/assets/img/clients/client-7.png" class="img-fluid " style="width:5%" alt="">-->
                </div>
            </div>
        </section>
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Tentang Kami</h2>
                </div>
                <div class="row content">
                    <div class="col-lg-6">
                        <p>Setelah bertahun tahun memperjuangkan agar Indonesia masuk sebagai salah satu Negara yang berkontribusi mengirim mahasiswa ferienjob ke Jerman, akhirnya 2022 menjadi tahun manis bagi Indonesia.</p>
                        <p>November 2022, untuk pertama kalinya, Indonesia mengirimkan mahasiswa ke Jerman untuk ferienjob.</p>
                        <!-- <ul>
                            <li><i class="ri-check-double-line"></i>Khusus Mahasiswa Aktif</li>
                            <li><i class="ri-check-double-line"></i>Universitas yang sudah terdaftar di Anabin</li>
                            <li><i class="ri-check-double-line"></i>Resmi dan melalui verifikasi</li>
                            <li><i class="ri-check-double-line"></i>Porgram kerja 3 bulan di Jerman</li>
                            <li><i class="ri-check-double-line"></i>Gaji 13euro/jam atau 1.820 - 2.200 Euro/bulan, bisa lembur.</li>
                        </ul> -->
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p>Ferienjobs menawarkan kesempatan dan peluang besar kepada Mahasiswa aktif dari berbagai Universitas di Indonesia untuk bekerja di Jerman selama musim liburan.</p>
                        <p>Cek Dokumen Kelengkapan Mahasiswa di sini: </p>
                        <a href="<?= base_url() ?>/dokumen" class="btn-learn-more">Syarat Dokumen</a>
                        <!-- <a href="whatsapp://send?text=Salam Admin ferienjobs, saya membutuhkan informasi lengkap, apakah ada waktu untuk konsultasi??.&phone=+6285298649951&abid=+6285298649951'" class="btn-learn-more">Tanya Admin ?</a> -->
                    </div>
                </div>
            </div>
        </section>
        <section id="why-us" class="why-us section-bg">
            <div class="container-fluid" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch order-2 order-lg-1">
                        <div class="content">
                            <h3>4 Keuntungan<strong> Ferienjobs</strong></h3>
                            <p>Beberapa keuntungan mengikuti program Ferienjobs</p>
                        </div>
                        <div class="accordion-list">
                            <ul>
                                <li> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span>Pengalaman<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                        <p>Bekerja diluar negeri seperti Eropa khususnya Jerman adalah sebuah pengalaman yang tidak diperoleh bagi sebagian besar Mahasiswa/i Indonesia. Kesempatan dan peluang ini dapat ambil sebagai bekal pengalaman kerja secara Global.</p>
                                    </div>
                                </li>
                                <li> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span>Resmi<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                        <p>Karena program ini resmi dan bekerjasama dengan Pemerintah Indonesia dan Jerman, serta kampus atau Universitas resmi, maka validasi dan otentikasi peserta menjadi prioritas utama termasuk ijin resmi dari Universitas.</p>
                                    </div>
                                </li>
                                <li> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span>Sertifikat<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                        <p>Satu sertifikat dari Agentur/Konsultan resmi trdaftar dan diakui oleh badan federal tenaga kerja asing di Jerman dan satu sertifikat dari perusahaan tempat bekerja di Jerman.</p>
                                    </div>
                                </li>
                                <li> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4" class="collapsed"><span>04</span>Keunggulan<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
                                        <p>Tidak perlu sertifikat bahasa Jerman, bahasa inggris, Hanya 3 bulan, merupakan waktu yang cukup untuk mempelajari kultur dan budaya kerja Jerman sebelum memutuskan untuk menetap lama di Jerman melalui program program lainnya.</p>
                                    </div>
                                </li>
                                <li> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-5" class="collapsed"><span>05</span>Gaji<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-5" class="collapse" data-bs-parent=".accordion-list">
                                        <p>Gaji 2000 euro/bulan (Brutto) atau Gaji di atas UMK Jerman. 13euro/jam</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
                </div>
            </div>
        </section>
        <!-- <section id="skills" class="skills">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100"> <img src="<?= base_url() ?>/assets/img/skills.png" class="img-fluid" alt=""></div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                        <h3>Voluptatem dignissimos provident quasi corporis voluptates</h3>
                        <p class="fst-italic"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class="skills-content">
                            <div class="progress"> <span class="skill">HTML <i class="val">100%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress"> <span class="skill">CSS <i class="val">90%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress"> <span class="skill">JavaScript <i class="val">75%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress"> <span class="skill">Photoshop <i class="val">55%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!-- <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Services</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href="">Lorem Ipsum</a></h4>
                            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="">Sed ut perspici</a></h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4><a href="">Magni Dolores</a></h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-layer"></i></div>
                            <h4><a href="">Nemo Enim</a></h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">
                <div class="row">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3>Jangan lewatkan peluang ini.</h3>
                        <p>Hubungi kami, dan konsultasikan program Ferienjobs ini, tim kami siap melayani secara profesional.</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center"> <a class="cta-btn align-middle" href="whatsapp://send?text=Salam Admin ferienjobs, saya membutuhkan informasi lengkap, apakah ada waktu untuk konsultasi??.&phone=+6285298649951&abid=+6285298649951'">Tanya Admin ?</a></div>
                </div>
            </div>
        </section>
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Gallery Ferienjobs</h2>
                    <p>Mahasiswa asal Indonesia peserta Ferienjob 2022. Pengalaman dan wawasan tentang dunia kerja Jerman adalah bekal luar biasa bagi Mahasiswa/i kita dari Indonesia. Selain itu tentu saja gaji yang cukup baik.</p>
                </div>
                <!-- <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-card">Card</li>
                    <li data-filter=".filter-web">Web</li>
                </ul> -->
                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app text-center">
                        <div class="portfolio-img"><img src="<?= base_url() ?>/assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Ferienjobs</h4>
                            <p>Ferienjobs</p> <a href="<?= base_url() ?>/assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Ferienjobs"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web text-center">
                        <div class="portfolio-img"><img src="<?= base_url() ?>/assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Ferienjobs</h4>
                            <p>Ferienjobs</p> <a href="<?= base_url() ?>/assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Ferienjobs"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app text-center">
                        <div class="portfolio-img"><img src="<?= base_url() ?>/assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Ferienjobs</h4>
                            <p>Ferienjobs</p> <a href="<?= base_url() ?>/assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Ferienjobs"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card text-center">
                        <div class="portfolio-img"><img src="<?= base_url() ?>/assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Ferienjobs</h4>
                            <p>Ferienjobs</p> <a href="<?= base_url() ?>/assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Ferienjobs"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web text-center">
                        <div class="portfolio-img"><img src="<?= base_url() ?>/assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Ferienjobs</h4>
                            <p>Ferienjobs</p> <a href="<?= base_url() ?>/assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Ferienjobs"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app text-center">
                        <div class="portfolio-img"><img src="<?= base_url() ?>/assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Ferienjobs</h4>
                            <p>Ferienjobs</p> <a href="<?= base_url() ?>/assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Ferienjobs"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card text-center">
                        <div class="portfolio-img"><img src="<?= base_url() ?>/assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Ferienjobs</h4>
                            <p>Ferienjobs</p> <a href="<?= base_url() ?>/assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Ferienjobs"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card text-center">
                        <div class="portfolio-img"><img src="<?= base_url() ?>/assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Ferienjobs</h4>
                            <p>Ferienjobs</p> <a href="<?= base_url() ?>/assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Ferienjobs"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web text-center">
                        <div class="portfolio-img"><img src="<?= base_url() ?>/assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Ferienjobs</h4>
                            <p>Ferienjobs</p> <a href="<?= base_url() ?>/assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Ferienjobs"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Tim Ferienjobs</h2>
                    <p>Tim kami siap membantu Mahasiswa/i Indonesia meraih kesempatan dan peluang kerja di Jerman.</p>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12 mt-4">
                        <div class="member d-flex align-items-center" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pic"><img src="<?= base_url() ?>/assets/img/team/team-7.jpg" class="img-fluid tim" alt=""></div>
                            <div class="member-info">
                                <h4>Enik waldkönig</h4>
                                <div class="social"> <a href=""><i class="ri-twitter-fill"></i></a> <a href="https://www.facebook.com/profile.php?id=100027540412731" target="_blank"><i class="ri-facebook-fill"></i></a> <a href="#" target="_blank"><i class="ri-instagram-fill"></i></a> <a href=""> <i class="ri-linkedin-box-fill"></i> </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mt-4">
                        <div class="member d-flex align-items-center" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pic"><img src="<?= base_url() ?>/assets/img/team/team-1.jpg" class="img-fluid tim" alt=""></div>
                            <div class="member-info">
                                <h4>Amsulistiani</h4>
                                <div class="social"> <a href=""><i class="ri-twitter-fill"></i></a> <a href="https://www.facebook.com/amsulistiani" target="_blank"><i class="ri-facebook-fill"></i></a> <a href="https://www.instagram.com/amsulistiani" target="_blank"><i class="ri-instagram-fill"></i></a> <a href=""> <i class="ri-linkedin-box-fill"></i> </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mt-4">
                        <div class="member d-flex align-items-center" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pic"><img src="<?= base_url() ?>/assets/img/team/team-9.jpg" class="img-fluid tim" alt=""></div>
                            <div class="member-info">
                                <h4>Ernesia Octavia</h4>
                                <div class="social"> <a href=""><i class="ri-twitter-fill"></i></a> <a href="#" target="_blank"><i class="ri-facebook-fill"></i></a> <a href="https://www.instagram.com/nezzviana/" target="_blank"><i class="ri-instagram-fill"></i></a> <a href=""> <i class="ri-linkedin-box-fill"></i> </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mt-4">
                        <div class="member d-flex align-items-center" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pic"><img src="<?= base_url() ?>/assets/img/team/team-10.jpg" class="img-fluid tim" alt=""></div>
                            <div class="member-info">
                                <h4>Rinda Setiawan</h4>
                                <div class="social"> <a href=""><i class="ri-twitter-fill"></i></a> <a href="https://www.facebook.com/riendshaoran" target="_blank"><i class="ri-facebook-fill"></i></a> <a href="https://www.instagram.com/riendshaoran/" target="_blank"><i class="ri-instagram-fill"></i></a> <a href=""> <i class="ri-linkedin-box-fill"></i> </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mt-4">
                        <div class="member d-flex align-items-center" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pic"><img src="<?= base_url() ?>/assets/img/team/team-2.jpg" class="img-fluid tim" alt=""></div>
                            <div class="member-info">
                                <h4>Sepno Warini</h4>
                                <div class="social"> <a href=""><i class="ri-twitter-fill"></i></a> <a href="https://www.facebook.com/sepnowarini" target="_blank"><i class="ri-facebook-fill"></i></a> <a href="https://www.instagram.com/sepnowrn" target="_blank"><i class="ri-instagram-fill"></i></a> <a href=""> <i class="ri-linkedin-box-fill"></i> </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mt-4">
                        <div class="member d-flex align-items-center" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pic"><img src="<?= base_url() ?>/assets/img/team/team-3.jpg" class="img-fluid tim" alt=""></div>
                            <div class="member-info">
                                <h4>Tri Pramedi A</h4>
                                <div class="social"> <a href=""><i class="ri-twitter-fill"></i></a> <a href="https://www.facebook.com/pramedh" target="_blank"><i class="ri-facebook-fill"></i></a> <a href="https://www.instagram.com/pramedy" target="_blank"><i class="ri-instagram-fill"></i></a> <a href=""> <i class="ri-linkedin-box-fill"></i> </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mt-4">
                        <div class="member d-flex align-items-center" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pic"><img src="<?= base_url() ?>/assets/img/team/team-6.jpg" class="img-fluid tim" alt=""></div>
                            <div class="member-info">
                                <h4>Akbar</h4>
                                <div class="social"> <a href="https://twitter.com/kodokrawa" target="_blank"><i class="ri-twitter-fill"></i></a> <a href="https://www.facebook.com/akbar.rentalmo/" target="_blank"><i class="ri-facebook-fill"></i></a> <a href="https://www.instagram.com/akbar_rentalmo/" target="_blank"><i class="ri-instagram-fill"></i></a> <a href="https://www.linkedin.com/in/akbar-rentalmo/" target="_blank"> <i class="ri-linkedin-box-fill"></i> </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mt-4">
                        <div class="member d-flex align-items-center" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pic"><img src="<?= base_url() ?>/assets/img/team/team-4.jpg" class="img-fluid tim" alt=""></div>
                            <div class="member-info">
                                <h4>Aisyah Welina</h4>
                                <div class="social"> <a href=""><i class="ri-twitter-fill"></i></a> <a href="https://www.facebook.com/aisyah.jga" target="_blank"><i class="ri-facebook-fill"></i></a> <a href="https://www.instagram.com/aisyah_welin" target="_blank"><i class="ri-instagram-fill"></i></a> <a href=""> <i class="ri-linkedin-box-fill"></i> </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mt-4">
                        <div class="member d-flex align-items-center" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pic"><img src="<?= base_url() ?>/assets/img/team/team-5.jpg" class="img-fluid tim" alt=""></div>
                            <div class="member-info">
                                <h4>Gufran</h4>
                                <div class="social"> <a href=""><i class="ri-twitter-fill"></i></a> <a href="https://www.facebook.com/raan.gufraan.7" target="_blank"><i class="ri-facebook-fill"></i></a> <a href="https://www.instagram.com/gufran.lmth" target="_blank"><i class="ri-instagram-fill"></i></a> <a href=""> <i class="ri-linkedin-box-fill"></i> </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mt-4">
                        <div class="member d-flex align-items-center" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pic"><img src="<?= base_url() ?>/assets/img/team/team-8.jpg" class="img-fluid tim" alt=""></div>
                            <div class="member-info">
                                <h4>Zuardin</h4>
                                <div class="social"> <a href=""><i class="ri-twitter-fill"></i></a> <a href="https://www.facebook.com/zuardin.arif" target="_blank"><i class="ri-facebook-fill"></i></a> <a href="https://www.instagram.com/zuardinarif" target="_blank"><i class="ri-instagram-fill"></i></a> <a href=""> <i class="ri-linkedin-box-fill"></i> </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mt-4">
                        <div class="member d-flex align-items-center" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pic"><img src="<?= base_url() ?>/assets/img/team/team-11.jpg" class="img-fluid tim" alt=""></div>
                            <div class="member-info">
                                <h4>Shofa </h4>
                                <div class="social"> <a href=""><i class="ri-twitter-fill"></i></a> <a href="https://www.facebook.com/shofa.smanel" target="_blank"><i class="ri-facebook-fill"></i></a> <a href="https://www.instagram.com/shofasmanel/" target="_blank"><i class="ri-instagram-fill"></i></a> <a href=""> <i class="ri-linkedin-box-fill"></i> </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mt-4">
                        <div class="member d-flex align-items-center" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pic"><img src="<?= base_url() ?>/assets/img/team/team-12.jpg" class="img-fluid tim" alt=""></div>
                            <div class="member-info">
                                <h4>Abdul Azis</h4>
                                <div class="social"> <a href=""><i class="ri-twitter-fill"></i></a> <a href="#" target="_blank"><i class="ri-facebook-fill"></i></a> <a href="https://www.instagram.com/zuardinarif" target="_blank"><i class="ri-instagram-fill"></i></a> <a href=""> <i class="ri-linkedin-box-fill"></i> </a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--<section id="biaya" class="pricing">-->
        <!--    <div class="container" data-aos="fade-up">-->
        <!--        <div class="section-title">-->
        <!--            <h2>Biaya Ferienjobs</h2>-->
        <!--            <p>Biaya mengikuti program Ferienjobs.</p>-->
        <!--        </div>-->
        <!--        <div class="row">-->
        <!--            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">-->
        <!--                <div class="box">-->
        <!--                    <h3>Mendaftar</h3>-->
        <!--                    <h4><sup>Rp.</sup>100K<span></span></h4>-->
        <!--                    <p>Melakukan pendaftaran dan menunggu validasi akun serta verifikasi data oleh Admin.</p>-->

        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">-->
        <!--                <div class="box ">-->
        <!--                    <h3>Proses & Kirim Berkas</h3>-->
        <!--                    <h4><sup>Rp.</sup>2.475K<span>(atau 150 Euro)</span></h4>-->
        <!--                    <p>Biaya untuk memproses dan mengirim berkas ke Jerman, khusus kandidat yang sudah dinyatakan valid dan terverifikasi.</p>-->

        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">-->
        <!--                <div class="box">-->
        <!--                    <h3>Lolos Berkas</h3>-->
        <!--                    <h4><sup>Rp.</sup>3.300K<span>(atau 200 Euro)</span></h4>-->
        <!--                    <p>Biaya setelah dinyatakan lulus oleh badan federal tenaga kerja asing di Jerman (ZAV). Siap maju pengajuan Visa ke kedutaan Jerman di Indonesia</p>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->

        <!--        <?php if (session()->get('logged_in') == true && session()->get('level') == 9) { ?>-->
        <!--            <div class="text-center mt-4 featured">-->
        <!--                <a href="<?= base_url() ?>/admin" class="buy-btn">Info Detail</a>-->
        <!--            </div>-->
        <!--        <?php } elseif (session()->get('logged_in') == true && session()->get('level') == 1) { ?>-->
        <!--            <div class="text-center mt-4 featured">-->
        <!--                <a href="<?= base_url() ?>/profil-kandidat" class="buy-btn">Info Detail</a>-->
        <!--            </div>-->
        <!--        <?php } elseif (session()->get('logged_in') == true && session()->get('level') == 0) { ?>-->
        <!--            <a class="getstarted scrollto" href="<?= base_url() ?>/profil">Dashboard</a>-->
        <!--        <?php } else { ?>-->
        <!--            <div class="text-center mt-4 featured">-->
        <!--                <a href="<?= base_url() ?>/login" class="buy-btn">Info Detail</a>-->
        <!--            </div>-->
        <!--        <?php } ?>-->
        <!--</section>-->
        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>FAQ</h2>
                </div>
                <div class="faq-list">
                    <ul>
                        <h5 class="mt-3">Sebelum ke Jerman</h5>
                        <li data-aos="fade-up" data-aos-delay="100"> <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Siapa saja yang boleh ikut ferienjob ke Jerman?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                <p>Selama masih merupakan mahasiswa aktif di Indonesia, baik mahasiswa D3, S1, S2, S3 dan berasal dari universitas yang terdaftar di ANABIN, boleh berpartisipasi</p>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="200"> <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Berapa lama kontrak kerja dan berapa total gaji yang diperoleh?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                <ul>
                                    <li class="m-0 py-1">- Kontrak 3 bulan kerja dengan visa schengen di Jerman. wajib pulang ke Indonesia sebelum visa habis.</li>
                                    <li class="m-0 py-1">- Gaji 13euro/jam mulai juni 2023, berarti total gaji 3 bulan berkisar di 6000euro more or less.</li>
                                </ul>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="300"> <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Apakah semua proses sampai berangkat gratis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                <p>Tidak. Saat mendaftar ferienjob, peserta akan bertanggungjawab perihal biaya dokumen pribadi dan dokumen perjalanan, seperti:</p>
                                <ul>
                                    <li class="m-0 py-1">1. Passport, membayar dan mengurus ke Imigrasi setempat</li>
                                    <li class="m-0 py-1">2. Mengirim dokumen original ke Jerman, membayar via koordinator, kurir atau DHL setempat</li>
                                    <li class="m-0 py-1">3. Biaya submit dokumen ke Jerman, membayar ke penyelenggara program</li>
                                    <li class="m-0 py-1">4. Visa, membayar ke kedutaan Jerman atau VFS di Indonssia</li>
                                    <li class="m-0 py-1">5. Apostil, membayar ke ahu atau kementrian hukum di Indonesia</li>
                                    <li class="m-0 py-1">6. Asuransi, membayar ke pihak asuransi di Indonesia yang diakui Jerman. Dapat dicek di website kedutaan Jerman di Indonesia</li>
                                    <li class="m-0 py-1">7. Tiket Pesawat PP Indonesia-Jerman-Indonesia, membayar ke pihak travel agent atau website perjalanan/tiket pesawat</li>
                                </ul>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="300"> <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-16" class="collapsed">Apa Pekerjaan dan Jenis Pekerjaan Saat di Jerman?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-16" class="collapse" data-bs-parent=".faq-list">
                                <p>Jenis pekerjaan beragam, didominasi oleh pekerjaan nonskill di pergudangan, Logistik & Hotel, seperti sortir items, Operator scanning product, packaging, labelling, melengkapi amenities untuk hotel, dan sejenisnya</p>

                            </div>
                        </li>
                        <h5 class="mt-3">Selama di Jerman</h5>
                        <li data-aos="fade-up" data-aos-delay="300"> <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Kapan gaji masuk ke rekening saya? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                <ul>
                                    <li class="m-0 py-1">1. Anda akan menerima upah untuk bulan November pada 21.12.2022</li>
                                    <li class="m-0 py-1">2. Anda akan menerima upah untuk bulan Desember pada 21.01.2023</li>
                                </ul>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="200"> <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Ke rekening mana gaji saya akan ditransfer?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                                <p>Ke rekening euro atas nama anda sendiri (dengan IBAN dan BIC), tidak dapat diwakilkan, tidak dapat dilakukan ke rekening dengan mata uang lain.</p>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="300"> <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-6" class="collapsed">Apakah saya dapat mengajukan kasbon?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-6" class="collapse" data-bs-parent=".faq-list">
                                <p>Anda dapat mengajukan kasbon melalui koordinator anda di Jerman. Jika disetujui akan ditransfer ke rekening euro anda hanya pada hari selasa atau kamis. sekali dalam seminggu. Kasbon tidak dapat diberikan cash, melainkan melalui transfer rekening
                                </p>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="300"> <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-7" class="collapsed">Mengapa saya hanya menerima gaji sebesar 147 jam kerja dalam sebulan, sedangkan saya bekerja sampai 200 jam sebulan?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-7" class="collapse" data-bs-parent=".faq-list">
                                <p>Gaji yang dibayarkan setiap bulan adalah 147 jam, jam kelebihan akan dibayarkan ke Akun flexitime anda. Akun flexitime hanya dapat ditransfer ke rekening anda sepenuhnya di akhir kontrak kerja.
                                </p>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="300"> <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-8" class="collapsed">Ke mana saya harus bertanya mengenai hal hal kecil seperti bagaimana mengoperasikan oven, kompor induksi, mesin cuci dan mesin pengering di apartemen?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-8" class="collapse" data-bs-parent=".faq-list">
                                <p>Anda akan diarahkan oleh koordinator anda saat ketibaan di Jerman. Jika menemui kesulitan, sekecil apapun, jangan ragu untuk menghubungi koordinator anda di Jerman
                                </p>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="300"> <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-9" class="collapsed">Apakah ada tips trik yang harus saya ketahui selama tinggal di Jerman? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-9" class="collapse" data-bs-parent=".faq-list">
                                <p>Berikut tips trik yang mungkin akan bermanfaat:</p>
                                <ol>
                                    <li class="p-0">Periode oktober sampai desember masa tinggal anda di Jerman adalah periode musim dingin. Jika anda tidak memiliki cukup jaket. Dapat memanfaatkan aplikasi ebay kleinenzeigen masuk kategori vershcenken ketikkan jacken, maka anda akan melihat orang-orang di Jerman yang tinggal dekat dengan anda yang hendak memberikan jaketnya secara cuma-cuma.<br>Trik ini juga berlaku jika anda hendak mencari sepatu, tas, mainan, elektronik, sepeda, rice cooker, dan masih banyak lainnya.</li>
                                    <li class="p-0">Untuk uang kecil tambahan, anda dapat melakukan hal ini:<br>
                                        a. Mengumpulkan botol plastik dan kaleng dengan logo pfand, kemudian menguangkannya ke mesin penampung sampah pfand. Tersedia hampir di setiap supermarket dan store<br>
                                        b. Menolong tetangga yang membutuhkan melalui aplikasi ebay kleinenzeigen (dapat didownload di playstore), pilih kategori nachbarschaftshilfe, maka akan muncul tetangga mana saja yang membutuhkan pertolongan. Dapat anda chat. Biasanya pertolongan pertolongan kecil untuk jagakan anak, potong rumput, ajak binatang piaraan jalan jalan, dll, akan dibayar 10 - 15 euro per jam.
                                    </li>
                                </ol>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="300"> <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-10" class="collapsed">Apa cara terbaik bagi saya untuk berbelanja di Jerman? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-10" class="collapse" data-bs-parent=".faq-list">
                                <ol>
                                    <li class="p-0">Untuk belanja online, anda dapat berbelanja di amazon.de atau ebay.de Untuk ini, anda harus memiliki alamat yang jelas di Jerman untuk menerima paket</li>
                                    <li class="p-0">Untuk belanja offline, anda dapat berbelanja di store terdekat seperti aldi, lidl, norma, rewe, edeka, ratio, kaufland, kik, euroshop, woolworf, dm, H&M, C&A, dan masih banyak lagi. Silahkan manfaatkan pencarian google.</li>
                                </ol>
                            </div>
                        </li>
                        <h5 class="mt-3">Setelah dari Jerman</h5>
                        <li data-aos="fade-up" data-aos-delay="300"> <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-11" class="collapsed">Apakah masih ada yang harus saya lakukan setelah kepulangan ke Indonesia? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-11" class="collapse" data-bs-parent=".faq-list">
                                <ol>
                                    <li class="p-0">Setelah ketibaan di Indonesia, anda dianjurkan untuk kembali aktif kuliah seperti biasa.</li>
                                    <li class="p-0">Mengenai hak/gaji anda, masih ada transferan gaji bulan desember dan gaji flexitime anda yang akan ditransfer ke rekening anda tanggal 21 Januari.</li>
                                </ol>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="300"> <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-12" class="collapsed">Apakah saya dapat peroleh pajak saya kembali?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-12" class="collapse" data-bs-parent=".faq-list">
                                <p>Setelah peroleh slip gaji terakhir di 21 Januari, anda dianjurkan claim pajak anda kembali melalui link berikut: <a href="https://www.taxback.com/en/?utm_ref=sinarharapanbangsaku" target="_blank">LINK INFORMASI</a></p>
                            </div>
                        </li>
                        <!--<h5 class="mt-3">Sebagai Koordinator</h5>-->
                        <!--<li data-aos="fade-up" data-aos-delay="300"> <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-13" class="collapsed">Apa keuntungannya memiliki kode referral koordinator? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>-->
                        <!--    <div id="faq-list-13" class="collapse" data-bs-parent=".faq-list">-->
                        <!--        <p>Keuntungan menjadi Koordinator adalah Adanya saldo yang dapat dicairkan koordinator jika pendaftar mendaftar dengan kode referral koordinator anda.<br>Contoh jika mahasiswa A mendaftar dengan kode referral koordinator anda:<br>-->
                        <!--            a. Saldo bertambah 10rb saat A mendaftar<br>-->
                        <!--            b. Saldo 120rb bertambah saat A lulus berkas peroleh approval ZAV<br>-->
                        <!--            c. Saldo 100rb bertambah saat A granted visa<br>Status saldo akan terus terakumulasi otomatis di akun koordinator anda dengan total 230rb tiap kandidat dengan referral kode anda.-->
                        <!--        </p>-->
                        <!--    </div>-->
                        <!--</li>-->
                        <!--<li data-aos="fade-up" data-aos-delay="300"> <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-14" class="collapsed">Apa tugas saya sebagai seorang koordinator yang memiliki kode referral?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>-->
                        <!--    <div id="faq-list-14" class="collapse" data-bs-parent=".faq-list">-->
                        <!--        <p>Cukup pastikan kandidat mahasiswa yang mendaftar menggunakan kode referral anda. Selanjutnya admin ferienjob yang akan mengarahkan sampai keberangkatan ke Jerman-->
                        <!--        </p>-->
                        <!--    </div>-->
                        <!--</li>-->
                        <h5 class="mt-3">Sebagai Pihak Universitas</h5>
                        <li data-aos="fade-up" data-aos-delay="300"> <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-15" class="collapsed">Apa keuntungan yang diperoleh universitas dari program ini? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-15" class="collapse" data-bs-parent=".faq-list">
                                <ol>
                                    <li class="m-0 p-0">Menjadi salah satu universitas yang dapat memberangkatkan mahasiswanya magang ke Jerman</li>
                                    <li class="m-0 p-0">Program ini akan berdampak pada reputasi universitas penyelenggara</li>
                                    <li class="m-0 p-0">Pihak fakultas/jurusan/universitas akan memperoleh dana CSR dari penyelenggara/konsultan di(cvgen) yang besarnya tergantung dari jumlah mahasiswa dari universitas tersebut. ( hanya untuk universitas Yang mengirimkan mahasiswa lebih dari 300 mahasiswa) </li>
                                </ol>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="300"> <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-15" class="collapsed">Apa yang harus pihak universitas lakukan dalam rangka suksesnya terselenggara ferienjob bagi universitasnya?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-15" class="collapse" data-bs-parent=".faq-list">
                                <ol>
                                    <li class="p-0">Pihak universitas dapat menunjuk panitia atau koordinator ferienjob</li>
                                    <li class="p-0">Membantu mahasiswa dalam menyelesaikan kelengkapan dokumen mereka</li>
                                    <li class="p-0">Terus memantau dan mendampingi mahasiswanya selama proses pra keberangkatan sampai kembali ke tanah air</li>
                                </ol>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Kontak</h2>
                    <p>Kunjungi kami di alamat kantor Layanan FerienJobs atau Anda dapat menghubungi kami pada kontak yang tertera.</p>
                </div>
                <div class="row">
                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
<!--                            <div class="address"> <i class="bi bi-geo-alt"></i>-->
<!--                                <h4>Alamat:</h4>-->
<!--                                <p>Jl. Elang Blok D No.1, BTN Medibrata Indah,-->
<!--Kota Baubau, Sulawesi Tenggara, 93157</p>-->
<!--                            </div>-->
                            <div class="email"> <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p><a href="#">ami@cv-gen.com</a></p>
                            </div>
                            <div class="phone"> <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+6285298649951</p>
                            </div>

                        </div>
                    </div>
                    <!--<div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">-->
                    
                    <!--    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d782.4021303295126!2d122.61858765873644!3d-5.472594798293863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2da4776bcfd76a79%3A0x7c6732f9d55c0b83!2sAmsulistiani!5e0!3m2!1sid!2sid!4v1670745712298!5m2!1sid!2sid" width="100%" height="350px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
                    <!--</div>-->
                </div>
            </div>
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
                        <!--<p>Jl. Elang Blok D No.1, BTN Medibrata Indah, Kota Baubau, Sulawesi Tenggara, 93157-->
                            <br><br> <strong>Phone:</strong>+6285298649951<br> <strong>Email:</strong> <a href="#">ami@cv-gen.com</a><br>
                        </p>
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
                        <div class="social-links mt-3"> <a href="https://www.facebook.com/cvgenoverseas" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a> <a href="https://www.instagram.com/cvgencom/" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a> <a href="https://www.linkedin.com/in/amsulistiani-ensch-85379824/" class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container footer-bottom clearfix">
            <div class="copyright"> &copy; Copyright <strong><span>cv-gen.com</span></strong>. All Rights Reserved</div>
            <!-- <div class="credits"> Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a></div> -->
        </div>
    </footer>
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

            setTimeout(showModal, 1000);

            function showModal() {
                var sudah_tampil = sessionStorage.getItem('sudahtampil');
                if (sudah_tampil != 'sudah tampil') {
                    $("#popup").modal('show');
                    sessionStorage.setItem('sudahtampil', 'sudah tampil');
                }
            }
        })

        const swal = $('.swal').data('swal');
        if (swal) {
            Swal.fire({
                text: swal,
            })
        }
    </script>
</body>

</html>