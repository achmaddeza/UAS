<?php
    // Mengaktifkan session php
    session_start();

    // Menghubungkan database
    include 'db_connect.php';

    // mengambil data dari form
    $username=$_POST['username'];
    $password=$_POST['password'];

    $data = mysqli_query($connection, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");

    $cek = mysqli_num_rows($data);

    if($cek>0){
        $_SESSION['username']=$username;
        $_SESSION['status']="Login";

        header("location:dashboard/index.php");
    }
    else {
        header("location:index.php?pesan=gagal");
    }
?>