  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Menu
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Menu</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content" >
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Menu</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo site_url('menu/buat_menu');?>" method="post">
              <div class="box-body">
                <div class="form-group">
                    <div class="col-xs-4">
                        <label for="FullName">Title</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-bars"></i></span>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
                            </div>
                    </div>
                    <div class="col-xs-4">
                        <label for="username">URL</label>
                        <div class="input-group">
                        <span class="input-group-addon"><i class ="fa fa-link"></i></span>
                        <input type="username" class="form-control" id="url" name="url" placeholder="Enter Url">
                    </div>
                </div>

                <div class="col-xs-4">
                        <label for="username">ICON</label>
                        <div class="input-group">
                        <span class="input-group-addon"><i class ="fa fa-cubes"></i></span>
                        <input type="username" class="form-control" id="icon" name="icon" placeholder="Enter Url">
                    </div>
                </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-6">
                        <label for="Level">Is Main menu</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-level-up"></i></span>
                                    <select class="form-control select2" style="width: 100%;" id="main_menu" name="main_menu">
                                        <option value="0">MAIN MENU</option>
                                            <?php
                                            $menu = $this->db->get('tbl_menu')->result();
                                            foreach ($menu as $m){
                                                echo '<option value="'.$m->id_menu.'">'.strtoupper($m->title).'</option>';

                                            }
                                            ?>

                                    </select>                            
                            </div>
                    </div>

                    <div class="col-xs-6">
                        <label for="username">Aktif</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-question"></i></span>
                                    <select class="form-control select2" style="width: 100%;" id="aktif" name="aktif">
                                        <option value="">Choose...</option>
                                        <option value="y">Yes</option>
                                        <option value="n">No</option>
                                    </select>                      
                            </div>
                    </div>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
    
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">List Menu</h3>
            </div>
            <!-- /.box-header -->

            <style>
            .dataTables_wrapper {
            font-size: 12px;

            }
            </style>
            <!-- form start -->
              <div class="box-body">
              <table id="mytable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Title</th>
                  <th>URL</th>
                  <th>Icon</th>
                  <th>Is Main Menu</th>
                  <th>Is Aktif</th>
                  <th>View</th>

                </tr>
                </thead>
                <tbody>

                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Title</th>
                  <th>URL</th>
                  <th>Icon</th>
                  <th>Is Main Menu</th>
                  <th>Is Aktif</th>
                  <th>View</th>

                </tr>
                </tfoot>
              </table>
              </div>
              <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

        <div class="col-md-12" id="edit" hidden>
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit User</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" class="form_dit" action="<?php echo site_url('menu/update_menu');?>" method="post">
              <div class="box-body">
              <div class="form-group">
                    <div class="col-xs-4">
                        <label for="FullName">Title</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-bars"></i></span>
                                <input  type="hidden" class="form-control" id="idmenu" name="idmenu">
                                    <input type="text" class="form-control" id="titleedit" name="titleedit" placeholder="Enter Title">
                            </div>
                    </div>
                    <div class="col-xs-4">
                        <label for="username">URL</label>
                        <div class="input-group">
                        <span class="input-group-addon"><i class ="fa fa-link"></i></span>
                        <input type="username" class="form-control" id="urledit" name="urledit" placeholder="Enter Url">
                    </div>
                </div>

                <div class="col-xs-4">
                        <label for="username">ICON</label>
                        <div class="input-group">
                        <span class="input-group-addon"><i class ="fa fa-cubes"></i></span>
                        <input type="username" class="form-control" id="iconedit" name="iconedit" placeholder="Enter Url">
                    </div>
                </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-6">
                        <label for="Level">Is Main menu</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-level-up"></i></span>
                                    <select class="form-control select2" style="width: 100%;" id="main_menuedit" name="main_menuedit">
                                        <option value="0">MAIN MENU</option>
                                            <?php
                                            $menu = $this->db->get('tbl_menu')->result();
                                            foreach ($menu as $m){
                                                echo '<option value="'.$m->id_menu.'">'.strtoupper($m->title).'</option>';

                                            }
                                            ?>

                                    </select>                            
                            </div>
                    </div>

                    <div class="col-xs-6">
                        <label for="username">Aktif</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-question"></i></span>
                                    <select class="form-control select2" style="width: 100%;" id="aktifedit" name="aktifedit">
                                        <option value="">Choose...</option>
                                        <option value="y">Yes</option>
                                        <option value="n">No</option>
                                    </select>                      
                            </div>
                    </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
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


   <!-- Modal delete Product-->
   <form id="add-row-form" action="<?php echo site_url('recruitment/delete_detail');?>" method="post">
       <div class="modal fade" id="ModalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <h4 class="modal-title" id="myModalLabel">Delete Product</h4>
                 </div>
                 <div class="modal-body">
                         <input type="hidden" name="id_users" class="form-control" required>
                         <strong>Are you sure to delete this Users?</strong>
                 </div>
                 <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                      <button type="submit" class="btn btn-success">Yes</button>
                 </div>
              </div>
          </div>
       </div>
   </form>
   <!-- END MODALS -->


