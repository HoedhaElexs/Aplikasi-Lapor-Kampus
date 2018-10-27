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
    <td><img src="<?php echo base_url()?>assets/uploads/lapekam.png" width="120" height="100" ></td>
    </tr>
</table>
   <b><hr><hr></b>
  <table  > 
      <tr border="5">
    <th >JUDUL</th>
     <th>KATEGORI</th>
     <th>TANGGAL</th>
    <th>LAPORAN</th>
    <th>FOTO</th>
   <th>TANGGAPAN</th>
   </tr>
    <?php foreach ($wisata_array as $key) { ?>
    <tr>
     <td><?php echo $key->judul ?></td>
     <td><?php echo $key->kategori ?></td>
     <td><?php echo $key->tanggal ?></td>
    <td><?php echo $key->laporan ?></td>
    <td><img src=<?php echo base_url("assets/uploads")."/".$key->foto ?>> </td>
   <td><?php echo $key->tanggapan ?></td>  
    </tr>
    <?php } ?>   
  </table>
<p style="text-align: center;"><a  href="<?php echo base_url()?>index.php/home/cetakPdf" >Cetak PDF</a></p>
<p style="text-align: center;"><a  href="<?php echo base_url()?>index.php/home/export_excel" >Cetak Excel</a></p>
   </body>
    </html>
     <!-- /container -->


