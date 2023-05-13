<?php
session_start();
include "conn.php";

if(isset($_POST["register"])){
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = "INSERT INTO user (email, nama, password, role) VALUES ('$email', '$nama', '$password', 'customer')";

    if(mysqli_query($koneksi, $query)){
        header("Location: ../index.php?success=Akun Berhasil Terdaftar");
    } else {
        echo "<script>
        alert('Gagal terdaftar');
        document.location.href = '../index.php';</script>";
    }
    
}    
?>






