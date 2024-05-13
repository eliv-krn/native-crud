<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: home.php');
}
?>

<h1>Selamat Datang <?php echo $_SESSION['username'] ?></h1>
<a href="logout.php">Logout</a>