<?php
include "../config/koneksi.php";

if (isset($_POST['register'])) {

    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $role = $_POST['role'];

    $query = "INSERT INTO user
    (nama, username, email, password, role)
    VALUES
    ('$nama','$username','$email','$password','$role')";

    mysqli_query($conn, $query);

    echo "<script>
    alert('Register Berhasil!');
    window.location='login.php';
    </script>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Register SIMKOM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="card mx-auto shadow p-4" style="max-width:500px;">

            <h3 class="text-center">Register SIMKOM</h3>

            <form method="POST">

                <input type="text" name="nama" class="form-control mb-3" placeholder="Nama Lengkap" required>

                <input type="text" name="username" class="form-control mb-3" placeholder="Username" required>

                <input type="email" name="email" class="form-control mb-3" placeholder="Email" required>

                <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>

                <select name="role" class="form-control mb-3">
                    <option value="anggota">Anggota</option>
                    <option value="pembina">Pembina</option>
                    <option value="admin">Admin</option>
                </select>

                <button name="register" class="btn btn-success w-100">
                    Register
                </button>

            </form>

            <p class="text-center mt-3">
                Sudah punya akun?
                <a href="login.php">Login</a>
            </p>

        </div>
    </div>

</body>

</html>