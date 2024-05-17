<?php

include('header.php');
include('surah.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/hafalan.css">
</head>

<body>
    <?php
    $berkas = "json/hafalan.json";
    $dataJson = file_get_contents($berkas);
    $dataHafalan = json_decode($dataJson, true);


    ?>

    <div class="container-fluid  rounded-3">
        <form action="" method="POST">
            <div class="wrapper-form w-100">
                <div class="bungkus col w-50 p-sm-2 bg-success text-white">
                    <h1 class="text-center my-3">HAFALAN</h1>
                    <hr class="w-50 mx-auto" style="height: 7px; color: rgb(232, 248, 10);">
                    <div class="row d-flex justify-content-center my-4">
                        <label for="nama" class="w-25 fs-5 mt-1">Nama</label>
                        <input type="text" class="form-control w-50" id="nama" name="nama" placeholder="masukkan nama" required>
                    </div>
                    <div class="row hAwal d-flex justify-content-center my-4">
                        <label for="halaman1" class="w-25 fs-5 mt-1">Dari halaman</label>
                        <input type="number" class="form-control w-50" id="halaman1" name="halaman1"
                            placeholder="masukkan halaman awal" max="604" required>
                    </div>
                    <div class="row d-flex justify-content-center my-4">
                        <label for="halaman2" class="w-25 fs-5 mt-1">Sampai halaman</label>
                        <input type="number" class="form-control w-50" id="halaman2" name="halaman2"
                            placeholder="masukkan halaman akhir" required>
                    </div>
                    <div class="row d-flex justify-content-center my-4">
                        <label for="surah1" class="w-25 fs-5 mt-1">Dari Surah</label>
                        <select name="surah1" id="surah1" class="form-select w-50" required>
                            <?php
                            for ($i = 0; $i < count($surah); $i++) {
                                echo "<option value=" . $surah[$i] . ">" . $surah[$i] . "</option>";
                            }

                            ?>
                        </select>
                    </div>
                    <div class="row d-flex justify-content-center my-4">
                        <label for="surah2" class="w-25 fs-5 mt-1">Sampai Surah</label>
                        <select name="surah2" id="surah2" class="form-select w-50" required>
                            <?php
                            for ($i = 0; $i < count($surah); $i++) {
                                echo "<option value=" . $surah[$i] . ">" . $surah[$i] . "</option>";
                            }

                            ?>
                        </select>
                    </div>
                    <div class="row d-flex justify-content-center my-4">
                        <label for="tanggal" class="w-25 fs-5 mt-1">Tanggal</label>
                        <input type="date" class="form-control w-50" id="tanggal" name="tanggal"
                            placeholder="yyyy/mm/dd">
                    </div>
                    <div class="row justify-content-center mb-4">
                        <button class="btn btn-primary w-75 btn-submit" name="submit">SUBMIT</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <table class="table table-bordered table-striped w-50 mx-auto my-lg-5" border="3">
        <thead class="text-center table table-bordered" border="3">
            <th>Nama</th>
            <th>Dari halaman</th>
            <th>Sampai halaman</th>
            <th>Dari surah</th>
            <th>Sampai surah</th>
            <th>Tanggal</th>
        </thead>
        <tbody border="3">

            <?php

            if (isset($_POST['submit'])) {
                $nama = $_POST['nama'];
                $halaman1 = $_POST['halaman1'];
                $halaman2 = $_POST['halaman2'];
                $surah1 = $_POST['surah1'];
                $surah2 = $_POST['surah2'];
                $tanggal = $_POST['tanggal'];

                

                $dataHafalan[] = [
                    "nama" => $nama,
                    "halaman1" => $halaman1,
                    "halaman2" => $halaman2,
                    "surah1" => $surah1,
                    "surah2" => $surah2,
                    "tanggal" => $tanggal
                ];

                // $dataJson = json_encode($dataHafalan, JSON_PRETTY_PRINT);
                // file_put_contents($berkas, $dataJson);


                error_reporting(0);
                for ($i=0; $i < count($dataHafalan); $i++) { 
                    echo "<tr>";
                    echo "<td>".$dataHafalan[$i]['nama']."</td>";
                    echo "<td>".$dataHafalan[$i]['halaman1']."</td>";
                    echo "<td>".$dataHafalan[$i]['halaman2']."</td>";
                    echo "<td>".$dataHafalan[$i]['surah1']."</td>";
                    echo "<td>".$dataHafalan[$i]['surah2']."</td>";
                    echo "<td>".$dataHafalan[$i]['tanggal']."</td>";
                }


                
            }

            ?>
        </tbody>
    </table>
</body>

</html>