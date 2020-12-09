<!DOCTYPE html>
<html lang="en">
<head>
<title>UAS WEB 7</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div align="center">
  <h3>Simpan Data SQL Server dengan PHP<br>jancukers.com</h3>
    <?php
      date_default_timezone_set('Asia/Jakarta');
      echo date('d F Y H:i:s'); ?>
    <p><a href="tambah.php">Tambah Data</a></p>
  <table border="1" width="700px">
   <thead>
    <tr>
     <th>No</th>
     <th>NIM</th>
     <th>Nama</th>
     <th>Program Studi</th>
     <th>Tanggal Bulan Tahun</th>
     <th>Aksi</th>
    </tr>
   </thead>
   <tbody>
    <?php
     $sql="SELECT * FROM tugas_data";
     $no=1;
     //eksekusi query menampilkan data dari tabel data_mhs
     $query=mysqli_query($conn, $sql);
     //mengembalikan data row menjadi array dan looping data menggunakan while
     while ($data=sqlsrv_fetch_array($query)) {
    ?>
     <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $data['nim_data']; ?></td>
      <td><?php echo $data['nama_data']; ?></td>
      <td><?php echo $data['alamat_data']; ?></td>
      <td>
        <?php $source = $data['ttl_data'];
        				$date = new DateTime($source);
        				echo $date->format('d - m - Y');?>
      <td>
        <a href="edit.php?id=<?php echo $data['ID_datamhs']; ?>" style="float: left;">Edit</a> 
        <a href="hapus.php?id=<?php echo $data['ID_datamhs']; ?>" style="float: right;" onClick="javascript: return confirm('Apakah anda yakin?');">Hapus</a>
      </td>
     </tr>
    <?php } ?>
   </tbody>
  </table>
  </div>

</body>
</html>
