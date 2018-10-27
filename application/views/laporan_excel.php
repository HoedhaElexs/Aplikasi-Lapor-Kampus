<?php
header("Content-type: application/vmd-ms-excel");
header("Content-Disposition: attachment; filename=$title.xls");
header("Pragme: no-cache");
header("Expires: 0");
?>
<html>
    <body background="<?php echo base_url()?>assets/uploads/pesona.jpg" width="100" height="100" align="center" >
<table align="center">
   <tr>
   <td><img src="<?php echo base_url()?>assets/uploads/poltek.png" width="100" height="100" > </td>
   <td>
   <h1 style="text-align: center;"> Daftar Pengaduan</h1>
   <p style="text-align: center;">Info: <i>www.lapekam.polinema.ac.id</i> <br>
Kantor: Jalan Soekarno-Hatta No.9 Kota Malang
    </p>
    </td>
    <td></td>
    </tr>
</table>
   <b><hr><hr></b>
  <table  >
      <tr border="5">
    <th >JUDUL</th>
     <th>KATEGORI</th>
     <th>TANGGAL</th>
    <th>LAPORAN</th>
   <th>TANGGAPAN</th>
   </tr>
    <?php foreach ($preview as $key) { ?>
    <tr>
     <td><?php echo $key->judul ?></td>
     <td><?php echo $key->kategori ?></td>
     <td><?php echo $key->tanggal ?></td>
    <td><?php echo $key->laporan ?></td>
   <td><?php echo $key->tanggapan ?></td>
</tr>
    <?php } ?>
  </table>
   </body>
    </html>
     <!-- /container -->


