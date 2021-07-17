<?php
    //koneksi database
    include ('../db_connect.php');

    //ambil id
    $id = $_GET['id'];

    //query database untuk dihapus
    $query = "DELETE FROM data_covid WHERE id = '$id'";

    //cek berhasil hapus data atau tidak
    if($connection->query($query)){
        //direct ke halaman view
        header("location:view.php");
    }
    else{
        //pesan gagal
        echo "Data Gagal Dihapus!";
    }
?>