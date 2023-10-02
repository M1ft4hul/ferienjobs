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
                    <h1>Syarat dan Ketentuan</h1>
                    <!-- <h2>Adalah dokumen persyaratan bagi kandidat yang akan mengikuti Ferienjobs.</h2> -->
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
                    <h2>Syarat dan Ketentuan</h2>
                </div>
                <div class="row content">
                    <p>Syarat dan Ketentuan<br>
                        Selamat datang di Ferienjobs!</p>

                    <p>Syarat dan ketentuan berikut menjelaskan peraturan dan ketentuan penggunaan Website PT CVGEN SMART CONSULTANT dengan alamat https://ferienjobs.cv-gen.com/.</p>

                    <p>Dengan mengakses website ini, kami menganggap Anda telah menyetujui syarat dan ketentuan ini. Jangan lanjutkan penggunaan Ferienjobs jika Anda menolak untuk menyetujui semua syarat dan ketentuan yang tercantum di halaman ini.</p>

                    <p>Cookie:<br>
                        Website ini menggunakan cookie untuk mempersonalisasi pengalaman online Anda. Dengan mengakses Ferienjobs, Anda menyetujui penggunaan cookie yang diperlukan.</p>

                    <p>Cookie merupakan file teks yang ditempatkan pada hard disk Anda oleh server halaman web. Cookie tidak dapat digunakan untuk menjalankan program atau mengirimkan virus ke komputer Anda. Cookie yang diberikan telah disesuaikan untuk Anda dan hanya dapat dibaca oleh web server pada domain yang mengirimkan cookie tersebut kepada Anda.</p>

                    <p>Kami dapat menggunakan cookie untuk mengumpulkan, menyimpan, dan melacak informasi untuk keperluan statistik dan pemasaran untuk mengoperasikan website kami. Ada beberapa Cookie wajib yang diperlukan untuk pengoperasian website kami. Cookie ini tidak memerlukan persetujuan Anda karena akan selalu aktif. Perlu diketahui bahwa dengan menyetujui Cookie wajib, Anda juga menyetujui Cookie pihak ketiga, yang mungkin digunakan melalui layanan yang disediakan oleh pihak ketiga jika Anda menggunakan layanan tersebut di website kami, misalnya, jendela tampilan video yang disediakan oleh pihak ketiga dan terintegrasi dengan website kami.</p>

                    <p>Lisensi:<br>
                        Kecuali dinyatakan lain, PT CVGEN SMART CONSULTANT dan/atau pemberi lisensinya memiliki hak kekayaan intelektual atas semua materi di Ferienjobs. Semua hak kekayaan intelektual dilindungi undang-undang. Anda dapat mengaksesnya dari Ferienjobs untuk penggunaan pribadi Anda sendiri dengan batasan yang diatur dalam syarat dan ketentuan ini.</p>

                    <p>Anda dilarang untuk:</p>

                    <p>Menyalin atau menerbitkan ulang materi dari Ferienjobs<br>
                        Menjual, menyewakan, atau mensublisensikan materi dari Ferienjobs<br>
                        Memproduksi ulang, menggandakan, atau menyalin materi dari Ferienjobs<br>
                        Mendistribusikan ulang konten dari Ferienjobs<br>
                        Perjanjian ini akan mulai berlaku pada tanggal perjanjian ini.</p>

                    <p>Beberapa bagian website ini menawarkan kesempatan bagi pengguna untuk memposting serta bertukar pendapat dan informasi di area website tertentu. PT CVGEN SMART CONSULTANT tidak akan memfilter, mengedit, memublikasikan, atau meninjau Komentar di hadapan pengguna di website. Komentar tidak mencerminkan pandangan dan pendapat PT CVGEN SMART CONSULTANT, agennya, dan/atau afiliasinya. Komentar mencerminkan pandangan dan pendapat individu yang memposting pandangan dan pendapatnya. Selama diizinkan oleh undang-undang yang berlaku, PT CVGEN SMART CONSULTANT tidak akan bertanggung jawab atas Komentar atau kewajiban, kerugian, atau pengeluaran yang disebabkan dan/atau ditanggung sebagai akibat dari penggunaan dan/atau penempatan dan/atau penayangan Komentar di website ini.</p>

                    <p>PT CVGEN SMART CONSULTANT berhak memantau semua Komentar dan menghapus Komentar apa pun yang dianggap tidak pantas, menyinggung, atau menyebabkan pelanggaran terhadap Syarat dan Ketentuan ini.</p>

                    <p>Anda menjamin dan menyatakan bahwa:</p>

                    <p>Anda berhak memposting Komentar di website kami serta memiliki semua lisensi dan persetujuan yang diperlukan untuk melakukannya;<br>
                        Komentar tidak melanggar hak kekayaan intelektual apa pun, termasuk tetapi tidak terbatas pada, hak cipta, paten, atau merek dagang pihak ketiga mana pun;<br>
                        Komentar tidak mengandung materi yang bersifat memfitnah, mencemarkan nama baik, menyinggung, tidak senonoh, atau melanggar hukum, yang merupakan pelanggaran privasi.<br>
                        Komentar tidak akan digunakan untuk membujuk atau mempromosikan bisnis atau kebiasaan atau memperkenalkan kegiatan komersial atau kegiatan yang melanggar hukum.<br>
                        Dengan ini Anda memberikan lisensi non-eksklusif kepada PT CVGEN SMART CONSULTANT untuk menggunakan, memproduksi ulang, mengedit, dan mengizinkan orang lain untuk menggunakan, memproduksi ulang, dan mengedit Komentar Anda dalam segala bentuk, format, atau media.</p>

                    <p>Membuat hyperlink yang mengarah ke Konten kami:<br>
                        Organisasi berikut dapat membuat tautan menuju Website kami tanpa persetujuan tertulis sebelumnya:</p>

                    <p>Lembaga pemerintah;<br>
                        Mesin pencari;<br>
                        Kantor berita;<br>
                        Distributor direktori online dapat membuat tautan menuju Website kami dengan cara yang sama seperti membuat tautan ke Website bisnis terdaftar lainnya; dan<br>
                        Bisnis Terakreditasi di Seluruh Sistem kecuali meminta organisasi nirlaba, pusat perbelanjaan amal, dan grup penggalangan dana amal yang mungkin tidak membuat hyperlink menuju Website kami.<br>
                        Organisasi-organisasi ini dapat menautkan ke halaman beranda, ke publikasi, atau ke informasi Website kami lainnya selama tautan tersebut: (a) tidak menipu dengan cara apa pun; (b) tidak menyiratkan secara keliru adanya hubungan sponsor, rekomendasi, atau persetujuan dari pihak yang menautkan beserta produk dan/atau layanannya; serta (c) sesuai dengan konteks website pihak yang menautkan.</p>

                    <p>Kami dapat mempertimbangkan dan menyetujui permintaan penautan lain dari jenis organisasi berikut:</p>

                    <p>sumber informasi bisnis dan/atau konsumen yang sudah umum dikenal;<br>
                        website komunitas dot.com;<br>
                        asosiasi atau kelompok lain yang mewakili badan amal;<br>
                        distributor direktori online;<br>
                        portal internet;<br>
                        firma akuntansi, hukum, dan konsultan; dan<br>
                        lembaga pendidikan dan asosiasi dagang.<br>
                        Kami akan menyetujui permintaan penautan dari organisasi-organisasi tersebut jika kami memutuskan bahwa: (a) tautan tersebut tidak akan membuat kami terlihat merugikan kami sendiri atau bisnis terakreditasi kami; (b) organisasi tidak memiliki catatan negatif apa pun dengan kami; (c) keuntungan bagi kami dari keberadaan hyperlink mengkompensasi tidak adanya PT CVGEN SMART CONSULTANT; dan (d) tautan tersebut dalam konteks informasi sumber daya umum.</p>

                    <p>Organisasi-organisasi ini dapat menautkan ke halaman beranda kami selama tautan tersebut: (a) tidak menipu dengan cara apa pun; (b) tidak menyiratkan secara keliru adanya hubungan sponsor, rekomendasi, atau persetujuan dari pihak yang menautkan beserta produk dan/atau layanannya; dan (c) sesuai dengan konteks website pihak yang menautkan.</p>

                    <p>Jika Anda merupakan salah satu organisasi yang tercantum dalam paragraf 2 di atas dan tertarik untuk membuat tautan ke website kami, Anda harus memberitahu kami dengan mengirimkan email ke PT CVGEN SMART CONSULTANT. Harap cantumkan nama Anda, nama organisasi Anda, informasi kontak dan URL website Anda, daftar URL apa pun yang akan memuat tautan ke Website kami, serta daftar URL di website kami yang ingin Anda tautkan. Silakan tunggu tanggapan dari kami selama 2-3 minggu.</p>

                    <p>Organisasi yang telah disetujui dapat membuat hyperlink menuju Website kami seperti berikut:</p>

                    <p>Dengan menggunakan nama perusahaan kami; atau<br>
                        Dengan menggunakan Uniform Resource Locator yang ditautkan; atau<br>
                        Dengan menggunakan deskripsi lain dari Website kami yang ditautkan yang masuk akal dalam konteks dan format konten di website pihak yang menautkan.<br>
                        Tidak ada penggunaan logo PT CVGEN SMART CONSULTANT atau karya seni lainnya yang diizinkan untuk menautkan perjanjian lisensi merek dagang.</p>

                    <p>Tanggung jawab atas Konten:<br>
                        Kami tidak akan bertanggung jawab atas konten yang muncul di Website Anda. Anda setuju untuk melindungi dan membela kami terhadap semua klaim yang diajukan atas Website Anda. Tidak ada tautan yang muncul di Website mana pun yang dapat dianggap sebagai memfitnah, cabul, atau kriminal, atau yang menyalahi, atau melanggar, atau mendukung pelanggaran lain terhadap hak pihak ketiga.</p>

                    <p>Pernyataan Kepemilikan Hak:<br>
                        Kami berhak meminta Anda menghapus semua tautan atau tautan tertentu yang menuju ke Website kami. Anda setuju untuk segera menghapus semua tautan ke Website kami sesuai permintaan. Kami juga berhak mengubah syarat ketentuan ini dan kebijakan penautannya kapan saja. Dengan terus menautkan ke Website kami, Anda setuju untuk terikat dan mematuhi syarat dan ketentuan penautan ini.</p>
                    <p>Kebijakan Privasi:<br>
                        Semua data profil dan privasi yang Anda berikan, semata-mata digunakan untuk bahan administrasi program ferienjobs. Setelah kegiatan berakhir, seluruh data Anda akan dihapus.</p>

                    <p>Penghapusan tautan dari website kami:<br>
                        Jika Anda menemukan tautan di Website kami yang bersifat menyinggung karena alasan apa pun, Anda bebas menghubungi dan memberi tahu kami kapan saja. Kami akan mempertimbangkan permintaan untuk menghapus tautan, tetapi kami tidak berkewajiban untuk menanggapi Anda secara langsung.</p>


                    <p>Penolakan:<br>
                        Sejauh diizinkan oleh undang-undang yang berlaku, kami mengecualikan semua representasi, jaminan, dan ketentuan yang berkaitan dengan website kami dan penggunaan website ini. Tidak ada bagian dari penolakan ini yang akan:</p>

                    <p>membatasi atau mengecualikan tanggung jawab kami atau Anda terhadap kematian atau cedera pribadi;<br>
                        membatasi atau mengecualikan tanggung jawab kami atau Anda terhadap penipuan atau pemberian keterangan yang tidak benar;<br>
                        membatasi tanggung jawab kami atau Anda dengan cara apa pun yang tidak diizinkan oleh undang-undang yang berlaku; atau<br>
                        mengecualikan tanggung jawab kami atau Anda yang tidak dapat dikecualikan berdasarkan undang-undang yang berlaku.<br>
                        Batasan dan pengecualian tanggung jawab yang diatur dalam Bagian ini dan bagian lain dalam penolakan ini: (a) tunduk pada paragraf sebelumnya; dan (b) mengatur semua kewajiban yang timbul di bawah penolakan, termasuk kewajiban yang timbul dalam kontrak, dalam gugatan, dan untuk pelanggaran kewajiban hukum.</p>

                    <p>Selama website dan informasi serta layanan di website disediakan secara gratis, kami tidak akan bertanggung jawab atas kerugian atau kerusakan apa pun.</p>
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