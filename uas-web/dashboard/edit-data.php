<?php
    include ('..db_connect.php');

    $id = $_GET['ID'];
    $query="SELECT FROM data_covid WHERE id = '$id'";
    $result = mysqli_connect($connection, $squery);
    $row = mysqli_fetch_array($result);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pemantauan | Tambah Data</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

</head>
<style>

      body{
        font-family: 'Roboto', sans-serif;
        background-color:#dfe6e9;
      }
  </style>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">Data Pemantauan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="add.php">Tambah Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view.php">Lihat Data</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Form Tambah Data -->
    <section id="form-add">
        <div class="container">
            <div class="row mt-5">
                <div class="col">
                    <div class="card">
                        <h5 class="card-header">Tambah Data</h5>
                        <div class="card-body">
                            <form method="POST" action="add-proses.php">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Wilayah</label>
                                    <select class="form-select" aria-label="Default select example" name="wilayah">
                                        <option selected>Pilih Wilayah</option>
                                        <option value="DKI Jakarta">DKI Jakarta</option>
                                        <option value="Banten">Banten</option>
                                        <option value="Jawa Barat">Jawa Barat</option>
                                        <option value="Jawa Tengah">Jawa Tengah</option>
                                        <option value="Jawa Timur">Jawa Timur</option>
                                        <option value="Bali">Bali</option>
                                        <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                                        <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                                        <option value="Kalimantan Barat">Kalimantan Barat</option>
                                        <option value="Kalimantan Timur">Kalimantan Timur</option>
                                        <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                                        <option value="Kalimantan Tengah">Sumatera Selatan</option>
                                        <option value="Kalimantan Tengah">Sumatera Barat</option>
                                        <option value="Kalimantan Tengah">Sumatera Utara</option>
                                        <option value="Kalimantan Tengah">Papua</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Terkonfirmasi Positif</label>
                                    <input type="text" class="form-control" id="positif" name="positif">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Dalam Perawatan</label>
                                    <input type="text" class="form-control" id="rawat" name="rawat">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Sembuh</label>
                                    <input type="text" class="form-control" id="sembuh" name="sembuh">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Meninggal</label>
                                    <input type="text" class="form-control" id="meninggal" name="meninggal">
                                </div>
                                <button type="submit" class="btn btn-primary form-control">Simpan Data</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Akhir Form Tambah Data -->







    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>