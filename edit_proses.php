<?php
include 'koneksi.php';
if (isset($_POST['update'])) {
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $tempat = $_POST['tempat_lahir'];
    $tanggal = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $ibu = $_POST['nama_ibu'];
    $telp = $_POST['no_telp'];

    $qry = mysqli_query($koneksi, "UPDATE siswa SET nisn = '$nisn', nama = '$nama', tempat_lahir = '$tempat', tanggal_lahir = '$tanggal', alamat = '$alamat',
    nama_ibu = '$ibu', no_telp = '$telp' WHERE nisn = '$nisn' ");

    if ($qry) {
        echo '<script language="javascript">
                window.alert("Data berhasil diperbarui!");
                window.location="index.php";
                </script>';
    } else {
        echo "Data gagal diperbarui";
    }
}
