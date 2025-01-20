<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "blalangtenfur13@gmail.com";  // Ganti dengan email tujuan
    $subject = "Pesan dari: $name";
    $body = "Nama: $name\nEmail: $email\n\nPesan:\n$message";
    $headers = "From: $email";

    // Mengirim email
    if (mail($to, $subject, $body, $headers)) {
        echo "Pesan berhasil dikirim!";
    } else {
        echo "Terjadi kesalahan saat mengirim pesan.";
    }
}
?>