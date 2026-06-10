<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: ../auth/login.php");
    exit;
}

$nama = $_SESSION['nama'] ?? 'User';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow p-4">

            <h1>Dashboard Anggota</h1>

            <h4>
                Halo, <?php echo $nama; ?>
            </h4>

            <p>Selamat datang di Sistem SIMKOM</p>

            <a href="../auth/logout.php" class="btn btn-danger">
                Logout
            </a>

        </div>
    </div>

</body>

</html>