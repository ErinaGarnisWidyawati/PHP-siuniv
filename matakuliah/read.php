<?php
include "../connect.php";
    $query = "SELECT * FROM matakuliah";
    $result = mysqli_query($connect, $query);
    $num = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <table border="1">
            <h2>Data Matakuliah</h2>
            <tr>
                <th>No.</th>
                <th>Nama Matakuliah</th>
                <th>SKS</th>
                <th>Semester</th>
                <th colspan="2">Aksi</th>
            </tr>
            <?php
            if ($num>0) {
                $no = 1;
                while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $no . "</td>";
                    echo "<td>" . $data["nama_mk"] . "</td>";
                    echo "<td>" . $data["sks"] . "</td>";
                    echo "<td>" . $data["semester"] . "</td>";
                    echo "<td><a href='form-update.php?id_mk=".$data['id_mk']."'>Edit</a> | ";
                    echo "<td><a href='delete.php?id_mk=".$data['id_mk']."' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data?\")'>Hapus</a> | ";
                    echo "</tr>";
                    $no++;
                }
            }else {
                echo " <td colspan='4'> Tidak ada data</td>";
            }
            ?>
        </table>
    </body>
</html>