<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h2>Form Input Mahasiswa</h2>

    <form action="save.php" method="post">
        <label for="nim">NIM :</label><br>
        <input type="text" id="nim" name="nim" required><br><br>

        <label for="nama">Nama :</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="jenis_kelamin">Jenis Kelamin :</label><br>
        <select id="jenis_kelamin" name="jenis_kelamin" required>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br><br>

        <label for="alamat">Alamat :</label><br>
        <textarea id="alamat" name="alamat" required></textarea><br><br>

        <label for="no_hp">No HP :</label><br>
        <input type="text" id="no_hp" name="no_hp" required><br><br>

        <label for="email">Email :</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <button type="submit">Save Data</button>
    </form>
    <br>
    <a href="datamhs.csv" download>Download File CSV</a>
</body>
</html>
