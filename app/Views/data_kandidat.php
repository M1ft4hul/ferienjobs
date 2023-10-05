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
        #hero {
            width: 100%;
            height: auto;
            background: #37517e;
        }

        section {
            padding: 5px 0;
            overflow: hidden;
        }

        @media (max-width: 991px) {
            #hero {
                height: auto;
                text-align: center;
            }
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
                    <li><a class="nav-link scrollto" href="<?= base_url('/data-kandidat') ?>">Kandidat</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('/data-koordinator') ?>">Koordinator</a></li>
                    <li><a class="getstarted scrollto" href="<?= base_url() ?>/logout">Logout</a></li>
                </ul> <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <!-- <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1>Koordinator</h1>
                    <h2>Adalah tim yang terverifikasi untuk mengkoordinir calon kandidat program Ferienjobs, bergabunglah bersama kami sebagai Koordinator Program Ferienjobs ke Jerman Batch-02 tahun 2022-2023.</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start"><a href="whatsapp://send?text=Salam Admin ferienjobs, saya membutuhkan informasi lengkap terkait menjadi Koordinator Ferienjobs, apakah ada waktu untuk konsultasi?.&phone=+6285298649951&abid=+6285298649951'" class="btn-get-started scrollto">Informasi Detail</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200"> <img src="<?= base_url() ?>/assets/img/hero-img1.png" class="img-fluid animated" alt="ferienjobs" style="max-width:60%"></div>
                </div> -->
            </div>
    </section>
    <main id="main">
        <section id="clients" class="clients section-bg">

        </section>
        <section class="about">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Salam, <?= session()->get('nama') ?></h2>
                    <p>Data Kandidat Ferienjobs</p>
                </div>
                <!-- allert -->
                <?php session()->getFlashdata('errors');

                if (session()->getFlashdata('editKandidat')) {
                    echo '<div id="alert" class="alert alert-success alert-dismissible fade show">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                            <path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path>
                        </svg>
                        <strong>Berhasil!</strong>';
                    echo session()->getFlashdata('editKandidat');
                    echo '</div>';
                }

                ?>
                <!-- row -->
                <div class="row content">
                    <?php if ($kandidat) { ?>

                        <table class="table table-bordered display responsive nowrap" id="kandidat" width="100%">
                            <thead>
                                <tr>
                                    <th>Tgl. Daftar</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Kode Koordinator</th>
                                    <th>WA</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Universitas</th>
                                    <th>Alamat</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($kandidat as $x) { ?>
                                    <tr>
                                        <td><?= $x->created_at ?></td>
                                        <td><?= $x->nama ?></td>
                                        <td><?= $x->email ?></td>
                                        <td><?= $x->kode_upline ?></td>
                                        <td><a href="whatsapp://send?text=Salam <?= $x->nama ?>, Terimakasih telah bergabung di Program Ferienjobs.&phone=+62<?= $x->wa ?>&abid=+62<?= $x->wa ?>" class="btn btn-success btn-sm"><?= $x->wa ?></a></td>
                                        <td><?= $x->jk ?></td>
                                        <td><?= $x->universitas ?></td>
                                        <td><?= $x->alamat ?></td>
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
                                            } ?></td>
                                        <td>
                                            <!-- <button type="button" class="btn btn-primary" onclick="ganti_status('</?= $x->id ?>')">GANTI STATUS</button><button type="button" class="btn btn-danger ms-1" onclick="hapus('</?= $x->id ?>')">HAPUS</button> -->
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editKandidat<?php echo $x->id; ?>">Edit Status</button>

                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    <?php } else {
                        echo 'Belum ada data kandidat';
                    } ?>
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
                    <!-- <div class="col-lg-8 col-md-6 footer-contact">
                        <h3>Ferienjobs Indonesia</h3>
                        <p>Jl. Elang Blok D No.1, BTN Medibrata Indah,
Kota Baubau, Sulawesi Tenggara, 93157<br><br> <strong>Phone:</strong>+6285298649951<br> <strong>Email:</strong> <a href="#">ami@cv-gen.com</a><br></p>
                    </div> -->
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
                    <!-- <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Media Sosial</h4>
                        <p>Follow dan ikuti media sosial kami.</p>
                        <div class="social-links mt-3"> <a href="https://www.facebook.com/cvgenoverseas" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a> <a href="https://www.instagram.com/cvgencom/" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a> <a href="https://www.linkedin.com/in/amsulistiani-ensch-85379824/" class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a></div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="container footer-bottom clearfix">
            <div class="copyright"> &copy; Copyright <strong><span>cv-gen.com</span></strong>. All Rights Reserved</div>
            <!-- <div class="credits"> Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a></div> -->
        </div>
    </footer>
    <div id="preloader"></div> <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


    <!-- modal edit status kandidat -->
    <?php
    foreach ($kandidat as $b) {
    ?>
        <div class="modal fade" id="editKandidat<?php echo $b->id; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form action="<?php echo base_url('update_kandidat/' . $b->id) ?>" method="post">
                    <!-- <form action="</?= base_url() ?>/gantistatus" method="post"> -->
                    <?= csrf_field() ?>
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Edit Kode dan Status Kandidat</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                Pilih status kandidat saat ini.
                            </div>
                            <div class="mb-3">
                                <!-- <span class="text-success">Tentukan status akun ini:</span> -->
                                <select name="status_kandidat" class="form-select" aria-label="Default select example">
                                    <option selected disabled>Pilih Jenis</option>
                                    <option value="1">1. Data Pendaftaran Valid</option>
                                    <option value="2">2. Biaya Pendaftaran Diterima</option>
                                    <option value="3">3. Dokumen Diterima dan Valid</option>
                                    <option value="4">4. Biaya Pengiriman Dokumen Diterima</option>
                                    <option value="5">5. Dokumen Dikirim Ke Jerman</option>
                                    <option value="6">6. Dokumen Disetujui Zav Jerman</option>
                                    <option value="7">7. Siap Ajukan Visa</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="id_userstatus" class="onIDstatus">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <?php } ?>
    <!-- end modal edit kandidat -->


    <div class="modal fade" id="hapus" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="<?= base_url() ?>/hapus-kandidat" method="post">
                <?= csrf_field() ?>
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Ganti Status</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        AKUN ini akan di HAPUS<span class="text-danger fw-bold"> Yakin akan HAPUS akun ini?</span>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="id_hapususer" class="onIDhapus">
                        <button type="submit" class="btn btn-danger">Ya Hapus</button>
                    </div>
                </div>
            </form>
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
    <script>
        $(document).ready(function() {
            $('#kandidat').DataTable({
                responsive: true,
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'pdf'
                ],
            });
        })

        function ganti_status(id) {
            $(".onIDstatus").val(id);
            $("#gantistatus").modal('show');
        }

        function hapus(id) {
            $(".onIDhapus").val(id);
            $("#hapus").modal('show');
        }
        const swal = $('.swal').data('swal');
        if (swal) {
            Swal.fire({
                text: swal,
            })
        }
    </script>

    <script>
        setTimeout(function() {
            var alert = document.getElementById('alert');
            alert.style.display = 'none';
        }, 9000);
    </script>
</body>

</html>