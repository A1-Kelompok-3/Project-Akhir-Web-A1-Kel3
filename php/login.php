<?php 
session_start();

include "conn.php";

if(isset($_POST["login"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $role = $_POST["role"];



    $query = "SELECT * FROM user WHERE email='$email' AND password='$password' AND role='$role'";
    $result = mysqli_query($koneksi, $query);

    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        $_SESSION["id_user"] = $row["id_user"];
        $_SESSION["nama"] = $row["nama"];
        $_SESSION["email"] = $row["email"];
        $_SESSION["role"] = $row["role"];

        switch($_SESSION["role"]){
            case "admin":
                header("Location: ../admin/admin.php");
                break;
            case "beautician":
                header("Location: ../beatucian/beatucian.php");
                break;
            case "customer":
                header("Location: ../customer/customer.php");
                break;
        }
    }else {
        // echo "<script>
        //     alert('Email atau password salah');
        //     document.location.href = '../index.php';</script>";
        header("Location: ../index.php?error=Email atau Password Salah");
	    exit;
}
}
