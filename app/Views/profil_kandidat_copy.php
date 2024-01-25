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
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="whatsapp://send?text=Salam Admin ferienjobs, saya membutuhkan informasi lengkap terkait menjadi Kandidat Ferienjobs, apakah ada waktu untuk konsultasi?.&phone=+6285298649951&abid=+6285298649951'" class="btn-get-started scrollto">Informasi Detail</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200"> <img src="<?= base_url() ?>/assets/img/hero-img1.png" class="img-fluid animated" alt="ferienjobs" style="max-width:60%"></div>
            </div>
        </div>
    </section>
    <main id="main">
        <section id="clients" class="clients section-bg">

        </section>
        <section class="about">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Salam,
                        <?= session()->get('nama') ?>
                    </h2>
                    <h5>DATA ANDA</h5>
                </div>
                <div class="row content" data-aos="fade-up" data-aos-delay="100">
                    <div class="poin">
                        <h5>Koordinator Anda:
                            <?= $koordinator->nama ?> <br> Kode Koordinator :
                            <?= $dataku->kode_upline ?>
                        </h5>
                    </div>
                    <div class="col-lg-6 mb-2">
                        <p>Selamat, <br>Telah bergabung menjadi kandidat Ferienjobs (<i>bekerja di Jerman saat musim
                                liburan kampus di Indonesia</i>), saat ini status Anda</p>
                        <?php if ($dataku->status_kandidat == 0) { ?>
                            <span class="text-danger fw-bold">SEDANG DIVERIFIKASI</span>
                        <?php } elseif ($dataku->status_kandidat == 1) { ?>
                            <span class="text-danger fw-bold"><i class="bi bi-check2-square"></i> MENUNGGU PEMBAYARAN
                                REGISTRASI</span>
                            <p>Pendaftaran Rp.100k<br>Biaya kirim dokumen Indonesia-Jerman Rp.90k<br><strong>Total:
                                    190k</strong><br>Harap klik hubungi admin untuk konfirmasi bukti transfer dan update
                                status anda</p>

                        <?php } elseif ($dataku->status_kandidat == 2) { ?>
                            <span class="text-danger fw-bold"><i class="bi bi-check2-square"></i> BIAYA PENDAFTARAN
                                TERVALIDASI</span>
                            <p>Biaya Pendaftaran Anda sudah tervalidasi. Mohon siapkan dan submit dokumen kelengkapan untuk
                                diverifikasi dan dikirim ke Badan Otoritas Jerman. </p>
                            <p><strong>PENTING: Harap Lengkapi biodata Anda Melalui link berikut ini:</strong></p>
                            <a href="https://forms.gle/NNg86J1yPTk2aYMZ7" target="_blank">LENGKAPI BIODATA</a>

                            <p>Untuk kelengkapan dokumen silahkan cek di:
                                <a href="https://bit.ly/ferienjobsDE" target="_blank">CEK KELENGKAPAN DOKUMEN</a>
                            </p>
                        <?php } elseif ($dataku->status_kandidat == 3) { ?>
                            <span class="text-danger fw-bold"><i class="bi bi-check2-square"></i> DOKUMEN ORIGINAL SIAP
                                SUBMIT KE Badan Otoritas JERMAN</span>
                            <p>Biaya submit dokumen <span class="fw-bold">€. 150,-</span> . Mohon lakukan pembayaran sesuai nominal yang tertera, agar berkas Anda
                                segera diproses untuk di Submit ke Otoritas Jerman.</p>
                        <?php } elseif ($dataku->status_kandidat == 4) { ?>
                            <span class="text-danger fw-bold"><i class="bi bi-check2-square"></i> BIAYA SUBMIT DOKUMEN
                                TERVALIDASI</span>
                        <?php } elseif ($dataku->status_kandidat == 5) { ?>
                            <span class="text-danger fw-bold"><i class="bi bi-check2-square"></i> DOKUMEN TELAH DISUBMIT KE OTORITAS JERMAN</span>
                        <?php } elseif ($dataku->status_kandidat == 6) { ?>
                            <span class="text-success fw-bold"><i class="bi bi-check2-square"></i> DOKUMEN TELAH DI SETUJUI
                                Badan Otoritas JERMAN</span>
                            <p>Selamat, Dokumen Anda telah diterima dan di setujui Badan Otoritas Jerman. Biaya Approval dari Badan Otoritas
                                Jerman <span class="fw-bold">€. 200,-</span> atau <span class="fw-bold">Rp. 3.300K,-</span>.
                                Mohon lakukan pembayaran sesuai nominal yang tertera, agar berkas Anda segera diproses untuk
                                pengurusan VISA.</p>
                        <?php } else { ?>
                            <span class="text-success fw-bold"><i class="bi bi-check2-square"></i> Siap Untuk Pengajuan
                                Visa</span>

                        <?php } ?>

                    </div>
                    <div class="col-lg-6 mb-2">
                        <?php if ($dataku->status_kandidat == 0) { ?>
                            <div class="my-2 d-flex flex-column">
                                <div class="mb-2 fw-bold">STATUS AKUN</div>
                                <div class="p-0">Menunggu verifikasi Admin.</div>
                            </div>
                        <?php } elseif ($dataku->status_kandidat == 1) { ?>
                            <div class="my-2 d-flex flex-column fw-bold">
                                <div class="mb-2">REKENING PEMBAYARAN</div>
                                <div class="p-0">1570108803</div>
                                <div class="p-0">BANK BNI</div>
                                <div class="p-0">a.n PT. CVGEN SMART CONSULTANT</div>
                            </div>
                        <?php } elseif ($dataku->status_kandidat == 2) { ?>
                            <p class="fw-bold">PERSYARATAN DOKUMEN</p>
                            <p>Untuk Kelengkapan Dokumen Persyaratan harap Cek <a href="http://bit.ly/ferienjobsDE" target="_blank">bit.ly/ferienjobsDE</a></p>
                            <!--<h5>1. Immatrikulation form.</h5>-->
                            <!--<a href="https://bit.ly/imat-form" target="_blank">Download Form</a>-->
                            <!--<h5>2. Information about Student Holiday</h5>-->
                            <!--<p>Suket libur dari universitas Harus tanda tangan dan stempel basah oleh pihak-->
                            <!--    Universitas<br><a-->
                            <!--        href="https://docs.google.com/document/d/1R7aXSucEdCs3H_sDnFwgKEKhGxujBDqU/edit?usp=sharing&ouid=102732726811879749566&rtpof=true&sd=true"-->
                            <!--        target="_blank">Download Link</a></p>-->
                            <!--<h5>3. Enrolment Letter</h5>-->
                            <!--<p>Suket aktif dari universitas Harus tanda tangan dan stempel basah oleh pihak-->
                            <!--    Universitas<br><a-->
                            <!--        href="https://docs.google.com/document/d/1K8RNxZ-WxSnrkkpXKkmuEP_U9xAxbLlr/edit?usp=sharing&ouid=102732726811879749566&rtpof=true&sd=true"-->
                            <!--        target="_blank">Download Link</a></p>-->
                            <!--<h5>4. University Approval</h5>-->
                            <!--<a href="https://docs.google.com/document/d/1On9MGfAr-u7IxcwvhcEfH6dwlrk7H_5o/edit"-->
                            <!--    target="_blank">Cek Dokumen</a>-->

                            <!--<h5>5. DIKTI Wilayah Statement Letter</h5>-->
                            <!--<a-->
                            <!--    href="https://docs.google.com/document/d/10Mj1PQfMR0SCExFQRK6kAFqxBTEab9y9/edit?usp=sharing&ouid=113479278474974205742&rtpof=true&sd=true">Cek-->
                            <!--    Dokumen</a>-->
                            <!--</p>-->
                            <!--<h5>6. Bukti Keterangan Mahasiswa Aktif dari DIKTI</h5>-->
                            <!--<p> Generate pdf via <a href="https://pddikti.kemdikbud.go.id/">Cek Dokumen</a></p>-->
                            <!--<h5>7. Passport dan KTP</h5>-->
                            <!--<h5>8. Students Card/Kartu Mahasiswa</h5>-->
                            <!--<h5>9. Foto file pdf ukuran 4cm*6cm dan 3.5cm*4.5cm dalam bentuk pdf</h5>-->
                            <!--<h5>10. Curriculum Vitae</h5>-->
                            <!--<p>generate via cv-gen.com <a href="https://cv-gen.com/lebenslauf"-->
                            <!--        target="_blank">Lebenslauf</a></p>-->
                            <!--<h5>11. Vaccines Proof</h5>-->
                            <!--<p>Generate via Pedulilindungi <a href="https://www.pedulilindungi.id/"-->
                            <!--        target="_blank">Pedulilindungi</a></p>-->
                            <!--<h5>12. Keterangan Kampus Terdaftar di ANABIN</h5>-->
                            <!--<p>Cara cek dan download dapat dilihat di petunjuk di link ini <a-->
                            <!--        href="https://drive.google.com/file/d/110MQuOsqDTk8hmRryVSothSoUvRHyRqP/view?usp=sharing"-->
                            <!--        target="_blank">Cek Dokumen</a></p>-->
                        <?php } elseif ($dataku->status_kandidat == 3) { ?>
                            <!--<div class="my-2 d-flex flex-column fw-bold">-->
                            <!--    <div class="mb-2">REKENING PEMBAYARAN RUPIAH</div>-->
                            <!--    <div class="p-0">1570108803</div>-->
                            <!--    <div class="p-0">BANK BNI</div>-->
                            <!--    <div class="p-0">a.n PT. CVGEN SMART CONSULTANT</div>-->
                            <!--</div>-->
                            <!--<hr>-->
                            <div class="my-2 d-flex flex-column fw-bold">
                                <div class="mb-2">REKENING PEMBAYARAN EURO</div>
                                <div class="p-0">IBAN: BE12 9675 7874 3792</div>
                                <div class="p-0">BIC: TRWIBEB1XXX</div>
                                <div class="p-0">a.n PT. CVGEN SMART CONSULTANT</div>
                            </div>
                        <?php } elseif ($dataku->status_kandidat == 4) { ?>
                            <div class="my-2 d-flex flex-column">
                                <div class="mb-2 fw-bold">STATUS AKUN</div>
                                <div class="p-0">Biaya submit dokumen telah diterima Admin, proses submit Dokumen ke Badan Otoritas
                                    Jerman.</div>
                            </div>
                        <?php } elseif ($dataku->status_kandidat == 5) { ?>
                            <div class="my-2 d-flex flex-column">
                                <div class="mb-2 fw-bold">STATUS AKUN</div>
                                <div class="p-0">DOKUMEN TELAH DISUBMIT KE OTORITAS JERMAN, Proses Assesment Otoritas Jerman membutuhkan 8-16 minggu. Hasil Pengumuman akan diinformasikan oleh admin grup anda.</div>
                            </div>
                        <?php } elseif ($dataku->status_kandidat == 6) { ?>
                            <!--<div class="my-2 d-flex flex-column fw-bold">-->
                            <!--    <div class="mb-2">REKENING PEMBAYARAN RUPIAH</div>-->
                            <!--    <div class="p-0">1570108803</div>-->
                            <!--    <div class="p-0">BANK BNI</div>-->
                            <!--    <div class="p-0">a.n PT. CVGEN SMART CONSULTANT</div>-->
                            <!--</div>-->
                            <!--<hr>-->
                            <div class="my-2 d-flex flex-column fw-bold">
                                <div class="mb-2">REKENING PEMBAYARAN EURO</div>
                                <div class="p-0">IBAN: BE12 9675 7874 3792</div>
                                <div class="p-0">BIC: TRWIBEB1XXX</div>
                                <div class="p-0">a.n PT. CVGEN SMART CONSULTANT</div>
                            </div>
                        <?php } else { ?>
                            <div class="my-2 d-flex flex-column">
                                <div class="mb-2 fw-bold">STATUS AKUN</div>
                                <div class="p-0">Selamat, Anda Siap mengurus VISA. <br>1. Anda boleh mengurus sendiri<br>
                                    2. Anda dapat menggunakan jasa cvgen. Silahkan hubungi admin<br> (gratis akomodasi di
                                    Jakarta, biaya 150euro)
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <hr>
                    <p>Pantau terus informasi status Anda di halaman ini. Jangan lupa follow dan share media sosial
                        kami.<br>
                        <span class="social-links"> <a href="https://www.facebook.com/cvgenoverseas" class="facebook btn btn-primary" target="_blank"><i class="bx bxl-facebook"></i></a> <a href="https://www.instagram.com/cvgencom/" class="instagram btn btn-danger" target="_blank"><i class="bx bxl-instagram"></i></a></span>
                        <br>Butuh bantuan?
                    </p>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="whatsapp://send?text=Salam Admin ferienjobs, saya membutuhkan informasi lengkap terkait menjadi Kandidat Ferienjobs, apakah ada waktu untuk konsultasi?.&phone=+6285298649951&abid=+6285298649951'" class="btn btn-success mb-2" style="border-radius: 10px;">Hubungi Admin</a>
                        <button type="submit" id="deleteUser" class="btn btn-danger mb-2 ms-2" style="border-radius: 10px;">Hapus Akun</button>
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
                        <p>Jl. Elang Blok D No.1, BTN Medibrata Indah,
                            Kota Baubau, Sulawesi Tenggara, 93157<br><br> <strong>Phone:</strong>+6285298649951<br>
                            <strong>Email:</strong> <a href="#">ami@cv-gen.com</a><br>
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


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="<?= base_url() ?>/assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="<?= base_url() ?>/assets/js/main.js"></script>

    <script>
        $(document).ready(function() {
            $('#deleteUser').click(function() {
                Swal.fire({
                    title: 'Yakin ingin menghapus akun?',
                    text: "Anda tidak dapat login dengan username dan password anda lagi!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Ya, hapus akun!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "<?php echo base_url('delete/' . $dataku->id) ?>";
                    }
                })
            });
        });
    </script>


</body>

</html>