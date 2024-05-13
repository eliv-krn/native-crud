<?php
include 'koneksi.php';
$qry = mysqli_query($koneksi, "SELECT * FROM siswa");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>

<body>
    <h2>Data Siswa</h2>
    <hr>
    <a href="tambah_siswa.php"> + Tambah Siswa</a>
    <table border="1" cellspacing="0" width="100%">
        <thead>
            <th>No.</th>
            <th>NISN</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Nama Ibu</th>
            <th>No. Telepon</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php $no = 1;
            while ($data = mysqli_fetch_assoc($qry)) : ?>
                <tr>
                    <td align="center"> <?php echo $no++; ?> </td>
                    <td> <?php echo $data['nisn'] ?> </td>
                    <td> <?php echo $data['nama'] ?> </td>
                    <td> <?php echo $data['tempat_lahir'] ?> </td>
                    <td> <?php echo $data['tanggal_lahir'] ?> </td>
                    <td> <?php echo $data['alamat'] ?> </td>
                    <td> <?php echo $data['nama_ibu'] ?> </td>
                    <td> <?php echo $data['no_telp'] ?> </td>
                    <td align="center">
                        <a href="edit_siswa.php?nisn=<?php echo $data['nisn'] ?>">edit |</a>
                        <a href="hapus_siswa.php?nisn=<?php echo $data['nisn'] ?>">hapus</a>
                    </td>
                </tr>
            <?php endwhile ?>
        </tbody>
    </table>
</body>

</html>