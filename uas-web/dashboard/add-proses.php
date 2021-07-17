<?php
    //koneksi database
    include '../db_connect.php';

    //Mengambil data dari form
    $wilayah = $_POST['wilayah'];
    $positif = $_POST['positif'];
    $rawat = $_POST['rawat'];
    $sembuh = $_POST['sembuh'];
    $meninggal = $_POST['meninggal'];

    //Menginput data ke database
    $query = "INSERT INTO data_covid (wilayah,positif,rawat,sembuh,meninggal) 
             VALUES('$wilayah','$positif','$rawat','$sembuh','$meninggal')";

    //Kondisi pengecekan data berhasil diinput atau tidak
    if($connection->query($query)){
        //Jika berhasil akan didirect ke dashboard
        header("location: index.php");
    }
    else{
        //pesan gagal input
        echo "Data Gagal Disimpan";
    }
?>