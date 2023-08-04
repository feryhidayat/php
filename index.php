<!DOCTYPE html>
<html>

<head>
    <title>DATA REKAM MEDIK</title>
</head>
<style>
    body {
        text-align: center;
        font-family: Arial, sans-serif;
        margin: 30px;
    }

    h1 {
        color: #000000;
        text-align: center;
    }

    table {

        border-collapse: collapse;
        width: 80%;
        margin: 20px 0;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #f2f2f2;
    }

    a {
        text-align: center;
        text-decoration: none;
        background-color: #0D4A88;
        color: #fff;
        padding: 8px 12px;
        border-radius: 5px;

        justify-content: center;
        align-items: center;
    }

    a:hover {
        background-color: #0D4A88;
    }
</style>

<body>
    <h1>DATA REKAM MEDIK</h1>

    <a href="add.php">TAMBAH DATA</a>
    <?php
    include "koneksi.php";

    $q = "select * from rmedik";
    $ex  = mysqli_query($koneksi, $q);

    echo "<table border= 1";
    echo "<tr>
<th>ID</th><th>Nama</th><th>Usia</th><th>Alamat</th>";
    while ($r = mysqli_fetch_array($ex)) {
        echo "<tr><td>" . $r['id'] . "</td>";
        echo "<td>" . $r['nama'] . "</td>";
        echo "<td>" . $r['usia'] . "</td>";
        echo "<td>" . $r['alamat'] . "</td>";

        echo "<td><a href='edit.php?n=" . $r['id'] . "'>EDIT</a></td>";
        echo "<td><a href='delete.php?n=" . $r['id'] . "'>DELETE</a></td>";
        echo "<tr>";
    }
    echo "</table>";
    ?>


</body>

</html>