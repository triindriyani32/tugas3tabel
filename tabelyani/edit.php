<?php
include("koneksi.php");
if(!isset($_GET['id'])){
    header("Location:join_table.php?");
}
   $id=$_GET['id'];
   $sql="SELECT * FROM tb_siswa INNER JOIN tb_jurusan ON tb_siswa.id_jurusan = tb_jurusan.id_jurusan INNER JOIN tb_spp ON tb_siswa.id_spp = tb_spp.id_spp WHERE tb_siswa.id_siswa='$id'";
   $query = mysqli_query($koneksi,$sql);
   $siswa = mysqli_fetch_assoc($query); 

?>     
<html>
    <head>
    </head>
    <body>
        <h1>Form Edit Siswa</h1>
        <form action="proses-edit.php" method="POST">
        <a href="join_table.php"><input type="button" value="kembali"></a>
            <fieldset>
                <input type="hidden" name="id_siswa" value="<?php echo $siswa['id_siswa']?>" />
                <p>
                    <label for="nama">Nama Lengkap :</label>
                    <input type="text" name="nama" value="<?php echo $siswa['nama']?>" />
                </p>
                <p>
                <label for="kelas">Kelas :</label>
                    <input type="text" name="kelas" value="<?php echo $siswa['kelas']?>" />
                </p>
                <p>
                    <label for="nama_jurusan">Nama Jurusan :</label>
                    <input type="text" name="nama_jurusan" value="<?php echo $siswa['nama_jurusan']?>" />
                </p>
                <p>
                    <label for="tahun">Tahun :</label>
                    <input type="date" name="tahun"  value="<?php echo $siswa['tahun']?>" /> 
                </p>
                <p>
                    <label for="nominal">Nominal:</label>
                    <input type="number" name="nominal"  value="<?php echo $siswa['nominal']?>" />
                </p>
                <p>
                    <input type="submit" value="edit" name ="edit" />
                </P>
</fieldset>
</form>
</body>
</html>