<?php $this->load->view('header_pengguna'); ?>

    <!--Slider-->
    <section id="slide-show">
     <div id="slider" class="sl-slider-wrapper">

        <!--Slider Items-->    
        <div class="sl-slider">
            <!--Slider Item1-->
            <div class="sl-slide item1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                <div class="sl-slide-inner">
                    <div class="container">
                        <img class="pull-right" src="<?php echo base_url()?>assets/user/images/sample/slider/cover1.png" alt="" />
                        
                    </div>
                </div>
            </div>
            <!--/Slider Item1-->

            <!--Slider Item2-->
            <div class="sl-slide item2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                <div class="sl-slide-inner">
                    <div class="container">
                        <img class="pull-right" src="<?php echo base_url()?>assets/user/images/sample/slider/img1.png" alt="" />
                        <h2>Ayo Adukan</h2>
                        <h3 class="gap">Segala yang perlu dibenahi kirim saran melalui Layanan Pengaduan Kampus Politeknik Negeri Malang.</h3>
                    </div>
                </div>
            </div>
            <!--Slider Item2-->

    </div>
    <!--/Slider Items-->

    <!--Slider Next Prev button-->
    <nav id="nav-arrows" class="nav-arrows">
        <span class="nav-arrow-prev"><i class="icon-angle-left"></i></span>
        <span class="nav-arrow-next"><i class="icon-angle-right"></i></span> 
    </nav>
    <!--/Slider Next Prev button-->

</div>
<!-- /slider-wrapper -->           
</section>
<!--/Slider-->

<section id="recent-works">
    <div class="container">
        <div class="center">
            <h3>Pengaduan Terbaru</h3>
        </div>  
        <?php foreach ($wisata_array as $key) { ?>
        <div class="gap"></div>
        <ul class="gallery col-4">
            <!--Item 1-->
            <li>
                <div class="preview">
                <h3><?php echo $key['judul'] ?></h3>
                            <p><?php echo $key['tanggal'] ?> </p>
                    <img src=<?php echo base_url("assets/uploads")."/".$key['foto'] ?>> 
                <div class="desc">
                    <h5><p><?php echo $key['laporan'] ?> </p></h5>
                </div>
                <a class="btn btn-small btn-transparent" href="#">Learn More</a>
                </li>
            <!--/Item 1--> 
<?php } ?>

        </ul>
    </div>

</section>
<?php $this->load->view('footer_pengguna'); ?>

