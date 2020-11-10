<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trafalgar Landing Page</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/main.css?v=2" />
    <!-- <link rel="stylesheet" href="css/main.css" /> -->
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white custom-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">C <span><img src="assets/icon.png" alt="">vidTest </span></a>
            <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <img src="./assets/bars.svg" width="25" alt="hamburger">
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./src/kasus.php">Kasus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Rumah Sakit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Checkup</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Masuk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Daftar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar ends -->
    <!-- jumbotron -->
    <div class="jumbotron bg-white">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6 col-lg-5 text-center text-md-left">
                    <h1 class="h1 font-weight-bold">Apa itu COVID-19?</h1>
                    <p class="lead text-secondary my-4">Pneumonia Coronavirus Disease 2019 atau COVID-19 adalah penyakit peradangan paru yang disebabkan oleh Severe Acute Respiratory Syndrome Coronavirus 2 (SARS-CoV-2). Gejala klinis yang muncul beragam, mulai dari seperti gejala flu biasa (batuk, pilek, nyeri tenggorok, nyeri otot, nyeri kepala) sampai yang berkomplikasi berat (pneumonia atau sepsis).</p>
                    <a href="#" class="btn btn-primary rounded-pill px-4" role="button">yuk self checkup!</a>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="jumbotron__img">
                        <img src="./assets/home.png" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jumbotron end-->
    <div class="container">
        <!-- card gejala covid -->
        <section>
            <h2 class="section-title">kenali gejalanya</h2>
            <span class="section-line"></span>
            <p class="text-secondary text-center w-75 mx-auto">Jangan Panik, Kenali gejalanya dan deteksi COVID-19 sejak dini. Hanya perlu jaga jarak, hindari jabat tangan dan bila sakit memakai masker, dan jaga kebersihan</p>
            <!-- card gejala -->
            <div class="row mt-5">
                <div class="col-md-5 col-lg-4">
                    <div class="card service-card">
                        <div class="service-card__img">
                            <img src="./assets/gejala_img/demam.png" alt="gejala_img">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Demam</h5>
                            <p class="card-text">Demam menunjukkan gejala awal COVID-19, demam biasanya mencapai suhu 38 derajat celcius keatas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="card service-card">
                        <div class="service-card__img">
                            <img src="./assets/gejala_img/batuk.png" alt="gejala_img">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Batuk Kering</h5>
                            <p class="card-text">Sering Batuk Berulang-ulang merupakan tanda infeksi di paru-paru, yang mungkin disebabkan COVID-19.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="card service-card">
                        <div class="service-card__img">
                            <img src="./assets/gejala_img/sakittenggorokan.png" alt="gejala_img">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Sakit Tenggorokan</h5>
                            <p class="card-text">Infeksi COVID-19 akan melalui jalur pernafasan sehingga mengakibatkan radang tenggorokan dan rasa nyeri.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="card service-card">
                        <div class="service-card__img">
                            <img src="./assets/gejala_img/sakitkepala.png" alt="gejala_img">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Sakit Kepala</h5>
                            <p class="card-text">Dengan adanya demam yang tinggi, COVID-19 seringkali diikuti dengan gejala sakit kepala.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="card service-card">
                        <div class="service-card__img">
                            <img src="./assets/gejala_img/lemas.png" alt="gejala_img">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Lemas</h5>
                            <p class="card-text">Infeksi COVID-19 yang telah menyebar ke seluruh tubuh akan menghabiskan energi yang banyak sehingga dapat mengakibatkan lemas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="card service-card">
                        <div class="service-card__img">
                            <img src="./assets/gejala_img/sesak.png" alt="gejala_img">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Sesak Nafas</h5>
                            <p class="card-text">Apabila COVID-19 berkembang dengan cepat dan besar di paru-paru, fungsi paru akan menurun sehingga terjadi sesak nafas.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card gejala ends -->
        </section>
        <!-- card gejala covid ends -->

        <!-- pencegahan section -->
        <section>
            <h2 class="section-title">Pencegahan COVID-19</h2>
            <span class="section-line"></span>
            <p class="text-secondary text-center w-75 mx-auto">Lindungi diri dan orang lain di sekitar Anda dengan mengetahui fakta-fakta terkait virus ini dan mengambil langkah pencegahan yang sesuai. Ikuti saran yang diberikan oleh badan kesehatan publik lokal Anda</p>
            <!-- card and image pencegahan section -->
            <div class="row justify-content-center mt-5">
                <div class="col-md-5 col-lg-4">
                    <div class="card pencegahan-covid-card">
                        <div class="pencegahan-covid-card__img">
                            <img src="./assets/pencegahan_img/cuci_tangan.png" alt="gejala_img">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Cuci Tangan</h5>
                            <p class="card-text">Cuci tangan sebelum dan sesudah melakukan aktifitas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="card pencegahan-covid-card">
                        <div class="pencegahan-covid-card__img">
                            <img src="./assets/pencegahan_img/sabun.png" alt="gejala_img">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Gunakan Sabun Antiseptic</h5>
                            <p class="card-text">Sabun Antiseptic bertujuan untuk membunuh kuman yang menempel pada tangan</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="card pencegahan-covid-card">
                        <div class="pencegahan-covid-card__img">
                            <img src="./assets/pencegahan_img/masker.png" alt="gejala_img">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Selalu Gunakan Masker</h5>
                            <p class="card-text">Gunakan masker untuk mencegah ataupun mengurangi droplet</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="card pencegahan-covid-card">
                        <div class="pencegahan-covid-card__img">
                            <img src="./assets/pencegahan_img/kerumunan.png" alt="gejala_img">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Hindari Kerumunan</h5>
                            <p class="card-text">Tujuannya untuk memutus penyebaran COVID-19 di kerumunan</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="card pencegahan-covid-card">
                        <div class="pencegahan-covid-card__img">
                            <img src="./assets/pencegahan_img/jabattangan.png" alt="gejala_img">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Hindari Kontak Langsung</h5>
                            <p class="card-text">Hindari jabat tangan dengan orang lain.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="card pencegahan-covid-card">
                        <div class="pencegahan-covid-card__img">
                            <img src="./assets/pencegahan_img/desin.png" alt="gejala_img">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Semprotkan Desinfektan</h5>
                            <p class="card-text">Bersihkan benda yang sering disentuh agar selalu steril dengan desinfektan.</p>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-6 col-lg-5">
                    <div class="jumbotron__img">
                        <img src="./assets/pencegahan_img/pencegahan.png" class="img-fluid" alt="" />
                    </div>
                </div> -->
            </div>
            <!-- card and image pencegahan section ends -->
        </section>
        <!-- pencegahan section ends -->
        <!-- blog section -->
        <section>
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6 col-lg-5">
                    <div class="feature-img">
                        <img src="./assets/banner/curva.png" class="img-fluid" alt="" />
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 text-center text-md-left">
                    <div class="fiture-detail">
                        <p class="h3 font-weight-bold">Jumlah Kasus Covid-19 di Indonesia</p>
                        <span class="feature-line"></span>
                        <p class="lead text-secondary text-justify">Di Indonesia, kasus terkonfirmasi positif COVID-19 pertama kali terdektesi pada Senin, 2 Maret 2020. Sejak itu, jumlah yang terkonfirmasi COVID-19 semakin bertambah dari hari ke hari.</p>
                        <p class="text-secondary">Cek grafik yang terjadi di Indonesia!</p>
                        <a href="#" class="btn btn-outline-primary px-4 py-2 font-weight-bold rounded-pill px-4" role="button">Cek Grafik</a>
                    </div>
                </div>

            </div>
        </section>
        <!-- blog section ends -->
        <!-- service section -->
        <section>
            <div class="row justify-content-between align-items-center my-5 flex-md-row-reverse text-center text-md-left">
                <div class="col-md-6 col-lg-5">
                    <div class="feature-img">
                        <img src="./assets/banner/rs.png" class="img-fluid" alt="" />
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 text-center text-md-left">
                    <div class="fiture-detail">
                        <p class="h3 font-weight-bold">Rumah Sakit Rujukan</p>
                        <span class="feature-line"></span>
                        <p class="lead text-secondary text-justify">Rumah sakit rujukan ini dapat membantu masyarakat dalam menemukan rumah sakit yang telah terverifikasi Kementrian Kesehatan dalam menangani kasus COVID-19</p>
                        <p class="text-secondary">Cek Rumah Sakit Rujukan terdekat anda!!</p>
                        <a href="#" class="btn btn-outline-primary px-4 py-2 font-weight-bold rounded-pill px-4" role="button">Cek Rumah Sakit</a>
                    </div>
                </div>

            </div>
        </section>
        <!-- service section ends -->
        <!-- section berita -->
        <section>
            <h2 class="section-title">kenali gejalanya</h2>
            <span class="section-line"></span>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card blog-card" style="width: 18rem;">
                        <img class="card-img-top" src="./assets/blog-1.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-link font-weight-bold">Selengkapnya
                                <img src="./assets/arrow-next.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card blog-card" style="width: 18rem;">
                        <img class="card-img-top" src="./assets/blog-2.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-link font-weight-bold">Selengkapnya
                                <img src="./assets/arrow-next.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card blog-card" style="width: 18rem;">
                        <img class="card-img-top" src="./assets/blog-3.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-link font-weight-bold">Selengkapnya
                                <img src="./assets/arrow-next.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center my-4">
                <a href="#" class="btn btn-outline-primary px-4 py-2 font-weight-bold rounded-pill px-4" role="button">Baca Selengkapnya</a>
            </div>
        </section>
        <!-- section berita ends -->
    </div>
    <!-- footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <!-- footer about -->
                    <div class="footer-about">
                        <p class="footer-title"></p>
                        <p>HOTLINE COVID-19 KEMENKES RI</p>
                        <p>Tlp. 199 ext 9</p>
                        <p>WEBSITE MITIGASI COVID-19 UMY</p>
                        <a class="text-white" href="">Covid-19.umy.ac.id</a>
                    </div>
                </div>
                <div class="col-md-4 col-md-4">
                    <p class="footer-title">Kontak</p>
                    <table>
                        <tr>
                            <td class="footer-about">Telp</td>
                            <td class="footer-about">: +62 274 387656 (hunting)</td>
                        </tr>
                        <tr>
                            <td class="footer-about">Faks</td>
                            <td class="footer-about">: +62 274 387646</td>
                        </tr>
                        <tr>
                            <td class="footer-about">Admisi</td>
                            <td class="footer-about">: +62 274 387649</td>
                        </tr>
                        <tr>
                            <td class="footer-about"></td>
                            <td class="footer-about"> +62 274 387656 Ext. 199 & 200 (hunting)</td>
                        </tr>
                        <tr>
                            <td class="footer-about">Humas</td>
                            <td class="footer-about">: +62 274 387656 Ext. 115</td>
                        </tr>
                        <tr>
                            <td class="footer-about">Surel</td>
                            <td class="footer-about">: bhp@umy.ac.id</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-4 col-md-4">
                    <p class="footer-title">alamat</p>
                    <p class="footer-about">Kampus Terpadu UMY</p>
                    <p class="footer-about">Jl Brawijaya</p>
                    <p class="footer-about">Kasihan, Bantul</p>
                    <p class="footer-about">Yogyakarta 55183</p>
                    <p class="footer-about">Lihat di Peta Google</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 text-primary">Copyright &copy;<script>
            document.write(new Date().getFullYear());
        </script> Smatecin All rights reserved
    </div>
    <!-- Copyright -->
    <!-- footer ends -->
    <!-- Javascript Tags -->
    <script src="./js/jquery-3.5.1.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/scripts.js"></script>
</body>

</html>