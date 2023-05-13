<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AYL Center - Beauty & Spa</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>

    <?php
    // Memanggil topbar
    include ('../fh/header.php');
    ?>


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
            <a href="customer.php" class="navbar-brand ml-lg-3">
                <h1 class="m-0 text-primary"><span class="text-dark">AYL</span> Beauty Spa</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">
                    <a href="customer.php" class="nav-item nav-link active">Beranda</a>
                    <a href="treatments.php" class="nav-item nav-link">Layanan</a>
                    <a href="appointment.php" class="nav-item nav-link">Reservasi</a>
                    <a href="contact.php" class="nav-item nav-link">Kontak Kami</a>
                </div>
                <a href="../index.php" class="btn btn-primary d-none d-lg-block">Keluar</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid bg-jumbotron" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h3 class="text-white display-3 mb-4">Treatments</h3>
        </div>
    </div>
    <!-- Header End -->


    <!-- Service Start -->
    <div class="container-fluid px-0 py-5 my-5">
        <div class="row mx-0 justify-content-center text-center">
            <div class="col-lg-6">
                <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Our Service</h6>
                <h1>Spa & Beauty Services</h1>
            </div>
        </div>
        <div class="owl-carousel service-carousel">
            <div class="service-item position-relative">
                <img class="img-fluid" src="../img/service-1.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Body Massage</h4>
                    <p class="text-white px-3 mb-3">Perawatan tubuh dengan menggunakan bahan-bahan alami untuk menjadikan kulit tubuh menjadi lebih bersih, sehat dan bersinar.</p>
                    <div class="w-100 bg-white text-center p-4" >
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="../img/service-2.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Stone Therapy</h4>
                    <p class="text-white px-3 mb-3">Stone Theraphy merupakan terapi untuk menyerap energi positif dan mengeluarkan energi negatif dalam tubuh menggunakan batu kristal untuk menjaga keseimbangan jiwa raga dan ketenangan.</p>
                    <div class="w-100 bg-white text-center p-4" >
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="../img/service-3.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Facial Therapy</h4>
                    <p class="text-white px-3 mb-3">Perpaduan facial dan terapi herbal untuk kulit sensitif guna menyegarkan dan melembabkan kulit wajah. Sehingga menjadikan kulit wajah lebih cerah dan berseri.</p>
                    <div class="w-100 bg-white text-center p-4" >
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="../img/service-4.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Skin Care</h4>
                    <p class="text-white px-3 mb-3">AYL Beauty and Spa Mempunyai Produk skincare yang akan membuat kulit anda semakin cantik, sehat dan bersinar.</p>
                    <div class="w-100 bg-white text-center p-4" >
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="../img/service-5.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Stream Bath</h4>
                    <p class="text-white px-3 mb-3">Steam bath diyakini dapat menyehatkan tubuh dengan membuka poripori kulit sehingga dapat menyehatkan dan mempercantik tampilan kulit.</p>
                    <div class="w-100 bg-white text-center p-4" >
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="../img/service-6.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Face Masking</h4>
                    <p class="text-white px-3 mb-3">Perawatan masker wajah untuk membantu meningkatkan pembetukkan collagen dan menghaluskan permukaan kulit.</p>
                    <div class="w-100 bg-white text-center p-4" >
                    <a class="btn btn-primary" href="">Make Order</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <?php
    // Memanggil footer
    include ('../fh/footer.php');
    ?>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/counterup/counterup.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/tempusdominus/js/moment.min.js"></script>
    <script src="../lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="../js/jqBootstrapValidation.min.js"></script>
    <script src="../js/contact.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>