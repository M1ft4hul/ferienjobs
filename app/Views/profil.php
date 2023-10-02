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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.13.1/b-2.3.3/b-html5-2.3.3/r-2.4.0/datatables.min.css" />

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
                    <h1>Koordinator</h1>
                    <h2>Adalah tim yang terverifikasi untuk mengkoordinir calon kandidat program Ferienjobs, dapatkan banyak keuntungan dengan bergabung bersama kami sebagai Koordinator Program Ferienjobs ke Jerman Batch-02 tahun 2023-2024.</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start"><a href="whatsapp://send?text=Salam Admin ferienjobs, saya membutuhkan informasi lengkap terkait menjadi Koordinator Ferienjobs, apakah ada waktu untuk konsultasi?.&phone=+6285298649951&abid=+6285298649951'" class="btn-get-started scrollto">Informasi Detail</a>
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
                    <h2>Salam, <?= session()->get('nama') ?></h2>
                    <h5>DATA KANDIDAT ANDA</h5>
                </div>
                <div class="row content">
                    <div class="poin">
                        <h4>
                            <!--Saldo Anda : IDR. <?= $kredit->kredit; ?>,- <span class="badge rounded-pill text-bg-dark" data-bs-toggle="modal" data-bs-target="#saldo" style="cursor: pointer;">Info</span><br>-->
                            Kode Anda : <?= session()->get('kode_user') ?> <span class="badge rounded-pill text-bg-dark" data-bs-toggle="modal" data-bs-target="#kode_koord" style="cursor: pointer;">?</span><br>
                            <div class="d-flex justify-content-center justify-content-lg-start">
                                <a href="whatsapp://send?text=Salam Admin ferienjobs, saya membutuhkan informasi, apakah ada waktu untuk konsultasi?.&phone=+6285298649951&abid=+6285298649951'" class="btn btn-success" style="border-radius: 10px;">Hubungi Admin</a>
                                <button type="submit" id="deleteUser" class="btn btn-danger ms-2" style="border-radius: 10px;">Hapus Akun</button>
                            </div>
                        </h4>
                    </div>
                    <?php if ($kandidat) { ?>
                        <table class="table table-bordered display responsive nowrap" id="kandidat" width="100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>WA</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Universitas</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php $no = 1;
                                foreach ($kandidat as $x) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $x->nama ?></td>
                                        <td><a href="whatsapp://send?text=Salam <?= $x->nama ?>, Terimakasih telah bergabung di Program Ferienjobs.&phone=+62<?= $x->wa ?>&abid=+62<?= $x->wa ?>" class="btn btn-success btn-sm"><?= $x->wa ?></a></td>
                                        <td><?= $x->jk ?></td>
                                        <td><?= $x->universitas ?></td>
                                        <td><?php if ($x->status_kandidat == 0) {
                                                echo '<span class="text-danger">SEDANG DIVERIFIKASI</span>';
                                            } elseif ($x->status_kandidat == 1) {
                                                echo '<span class="text-danger">1. DATA PENDAFTARAN VALID</span><br>(Menunggu Pembayaran Biaya Pendaftaran)';
                                            } elseif ($x->status_kandidat == 2) {
                                                echo '<span class="text-danger">2. BIAYA PENDAFTARAN DITERIMA</span><br>(Menunggu Dokumen dari Kandidat)';
                                            } elseif ($x->status_kandidat == 3) {
                                                echo '<span class="text-danger">3. DOKUMEN DITERIMA dan VALID</span><br>(Menunggu Pembayaran Biaya Pengiriman Dokumen dari Kandidat)';
                                            } elseif ($x->status_kandidat == 4) {
                                                echo '<span class="text-danger">4. BIAYA PENGIRIMAN DOKUMEN DITERIMA</span><br>(Silahkan proses pengiriman dokumen ke ZAV Jerman)';
                                            } elseif ($x->status_kandidat == 5) {
                                                echo '<span class="text-danger">5. DOKUMEN DIKIRIM KE JERMAN</span><br>(Menunggu Approval ZAV Jerman)';
                                            } elseif ($x->status_kandidat == 6) {
                                                echo '<span class="text-danger">6. DOKUMEN DISETUJUI ZAV JERMAN</span><br>(Menunggu Pembayaran Dokumen Approval ZAV Jerman dari Kandidat)';
                                            } else {
                                                echo '<span class="text-danger">Siap Ajukan Visa</span>';
                                            } ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    <?php     } else { ?>
                        <p>Data Kandidat belum ada.</p>
                    <?php } ?>

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

    <div class="modal fade" id="kode_koord" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Kode Koordinator</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Kode Koordinator Anda: <strong><?= session()->get('kode_user') ?></strong><br>
                    Berikan kepada setiap Calon kandidat ferienjobs yang Anda koordinir, setiap kandidat yang terdaftar dan tervalidasi sampai pada pengurusan Visa, Anda akan mendapat saldo senilai Rp. 230.000,-/Kandidat
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok, Paham</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="saldo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Saldo</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Saldo Koordinator anda bukan hasil akhir. Sebelum rilis ke rekening anda, kandidat anda akan dicrosscheck terlebih dahulu
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Terimakasih</button>
                </div>
            </div>
        </div>
    </div>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.13.1/b-2.3.3/b-html5-2.3.3/r-2.4.0/datatables.min.js"></script>

    <script src="<?= base_url() ?>/assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="<?= base_url() ?>/assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            $('#kandidat').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'pdf'
                ],
                responsive: true,
            });
        })
    </script>
    
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
                        window.location.href = "<?php echo base_url('delete/' . $user['id']) ?>";
                    }
                })
            });
        });
    </script>
</body>

</html>