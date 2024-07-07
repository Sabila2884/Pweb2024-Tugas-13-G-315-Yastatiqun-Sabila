<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengumpulkan data formulir
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');
    
    // Validasi formulir sederhana
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Proses formulir (misalnya, simpan ke database, kirim email, dll.)
        // Untuk tujuan demonstrasi, kita akan menampilkan data saja
        echo "<h1>Pengiriman Formulir Berhasil</h1>";
        echo "<p>Nama: $name</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Pesan: $message</p>";
    } else {
        echo "<h1>Pengiriman Formulir Gagal</h1>";
        echo "<p>Silakan isi semua kolom.</p>";
    }
} else {
    echo "<h1>Permintaan Tidak Valid</h1>";
}
?>
