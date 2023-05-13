<?php
// Koneksi ke database
include('../php/conn.php');

    //mengambil id yang ingin dihapus
    $kode_reservasi = $_GET["kode_reservasi"];

    // Memindahkan data yang dihapus ke tabel riwayat

    $result = mysqli_query($koneksi, "SELECT * FROM reservasi WHERE kode_reservasi=$kode_reservasi");
    $row = mysqli_fetch_assoc($result);
    $tanggal = $row['tanggal'];
    $waktu = $row['waktu'];
    $nama = $row['nama'];
    $no_hp = $row['no_hp'];
    $treatment = $row['treatment'];
    $query = "INSERT INTO riwayat (tanggal, waktu, nama, no_hp, treatment) VALUES ('$tanggal', '$waktu', '$nama', '$no_hp', '$treatment')";
    $hasil_query = mysqli_query($koneksi, $query);
    mysqli_query($koneksi, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
        die ("Data gagal ditambahkan ke Riwayat".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
      } else {
        echo "<script>alert('data berhasil ditambahkan ke dalam Riwayat');window.location='crud_reservasi.php';</script>";
      }

    // Menghapus data dari tabel reservasi
    $sql_reservasi = "DELETE FROM reservasi WHERE kode_reservasi = $kode_reservasi";
    $koneksi->query($sql_reservasi);

    // Kembali ke halaman reservasi
    // header("Location: crud_reservasi.php");
    // exit;

    ?>