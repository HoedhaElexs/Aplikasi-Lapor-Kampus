<?php $this->load->view('header_pengguna'); ?>
<?php echo form_open_multipart('home/create'); ?>
     <section id="contact-page" class="container">
        <div class="row-fluid">

            <div class="span8">
                <h4>Kolom Pengaduan</h4>
                <div class="status alert alert-success" style="display: none"></div>

                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                  <div class="row-fluid">
                    <div class="span5">
                        <label>Judul</label>
                        <input type="text" name="judul" class="input-block-level" id="judul" required="required" placeholder="judul laporan"><?php echo form_error('judul'); ?>
                        <label>Kategori</label>
                        <input type="text" name="kategori" class="input-block-level" id="kategori" required="required" placeholder="saran / keluhan/ dll"><?php echo form_error('kategori'); ?>
                        <input type="hidden" value="<?php echo date("Y-m-d");?>" name="tanggal" class="input-block-level" id="tanggal" placeholder="saran / keluhan/ dll">
                        
                        <label for="">Foto</label>
                        <input type="file" name="gambar" class="form-control" id="gambar" size="20" ><?php echo form_error('foto'); ?>
                    </div>
                    <div class="span7">
                        <label>Laporan</label>
                        <textarea name="laporan" id="message" required="required" id="laporan" class="input-block-level" rows="8"></textarea><?php echo form_error('laporan'); ?>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary btn-large pull-right">Send Message</button>
                <?php echo form_close(); ?>
                <p> </p>

            </form>
        </div>

        <div class="span3">
            <h2>Alamat Kantor</h2>
            <h4>Politeknik Negeri Malang</h4>
            <p>
                <i class="icon-map-marker pull-left"></i>Jalan Soekarno Hatta No.9, Malang<br>
                Jawa Timur, Indonesia
            </p>
            <p>
                <i class="icon-envelope"></i> &nbsp;lapekam@polinema.ac.id
            </p>
            <p>
                <i class="icon-globe"></i> &nbsp;http://www.lapekam.polinema.ac.id
            </p>
            <p> *) informasi akan diteruskan ke instansi terkait apabila data diisi dengan benar.
            </p>
        </div>

    </div>

</section>

<?php $this->load->view('footer_pengguna'); ?>