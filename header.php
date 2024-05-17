<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar navigasi navbar-collapse navigasi px-lg-5 fs-4">
        <div class="navbar navbar-brand ms-5">
            <h5><a href="" class=" text-decoration-none text-hover text-white">MEIR</a> </h5>
        </div>
        <ul class="nav justify-content-center mx-auto">
            <li class="nav-item">
                <a class="nav-link text-white" href="#">home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                    layanan
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-white" aria-labelledby="navbarDarkDropdownMenuLink">
                    <li><a class="dropdown-item" href="hafalan.php">Hafalan</a></li>
                    <li><a class="dropdown-item" href="#">Tiket Penerbangan</a></li>
                    <li><a class="dropdown-item" href="showroom.php">Showroom Mobil</a></li>
                    <li><a class="dropdown-item" href="#">Daily Activity</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">pustaka</a>
            </li>
        </ul>
        <div class="nav">
            <li class="nav-item">
                <a href="login.php"><button type="submit" class="btn rounded-pill px-lg-4 btn-outline-success btn-white text-white" name="btn-login">login</button></a>
            </li>
        </div>
    </nav>
    <script src="bootstrap/js/bootstrap.js"></script>
</body>

</html>