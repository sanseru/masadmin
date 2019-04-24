  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content" >
    <div class="row">


  <div class="col-md-12" id="akses" >
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit User</h3>
            </div>
            <!-- /.box-header -->
            <!-- Table start -->
            <table class="table table-striped">
                <tr>
                <th width="30px">No</th>
                                        <th>Nama Modul</th>
                                        <th></th>
                                        <th width="100px">Beri Akses</th>
                                    </tr>
                                    <?php
                                    $no = 1;
                                    foreach ($menu as $m) {
                                      $this->db->where('is_main_menu',$m->id_menu);
                                      $this->db->where('is_aktif','y');
                                      $submenu = $this->db->get('tbl_menu');
                                      if($submenu->num_rows()>0){
                                        echo "<tr>
                                        <td>$no</td>
                                        <td>$m->title</td>
                                        <td></td>
                                        <td align='center'><input type='checkbox' ".  checked_akses($this->uri->segment(3), $m->id_menu)." onClick='kasi_akses($m->id_menu)'></td>
                                        </tr>";
                                        foreach ($submenu->result() as $sub){
                                          echo "<tr>
                                          <td>##</td>
                                          <td>$sub->title</td>
                                          <td></td>
                                          <td align='center'><input type='checkbox' ".  checked_akses($this->uri->segment(3), $sub->id_menu)." onClick='kasi_akses($sub->id_menu)'></td>
                                          </tr>";
                                        }
                                      }else{
                                        echo "<tr>
                                              <td>$no</td>
                                              <td>$m->title</td>
                                              <td></td>
                                              <td align='center'><input type='checkbox' ".  checked_akses($this->uri->segment(3), $m->id_menu)." onClick='kasi_akses($m->id_menu)'></td>
                                              </tr>";

                                      }

                                              $no++;
                                    }
                                    ?>
              </table>
          </div>
          <!-- /.box -->
        </div>


    </div>
<!-- END ROW -->
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->





<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/vendor/bower_components/jquery/dist/jquery.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>assets/vendor/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <!-- Select2 -->
<script src="<?php echo base_url(); ?>assets/vendor/bower_components/select2/dist/js/select2.full.min.js"></script>




<script type="text/javascript">
    function kasi_akses(id_menu){
        //alert(id_menu);
        var id_menu = id_menu;
        var user = '<?php echo $this->uri->segment(3); ?>';
        //alert(level);
        $.ajax({
            url:"<?php echo base_url()?>index.php/user/kasi_akses_ajax",
            data:"id_menu=" + id_menu + "&user="+ user ,
            success: function(html)
            { 
                //load();
                //alert('sukses');
            }
        });
    }    
</script>