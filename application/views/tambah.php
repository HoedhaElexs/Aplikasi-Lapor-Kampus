<?php $this->load->view('header_admin1'); ?>
      <?php echo form_open_multipart('pengaduan/create1'); ?>
          <!-- start: content -->
            <div id="content">
                <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Tambah Tujuan</h3>
                        <p class="animated fadeInDown">
                          Tambah <span class="fa-angle-right fa"></span> Tambah Tujuan
                        </p>
                    </div>
                  </div>
                </div>
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-8">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Tambah Tujuan</h4>
                        </div>
                         <div class="panel-body" style="padding-bottom:30px;">
                          <div class="col-md-12">
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Nama</label>
                              <div class="col-sm-10"><input type="text" name="nama" class="form-control border-bottom" id="nama" placeholder="nama"></div><?php echo form_error('nama'); ?>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Jabatan</label>
                              <div class="col-sm-10"><input type="text" name="jabatan" class="form-control border-bottom" placeholder="jabatan"></div><?php echo form_error('jabatan');?>
                            </div>
                            <button type="submit" class="btn btn-success">Submit</button>
                            <?php echo form_close();?>
    <?php $this->load->view('footer_admin'); ?>