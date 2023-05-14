<?php
session_start();
if (isset($_SESSION['nama'])) {
// memanggil file koneksi.php untuk melakukan koneksi database
    include('../php/conn.php'); 

      // membuat variabel untuk menampung data dari form
      if (isset($_POST['submit'])) {
        // Mengambil data dari form input
        $nama = $_SESSION['nama'];
        $no_hp = $_POST['no_hp'];
        $tanggal = $_POST['tanggal'];
        $waktu = $_POST['waktu'];
        $treatment = $_POST['treatment'];

        // Query untuk insert data ke tabel reservasi
        $query = "INSERT INTO reservasi (nama, no_hp, tanggal, waktu, treatment) VALUES ('$nama', '$no_hp', '$tanggal', '$waktu', '$treatment')";
        $hasil_query = mysqli_query($koneksi, $query);

        //periksa query, apakah ada kesalahan
        if(!$hasil_query) {
          die ("Reservasi gagal ditambahkan".mysqli_errno($koneksi).
          " - ".mysqli_error($koneksi));
        } else {
          echo "<script>alert('Reservasi berhasil ditambahkan.');window.location='appointment.php';</script>";
        }
      }

      // Menutup koneksi database
      mysqli_close($koneksi);
    }
?>