<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/vendor/bower_components/jquery/dist/jquery.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>assets/vendor/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <!-- Select2 -->
<script src="<?php echo base_url(); ?>assets/vendor/bower_components/select2/dist/js/select2.full.min.js"></script>

<script type="text/javascript">
            $(document).ready(function() {
                $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
                {
                    return {
                        "iStart": oSettings._iDisplayStart,
                        "iEnd": oSettings.fnDisplayEnd(),
                        "iLength": oSettings._iDisplayLength,
                        "iTotal": oSettings.fnRecordsTotal(),
                        "iFilteredTotal": oSettings.fnRecordsDisplay(),
                        "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                        "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
                    };
                };

                var t = $("#mytable").dataTable({
                    // "scrollX": true,
                    // "scrollY":        '100vh',
                    // "scrollCollapse": true,
                    "pageLength": 2,
                    initComplete: function() {
                        var api = this.api();
                        $('#mytable_filter input')
                                .off('.DT')
                                .on('keyup.DT', function(e) {
                                    if (e.keyCode == 13) {
                                        api.search(this.value).draw();
                            }
                        });
                        
                    },
                    oLanguage: {
                        sProcessing: "loading..."
                    },
                    processing: true,
                    serverSide: true,
                    ajax: {"url": "Menu/json", "type": "POST"},
                    columns: [
                        {
                            "data": "id_menu",
                            "orderable": false
                        },
                        {"data": "title"},
                        {"data": "url"},
                        {"data": "icon"},
                        {"data": "is_main_menu"},
                        {"data": "is_aktif"},
                        {"data": "view"}
                    ],
                    "oLanguage": {
                    "sSearch": "Search"
                    },
                    order: [[0, 'desc']],
                    rowCallback: function(row, data, iDisplayIndex) {
                        var info = this.fnPagingInfo();
                        var page = info.iPage;
                        var length = info.iLength;
                        var index = page * length + (iDisplayIndex + 1);
                        $('td:eq(0)', row).html(index);
                    }
                });
            });

            // get Edit Records
            $('#mytable').on('click','.edit_record',function(e){
            code=$(this).data('code');
            $('#edit').hide();
            $('#edit').show();
            $.ajax({
                url: '<?php echo base_url()?>index.php/Menu/edit_menu/' + code,
                success: function (data) {
                    
                    $('input[name="idmenu"]').val(data.id_menu);
                    $('input[name="titleedit"]').val(data.title);
                    $('input[name="urledit"]').val(data.url);
                    $('input[name="iconedit"]').val(data.icon);
                    $("form select[name=main_menuedit]").val(data.is_main_menu).change();                        
                    $("form select[name=aktifedit]").val(data.is_aktif).change();                        
                }
            });
      });

            // get delete Records
            $('#mytable').on('click','.delete_record',function(){
            var code=$(this).data('code');
            var id_main=$(this).data('position');
            $('#ModalDelete').modal('show');
            $('[name="product_code"]').val(code);
            $('[name="id_main"]').val(test);

            
      });
            // End delete Records
        </script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
  })
</script>

<script>
function myFunction() {
  var x = document.getElementById("passwordedit");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

<script>
function myFunction1() {
  var x = document.getElementById("newpassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

<script>
$(document).ready(function(){
//   $("#mytable").on('click','.edit_record',function(){
//     $('#edit').show();
//   });
  $(".btnclose").click(function(){
    $('#edit').hide();
  });
});
</script>