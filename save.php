<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];

    $data = [$nim, $nama, $jenis_kelamin, $alamat, $no_hp, $email];

    $file = fopen("datamhs.csv", "a");

    if ($file) {
        fputcsv($file, $data);
        fclose($file);
        echo "Data berhasil disimpan.";
    } else {
        echo "Gagal menyimpan data.";
    }
}
?>