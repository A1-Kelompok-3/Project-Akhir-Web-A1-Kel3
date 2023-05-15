<?php
include('../php/conn.php');
$kode_reservasi = $_GET["kode_reservasi"];
//mengambil id yang ingin dihapus

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM reservasi WHERE kode_reservasi='$kode_reservasi' ";
    $hasil_query = mysqli_query($koneksi, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data ".mysqli_errno($koneksi).
       " - ".mysqli_error($koneksi));
    } else {
      header("location: crud_reservasi.php?pesan=Data Berhasil Di Hapus");
    }