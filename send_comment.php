<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $article_name = $_POST['article_name'];
    $user_email = $_POST['user_email'];
    $comment = $_POST['comment'];

    $to = "blalangtenfur13@gmail.com";  // Ganti dengan email tujuan
    $subject = "Komentar Artikel: $article_name";
    $body = "Nama Artikel: $article_name\n\nKomentar:\n$comment\n\nDikirim oleh: $user_email";
    $headers = "From: $user_email";

    // Mengirim email
    if (mail($to, $subject, $body, $headers)) {
        echo "Komentar berhasil dikirim!";
    } else {
        echo "Terjadi kesalahan saat mengirim komentar.";
    }
}
?>