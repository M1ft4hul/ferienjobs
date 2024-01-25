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
                    <li><a class="nav-link scrollto" href="<?= base_url('/') ?>#biaya">Biaya</a></li>
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
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1>Kandidat Ferienjobs</h1>
                    <h2>Adalah Mahasiswa aktif yang terverifikasi dari kampus atau Universitasnya untuk menjadi calon kandidat program Ferienjobs (kerja di musim liburan) di Jerman, pada Program Ferienjobs Batch-02 tahun 2022-2023.</h2>
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
                    <h2>Daftar Sebagai Kandidat</h2>
                </div>
                <div class="row content">
                    <form action="<?= base_url() ?>/simpan-kandidat" method="POST">
                        <?= csrf_field() ?>
                        <div class="row">
                            <div class="col-lg-6">
                                <h5>Biodata</h5>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <label for="kode" class="form-label">KODE Koordinator
                                            <span class="badge rounded-pill text-bg-dark btn btn-secondary" data-bs-toggle="modal" data-bs-target="#kode_modal">?</span></label>

                                        <input type="text" class="form-control <?= ($validation->hasError('kode')) ? 'is-invalid'  : ''; ?>" name="kode" id="kode" value="<?= old('kode') ?>" aria-describedby="kode">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('kode'); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="nama" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid'  : ''; ?>" name="nama" id="nama" value="<?= old('nama') ?>" aria-describedby="nama">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('nama'); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="jk" class="form-label">Jenis Kelamin</label>
                                        <select class="form-select <?= ($validation->hasError('jk')) ? 'is-invalid'  : ''; ?>" name="jk" id="jk" aria-label="jk">
                                            <option value="" selected disabled>Pilihan</option>
                                            <option value="Laki-laki" <?= (old('jk') == "Laki-laki" ? 'selected' : '') ?>>Laki-laki</option>
                                            <option value="Perempuan" <?= (old('jk') == "Perempuan" ? 'selected' : '') ?>>Perempuan</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('jk'); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="tempatlahir" class="form-label ">Tempat Lahir</label>
                                        <input type="text" class="form-control <?= ($validation->hasError('tempatlahir')) ? 'is-invalid'  : ''; ?>" name="tempatlahir" id="tempatlahir" value="<?= old('tempatlahir') ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('tempatlahir'); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="tgllahir" class="form-label">Tgl. Lahir</label>
                                        <input type="date" class="form-control <?= ($validation->hasError('tgllahir')) ? 'is-invalid'  : ''; ?>" name="tgllahir" id="tgllahir" value="<?= date(old('tgllahir')) ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('tgllahir'); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="univ" class="form-label">Universitas</label>
                                        <input type="text" class="form-control <?= ($validation->hasError('univ')) ? 'is-invalid'  : ''; ?>" name="univ" id="univ" value="<?= old('univ') ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('univ'); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="baju" class="form-label ">Ukuran Baju</label>
                                        <select class="form-select <?= ($validation->hasError('baju')) ? 'is-invalid'  : ''; ?>" aria-label="baju" name="baju" id="baju">
                                            <option value="" selected selected>Pilihan</option>
                                            <option value="XS" <?= (old('baju') == "XS" ? 'selected' : '') ?>>XS</option>
                                            <option value="S" <?= (old('baju') == "S" ? 'selected' : '') ?>>S</option>
                                            <option value="M" <?= (old('baju') == "M" ? 'selected' : '') ?>>M</option>
                                            <option value="L" <?= (old('baju') == "L" ? 'selected' : '') ?>>L</option>
                                            <option value="XL" <?= (old('baju') == "XL" ? 'selected' : '') ?>>XL</option>
                                            <option value="XXL" <?= (old('baju') == "XXL" ? 'selected' : '') ?>>XXL</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('baju'); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="celana" class="form-label">Ukuran Celana</label>
                                        <select class="form-select <?= ($validation->hasError('celana')) ? 'is-invalid'  : ''; ?>" aria-label="celana" name="celana" id="celana">
                                            <option value="" selected selected>Pilihan</option>
                                            <option value="XS" <?= (old('baju') == "XS" ? 'selected' : '') ?>>XS</option>
                                            <option value="S" <?= (old('baju') == "S" ? 'selected' : '') ?>>S</option>
                                            <option value="M" <?= (old('baju') == "M" ? 'selected' : '') ?>>M</option>
                                            <option value="L" <?= (old('baju') == "L" ? 'selected' : '') ?>>L</option>
                                            <option value="XL" <?= (old('baju') == "XL" ? 'selected' : '') ?>>XL</option>
                                            <option value="XXL" <?= (old('baju') == "XXL" ? 'selected' : '') ?>>XXL</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('celana'); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="sepatu" class="form-label">Ukuran Sepatu</label>
                                        <select class="form-select <?= ($validation->hasError('sepatu')) ? 'is-invalid'  : ''; ?>" aria-label="sepatu" name="sepatu" id="sepatu">
                                            <option value="" selected selected>Pilihan</option>
                                            <option value="37" <?= (old('sepatu') == "37" ? 'selected' : '') ?>>37</option>
                                            <option value="38" <?= (old('sepatu') == "38" ? 'selected' : '') ?>>38</option>
                                            <option value="39" <?= (old('sepatu') == "39" ? 'selected' : '') ?>>39</option>
                                            <option value="40" <?= (old('sepatu') == "40" ? 'selected' : '') ?>>40</option>
                                            <option value="41" <?= (old('sepatu') == "41" ? 'selected' : '') ?>>41</option>
                                            <option value="42" <?= (old('sepatu') == "42" ? 'selected' : '') ?>>42</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('sepatu'); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="vaksin" class="form-label">Vaksin Covid</label>
                                        <select class="form-select <?= ($validation->hasError('vaksin')) ? 'is-invalid'  : ''; ?>" aria-label="vaksin" name="vaksin" id="vaksin">
                                            <option value="" selected selected>Pilihan</option>
                                            <option value="Vaksin-1" <?= (old('vaksin') == "Vaksin-1" ? 'selected' : '') ?>>Vaksin 1</option>
                                            <option value="Vaksin-2" <?= (old('vaksin') == "Vaksin-2" ? 'selected' : '') ?>>Vaksin 2</option>
                                            <option value="Vaksin-3" <?= (old('vaksin') == "Vaksin-3" ? 'selected' : '') ?>>Vaksin 3</option>
                                            <option value="Booster" <?= (old('vaksin') == "Booster" ? 'selected' : '') ?>>Booster</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('vaksin'); ?>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat lengkap</label>
                                        <textarea name="alamat" id="alamat" cols="30" rows="2" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid'  : ''; ?>"><?= old('alamat') ?></textarea>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('alamat'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <h5>Akun Kandidat</h5>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="hp" class="form-label">Nomor HP (08123456789)</label>
                                            <input type="number" class="form-control <?= ($validation->hasError('hp')) ? 'is-invalid'  : ''; ?>" name="hp" id="hp" value="<?= old('hp') ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('hp'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="wa" class="form-label">Nomor Whatsapp (08123456789)</label>
                                            <input type="number" class="form-control <?= ($validation->hasError('wa')) ? 'is-invalid'  : ''; ?>" name="wa" id="wa" value="<?= old('wa') ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('hp'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="email" class="form-label">Alamat Email</label>
                                        <input type="email" class="form-control  <?= ($validation->hasError('email')) ? 'is-invalid'  : ''; ?>" name="email" id="email" value="<?= old('email') ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('email'); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid'  : ''; ?>" name="password" id="password">
                                        <span class="mata"><i class="bi bi-eye-fill" id="show_eye"></i></span>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('password'); ?>
                                        </div>
                                    </div>
                                    <div class="mb-4">Mendaftar artinya Anda setuju <a href="<?= base_url() ?>/terms">Syarat & Ketentuan</a></div>
                                </div>

                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Mendaftar</button>
                    </form>
                </div>
                <div class="mt-3">
                    <p>Sudah punya akun? <a href="<?= base_url() ?>/login"> Login</a></p>
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
                        <p><strong>Phone:</strong>+6285298649951<br> <strong>Email:</strong> <a href="#">ami@cv-gen.com</a><br></p>
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
                    Silahkan isi kode koordinator sesuai universitas anda dibawah ini <br> <br>
                    
                    <strong>UNJ</strong> untuk mahasiswa Universitas Negeri Jakarta <br>
                    
                    <strong>BINUS</strong> untuk mahasiswa Universitas Bina Nusantara <br>
                    
                    <strong>UNPAR</strong> untuk mahasiswa Universitas Parahyangan Bandung <br>
                    
                    <strong>ATMAJAYA</strong> untuk mahasiswa Universitas Atmajaya <br>
                    
                    <strong>UMB</strong> untuk mahasiswa Universitas Mercu Buana <br>
                    
                    <strong>USAKTI</strong> untuk mahasiswa Universitas Trisakti <br>
                    
                    <strong>UNMER</strong> untuk mahasiswa Universitas Merdeka Madiun <br>
                    
                    <strong>UNJA</strong> untuk mahasiswa universitas Jambi <br> 
                    
                    <strong>UPH</strong> untuk mahasiswa universitas Pelita Harapan <br>
                    
                    <strong>ATMI_SURAKARTA</strong> untuk mahasiswa universitas ATMI Surakarta <br>
                    
                    <strong>UHO</strong> untuk mahasiswa Universitas Halu Oleo <br>
                    
                    <strong>HUSADA</strong> untuk mahasiswa INSTITUT KESEHATAN DELI HUSADA <br>
                    
                    <strong>MEDISTRA</strong> untuk mahasiswa Institut Kesehatan Medistra <br>
                    
                    <strong>UIT</strong> untuk mahasiswa Universitas Indonesia Timur <br>
                    
                    <strong>UNTAGSMG</strong> untuk mahasiswa Universitas 17 Agustus 1945 Semarang <br>
                    
                    <strong>UNNES</strong> untuk mahasiswa Universitas Negeri Semarang <br>
                    
                    <strong>UNWIRA</strong> untuk mahasiswa Universitas Katolik Widya Mandira Kupang <br>
                    
                    <strong>UNILA</strong> untuk mahasiswa Universitas Lampung <br>
                    
                    <strong>SCU</strong> untuk mahasiswa SOEGIJAPRANATA CATHOLIC UNIVERSITY <br>
                    
                    <strong>UNS</strong> untuk mahasiswa UNIVERSITAS SEBELAS MARET <br>
                    
                    <strong>UNDIP</strong> untuk mahasiswa UNIVERSITAS DIPONEGORO SEMARANG <br>
                    
                    <strong>ATMI_CIKARANG</strong> untuk mahasiswa ATMI CIKARANG <br>
                    
                    <strong>UWM</strong> untuk mahasiswa UNIKA WIDYA MANDALA SURABAYA <br>
                    
                    <strong>BEI</strong> untuk mahasiswa BRIGHT EDUCATION INDONESIA <br> <br>
                    
                    <strong>CVGEN</strong> untuk umum <br>
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