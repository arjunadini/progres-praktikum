<?php
    // memulai interaksi SESSION
    session_start();

    // cek .apakah . ada . SESSION ["email"]
    // ! : not (tidak)
    if(!isset ($_SESSION['email'])) {
        header ("Location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Perpustakaan</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-lg border-0">
                    <div class="card-header text-center">
                        <h2 class="display-7">Aplikasi Perpustakaan</h2>
                    </div>
                    <div class="card-body p-4">
                        <div>
                            <img src="gambar.jpg" alt="gambar">
                        </div>
                        <div class="d-grid gap-3">
                            <a href="./buku.php" class="btn btn-primary btn-lg">
                                <i class="bi bi-book"></i> Lihat daftar buku
                            </a>
                            <a href="./staff.php" class="btn btn-secondary btn-lg">
                                <i class="bi bi-people"></i> Lihat daftar Staff
                            </a>
                        </div>
                    </div>
                    <div class="card-footer bg-light text-center">
                        <form action="logout-proccess.php" method="POST">
                            <button type="submit" class="btn btn-danger btn-lg">
                                <i class="bi bi-box-arrow-right"></i> LOGOUT
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>