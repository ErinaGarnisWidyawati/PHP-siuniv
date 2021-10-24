<?php
    include "../connect.php";

    $nama_mk = $_POST["nama_mk"];
    $sks = $_POST["sks"];
    $semester = $_POST["semester"];


    $query = "INSERT INTO matakuliah(nama_mk, sks, semester) VALUES('$nama_mk', '$sks', '$semester')";

    $result = mysqli_query($connect, $query);
    $num = mysqli_affected_rows($connect);

    if ($num > 0) {
        echo "Berhasil menambah data <br>";
    }else {
        echo "Gagal menambah data <br>";
        echo mysqli_error($connect);
    }

    echo "<a href='read.php'>lihat data</a>";
?>