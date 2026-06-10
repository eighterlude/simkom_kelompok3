<?php
session_start();
include "../config/koneksi.php";

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = mysqli_query(
        $conn,
        "SELECT * FROM user
    WHERE username='$username'
    AND password='$password'"
    );

    $data = mysqli_fetch_assoc($query);

    if ($data) {

        $_SESSION['login'] = true;
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['role'] = $data['role'];

        if ($data['role'] == 'admin') {
            header("Location: ../dashboard/admin.php");
        } elseif ($data['role'] == 'anggota') {
            header("Location: ../dashboard/anggota.php");
        } else {
            header("Location: ../dashboard/pembina.php");
        }

    } else {
        echo "<script>alert('Login gagal!')</script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login SIMKOM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow p-4 mx-auto" style="max-width:450px;">

            <h3 class="text-center">
                Login SIMKOM
            </h3>

            <form method="POST">

                <input type="text" name="username" class="form-control mb-3" placeholder="Username" required>

                <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>

                <button name="login" class="btn btn-primary w-100">
                    Login
                </button>

            </form>

            <p class="text-center mt-3">
                Belum punya akun?
                <a href="register.php">Register</a>
            </p>

        </div>
    </div>

</body>

</html>