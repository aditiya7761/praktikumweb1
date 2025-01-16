<?php
// Sertakan file konfigurasi database
require 'config.php';

// Periksa apakah data telah dikirim melalui form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validasi data (opsional)
    if (!empty($name) && !empty($email) && !empty($message)) {
        try {
            // Siapkan query untuk menyimpan data
            $stmt = $pdo->prepare("INSERT INTO contacts (name, email, message) VALUES (:name, :email, :message)");
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':message', $message);

            // Eksekusi query
            $stmt->execute();

            echo "Pesan berhasil dikirim!";
        } catch (PDOException $e) {
            echo "Terjadi kesalahan: " . $e->getMessage();
        }
    } else {
        echo "Semua kolom harus diisi!";
    }
}
?>
