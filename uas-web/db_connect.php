<?php
    $connection = mysqli_connect("localhost","root","","db_uas");

    // cek database
    if(mysqli_connect_errno()){
        echo "koneksi database gagal : " . mysqli_connect_error();
    }
?>

