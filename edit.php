<?php
include "koneksi.php";
$id_barang = $_GET['n'];
$q = "select * from barang where id_barang='$id_barang'";
$ex = mysqli_query($koneksi, $q);
$r = mysqli_fetch_array($ex);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Edit Data Barang</title>
    <style>
        form {
            width: 80%;
            margin-top: 20px;
        }

        input[type="text"],
        input[type="number"] {
            padding: 5px;
            margin: 5px 0;
            width: 100%;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #0D4A88;
            color: #fff;
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0D4A88;
        }

        a {
            display: inline-block;
            font-size: 7.5px;
            text-decoration: none;
            background-color: #0D4A88;
            color: #fff;
            padding: 8px 12px;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <h1>Edit Data Rekam Medik</h1>
    <form action="#" method="post">
        ID : <input type="text" name="id" value="<?php echo $r['id']; ?>" /> <br />
        Nama : <input type="text" name="nama" value="<?php echo $r['nama']; ?>" /><br />
        Usia : <input type="text" name="usia" value="<?php echo $r['usia']; ?>" /><br />
        Alamat : <input type="text" name="alamat" value="<?php echo $r['jml']; ?>" /><br />
        <input type="submit" name="BOK" value="SIMPAN" />
        <a href="index.php"> KEMBALI</a>

    </form>

    <?php
    if (isset($_POST['BOK'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $usia = $_POST['usia'];
        $alamat = $_POST['alamat'];

        $q = "update  barang SET nama = '$nama',
    usia = '$usia',
    alamat = '$alamat'";
        $q .= " WHERE id = '$id'";
        mysqli_query($koneksi, $q);
        echo "Data Tersimpan";
    }
    ?>