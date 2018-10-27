<?php $this->load->view('header_admin1'); ?>
            <!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Data Tables</h3>
                        <p class="animated fadeInDown">
                          Table <span class="fa-angle-right fa"></span> Data Tables
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Data Tables</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Nama</th>
                          <th>Username</th>
                          <th>Password</th>
                          <th>Level</th>
                          <th>Edit</th>
                          <th>Hapus</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach ($user_array as $key) { ?>

                      <tr>
                      <td><?php echo $key['nama'] ?></td>
     <td><?php echo $key['username'] ?></td>
     <td><?php echo $key['password'] ?></td>
    <td><?php echo $key['level'] ?></td>
   
     <td>
       <a href="<?php echo site_url('home/update2/') ?><?php echo $key['id'] ?>"><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-tittle="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></a>
     </td>
     <td>
       <a href="<?php echo site_url('home/delete2/') ?><?php echo $key['id'] ?>"><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-danger btn-xs" data-tittle="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-trash"></span></button></p></a>
     </td>
    
    </tr>
    <?php } ?>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>





                        
                       
                        



          
      
<!-- start: Javascript -->
<script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.ui.min.js"></script>
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>



<!-- plugins -->
<script src="<?php echo base_url()?>assets/js/plugins/moment.min.js"></script>
<script src="<?php echo base_url()?>assets/js/plugins/jquery.datatables.min.js"></script>
<script src="<?php echo base_url()?>assets/js/plugins/datatables.bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/js/plugins/jquery.nicescroll.js"></script>


<!-- custom -->
<script src="<?php echo base_url()?>assets/js/main.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#datatables-example').DataTable();
  });
</script>
<!-- end: Javascript -->
</body>
</html>