<?php 

if (isset($_POST['daftar'])) {


    $berkas = "json/mhs.json";
    $dataJson = file_get_contents($berkas);
    $arrMhs = json_decode($dataJson, true);


    $nama = $_POST['nama'];
    $npm = $_POST['npm'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $arrMhs[] = ["nama" => $nama, "npm" => $npm, "email" => $email, "password" => $password];

    $dataJson = json_encode($arrMhs, JSON_PRETTY_PRINT);
    file_put_contents($berkas, $dataJson);


    header("location: daftar.php");
}
?>