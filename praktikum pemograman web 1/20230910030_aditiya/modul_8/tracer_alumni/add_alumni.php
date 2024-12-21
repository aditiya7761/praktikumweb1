<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $tahun_kelulusan = $_POST['tahun_kelulusan'];

    $stmt = $pdo->prepare("INSERT INTO alumni (nama, nim, jurusan, tahun_kelulusan) VALUES (?, ?, ?, ?)");
    if ($stmt->execute([$nama, $nim, $jurusan, $tahun_kelulusan])) {
        echo "Data alumni berhasil ditambahkan!";
    } else {
        echo "Gagal menambahkan data.";
    }
}
?>
