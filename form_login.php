<form action="" method="POST">
    <label for="">Username</label>
    <input type="text" name="username">
    <label for="">Password</label>
    <input type="password" name="password">
    <input type="submit" name="kirim">
</form>

<?php
include('koneksi.php');
if (isset($_POST['kirim'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $qry = mysqli_query($koneksi, "SELECT * FROM login WHERE username = '$username' AND password = '$password'");
    $ditemukan = mysqli_num_rows($qry);
    if ($ditemukan) {
        session_start();
        $_SESSION['username'] = $username;
        header('Location: home.php');
    } else {
        echo "Maaf, username atau password tidak ditemukan";
    }
}
?>