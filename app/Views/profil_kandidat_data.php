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
                <div class="section-title">
                    <h2>Profile</h2>
                </div>
                <!-- allert -->
                <?php session()->getFlashdata('errors');

                if (session()->getFlashdata('editProfil')) {
                    echo '<div id="alert" class="alert alert-success alert-dismissible fade show">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                            <path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path>
                        </svg>
                        <strong>Berhasil!</strong>';
                    echo session()->getFlashdata('editProfil');
                    echo '</div>';
                }

                ?>
                <!-- row -->
                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                    <div class="mt-3">
                                        <h4><?php echo $user['nama']; ?></h4>
                                        <hr>
                                        <p class="text-muted font-size-sm"><?php echo $user['email']; ?></p>
                                        <hr>
                                        <p class="text-muted font-size-sm"><?php echo $user['wa']; ?></p>
                                        <hr>
                                        <p class="text-secondary mb-1">
                                            <?php if ($userLevel == 0) {
                                                echo '<span class="badge bg-success text-with"> Koordinator </span>';
                                            } elseif ($userLevel == 1) {
                                                echo '<span class="badge bg-warning text-with"> Kandidat </span>';
                                            } elseif ($userLevel == 9) {
                                                echo '<span class="badge bg-primary text-with"> Administrator </span>';
                                            } else {
                                                echo 'Tidak Diketahui';
                                            } ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <p style="text-align: center;"><b>Edit Profile Kandidat</b></p>
                                    <hr>
                                    <form action="<?php echo base_url('update_kandidats/' . $user['id']) ?>" method="post">
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Nama Panjang</label>
                                            <div class="col-sm-7">
                                                <input type="text" name="nama" value="<?php echo $user['nama'] ?>" class="form-control" id="inputEmail3">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputPassword3" class="col-sm-4 col-form-label">Hp/WhatsApp</label>
                                            <div class="col-sm-7">
                                                <input type="number" name="wa" value="<?php echo $user['wa'] ?>" class="form-control" id="inputPassword3">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputPassword3" class="col-sm-4 col-form-label">Email</label>
                                            <div class="col-sm-7">
                                                <input type="email" name="email" value="<?php echo $user['email'] ?>" class="form-control" id="inputPassword3">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputPassword3" class="col-sm-4 col-form-label">Password</label>
                                            <div class="col-sm-7">
                                                <input type="password" name="password" class="form-control" placeholder="Masukkan Kata Sandi Baru" id="password">
                                                <span class="mata"><i class="bi bi-eye-fill" id="show_eye"></i></span>
                                            </div>
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-primary">Update Data</button>
                                        |
                                        <button type="button" id="deleteUser" class="btn btn-danger">Hapus Akun</button>
                                        |
                                        <a href="<?php echo base_url('/profil-kandidat') ?>" type="button" class="btn btn-warning">Kembali</a>
                                    </form>
                                </div>
                            </div>
                        </div>
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
                        window.location.href = "<?php echo base_url('deleteKandidat/' . $user['id']) ?>";
                    }
                })
            });
        });
    </script>
    <script>
        setTimeout(function() {
            var alert = document.getElementById('alert');
            alert.style.display = 'none';
        }, 3000);
    </script>
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
    </script>

</body>

</html>