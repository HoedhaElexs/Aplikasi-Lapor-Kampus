<?php $this->load->view('header_admin1'); ?>

      <!-- Main component for a primary marketing message or call to action -->
      <div id="content">
                <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Edit Tujuan</h3>
                        <p class="animated fadeInDown">
                          Edit <span class="fa-angle-right fa"></span> Edit Tujuan
                        </p>
                    </div>
                  </div>
                </div>
  
  
  
<?php echo form_open_multipart('home/update1/'.$this->uri->segment(3)); ?>
<div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-8">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Edit Tujuan</h4>
                        </div>
                         <div class="panel-body" style="padding-bottom:30px;">
                          <div class="col-md-12">
                            <label for="">Nama</label>
                            <input type="text"  name="nama" class="form-control" id="nama" placeholder="nama" value= "<?php echo $tujuan[0]->nama  ?>">
                            <?php echo form_error('nama'); ?>
                             <label for="">Jabatan</label>
                            <input type="text"  name="jabatan" class="form-control" id="jabatan" placeholder="jabatan" value= "<?php echo $tujuan[0]->jabatan ?>">
                                 <?php echo form_error('jabatan'); ?> <br/>
     </div>

  <button type="submit" class="btn btn-success">Submit</button>
    <?php echo form_close(); ?>
   
</div></div>
    </div>
      
     <!-- /container -->
<?php $this->load->view('footer_admin'); ?>