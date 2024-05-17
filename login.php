<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid login w-50 m-5 mx-auto p-4 py-lg-5 bg-light">
        <div-login-content class="mx-auto ">
            <form action="" method="POST" class="w-75 mx-auto">
                <div class="col g-3">
                    <div class="row mb-lg-4">
                        <h1 class="text-center ">Masuk</h1>
                        <hr class="w-25 mx-auto border-3 hr-hLogin">
                    </div>
                    <div class="row my-4">
                        <label for="nama" class="w-25">Nama</label>
                        <input type="text" class="form-control w-75" name="nama" id="nama" placeholder="masukkan nama anda">
                    </div>
                    <div class="row my-4">
                        <label for="password" class="w-25">password</label>
                        <input type="password" class="form-control w-75" name="password" id="password" placeholder="masukkan password anda">
                    </div>
                    <div class="row">
                        <button type="submit" class="btn btn-warning" name="login">MASUK</button>
                    </div>
                    <div class="row hr">
                        <legend class="my-5">
                            <pre class="d-flex justify-content-center">
                                <hr class="w-25"> atau <hr class="w-25">
                            </pre>
                        </legend>
                    </div>
                    <div class="by-sosmed d-flex justify-content-center justify-content-between w-50 mx-auto">
                        <div class=" google">
                            <a href="">
                                <img src="img/google.png" alt="" id="icon-google">
                            </a>
                        </div>
                        <div class="facebook">
                            <a href="">
                                <img src="img/facebook.png" alt="" id="icon-fb">
                            </a>
                        </div>
                        <div class="facebook">
                            <a href="">
                                <img src="img/github.png" alt="" id="icon-fb">
                            </a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center buat-akun mt-5 ">
                        <p class="me-2 text-center">Belum punya akun? </p><a href="daftar.php" class="text-decoration-none"> daftar disini</a>
                    </div>
                </div>
            </form>
        </div-login-content>
    </div>
</body>

</html>