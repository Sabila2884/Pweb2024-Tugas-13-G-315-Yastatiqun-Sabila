<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name =htmlspecialchars($_POST['name'] ??'');
    $email = htmlspecialchars($_POST['email'] ??'');
    $message = htmlspecialchars($_POST['message'] ??'');

    if(!empty($name) && !empty($email)&& !empty($message)){
        echo "<h1>Pengiriman Formulir Berhasil</h1>";
        echo "<p>Nama : $name</p>";
        echo "<p>Email : $email</p>";
        echo "<p>Pesan : $message</p>";
    }else{
        echo "<h1>Pengiriman Formulir Gagal</h1>";
        echo "<p>Silakan Isi Semua Kolom</p>" ;
    }
}else{
    echo "<h1>Permintaan Tidak Valid</h1>";
}
?>
