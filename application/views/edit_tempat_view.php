<?php $this->load->view('header_admin1'); ?>

      <!-- Main component for a primary marketing message or call to action -->
      <div id="content">
                <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Tanggapi Aduan</h3>
                        <p class="animated fadeInDown">
                          Tanggapi <span class="fa-angle-right fa"></span> Tanggapi Aduan
                        </p>
                    </div>
                  </div>
                </div>
  
  
  
<?php echo form_open_multipart('home/update/'.$this->uri->segment(3)); ?>
<div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-8">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Tanggapi Aduan</h4>
                        </div>
                         <div class="panel-body" style="padding-bottom:30px;">
                          <div class="col-md-12">
                            <label for="">Judul</label>
                            <input type="text" readonly name="judul" class="form-control" id="judul" placeholder="judul" value= "<?php echo $tempat[0]->judul  ?>">
                            <?php echo form_error('judul'); ?>
                             <label for="">Kategori</label>
                            <input type="text" readonly name="kategori" class="form-control" id="kategori" placeholder="kategori" value= "<?php echo $tempat[0]->kategori ?>">
                                 <?php echo form_error('kategori'); ?>

                              <label for="">Laporan</label>
                            <input type="textarea" readonly name="laporan" class="form-control" id="laporan" placeholder="laporan" value= "<?php echo $tempat[0]->laporan  ?>">
                                 <?php echo form_error('laporan'); ?>

                                 <label for="">gambar</label><br/>
                               <img src=<?php echo base_url("assets/uploads")."/".$tempat[0]->foto  ?>> <br/>
                            

                            <label for="">Tanggapan</label>
                            <input type="textarea" name="tanggapan" class="form-control" id="tanggapan" placeholder="tanggapan" value= "<?php echo $tempat[0]->tanggapan  ?>">
                                 <?php echo form_error('tanggapan'); ?><br/>
     </div>

  <button type="submit" class="btn btn-success">Submit</button>
    <?php echo form_close(); ?>
   
</div></div>
    </div>
      
     <!-- /container -->
<?php $this->load->view('footer_admin'); ?>