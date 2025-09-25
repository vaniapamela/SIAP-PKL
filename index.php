<?php
include "backend/koneksi.php";
$result = mysqli_query($koneksi, "SELECT * FROM
siswa");
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
initial-scale=1.0">
    <title>
        SIAP PKL
    </title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <h1>
            Sistem Informasi PKL
        </h1>
    </header>
    <main>
        <h2>
            Daftar Siswa
        </h2>
        <table border="1" cellpadding="10"
            cellspacing="0">
            <tr>
                <th>
                    No
                </th>
                <th>
                    Nama
                </th>
                <th>
                    Kelas
                </th>
            </tr>
            <?php
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                                        <td>
                                            " . $no++ . "
                                        </td>
                                        <td>
                                            " . $row['nama'] . "
                                        </td>
                                        <td>
                                            " . $row['kelas'] . "
                                        </td>
                                    </tr>
                                    ";
            }
            ?>
        </table>
    </main>
    <footer>
        <p>
            © 2025 Tim SIJA XII
        </p>
    </footer>
</body>

</html>