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

    <!-- data tables -->
    <link rel="stylesheet" type="text/css" href="assets/datatables/datatables.min.css">
    <script type="text/javascript" src="assets/datatables/datatables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
    
    <!-- data tables -->
    <link rel="stylesheet" type="text/css" href="assets/datatables/datatables.min.css">
     <script type="text/javascript" src="assets/datatables/datatables.min.js"></script>

     <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"> -->
     <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
     <style type="text/css">
    
    table {
    border: solid 1px #DDEEEE;
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    margin: 10px auto 100px auto;

    }
    table thead th {
        background-color: #DDEFEF;
        border: solid 1px #DDEEEE;
        color: #336B6B;
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px #fff;
        text-decoration: none;
    }
    table tbody td {
        border: solid 1px #DDEEEE;
        color: #333;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
    }

</style>
    </head>

<body>

    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
            <a href="admin.php" class="navbar-brand ml-lg-3">
                <h1 class="m-0 text-primary"><span class="text-dark">AYL</span> Beauty Spa</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">
                    <a href="admin.php" class="nav-item nav-link active">Beranda</a>
                    <a href="crud.php" class="nav-item nav-link">Layanan</a>
                    <a href="show.php" class="nav-item nav-link">Reservasi</a>
                </div>
                <divclass="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <a><?=$_SESSION['nama']?></a>   
                </div>
                <a href="../index.php" class="btn btn-primary d-none d-lg-block">Keluar</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid bg-jumbotron" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h3 class="text-white display-3 mb-4">Riwayat Reservasi</h3>
            <div class="d-inline-flex align-items-center text-white">
                
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Menampilkan Tabel Reservasi Start -->
    <br>
    <div class="container">
        <table id='example' style="margin bottom: 100px">
        <thead>
            <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>No HP</th>
            <th>Tanggal</th>
            <th>Waktu</th>
            <th>Treatment</th>
            </tr>
        </thead>
        <tbody>
        <?php
        include('../php/conn.php'); 
        // jalankan query untuk menampilkan semua data diurutkan berdasarkan id
        // $koneksi = mysqli_connect($host,$user,$pass,$nama_db)
        $query = "SELECT * FROM riwayat ORDER BY id ASC";
        $result = mysqli_query($koneksi, $query);
        //mengecek apakah ada error ketika menjalankan query
        if(!$result){
            die ("Query Error: ".mysqli_error($koneksi).
            " - ".mysqli_error($koneksi));
        }

        //buat perulangan untuk element tabel dari data reservasi
        $no = 1; //variabel untuk membuat nomor urut
        // hasil query akan disimpan dalam variabel $data dalam bentuk array
        // kemudian dicetak dengan perulangan while
        while($row = mysqli_fetch_assoc($result))
        {
        ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['no_hp']; ?></td>
            <td><?php echo $row['tanggal']; ?></td>
            <td><?php echo $row['waktu']; ?></td>
            <td><?php echo $row['treatment']; ?></td>
        </tr>
            
        <?php
            $no++; //untuk nomor urut terus bertambah 1
        }
        ?>
        </tbody>
        </table>
    </div>
    <!-- Menampilkan Tabel Reservasi END -->




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

    <script>
        $(document).ready(function () {
    $('#example').DataTable();
});
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

</body>

</html>
<?php }else {
	header("Location: ../index.php");
	exit;
} ?>