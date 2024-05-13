<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
</head>
<?php
include 'koneksi.php';
$nisn = $_GET['nisn'];
$qry = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nisn = $nisn");
$data = mysqli_fetch_assoc($qry);
?>

<body>
    <h2>Edit Data Siswa</h2>
    <hr>
    <form action="edit_proses.php" method="POST">
        <table>
            <tr>
                <td>NISN</td>
                <td>:</td>
                <td><input type="text" name="nisn" value="<?php echo $data['nisn'] ?>" readonly="readonly"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?php echo $data['nama'] ?>"></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="tempat_lahir" value="<?php echo $data['tempat_lahir'] ?>"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir'] ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td>
            </tr>
            <tr>
                <td>Nama Ibu</td>
                <td>:</td>
                <td><input type="text" name="nama_ibu" value="<?php echo $data['nama_ibu'] ?>"></td>
            </tr>
            <tr>
                <td>No. Telepon</td>
                <td>:</td>
                <td><input type="text" name="no_telp" value="<?php echo $data['no_telp'] ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="update" name="update"></td>
            </tr>
        </table>
    </form>
</body>

</html>