<?php

//panggil koneksi ke database

require_once "connection.php";

if (isset($_POST["b_masuk"])){

    $nama_pengunjung = $_POST["nama_pengunjung"];
    $no_hp = $_POST["no_hp"];
    $judul_buku = $_POST["judul_buku"];
    $asal_instansi = $_POST["asal_instansi"];

    //sql untuk input data ke database
    $sql = "INSERT INTO pengunjung SET
    nama_pengunjung=:nama_pengunjung, no_hp=:no_hp,
    judul_buku=:judul_buku, asal_instansi=:asal_instansi";

    $stmt = $connection->prepare($sql);

    $stmt->bindParam(":nama_pengunjung", $nama_pengunjung);
    $stmt->bindParam(":no_hp", $no_hp);
    $stmt->bindParam(":judul_buku", $judul_buku);
    $stmt->bindParam(":asal_instansi", $asal_instansi);

    $stmt->execute();

    //redirect ke tampil
    header("location:proses.php");
    exit();
}