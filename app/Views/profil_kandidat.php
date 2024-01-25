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


    <style>
        span.mata {
            position: relative;
            top: -30px;
            margin: 0 10px;
            float: right;
            font-size: 18px;
        }

        .poin {
            background-color: greenyellow;
            margin: 0 10px 10px;
            width: -webkit-fill-available;
            padding: 10px 10px 0px;
            border-radius: 5px;
        }
    </style>
</head>

<body>

    <div class="swal" data-swal="<?= session()->get('pesan'); ?>"></div>
    <header id="header" class="fixed-top ">

        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="/">FERIENJOBS<br><small style="font-size: .8rem;">Kerja di Musim
                        Liburan</small></a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto " href="<?= base_url('/') ?>">Home</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('/') ?>#about">Tentang</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('/') ?>#why-us">Keuntungan</a></li>
                    <!-- <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li> -->
                    <!--<li><a class="nav-link scrollto" href="<?= base_url('/') ?>#team">Tim</a></li>-->
                    <li><a class="nav-link scrollto" href="<?= base_url() ?>/partner">Partner</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('/') ?>#faq">FAQ</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url() ?>/dokumen">Dokumen</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('/profil_data_kandidat') ?>">Profile</a></li>
                    <!-- <li><a class="nav-link scrollto" href="</?= base_url('/') ?>#biaya">Biaya</a></li> -->
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
                        <?php if (session()->get('logged_in') == true) { ?>
                            <a class="getstarted scrollto" href="<?= base_url() ?>/logout">Logout</a>
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
                    <h1>Kandidat Ferienjobs</h1>
                    <h2>Adalah Mahasiswa yang telah mendaftar pada program Ferienjobs Batch-02, tervalidasi dan mendapat
                        ijin dari kampus atau Universitasnya.</h2>
                    <!-- <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="whatsapp://send?text=Salam Admin ferienjobs, saya membutuhkan informasi lengkap terkait menjadi Kandidat Ferienjobs, apakah ada waktu untuk konsultasi?.&phone=+6285298649951&abid=+6285298649951'" class="btn-get-started scrollto">Informasi Detail</a>
                    </div> -->
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200"> <img src="<?= base_url() ?>/assets/img/hero-img1.png" class="img-fluid animated" alt="ferienjobs" style="max-width:60%"></div>
            </div>
        </div>
    </section>
    <main id="main">
        <section class="about section-bg">
            <div class="container" data-aos="fade-up">
                <div class="row gutters-sm">
                    <!-- banner nama -->
                    <h6><span class="text-secondary"> Selamat Datang, <?php echo $user['nama']; ?> </span></h6>
                    <div class="col-md-13">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-1">
                                        <h6 class="mb-0"><img src="<?php echo base_url() ?>/assets/economics.png" width="70" height="70" alt="gambar kandidat"></h6>
                                    </div>
                                    <div style="margin-top: 6px;" class="col-sm-5 text-secondary">
                                        <span>Koordinator Anda : <?php echo $koordinator->nama ?></span>
                                        <h5 style="margin-top: 5px;" class="mb-0">Kode Koordinator : <span class="badge bg-danger"><?php echo $user['kode_upline'] ?></span></h5>
                                    </div>
                                    <div class="col-sm-6 text-end">
                                        <a style="width: 200px; margin-top: 15px;" href="whatsapp://send?text=Salam Admin ferienjobs, saya membutuhkan informasi lengkap terkait menjadi Kandidat Ferienjobs, apakah ada waktu untuk konsultasi?.&phone=+6285298649951&abid=+6285298649951'" class="btn btn-success">
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 48 48">
                                                <path fill="#fff" d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z"></path>
                                                <path fill="#fff" d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z"></path>
                                                <path fill="#cfd8dc" d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z"></path>
                                                <path fill="#40c351" d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z"></path>
                                                <path fill="#fff" fill-rule="evenodd" d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z" clip-rule="evenodd"></path>
                                            </svg>
                                            Hubungi Admin
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- bagian status kandidat -->
                        <?php if ($user['status_kandidat'] == 0) { ?>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <!-- status 0 -->
                                        <div class="container">
                                            <h5>
                                                <p style="color: green;">Selamat,</p>
                                            </h5>
                                            <p>Saat ini status Anda :</p>
                                            <div class="alert alert-danger" role="alert">
                                                <strong>SEDANG DIVERIFIKASI</strong>
                                            </div>
                                            <hr>
                                            <p>Pantau terus status anda di halaman ini. Jangan lupa follow dan shere media sosial kami</p>
                                            <a href="https://www.facebook.com/cvgenoverseas" target="_blank">
                                                <button type="button" class="btn btn-outline-primary rounded-pill">
                                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 48 48">
                                                        <linearGradient id="Ld6sqrtcxMyckEl6xeDdMa_uLWV5A9vXIPu_gr1" x1="9.993" x2="40.615" y1="9.993" y2="40.615" gradientUnits="userSpaceOnUse">
                                                            <stop offset="0" stop-color="#2aa4f4"></stop>
                                                            <stop offset="1" stop-color="#007ad9"></stop>
                                                        </linearGradient>
                                                        <path fill="url(#Ld6sqrtcxMyckEl6xeDdMa_uLWV5A9vXIPu_gr1)" d="M24,4C12.954,4,4,12.954,4,24s8.954,20,20,20s20-8.954,20-20S35.046,4,24,4z"></path>
                                                        <path fill="#fff" d="M26.707,29.301h5.176l0.813-5.258h-5.989v-2.874c0-2.184,0.714-4.121,2.757-4.121h3.283V12.46 c-0.577-0.078-1.797-0.248-4.102-0.248c-4.814,0-7.636,2.542-7.636,8.334v3.498H16.06v5.258h4.948v14.452 C21.988,43.9,22.981,44,24,44c0.921,0,1.82-0.084,2.707-0.204V29.301z"></path>
                                                    </svg>
                                                    Facebook
                                                </button>
                                            </a>
                                            |
                                            <a href="https://www.instagram.com/cvgencom/" target="_blank">
                                                <button type="button" class="btn btn-outline-danger rounded-pill">
                                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 48 48">
                                                        <radialGradient id="yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1" cx="19.38" cy="42.035" r="44.899" gradientUnits="userSpaceOnUse">
                                                            <stop offset="0" stop-color="#fd5"></stop>
                                                            <stop offset=".328" stop-color="#ff543f"></stop>
                                                            <stop offset=".348" stop-color="#fc5245"></stop>
                                                            <stop offset=".504" stop-color="#e64771"></stop>
                                                            <stop offset=".643" stop-color="#d53e91"></stop>
                                                            <stop offset=".761" stop-color="#cc39a4"></stop>
                                                            <stop offset=".841" stop-color="#c837ab"></stop>
                                                        </radialGradient>
                                                        <path fill="url(#yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"></path>
                                                        <radialGradient id="yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2" cx="11.786" cy="5.54" r="29.813" gradientTransform="matrix(1 0 0 .6663 0 1.849)" gradientUnits="userSpaceOnUse">
                                                            <stop offset="0" stop-color="#4168c9"></stop>
                                                            <stop offset=".999" stop-color="#4168c9" stop-opacity="0"></stop>
                                                        </radialGradient>
                                                        <path fill="url(#yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"></path>
                                                        <path fill="#fff" d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z"></path>
                                                        <circle cx="31.5" cy="16.5" r="1.5" fill="#fff"></circle>
                                                        <path fill="#fff" d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z"></path>
                                                    </svg>
                                                    Instagram
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } elseif ($user['status_kandidat'] == 1) { ?>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <!-- status 1 -->
                                        <div class="container">
                                            <h5>
                                                <p style="color: green;">Selamat,</p>
                                            </h5>
                                            <p>Telah Bergabung menjadi kandidat Ferienjobs (<i>Bekerja dijerman saat musim liburan kampus di indonesia</i>)
                                            </p>
                                            <p>Saat ini status Anda :</p>
                                            <div class="alert alert-danger" role="alert">
                                                <strong>MENUNGGU PEMBAYARAN REGISTRASI</strong>
                                            </div>
                                            <p>Pendaftaran: <b> Rp. 100.000,- </b> </p>
                                            <p>Biaya kirim dokumen indonesia-jerman <b> Rp. 90.000,- </b> </p>
                                            <p><span class="text-danger"><b>Total : Rp. 190.000,- </b></span></p>
                                            <p><span class="text-success">Harap klik Hubungi admin untuk konfirmasi bukti transfer dan update status anda</span></p>
                                            <hr>
                                            <p>Pantau terus status anda di halaman ini. Jangan lupa follow dan shere media sosial kami</p>
                                            <a href="https://www.facebook.com/cvgenoverseas" target="_blank">
                                                <button type="button" class="btn btn-outline-primary rounded-pill">
                                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 48 48">
                                                        <linearGradient id="Ld6sqrtcxMyckEl6xeDdMa_uLWV5A9vXIPu_gr1" x1="9.993" x2="40.615" y1="9.993" y2="40.615" gradientUnits="userSpaceOnUse">
                                                            <stop offset="0" stop-color="#2aa4f4"></stop>
                                                            <stop offset="1" stop-color="#007ad9"></stop>
                                                        </linearGradient>
                                                        <path fill="url(#Ld6sqrtcxMyckEl6xeDdMa_uLWV5A9vXIPu_gr1)" d="M24,4C12.954,4,4,12.954,4,24s8.954,20,20,20s20-8.954,20-20S35.046,4,24,4z"></path>
                                                        <path fill="#fff" d="M26.707,29.301h5.176l0.813-5.258h-5.989v-2.874c0-2.184,0.714-4.121,2.757-4.121h3.283V12.46 c-0.577-0.078-1.797-0.248-4.102-0.248c-4.814,0-7.636,2.542-7.636,8.334v3.498H16.06v5.258h4.948v14.452 C21.988,43.9,22.981,44,24,44c0.921,0,1.82-0.084,2.707-0.204V29.301z"></path>
                                                    </svg>
                                                    Facebook
                                                </button>
                                            </a>
                                            |
                                            <a href="https://www.instagram.com/cvgencom/" target="_blank">
                                                <button type="button" class="btn btn-outline-danger rounded-pill">
                                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 48 48">
                                                        <radialGradient id="yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1" cx="19.38" cy="42.035" r="44.899" gradientUnits="userSpaceOnUse">
                                                            <stop offset="0" stop-color="#fd5"></stop>
                                                            <stop offset=".328" stop-color="#ff543f"></stop>
                                                            <stop offset=".348" stop-color="#fc5245"></stop>
                                                            <stop offset=".504" stop-color="#e64771"></stop>
                                                            <stop offset=".643" stop-color="#d53e91"></stop>
                                                            <stop offset=".761" stop-color="#cc39a4"></stop>
                                                            <stop offset=".841" stop-color="#c837ab"></stop>
                                                        </radialGradient>
                                                        <path fill="url(#yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"></path>
                                                        <radialGradient id="yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2" cx="11.786" cy="5.54" r="29.813" gradientTransform="matrix(1 0 0 .6663 0 1.849)" gradientUnits="userSpaceOnUse">
                                                            <stop offset="0" stop-color="#4168c9"></stop>
                                                            <stop offset=".999" stop-color="#4168c9" stop-opacity="0"></stop>
                                                        </radialGradient>
                                                        <path fill="url(#yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"></path>
                                                        <path fill="#fff" d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z"></path>
                                                        <circle cx="31.5" cy="16.5" r="1.5" fill="#fff"></circle>
                                                        <path fill="#fff" d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z"></path>
                                                    </svg>
                                                    Instagram
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- metode pembayaran -->
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="container">
                                            <div class="card-body pt-0">
                                                <h5 style="margin-bottom: 20px; margin-top: 10px;">Rekening Pembayaran</h5>
                                                <div class="row">
                                                    <div class="col-xl-4 col-lg-4">
                                                        <img src="<?php echo base_url() ?>/assets/credit.png" width="285" height="190" alt="kartu">
                                                    </div>
                                                    <div class="col-xl-8 col-lg-8">
                                                        <div class="row">
                                                            <div class="col-xl-10">
                                                                <div style="margin-top: 40px;" class="c-card-details">
                                                                    <p><span class="text-secondary">Nama Bank : </span> <b>Bank BNI</b></p>
                                                                    <p><span class="text-secondary">Nomor Rekening : </span> <b>1570108803</b></p>
                                                                    <p><span class="text-secondary">Atas Nama : </span> <b>PT. CVGEN SMART CONSULTANT</b></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } elseif ($user['status_kandidat'] == 2) { ?>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <!-- status 2 -->
                                        <div class="container">
                                            <h5>
                                                <p style="color: green;">Selamat,</p>
                                            </h5>
                                            <p>Telah Bergabung menjadi kandidat Ferienjobs (<i>Bekerja dijerman saat musim liburan kampus di indonesia</i>)
                                            </p>
                                            <p>Saat ini status Anda :</p>
                                            <div class="alert alert-success" role="alert">
                                                <strong>BIAYA PENDAFTARAN TERVALIDASI.</strong>
                                            </div>
                                            <p>Harap siapkan dan submit dokumen kelengkapan untuk diverifikasi dan dikirim ke Badan Otoritas Jerman</p>

                                            <hr>
                                            <p><strong>Silahkan isi formulir biodata ini : </strong></p>
                                            <a style="color: white;" href="https://forms.gle/NNg86J1yPTk2aYMZ7" target="_blank">
                                                <button class="btn btn-warning text-light"><strong>LENGKAPI FORMULIR</strong></button>
                                            </a>
                                            <hr>
                                            <p><strong>Untuk kelengkapan Dokumen Persyaratan : </strong></p>
                                            <a style="color: white;" href="https://bit.ly/ferienjobsDE" target="_blank">
                                                <button class="btn btn-info text-light"><strong>CEK KELENGKAPAN DOKUMEN</strong></button>
                                            </a>
                                            <hr>
                                            <p>Pantau terus status anda di halaman ini. Jangan lupa follow dan shere media sosial kami</p>
                                            <a href="https://www.facebook.com/cvgenoverseas" target="_blank">
                                                <button type="button" class="btn btn-outline-primary rounded-pill">
                                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 48 48">
                                                        <linearGradient id="Ld6sqrtcxMyckEl6xeDdMa_uLWV5A9vXIPu_gr1" x1="9.993" x2="40.615" y1="9.993" y2="40.615" gradientUnits="userSpaceOnUse">
                                                            <stop offset="0" stop-color="#2aa4f4"></stop>
                                                            <stop offset="1" stop-color="#007ad9"></stop>
                                                        </linearGradient>
                                                        <path fill="url(#Ld6sqrtcxMyckEl6xeDdMa_uLWV5A9vXIPu_gr1)" d="M24,4C12.954,4,4,12.954,4,24s8.954,20,20,20s20-8.954,20-20S35.046,4,24,4z"></path>
                                                        <path fill="#fff" d="M26.707,29.301h5.176l0.813-5.258h-5.989v-2.874c0-2.184,0.714-4.121,2.757-4.121h3.283V12.46 c-0.577-0.078-1.797-0.248-4.102-0.248c-4.814,0-7.636,2.542-7.636,8.334v3.498H16.06v5.258h4.948v14.452 C21.988,43.9,22.981,44,24,44c0.921,0,1.82-0.084,2.707-0.204V29.301z"></path>
                                                    </svg>
                                                    Facebook
                                                </button>
                                            </a>
                                            |
                                            <a href="https://www.instagram.com/cvgencom/" target="_blank">
                                                <button type="button" class="btn btn-outline-danger rounded-pill">
                                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 48 48">
                                                        <radialGradient id="yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1" cx="19.38" cy="42.035" r="44.899" gradientUnits="userSpaceOnUse">
                                                            <stop offset="0" stop-color="#fd5"></stop>
                                                            <stop offset=".328" stop-color="#ff543f"></stop>
                                                            <stop offset=".348" stop-color="#fc5245"></stop>
                                                            <stop offset=".504" stop-color="#e64771"></stop>
                                                            <stop offset=".643" stop-color="#d53e91"></stop>
                                                            <stop offset=".761" stop-color="#cc39a4"></stop>
                                                            <stop offset=".841" stop-color="#c837ab"></stop>
                                                        </radialGradient>
                                                        <path fill="url(#yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"></path>
                                                        <radialGradient id="yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2" cx="11.786" cy="5.54" r="29.813" gradientTransform="matrix(1 0 0 .6663 0 1.849)" gradientUnits="userSpaceOnUse">
                                                            <stop offset="0" stop-color="#4168c9"></stop>
                                                            <stop offset=".999" stop-color="#4168c9" stop-opacity="0"></stop>
                                                        </radialGradient>
                                                        <path fill="url(#yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"></path>
                                                        <path fill="#fff" d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z"></path>
                                                        <circle cx="31.5" cy="16.5" r="1.5" fill="#fff"></circle>
                                                        <path fill="#fff" d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z"></path>
                                                    </svg>
                                                    Instagram
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } elseif ($user['status_kandidat'] == 3) { ?>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="container">
                                            <!-- status 3 -->
                                            <h5>
                                                <p style="color: green;">Selamat,</p>
                                            </h5>
                                            <p>Telah Bergabung menjadi kandidat Ferienjobs (<i>Bekerja dijerman saat musim liburan kampus di indonesia</i>)
                                            </p>
                                            <p>Saat ini status Anda :</p>
                                            <div class="alert alert-warning" role="alert">
                                                <strong>DOKUMEN ORIGINAL SIAP SUBMIT KE Badan Otoritas JERMAN</strong>
                                            </div>
                                            <p>Biaya Submit dokumen: <b> €. 150,- </b> </p>
                                            <p><span class="text-danger">Mohon melakukan pembayaran sesuai nominal yang tertera, agar berkas Anda segera diproses untuk di submit ke Otoritas Jerman</span></p>
                                            <hr>
                                            <p>Pantau terus status anda di halaman ini. Jangan lupa follow dan shere media sosial kami</p>
                                            <a href="https://www.facebook.com/cvgenoverseas" target="_blank">
                                                <button type="button" class="btn btn-outline-primary rounded-pill">
                                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 48 48">
                                                        <linearGradient id="Ld6sqrtcxMyckEl6xeDdMa_uLWV5A9vXIPu_gr1" x1="9.993" x2="40.615" y1="9.993" y2="40.615" gradientUnits="userSpaceOnUse">
                                                            <stop offset="0" stop-color="#2aa4f4"></stop>
                                                            <stop offset="1" stop-color="#007ad9"></stop>
                                                        </linearGradient>
                                                        <path fill="url(#Ld6sqrtcxMyckEl6xeDdMa_uLWV5A9vXIPu_gr1)" d="M24,4C12.954,4,4,12.954,4,24s8.954,20,20,20s20-8.954,20-20S35.046,4,24,4z"></path>
                                                        <path fill="#fff" d="M26.707,29.301h5.176l0.813-5.258h-5.989v-2.874c0-2.184,0.714-4.121,2.757-4.121h3.283V12.46 c-0.577-0.078-1.797-0.248-4.102-0.248c-4.814,0-7.636,2.542-7.636,8.334v3.498H16.06v5.258h4.948v14.452 C21.988,43.9,22.981,44,24,44c0.921,0,1.82-0.084,2.707-0.204V29.301z"></path>
                                                    </svg>
                                                    Facebook
                                                </button>
                                            </a>
                                            |
                                            <a href="https://www.instagram.com/cvgencom/" target="_blank">
                                                <button type="button" class="btn btn-outline-danger rounded-pill">
                                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 48 48">
                                                        <radialGradient id="yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1" cx="19.38" cy="42.035" r="44.899" gradientUnits="userSpaceOnUse">
                                                            <stop offset="0" stop-color="#fd5"></stop>
                                                            <stop offset=".328" stop-color="#ff543f"></stop>
                                                            <stop offset=".348" stop-color="#fc5245"></stop>
                                                            <stop offset=".504" stop-color="#e64771"></stop>
                                                            <stop offset=".643" stop-color="#d53e91"></stop>
                                                            <stop offset=".761" stop-color="#cc39a4"></stop>
                                                            <stop offset=".841" stop-color="#c837ab"></stop>
                                                        </radialGradient>
                                                        <path fill="url(#yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"></path>
                                                        <radialGradient id="yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2" cx="11.786" cy="5.54" r="29.813" gradientTransform="matrix(1 0 0 .6663 0 1.849)" gradientUnits="userSpaceOnUse">
                                                            <stop offset="0" stop-color="#4168c9"></stop>
                                                            <stop offset=".999" stop-color="#4168c9" stop-opacity="0"></stop>
                                                        </radialGradient>
                                                        <path fill="url(#yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"></path>
                                                        <path fill="#fff" d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z"></path>
                                                        <circle cx="31.5" cy="16.5" r="1.5" fill="#fff"></circle>
                                                        <path fill="#fff" d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z"></path>
                                                    </svg>
                                                    Instagram
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- metode pembayaran EURO -->
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="container">
                                            <div class="card-body pt-0">
                                                <h5 style="margin-bottom: 20px; margin-top: 10px;">Rekening Pembayaran EURO</h5>
                                                <div class="row">
                                                    <div class="col-xl-4 col-lg-4">
                                                        <img src="<?php echo base_url() ?>/assets/credit.png" width="285" height="190" alt="kartu">
                                                    </div>
                                                    <div class="col-xl-8 col-lg-8">
                                                        <div class="row">
                                                            <div class="col-xl-10">
                                                                <div style="margin-top: 40px;" class="c-card-details">
                                                                    <p><span class="text-secondary">IBAN : </span> <b>BE12 9675 7874 3792</b></p>
                                                                    <p><span class="text-secondary">BIC : </span> <b>TRWIBEB1XXX</b></p>
                                                                    <p><span class="text-secondary">Atas Nama : </span> <b>PT. CVGEN SMART CONSULTANT</b></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } elseif ($user['status_kandidat'] == 4) { ?>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <!-- status 4 -->
                                        <div class="container">
                                            <h5>
                                                <p style="color: green;">Selamat,</p>
                                            </h5>
                                            <p>Telah Bergabung menjadi kandidat Ferienjobs (<i>Bekerja dijerman saat musim liburan kampus di indonesia</i>)
                                            </p>
                                            <div class="alert alert-success" role="alert">
                                                <strong>BIAYA SUBMIT DOKUMEN TERVALIDASI</strong>
                                            </div>
                                            <p><span class="text-success">Biaya submit dokumen telah diterima Admin. <b>Proses submit Dokumen ke Badan Otoritas Jerman</b> </span></p>
                                            <hr>
                                            <p>Pantau terus status anda di halaman ini. Jangan lupa follow dan shere media sosial kami</p>
                                            <a href="https://www.facebook.com/cvgenoverseas" target="_blank">
                                                <button type="button" class="btn btn-outline-primary rounded-pill">
                                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 48 48">
                                                        <linearGradient id="Ld6sqrtcxMyckEl6xeDdMa_uLWV5A9vXIPu_gr1" x1="9.993" x2="40.615" y1="9.993" y2="40.615" gradientUnits="userSpaceOnUse">
                                                            <stop offset="0" stop-color="#2aa4f4"></stop>
                                                            <stop offset="1" stop-color="#007ad9"></stop>
                                                        </linearGradient>
                                                        <path fill="url(#Ld6sqrtcxMyckEl6xeDdMa_uLWV5A9vXIPu_gr1)" d="M24,4C12.954,4,4,12.954,4,24s8.954,20,20,20s20-8.954,20-20S35.046,4,24,4z"></path>
                                                        <path fill="#fff" d="M26.707,29.301h5.176l0.813-5.258h-5.989v-2.874c0-2.184,0.714-4.121,2.757-4.121h3.283V12.46 c-0.577-0.078-1.797-0.248-4.102-0.248c-4.814,0-7.636,2.542-7.636,8.334v3.498H16.06v5.258h4.948v14.452 C21.988,43.9,22.981,44,24,44c0.921,0,1.82-0.084,2.707-0.204V29.301z"></path>
                                                    </svg>
                                                    Facebook
                                                </button>
                                            </a>
                                            |
                                            <a href="https://www.instagram.com/cvgencom/" target="_blank">
                                                <button type="button" class="btn btn-outline-danger rounded-pill">
                                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 48 48">
                                                        <radialGradient id="yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1" cx="19.38" cy="42.035" r="44.899" gradientUnits="userSpaceOnUse">
                                                            <stop offset="0" stop-color="#fd5"></stop>
                                                            <stop offset=".328" stop-color="#ff543f"></stop>
                                                            <stop offset=".348" stop-color="#fc5245"></stop>
                                                            <stop offset=".504" stop-color="#e64771"></stop>
                                                            <stop offset=".643" stop-color="#d53e91"></stop>
                                                            <stop offset=".761" stop-color="#cc39a4"></stop>
                                                            <stop offset=".841" stop-color="#c837ab"></stop>
                                                        </radialGradient>
                                                        <path fill="url(#yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"></path>
                                                        <radialGradient id="yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2" cx="11.786" cy="5.54" r="29.813" gradientTransform="matrix(1 0 0 .6663 0 1.849)" gradientUnits="userSpaceOnUse">
                                                            <stop offset="0" stop-color="#4168c9"></stop>
                                                            <stop offset=".999" stop-color="#4168c9" stop-opacity="0"></stop>
                                                        </radialGradient>
                                                        <path fill="url(#yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"></path>
                                                        <path fill="#fff" d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z"></path>
                                                        <circle cx="31.5" cy="16.5" r="1.5" fill="#fff"></circle>
                                                        <path fill="#fff" d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z"></path>
                                                    </svg>
                                                    Instagram
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } elseif ($user['status_kandidat'] == 5) { ?>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <!-- status 5 -->
                                        <div class="container">
                                            <h5>
                                                <p style="color: green;">Selamat,</p>
                                            </h5>
                                            <p>Telah Bergabung menjadi kandidat Ferienjobs (<i>Bekerja dijerman saat musim liburan kampus di indonesia</i>)
                                            </p>
                                            <div class="alert alert-primary" role="alert">
                                                <strong>DOKUMEN TELAH DISUBMIT KE OTORITAS JERMAN</strong>
                                            </div>
                                            <p><span class="text-primary">Proses Assesment Otoritas Jermann membutuhkann 8-16 minggu. <b>Hasil Pengumuman akan diinformasikan oleh admin grup anda</b> </span></p>
                                            <hr>
                                            <p>Pantau terus status anda di halaman ini. Jangan lupa follow dan shere media sosial kami</p>
                                            <a href="https://www.facebook.com/cvgenoverseas" target="_blank">
                                                <button type="button" class="btn btn-outline-primary rounded-pill">
                                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 48 48">
                                                        <linearGradient id="Ld6sqrtcxMyckEl6xeDdMa_uLWV5A9vXIPu_gr1" x1="9.993" x2="40.615" y1="9.993" y2="40.615" gradientUnits="userSpaceOnUse">
                                                            <stop offset="0" stop-color="#2aa4f4"></stop>
                                                            <stop offset="1" stop-color="#007ad9"></stop>
                                                        </linearGradient>
                                                        <path fill="url(#Ld6sqrtcxMyckEl6xeDdMa_uLWV5A9vXIPu_gr1)" d="M24,4C12.954,4,4,12.954,4,24s8.954,20,20,20s20-8.954,20-20S35.046,4,24,4z"></path>
                                                        <path fill="#fff" d="M26.707,29.301h5.176l0.813-5.258h-5.989v-2.874c0-2.184,0.714-4.121,2.757-4.121h3.283V12.46 c-0.577-0.078-1.797-0.248-4.102-0.248c-4.814,0-7.636,2.542-7.636,8.334v3.498H16.06v5.258h4.948v14.452 C21.988,43.9,22.981,44,24,44c0.921,0,1.82-0.084,2.707-0.204V29.301z"></path>
                                                    </svg>
                                                    Facebook
                                                </button>
                                            </a>
                                            |
                                            <a href="https://www.instagram.com/cvgencom/" target="_blank">
                                                <button type="button" class="btn btn-outline-danger rounded-pill">
                                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 48 48">
                                                        <radialGradient id="yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1" cx="19.38" cy="42.035" r="44.899" gradientUnits="userSpaceOnUse">
                                                            <stop offset="0" stop-color="#fd5"></stop>
                                                            <stop offset=".328" stop-color="#ff543f"></stop>
                                                            <stop offset=".348" stop-color="#fc5245"></stop>
                                                            <stop offset=".504" stop-color="#e64771"></stop>
                                                            <stop offset=".643" stop-color="#d53e91"></stop>
                                                            <stop offset=".761" stop-color="#cc39a4"></stop>
                                                            <stop offset=".841" stop-color="#c837ab"></stop>
                                                        </radialGradient>
                                                        <path fill="url(#yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"></path>
                                                        <radialGradient id="yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2" cx="11.786" cy="5.54" r="29.813" gradientTransform="matrix(1 0 0 .6663 0 1.849)" gradientUnits="userSpaceOnUse">
                                                            <stop offset="0" stop-color="#4168c9"></stop>
                                                            <stop offset=".999" stop-color="#4168c9" stop-opacity="0"></stop>
                                                        </radialGradient>
                                                        <path fill="url(#yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"></path>
                                                        <path fill="#fff" d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z"></path>
                                                        <circle cx="31.5" cy="16.5" r="1.5" fill="#fff"></circle>
                                                        <path fill="#fff" d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z"></path>
                                                    </svg>
                                                    Instagram
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } elseif ($user['status_kandidat'] == 6) { ?>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <!-- status 6 -->
                                        <div class="container">
                                            <h5>
                                                <p style="color: green;">Selamat,</p>
                                            </h5>
                                            <p>
                                                Telah Bergabung menjadi kandidat Ferienjobs (<i>Bekerja dijerman saat musim liburan kampus di indonesia</i>)
                                            </p>
                                            <p>Saat ini status Anda :</p>
                                            <div class="alert alert-info" role="alert">
                                                <strong>DOKUMEN TELAH DI SETUJUI Badan Otoritas JERMAN</strong>
                                            </div>
                                            <p><span class="text-success"><b>Selamat,</b> Dokumen Anda telah diterima dan di setujui Badan Otoritas Jerman</span></p>
                                            <p>Biaya Approval dari Badan Otoritas Jerman <span class="text-danger"><b>€. 200,- </b> atau <b> Rp. 3.300.000,- </b></span></p>
                                            <p><span class="text-danger">Mohon lakukan pembayaran sesuai nominal yang tertera, agar berkas Anda segera diproses untuk pengurusan VISA</span></p>
                                            <hr>
                                            <p>Pantau terus status anda di halaman ini. Jangan lupa follow dan shere media sosial kami</p>
                                            <a href="https://www.facebook.com/cvgenoverseas" target="_blank">
                                                <button type="button" class="btn btn-outline-primary rounded-pill">
                                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 48 48">
                                                        <linearGradient id="Ld6sqrtcxMyckEl6xeDdMa_uLWV5A9vXIPu_gr1" x1="9.993" x2="40.615" y1="9.993" y2="40.615" gradientUnits="userSpaceOnUse">
                                                            <stop offset="0" stop-color="#2aa4f4"></stop>
                                                            <stop offset="1" stop-color="#007ad9"></stop>
                                                        </linearGradient>
                                                        <path fill="url(#Ld6sqrtcxMyckEl6xeDdMa_uLWV5A9vXIPu_gr1)" d="M24,4C12.954,4,4,12.954,4,24s8.954,20,20,20s20-8.954,20-20S35.046,4,24,4z"></path>
                                                        <path fill="#fff" d="M26.707,29.301h5.176l0.813-5.258h-5.989v-2.874c0-2.184,0.714-4.121,2.757-4.121h3.283V12.46 c-0.577-0.078-1.797-0.248-4.102-0.248c-4.814,0-7.636,2.542-7.636,8.334v3.498H16.06v5.258h4.948v14.452 C21.988,43.9,22.981,44,24,44c0.921,0,1.82-0.084,2.707-0.204V29.301z"></path>
                                                    </svg>
                                                    Facebook
                                                </button>
                                            </a>
                                            |
                                            <a href="https://www.instagram.com/cvgencom/" target="_blank">
                                                <button type="button" class="btn btn-outline-danger rounded-pill">
                                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 48 48">
                                                        <radialGradient id="yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1" cx="19.38" cy="42.035" r="44.899" gradientUnits="userSpaceOnUse">
                                                            <stop offset="0" stop-color="#fd5"></stop>
                                                            <stop offset=".328" stop-color="#ff543f"></stop>
                                                            <stop offset=".348" stop-color="#fc5245"></stop>
                                                            <stop offset=".504" stop-color="#e64771"></stop>
                                                            <stop offset=".643" stop-color="#d53e91"></stop>
                                                            <stop offset=".761" stop-color="#cc39a4"></stop>
                                                            <stop offset=".841" stop-color="#c837ab"></stop>
                                                        </radialGradient>
                                                        <path fill="url(#yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"></path>
                                                        <radialGradient id="yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2" cx="11.786" cy="5.54" r="29.813" gradientTransform="matrix(1 0 0 .6663 0 1.849)" gradientUnits="userSpaceOnUse">
                                                            <stop offset="0" stop-color="#4168c9"></stop>
                                                            <stop offset=".999" stop-color="#4168c9" stop-opacity="0"></stop>
                                                        </radialGradient>
                                                        <path fill="url(#yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"></path>
                                                        <path fill="#fff" d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z"></path>
                                                        <circle cx="31.5" cy="16.5" r="1.5" fill="#fff"></circle>
                                                        <path fill="#fff" d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z"></path>
                                                    </svg>
                                                    Instagram
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- metode pembayaran EURO -->
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="container">
                                            <div class="card-body pt-0">
                                                <h5 style="margin-bottom: 20px; margin-top: 10px;">Rekening Pembayaran EURO</h5>
                                                <div class="row">
                                                    <div class="col-xl-4 col-lg-4">
                                                        <img src="<?php echo base_url() ?>/assets/credit.png" width="285" height="190" alt="kartu">
                                                    </div>
                                                    <div class="col-xl-8 col-lg-8">
                                                        <div class="row">
                                                            <div class="col-xl-10">
                                                                <div style="margin-top: 40px;" class="c-card-details">
                                                                    <p><span class="text-secondary">IBAN : </span> <b>BE12 9675 7874 3792</b></p>
                                                                    <p><span class="text-secondary">BIC : </span> <b>TRWIBEB1XXX</b></p>
                                                                    <p><span class="text-secondary">Atas Nama : </span> <b>PT. CVGEN SMART CONSULTANT</b></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } elseif ($user['status_kandidat'] == 7) { ?>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <!-- status 7 -->
                                        <div class="container">
                                            <h5>
                                                <p style="color: green;">Selamat,</p>
                                            </h5>
                                            <p>Anda Siap mengurus VISA <br> <br>
                                                1. Anda boleh mengurus sendiri. <br>
                                                2. Anda dapat menggunakan jasa CVGEN. <b>Silahkan hubungi Admin</b> (<i><span class="text-success">Gratis akomodasi di jakarta, biaya 150euro</span></i>).
                                            </p>
                                            <p>Saat ini status Anda :</p>
                                            <div class="alert alert-success" role="alert">
                                                <strong>Siap Untuk Pengajuan Visa</strong>
                                            </div>
                                            <hr>
                                            <p>Pantau terus status anda di halaman ini. Jangan lupa follow dan shere media sosial kami</p>
                                            <a href="https://www.facebook.com/cvgenoverseas" target="_blank">
                                                <button type="button" class="btn btn-outline-primary rounded-pill">
                                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 48 48">
                                                        <linearGradient id="Ld6sqrtcxMyckEl6xeDdMa_uLWV5A9vXIPu_gr1" x1="9.993" x2="40.615" y1="9.993" y2="40.615" gradientUnits="userSpaceOnUse">
                                                            <stop offset="0" stop-color="#2aa4f4"></stop>
                                                            <stop offset="1" stop-color="#007ad9"></stop>
                                                        </linearGradient>
                                                        <path fill="url(#Ld6sqrtcxMyckEl6xeDdMa_uLWV5A9vXIPu_gr1)" d="M24,4C12.954,4,4,12.954,4,24s8.954,20,20,20s20-8.954,20-20S35.046,4,24,4z"></path>
                                                        <path fill="#fff" d="M26.707,29.301h5.176l0.813-5.258h-5.989v-2.874c0-2.184,0.714-4.121,2.757-4.121h3.283V12.46 c-0.577-0.078-1.797-0.248-4.102-0.248c-4.814,0-7.636,2.542-7.636,8.334v3.498H16.06v5.258h4.948v14.452 C21.988,43.9,22.981,44,24,44c0.921,0,1.82-0.084,2.707-0.204V29.301z"></path>
                                                    </svg>
                                                    Facebook
                                                </button>
                                            </a>
                                            |
                                            <a href="https://www.instagram.com/cvgencom/" target="_blank">
                                                <button type="button" class="btn btn-outline-danger rounded-pill">
                                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 48 48">
                                                        <radialGradient id="yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1" cx="19.38" cy="42.035" r="44.899" gradientUnits="userSpaceOnUse">
                                                            <stop offset="0" stop-color="#fd5"></stop>
                                                            <stop offset=".328" stop-color="#ff543f"></stop>
                                                            <stop offset=".348" stop-color="#fc5245"></stop>
                                                            <stop offset=".504" stop-color="#e64771"></stop>
                                                            <stop offset=".643" stop-color="#d53e91"></stop>
                                                            <stop offset=".761" stop-color="#cc39a4"></stop>
                                                            <stop offset=".841" stop-color="#c837ab"></stop>
                                                        </radialGradient>
                                                        <path fill="url(#yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"></path>
                                                        <radialGradient id="yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2" cx="11.786" cy="5.54" r="29.813" gradientTransform="matrix(1 0 0 .6663 0 1.849)" gradientUnits="userSpaceOnUse">
                                                            <stop offset="0" stop-color="#4168c9"></stop>
                                                            <stop offset=".999" stop-color="#4168c9" stop-opacity="0"></stop>
                                                        </radialGradient>
                                                        <path fill="url(#yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"></path>
                                                        <path fill="#fff" d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z"></path>
                                                        <circle cx="31.5" cy="16.5" r="1.5" fill="#fff"></circle>
                                                        <path fill="#fff" d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z"></path>
                                                    </svg>
                                                    Instagram
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>


    </main>
    <footer id="footer">

        <div class="container footer-bottom clearfix">
            <div class="copyright"> &copy; Copyright <strong><span>cv-gen.com</span></strong>. All Rights Reserved</div>
            <!-- <div class="credits"> Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a></div> -->
        </div>
    </footer>
    <div id="preloader"></div> <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="<?= base_url() ?>/assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="<?= base_url() ?>/assets/js/main.js"></script>

    <script>
        // $(document).ready(function() {
        //     $('#deleteUser').click(function() {
        //         Swal.fire({
        //             title: 'Yakin ingin menghapus akun?',
        //             text: "Anda tidak dapat login dengan username dan password anda lagi!",
        //             icon: 'warning',
        //             showCancelButton: true,
        //             confirmButtonColor: '#d33',
        //             cancelButtonColor: '#3085d6',
        //             confirmButtonText: 'Ya, hapus akun!',
        //             cancelButtonText: 'Batal'
        //         }).then((result) => {
        //             if (result.isConfirmed) {
        //                 window.location.href = "</?php echo base_url('delete/' . $dataku->id) ?>";
        //             }
        //         })
        //     });
        // });
    </script>


</body>

</html>