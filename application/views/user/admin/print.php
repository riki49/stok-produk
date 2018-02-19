<!DOCTYPE>
<html>
<head>
<style>

<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td {
    border: 1px solid #000000;
    text-align: left;
    padding: 8px;
}
th {
    border: 1px solid #000000;
    text-align: left;
    padding: 8px;
    color: #ffffff;
    background-color: #000000;
}
tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</style>
</head>
<body> 
	<div align="center">
		<img src="<?php echo base_url() ?>/assets/images/b2.jpg" width="460" >
	</div>
		
<hr>
<h3 align="center">Laporan Transaksi
</h3><br>
<table id="t01" align="center">
  <tr align="center">
  <th >tanggal transaksi</th>
  <th >id transaksi</th>
  <th >id produk</th>
  <th >harga</th>
  <th >jumlah</th>
  <th >Reseller</th>

 </tr>
  <?php 
    foreach ($report as $key) :   
  ?>
  <tr>
  <td><?php echo $key->tanggal?></td>
  <td><?php echo $key->idtrx?></td>
  <td><?php echo $key->idproduk?></td>
  <td><?php echo $key->harga?></td>
  <td><?php echo $key->jumlah?></td>
  <td><?php echo $key->reseller?></td>

  </tr>
  <?php endforeach; ?>
  
</table>

</body>
</html>
