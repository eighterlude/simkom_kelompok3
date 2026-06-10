<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: ../auth/login.php");
}
?>

<h1>Dashboard Admin</h1>

<h3>
    Halo,
    <?php echo $_SESSION['name']; ?>
</h3>

<a href="../auth/logout.php">
    Logout
</a>