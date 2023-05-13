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
            <h3 class="text-white display-3 mb-4">Reservasi</h3>
            <div class="d-inline-flex align-items-center text-white">
                
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Appointment Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row mx-0 justify-content-center text-center">
                <div class="col-lg-6">
                    <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Reservasi</h6>
                    <h1 class="mb-5">Buat Reservasi</h1>
                </div>
            </div>
            <div class="row justify-content-center bg-appointment mx-0">
                <div class="col-lg-6 py-5">
                    <div class="p-5 my-5" style="background: rgba(33, 30, 28, 0.7);">
                        <h1 class="text-white text-center mb-4">Buat Reservasi</h1>
                        <form method="POST" action="proses_reservasi.php" enctype="multipart/form-data" >
                        <section class="base">
                            
                            <div class="form-row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control bg-transparent p-4" placeholder="Your Name" id= "nama" name="nama" autofocus="" required="required" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="tel" class="form-control bg-transparent p-4" placeholder="Your Number" id= "no_hp" name="no_hp" autofocus="" required="required" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="date" id="date" data-target-input="nearest">
                                            <input type="date" class="form-control bg-transparent p-4 datetimepicker-input" placeholder="Select Date" id= "tanggal" name="tanggal" autofocus="" data-target="#date" data-toggle="datetimepicker"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="time" id="time" data-target-input="nearest">
                                            <input type="time" class="form-control bg-transparent p-4 datetimepicker-input" placeholder="Select Time" data-target="#time" id= "waktu" name="waktu" autofocus="" data-toggle="datetimepicker"/>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <select class="custom-select bg-transparent px-4" style="height: 47px;" name="treatment" autofocus="">
                                            <option selected>Select Treatment</option>
                                            <option value="Body Massage">Body Massage</option>
                                            <option value="Stone Therapy">Stone Therapy</option>
                                            <option value="Facial Therapy">Facial Therapy</option>
                                            <option value="Skincare">Skincare</option>
                                            <option value="Stream Bath">Stream Bath</option>
                                            <option value="Face Masking">Face Masking</option>
                                            <option value="Facial Treatment">Facial Treatment</option>
                                            <option value="Cellulite Treatment">Cellulite Treatment</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <button class="btn btn-primary btn-block" type="submit" name= "submit" style="height: 47px;" onclick="return confirm('Apakah Anda sudah yakin dengan Reservasi ini?')">Make Appointment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->


    <!-- Open Hours Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="../img/opening.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="hours-text bg-light p-4 p-lg-5 my-lg-5">
                        <h6 class="d-inline-block text-white text-uppercase bg-primary py-1 px-2">Jam Kerja</h6>
                        <h1 class="mb-4">Best Relax And Spa</h1>
                        <p>Temukan waktu yang tepat untuk bersantai dan meremajakan diri dengan jadwal spa kami yang fleksibel</p>
                        <ul class="list-inline">
                            <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Senin – Jumat : 9:00 - 20:00</li>
                            <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Sabtu : 9:30 AM - 6:00 PM</li>
                            <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Minggu : Tutup</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Open Hours End -->


    <?php
    // Memanggil footer
    include ('../fh/footer.php');
    ?>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="../js/jqBootstrapValidation.min.js"></script>
    <script src="../js/contact.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>