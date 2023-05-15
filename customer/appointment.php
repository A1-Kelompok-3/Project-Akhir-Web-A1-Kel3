<?php 
session_start();

if (isset($_SESSION['id_user']) && isset($_SESSION['nama'])) {
 ?>

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

    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    

    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->

</head>

<body>

    <?php 
    if (isset($_GET['pesan'])) {
        $pesan = $_GET['pesan'];
        echo "<script>var pesan = '$pesan';
                    swal({
                      title: 'Berhasil',
                      text: Reservasi Berhasil Ditambahkan,
                      icon: 'success',
                      button: 'OK'
                    }).then(function() {
                      window.location.href = 'appointment.php';
                    });
              </script>";
      }
    ?>

    <!-- Topbar Start -->
    <div class="container-fluid bg-light d-none d-lg-block">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <small><i class="fa fa-phone-alt mr-2"></i>+012 345 6789</small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-envelope mr-2"></i>AYLBeautySpa@gmail.com</small>
                </div>
            </div>
            <div class="col-lg-6 text-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-primary px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-primary px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-primary px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-primary px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-primary pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->



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
                <divclass="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <a><?=$_SESSION['nama']?></a>   
                </div>
                <a href="../php/keluar.php" class="btn btn-primary d-none d-lg-block">Keluar</a>
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
                </div>
            </div>
            <div class="row justify-content-center bg-appointment mx-0">
                <div class="col-lg-6 py-5">
                    <div class="p-5 my-5" style="background: rgba(33, 30, 28, 0.7);">
                        <h1 class="text-white text-center mb-4">Buat Reservasi</h1>
                        <form method="POST" action="proses_reservasi.php" enctype="multipart/form-data" >
                            <div class="form-row">
                                <div class="col-sm-6">
                                    <div class="form-group"> 
                                        <div class="form-control bg-transparent p-4">
                                        <p id="nama" name="nama" style="position: relative; top: -10px;" ><?=$_SESSION['nama']?> </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="tel" class="form-control bg-transparent p-4" placeholder="Your Number" id= "no_hp" name="no_hp" autofocus="" autocomplete="off" required="required" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="date" id="date" data-target-input="nearest">
                                            <input type="date"  min="<?php echo date('Y-m-d'); ?>" class="form-control bg-transparent p-4 datetimepicker-input" placeholder="Select Date" id= "tanggal" name="tanggal" data-target="#date" data-toggle="datetimepicker"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="time" id="time" data-target-input="nearest">
                                            <input type="time" min="09:00 AM" max="19:59 PM" class="form-control bg-transparent p-4 datetimepicker-input" placeholder="Select Time" data-target="#time" id= "waktu" name="waktu" autofocus="" data-toggle="datetimepicker"/>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <select class="custom-select bg-transparent px-4" style="height: 47px;" name="treatment" autofocus="">
                                            <option selected>Pilih Layanan</option>
                                            <?php
                                                include ('../php/conn.php');
                                                // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
                                                $query = "SELECT * FROM layanan ORDER BY id ASC";
                                                $result = mysqli_query($koneksi, $query);
                                                //mengecek apakah ada error ketika menjalankan query
                                                if(!$result){
                                                    die ("Query Error: ".mysqli_error($koneksi).
                                                    " - ".mysqli_error($koneksi));
                                                }
                                                while($row = mysqli_fetch_assoc($result))
                                                {
                                                ?>
                                            <option value="<?php echo $row['treatment']; ?>"><?php echo $row['treatment']; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                <button class="btn btn-primary btn-block" type="submit" name= "submit" style="height: 47px;" onclick="reservasi()">Buat Reservasi</button>
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
                            <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Senin – Jumat : 9:00 - 18:00</li>
                            <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Sabtu : 9:30 - 18:00</li>
                            <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Minggu : Tutup</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Open Hours End -->


     <!-- Footer Start -->
     <div class="container-fluid bg-dark text-light border-top py-4" style="border-color: rgba(256, 256, 256, .15) !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                    <p class="m-0 text-white">&copy; <a href="#">AYLBeautySpa</a>. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


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
<?php }else {
	header("Location: ../index.php");
	exit;
} ?>