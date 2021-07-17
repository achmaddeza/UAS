<?php
    //koneksi database
    include ('../db_connect.php');

    //Mengambil data dari form
    $id = $_POST['id'];
    $wilayah = $_POST['wilayah'];
    $positif = $_POST['positif'];
    $rawat = $_POST['rawat'];
    $sembuh = $_POST['sembuh'];
    $meninggal = $_POST['meninggal'];

    $query = mysqli_query($connection, "UPDATE data_covid SET wilayah='$wilayah',positif='$positif',rawat='$rawat',sembuh='$sembuh',meninggal='$meninggal' WHERE id='$id')";

    header("location:view.php");
?>
