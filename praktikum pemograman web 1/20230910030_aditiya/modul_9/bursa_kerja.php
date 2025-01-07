<?php
include 'Latihan_09_config.php'; 

// Tambah data lowongan kerja
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul_pekerjaan = $conn->real_escape_string($_POST['judul_pekerjaan']);
    $nama_perusahaan = $conn->real_escape_string($_POST['nama_perusahaan']);
    $deskripsi_pekerjaan = $conn->real_escape_string($_POST['deskripsi_pekerjaan']);
    $lokasi = $conn->real_escape_string($_POST['lokasi']);

    $sql = "INSERT INTO bursa_kerja (judul_pekerjaan, nama_perusahaan, deskripsi_pekerjaan, lokasi) 
            VALUES ('$judul_pekerjaan', '$nama_perusahaan', '$deskripsi_pekerjaan', '$lokasi')";

    if ($conn->query($sql) === TRUE) {
        echo "Lowongan kerja berhasil ditambahkan!";
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
    <title>Bursa Kerja</title>
</head>
<body>
    <h1>Bursa Kerja</h1>
    <form action="" method="POST">
        <label for="judul_pekerjaan">Judul Pekerjaan:</label><br>
        <input type="text" id="judul_pekerjaan" name="judul_pekerjaan" required><br><br>

        <label for="nama_perusahaan">Nama Perusahaan:</label><br>
        <input type="text" id="nama_perusahaan" name="nama_perusahaan" required><br><br>

        <label for="deskripsi_pekerjaan">Deskripsi Pekerjaan:</label><br>
        <textarea id="deskripsi_pekerjaan" name="deskripsi_pekerjaan" required></textarea><br><br>

        <label for="lokasi">Lokasi:</label><br>
        <input type="text" id="lokasi" name="lokasi" required><br><br>

        <button type="submit">Tambah Lowongan</button>
    </form>

    <h2>Daftar Lowongan</h2>
    <ul>
        <?php
        $sql = "SELECT judul_pekerjaan, nama_perusahaan, lokasi, tanggal_dibuat 
                FROM bursa_kerja ORDER BY tanggal_dibuat DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<li><strong>{$row['judul_pekerjaan']}</strong> di <strong>{$row['nama_perusahaan']}</strong>, {$row['lokasi']} ({$row['tanggal_dibuat']})</li>";
            }
        } else {
            echo "<li>Belum ada lowongan kerja.</li>";
        }
        ?>
    </ul>
</body>
</html>
