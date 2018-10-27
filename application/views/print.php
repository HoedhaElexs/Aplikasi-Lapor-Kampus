<html>
   <body  >
 <table align="center">
   <tr>
   <td><img src="<?php echo base_url()?>assets/uploads/poltek.png" width="100" height="100"  > </td>
   <td>
   <h1 style="text-align: center;"> Daftar Pengaduan</h1>
   <p style="text-align: center;">Info Seputar Wisata: <i>www.lapekam.polinema.ac.id</i> <br>
Kantor: Jalan Soekarno-Hatta No.9 Kota Malang
    </p>
    </td>
    <td><img src="<?php echo base_url()?>assets/uploads/lapekam.png" width="120" height="100" ></td>
    </tr>
</table>
   <b><hr><hr></b>
  <table >
      <tr border="1">
    <th>JUDUL</th>
     <th>KATEGORI</th>
     <th>TANGGAL</th>
    <th>LAPORAN</th>
    <th>FOTO</th>
   </tr>
    <?php foreach ($wisata_array as $key) { ?>
    <tr>
     <td><?php echo $key->judul ?></td>
     <td><?php echo $key->kategori ?></td>
     <td><?php echo $key->tanggal ?></td>
    <td><?php echo $key->laporan ?></td>
    <td><img src=<?php echo base_url("assets/uploads")."/".$key->foto ?>> </td>
       </tr>
    <?php } ?>    
  </table>
   </body>
    </html>
     <!-- /container -->


