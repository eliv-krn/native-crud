<?php
include 'koneksi.php';
$nisn = $_GET['nisn'];
$qry = mysqli_query($koneksi, "DELETE FROM siswa WHERE nisn = '$nisn'");
if ($qry) {
    echo '<script language="javascript">
                window.alert("Data berhasil dihapus");
                window.location="index.php";
                </script>';
} else {
    echo "Data gagal diperbarui";
}
