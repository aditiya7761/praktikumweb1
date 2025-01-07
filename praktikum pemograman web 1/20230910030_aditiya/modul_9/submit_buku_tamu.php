<?php
include 'Latihan_09_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $message = $conn->real_escape_string($_POST['message']);

    $sql = "INSERT INTO guestbook (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Pesan berhasil dikirim.";
    } else {
        echo "Error: " . $conn->error;
    }
}

header("Location: Buku_tamu.php");
exit();
?>
