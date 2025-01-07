<?php
include 'Latihan_09_config.php'; 

// Tambah data alumni
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $conn->real_escape_string($_POST['nama']);
    $tahun_lulus = $conn->real_escape_string($_POST['tahun_lulus']);
    $pekerjaan_saat_ini = $conn->real_escape_string($_POST['pekerjaan_saat_ini']);
    $lokasi = $conn->real_escape_string($_POST['lokasi']);

    $sql = "INSERT INTO penelusuran_alumni (nama, tahun_lulus, pekerjaan_saat_ini, lokasi) 
            VALUES ('$nama', '$tahun_lulus', '$pekerjaan_saat_ini', '$lokasi')";

    if ($conn->query($sql) === TRUE) {
        echo "Data alumni berhasil ditambahkan!";
    } else {
        echo "Kesalahan: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penelusuran Alumni</title>
</head>
<body>
    <h1>Penelusuran Alumni</h1>
    <form action="" method="POST">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="tahun_lulus">Tahun Lulus:</label><br>
        <input type="number" id="tahun_lulus" name="tahun_lulus" required><br><br>

        <label for="pekerjaan_saat_ini">Pekerjaan Saat Ini:</label><br>
        <input type="text" id="pekerjaan_saat_ini" name="pekerjaan_saat_ini"><br><br>

        <label for="lokasi">Lokasi:</label><br>
        <input type="text" id="lokasi" name="lokasi" required><br><br>

        <button type="submit">Tambah Alumni</button>
    </form>

    <h2>Cari Alumni</h2>
    <form action="" method="GET">
        <label for="cari">Nama atau Lokasi:</label><br>
        <input type="text" id="cari" name="cari"><br><br>
        <button type="submit">Cari</button>
    </form>

    <h2>Hasil Pencarian</h2>
    <ul>
        <?php
        if (isset($_GET['cari'])) {
            $cari = $conn->real_escape_string($_GET['cari']);
            $sql = "SELECT nama, tahun_lulus, pekerjaan_saat_ini, lokasi 
                    FROM penelusuran_alumni 
                    WHERE nama LIKE '%$cari%' OR lokasi LIKE '%$cari%' 
                    ORDER BY tahun_lulus DESC";
        } else {
            $sql = "SELECT nama, tahun_lulus, pekerjaan_saat_ini, lokasi 
                    FROM penelusuran_alumni 
                    ORDER BY tahun_lulus DESC";
        }
        
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<li><strong>{$row['nama']}</strong> (Lulus: {$row['tahun_lulus']}) - {$row['pekerjaan_saat_ini']} di {$row['lokasi']}</li>";
            }
        }
