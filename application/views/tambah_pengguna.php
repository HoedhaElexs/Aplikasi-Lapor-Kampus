<?php $this->load->view('header_admin1'); ?>
      <?php echo form_open_multipart('login/create'); ?>
            <div id="content">
                <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Tambah Pengguna</h3>
                        <p class="animated fadeInDown">
                          Tambah <span class="fa-angle-right fa"></span> Tambah Pengguna
                        </p>
                    </div>
                  </div>
                </div>
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-8">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Tambah Pengguna</h4>
                        </div>
                         <div class="panel-body" style="padding-bottom:30px;">
                          <div class="col-md-12">
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Nama</label>
                              <div class="col-sm-10"><input type="text" name="nama" class="form-control border-bottom" id="nama" placeholder="nama"></div><?php echo form_error('nama'); ?>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Username</label>
                              <div class="col-sm-10"><input type="text" name="username" class="form-control border-bottom" id="username" placeholder="username"></div><?php echo form_error('username'); ?>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Password</label>
                              <div class="col-sm-10"><input type="text" name="password" class="form-control border-bottom" id="password" placeholder="password"></div><?php echo form_error('password'); ?>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Level</label>
                              <div class="col-sm-10"><input type="text" name="level" class="form-control border-bottom" id="level" placeholder="admin / user"></div><?php echo form_error('level'); ?>
                            </div></br>
                            <button type="submit" class="btn btn-success">Submit</button>
                            <?php echo form_close(); ?>
    <?php $this->load->view('footer_admin'); ?>