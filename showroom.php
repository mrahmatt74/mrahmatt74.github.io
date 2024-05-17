<?php

use function PHPSTORM_META\type;

$arrMobil = ["Toyota", "Daihatsu", "Honda", "Nissan", "Suzuki"];
sort($arrMobil);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/library.css">
</head>

<body>

    <?php 
    if (isset($_POST['simpan'])) {
        $nama = $_POST['nama'];
        $arrMobil = $_POST['arrMobil'];
        $jmlUnit = $_POST['jmlUnit'];
    }
    ?>
    <table class="row">
        <tr class="col m-1 mx-2">
            <th colspan="3">
                <h1>Input Data</h1>
            </th>
            <td class="col">
                <label for="namaPembeli" class="fw-bold">Nama Pembeli :</label>
                <input type="text" size="30" name="nama">
            </td>
            <td class="my-2">
                <label for="brand" class="fw-bold">Merk Mobil Bekas :</label>
                <div class="col">
                    <?php
                    for ($i = 0; $i < count($arrMobil); $i++) :
                        echo "<div class='row my-1'><input class='row' type='radio' name='arrMobil' id='brand' value='" . $arrMobil[$i] . "'>$arrMobil[$i]<br></div>";
                    endfor;
                    ?>
                </div>
            </td>
            <td>
                <label for="jumlah">Jumlah Pembelian :</label><br>
                <input type="number" name="jmlUnit" class="w-25">&nbsp;<p class="d-inline">unit</p>
            </td>
            <td class=" my-2">
                <input class="btnSimpan w-50" type="submit" name="simpan" value="SIMPAN">
            </td>
        </tr>
        <tr class="border-" border="2">
            <thead class="">
                <th>Nama Pembeli</th>
                <th>Merk Mobil Bekas</th>
                <th>Jumlah Unit</th>
            </thead>
            <tbody>
                <td>
                    <img src="img/icons8-honda-16.png" alt="">
                </td>
                <?php
                

                
                ?>
            </tbody>
            <tfoot>

            </tfoot>
        </tr>
    </table>
</body>

</html>