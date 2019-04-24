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
        <!-- left column -->
        <div class="col-md-6" hidden>
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Registrasi</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo site_url('user/register');?>" method="post">
              <div class="box-body">
                <div class="form-group">
                    <div class="col-xs-6">
                        <label for="FullName">Full Name</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter Full Name">
                            </div>
                    </div>
                    <div class="col-xs-6">
                        <label for="username">Username</label>
                        <div class="input-group">
                        <span class="input-group-addon">@</span>
                        <input type="username" class="form-control" id="username" name="username" placeholder="Enter Username">
                    </div>
                </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-6">
                        <label for="FullName">Email</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email">
                            </div>
                    </div>
                    <div class="col-xs-6">
                        <label for="username">Password</label>
                        <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="Password" class="form-control" id="newpassword" name="newpassword" placeholder="Enter Your Password">
                        <span class="input-group-addon"><i onclick="myFunction1()" class="fa fa-eye"></i></span>

                    </div>
                </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-6">
                        <label for="Level">Level</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-level-up"></i></span>
                                <select class="form-control select2" style="width: 100%;" id="level" name="level">
                    <?php 

                        foreach($level as $row)
                        { 
                        echo '<option value="'.$row->id_user_level.'">'.$row->nama_level.'</option>';
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
              <h3 class="box-title">List User</h3>
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
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>Engine version</th>

                </tr>
                </thead>
                <tbody>

                </tbody>
                <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>Engine version</th>

                </tr>
                </tfoot>
              </table>
              </div>
              <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

      <!-- Awal Edit USer -->
        <div class="col-md-12" id="edit" hidden>
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit User</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" class="form_dit" action="<?php echo site_url('user/update_user');?>" method="post">
              <div class="box-body">
                <div class="form-group">
                    <div class="col-xs-6">
                        <label for="FullName">Full Name</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input  type="hidden" class="form-control" id="idusers" name="idusers">
                                <input type="text" class="form-control" id="fullnameedit" name="fullnameedit">
                            </div>
                    </div>
                    <div class="col-xs-6">
                        <label for="username">Username</label>
                        <div class="input-group">
                        <span class="input-group-addon">@</span>
                        <input type="username" class="form-control" id="usernameedit" name="usernameedit" placeholder="Enter Username">
                    </div>
                </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-6">
                        <label for="FullName">Email</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input type="email" class="form-control" id="emailedit" name="emailedit" placeholder="Enter Your Email">
                            </div>
                    </div>
                    <div class="col-xs-6">
                        <label for="username">Password</label>
                        <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="Password" class="form-control" id="passwordedit" name="passwordedit" placeholder="Enter Your Password">
                        <span class="input-group-addon"><i onclick="myFunction()" class="fa fa-eye"></i></span>


                    </div>
                </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-6">
                        <label for="Level">Level</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-level-up"></i></span>
                                    <select class="form-control select2" style="width: 100%;" id="leveledit" name="leveledit">
                                            <?php 

                                                foreach($level as $row)
                                                { 
                                                echo '<option value="'.$row->id_user_level.'">'.$row->nama_level.'</option>';
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
  <!-- Akhir Edit user -->
  <div class="col-md-12" id="akses" hidden>
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
                                        <th width="100px">Beri Akses</th>
                                    </tr>
                                    <?php
                                    $no = 1;
                                    foreach ($menu as $m) {
                                        echo "<tr>
                        <td>$no</td>
                        <td>$m->title</td>
                        <td align='center'><input type='checkbox' ".  checked_akses($this->uri->segment(3), $m->id_menu)." onClick='kasi_akses($m->id_menu)'></td>
                        </tr>";
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
                    // "pageLength": 2,
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
                    ajax: {"url": "User/json", "type": "POST"},
                    columns: [
                        {
                            "data": "user_id",
                            "orderable": false
                        },
                        {"data": "username"},
                        {"data": "username"},
                        {"data": "username"},
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
                url: '<?php echo base_url()?>index.php/User/edit_users/' + code,
                success: function (data) {
                    
                    $('input[name="idusers"]').val(data.id_users);
                    $('input[name="fullnameedit"]').val(data.full_name);
                    $('input[name="usernameedit"]').val(data.username);
                    $('input[name="emailedit"]').val(data.email);
                    $("form select[name=leveledit]").val(data.id_user_level).change();                        
                    $("form select[name=aktifedit]").val(data.is_aktif).change();                        
                }
            });
      });


      // $('#mytable').on('click','.akses',function(e){
      //       code=$(this).data('code');
      //       $('#edit').hide();
      //       $('#akses').hide();
      //       $('#akses').show();
            // $.ajax({
            //     url: '<?php echo base_url()?>index.php/User/edit_users/' + code,
            //     success: function (data) {
                    
            //         $('input[name="idusers"]').val(data.id_users);
            //         $('input[name="fullnameedit"]').val(data.full_name);
            //         $('input[name="usernameedit"]').val(data.username);
            //         $('input[name="emailedit"]').val(data.email);
            //         $("form select[name=leveledit]").val(data.id_user_level).change();                        
            //         $("form select[name=aktifedit]").val(data.is_aktif).change();                        
            //     }
            // });
      // });


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
/</script>