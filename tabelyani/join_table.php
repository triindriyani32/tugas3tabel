<?php
include("koneksi.php");?>

<html>
<head>
</head>
<body>
<h1>Data Siswa</h1>
<h4> <a href=tambah.php>Tambah Siswa</a></h4>
<table border="1">
    <tr>
        <th>Nomer</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>Tahun</th>
        <th>Nominal</th>
        <th>Aksi</th>
</tr>

<?php
     include("koneksi.php");
     $sql="SELECT * FROM tb_siswa INNER JOIN tb_jurusan ON tb_siswa.id_jurusan = tb_jurusan.id_jurusan INNER JOIN tb_spp ON tb_siswa.id_spp = tb_spp.id_spp";
     $query = mysqli_query($koneksi, $sql);

     while($siswa=mysqli_fetch_array($query)){
    echo "<tr>";
          echo "<td>".$siswa['id_siswa']."</td>";
          echo "<td>".$siswa['nama']."</td>";
          echo "<td>".$siswa['kelas']."</td>";
          echo "<td>".$siswa['nama_jurusan']."</td>";
          echo "<td>".$siswa['tahun']."</td>";
          echo "<td>".$siswa['nominal']."</td>";
          echo "<td>";
          echo "<a href='edit.php?id=".$siswa['id_siswa']."'>Edit</a> |";
          echo "<a href='hapus.php?id=".$siswa['id_siswa']."'>Hapus</a> |";
          echo "</td>";
          echo '</tr>';


     }
     ?>
     </table>
    </body>
    </html>