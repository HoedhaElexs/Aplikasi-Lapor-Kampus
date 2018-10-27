<?php $this->load->view('header_pengguna'); ?>
    <section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <h1>Pengaduan</h1>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.html">Home</a> <span class="divider">/</span></li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- / .title -->         

    <section id="about-us" class="container main">

        <div class="row-fluid">
            <div class="span8">
                <div class="blog">
                <?php foreach ($wisata_array as $key) { ?>
                    <div class="blog-item well">
                        <a><h2><?php echo $key['judul'] ?></h2></a>
                        <div class="blog-meta clearfix">
                            <p class="pull-left">
                               <i class="icon-calendar"></i> <p><?php echo $key['tanggal'] ?> </p>
                          </p>
                      </div>
                      <p><p><?php echo $key['laporan'] ?> </p></p>
                      <p>TANGGAPAN</p>
                      <p><p><?php echo $key['tanggapan'] ?> </p></p>
                      <a class="btn btn-link" href="#">Read More <i class="icon-angle-right"></i></a>
                  </div>
                  
              <?php } ?>
              <!-- End Blog Item -->

              <div class="gap"></div>

              <!-- Paginationa -->
              <div class="pagination">
                <ul>
                    <li><a href="#"><i class="icon-angle-left"></i></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#"><i class="icon-angle-right"></i></a></li>
                </ul>
            </div>


        </div>
    </div>
    
</div>

</section>


           <?php $this->load->view('footer_pengguna'); ?>

