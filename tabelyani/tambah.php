<!DOCTYPE html>
<html lang="en">
    <center>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>

<body>
    <h3>Tambah Data</h3>
        <form action="proses-tambah.php" method="POST">
            <form>
    <p>
        <label for="nama"> Nama Lengkap : </label>
        <input type="text" name="nama" />
    </p>
    <p>
        <label for="kelas"> Kelas : </label>
        <input type="text" name="kelas" />
    </p>
    <p>
        <label for="nama_jurusan"> Jurusan : </label>
        <input type="text" name="nama_jurusan" />
    </p>
    <p>
        <label for="tahun"> Tahun : </label>
        <input type="date" name="tahun" />
    </p>
    <p>
        <label for="nominal"> Nominal : </label>
        <input type="text" name="nominal" />
    </p>
    <p>
       <input type="submit" value="Tambah" name="tambah"/>
    </p>
</form>
</body>
</center>
</html>