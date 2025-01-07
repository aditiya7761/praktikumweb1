<?php 

include 'Latihan_09_config.php'; 

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
</head>
<body>
    <h1>Buku Tamu</h1>
    <form action="submit_buku_tamu.php" method="POST">
        <label for="name">Nama:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>

        <label for="message">Pesan:</label><br>
        <textarea id="message" name="message" required></textarea><br><br>

        <button type="submit">Kirim</button>
    </form>
    <h2>Daftar Pesan</h2>
    <ul>
        <?php
        $sql = "SELECT name, message, created_at FROM guestbook ORDER BY created_at DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<li><strong>{$row['name']}</strong> ({$row['created_at']}): {$row['message']}</li>";
            }
        } else {
            echo "<li>Belum ada pesan.</li>";
        }
        ?>
    </ul>
</body>
</html>
