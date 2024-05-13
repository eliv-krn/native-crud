<?php
include 'koneksi.php';
if (isset($_POST['simpan'])) {
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $tempat = $_POST['tempat_lahir'];
    $tanggal = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $ibu = $_POST['nama_ibu'];
    $telp = $_POST['no_telp'];

    $qry = mysqli_query($koneksi, "INSERT INTO siswa (nisn, nama, tempat_lahir, tanggal_lahir, alamat, nama_ibu, no_telp) 
    VALUES ('$nisn,'$nama,'$tempat','$tanggal','$alamat','$ibu','$telp')");

    if ($qry) {
        echo '<script language="javascript">
                window.alert("Data berhasil ditambahkan!");
                window.location="index.php";
                </script>';
    } else {
        echo "Data gagal disimpan";
    }
}
