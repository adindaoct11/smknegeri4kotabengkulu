<?php
$conn = new mysqli("localhost", "root", "", "nama_database");
$nama = $_POST['nama'];
$isi = $_POST['isi'];
$conn->query("INSERT INTO komentar (nama, isi) VALUES ('$nama', '$isi')");
header("Location: index.php");
?>
