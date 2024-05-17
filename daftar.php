<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/daftar.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

</head>

<body>

    <div class="daftar container-fluid mx-auto w-50  p-lg-5 bg-light">
        <h1 class="text-center">DAFTAR</h1>
        <form action="proses_daftar.php" method="POST">
            <div class="form-content w-75 mx-auto my-2">
                <div class=" row mb-3">
                    <label for="nama" class="lName w-25">Nama</label>
                    <input type="text" class="form-control w-75" name="nama" id="nama">
                </div>
                <div class=" row mb-3">
                    <label for="npm" class="lNpm w-25">npm</label>
                    <input type="number" class="form-control w-75" name="npm" id="npm">
                </div>
                <div class=" row mb-3">
                    <label for="email" class="lEmail w-25">email</label>
                    <input type="email" class="form-control w-75" name="email" id="email">
                </div>
                <div class=" row mb-3">
                    <label for="password" class="lPassword w-25">password</label>
                    <input type="password" class="form-control w-75" name="password" id="password">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-secondary w-100 ms-2" name="daftar">DAFTAR</button>
                </div>
                <div class="d-flex justify-content-center buat-akun mt-5 ">
                    <p class="me-2 text-center">Sudah punya akun? </p><a href="login.php" class="text-decoration-none"> masuk disini</a>
                </div>
            </div>
        </form>
    </div>

</body>

</html>