 
  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
        <section class="content-header">
        <h1>
            Claim And Batch Claim
            <small>Edit panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Claim And Batch Claim Edit</li>
        </ol>
        </section>

            <!-- Main content -->
    <section class="content">
      <div class="row">
      <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Open <b>Claim</b></h3>
            </div>
            <!-- /.box-header -->
            <form>

            <div class="box-body">

            <label for="exampleInputEmail1">Input Claim Number</label>
        <div class="input-group input-group-sm">
                <input type="text" id="open_claim" class="form-control">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-info btn-flat btn-action1">Go!</button>
                    </span>
              </div>
              <span class="help-block">Masukan Claim Number, Contoh <b>452573/C/OP/2019/02</b></span>
            </div>
            </form>

            </div>
        </div>


        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">CDV ISSUE <b>Claim</b></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <label for="exampleInputEmail1">Input Claim Number</label>
        <div class="input-group input-group-sm">
                <input type="text" id="cdv_claim" class="form-control">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-info btn-flat btn-action2">Go!</button>
                    </span>
              </div>
              <span class="help-block">Masukan Claim Number, Contoh <b>452573/C/OP/2019/02</span>

            </div>
            </div>
        </div>

        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Open <b>Batch Claim<b></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <label for="exampleInputEmail1">Input Batch Claim Number</label>
        <div class="input-group input-group-sm">
                <input type="text" id="batch_claim_id" class="form-control">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-info btn-flat btn-action3">Go!</button>
                    </span>
              </div>
              <span class="help-block">Masukan Batch Number, Contoh <b>0464/BATCH/035/P/2019</b></span>
            </div>
            </div>
        </div>

        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">CDV ISSUE <b>Batch Claim</b></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <label for="exampleInputEmail1">Input Batch Claim Number</label>
        <div class="input-group input-group-sm">
                <input type="text" id="batch_claim_number" class="form-control">
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-info btn-flat btn-action4">Go!</button>
                    </span>
              </div>
              <span class="help-block">Masukan Batch Number, Contoh <b>0464/BATCH/035/P/2019</b></span>
            </div>
            </div>
        </div>

        <!-- end ROW -->
        </div>
        </section>
</div>
<!-- <div id="myModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                <div class="row">
                <div class="col-md-3">
                </diV>
                <div class="col-md-7 Cekdulu">
                </div>
                <div class="col-md-2">
                </diV>
                </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div> -->
    <form id="add-row-form" action="<?php echo site_url('claim/open_edit_action');?>" method="post">
    <div class="modal fade" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Check Claim</h4>
              </div>
              <div class="modal-body">
                    <div class="row">
                    <input name="claim_id" id="claim_id" type="hidden">
                    <input name="claim_approved" id="claim_approved" type="hidden">
                        <div class="col-md-3">
                        </div>
                            <div class="col-md-7 Cekdulu">
                            </div>
                        <div class="col-md-2">
                        </div>
                    </div>
                    <br><p>Apakah Benar Data Ini? Dan Yakin akan dilakukan Open claim?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        </form>

        <form id="add-row-form" action="<?php echo site_url('claim/cdv_edit_action');?>" method="post">
    <div class="modal fade" id="myModal2">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Check Claim</h4>
              </div>
              <div class="modal-body">
                    <div class="row">
                    <input name="claim_id2" id="claim_id2" type="hidden">
                    <!-- <input name="claim_approved" id="claim_approved" type="hidden"> -->
                        <div class="col-md-3">
                        </div>
                            <div class="col-md-7 Cekdulu">
                            </div>
                        <div class="col-md-2">
                        </div>
                    </div>
                    <br><p>Apakah Benar Data Ini? Dan Yakin akan dilakukan CDV claim?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        </form>


        <form id="add-row-form" action="<?php echo site_url('claim/batch_open');?>" method="post">
    <div class="modal fade" id="myModal3">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Check Claim</h4>
              </div>
              <div class="modal-body">
                    <div class="row">
                    <input name="batch_claim_id_m" id="batch_claim_id_m" type="hidden">
                    <!-- <input name="claim_approved" id="claim_approved" type="hidden"> -->
                        <div class="col-md-3">
                        </div>
                            <div class="col-md-7 batch_claim">
                            </div>
                        <div class="col-md-2">
                        </div>
                    </div>
                    <br><p>Apakah Benar Data Ini? Dan Yakin akan dilakukan Open Batch?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        </form>


    <form id="add-row-form" action="<?php echo site_url('claim/batch_cdv');?>" method="post">
    <div class="modal fade" id="myModal4">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Check Claim</h4>
              </div>
              <div class="modal-body">
                    <div class="row">
                    <input name="batch_claim_id_cdv" id="batch_claim_id_cdv" type="hidden">
                    <!-- <input name="claim_approved" id="claim_approved" type="hidden"> -->
                        <div class="col-md-3">
                        </div>
                            <div class="col-md-7 batch_claim">
                            </div>
                        <div class="col-md-2">
                        </div>
                    </div>
                    <br><p>Apakah Benar Data Ini? Dan Yakin akan dilakukan Open Batch?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        </form>


<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/vendor/bower_components/jquery/dist/jquery.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/toast/toastr.min.css">
<script src="<?php echo base_url(); ?>assets/vendor/toast/toastr.min.js"></script>
<script>

    $('.btn-action1').click(function(){
    var id = $('#open_claim').val();
    var res = id.replace(/\//g, '-');
    $.ajax({
    //     type: "GET",
        url: '<?php echo base_url()?>index.php/Claim/cek_data/' + res,
    //     dataType: 'json',
        success: function(data) {
          console.log(data);
          if (data == ''){   
    alert("What follows is blank COBAAAAAA: " + data);

}
else{   
    alert("What follows is not blank: " + data);
}           
    //  var nama =  'Nama                :       '+data.member_name+
    //                     '<br>RS/Klinik       :       '+data.provider_name+
    //                     '<br>Client          :       '+data.group_name+
    //                     '<br>Claim Charge    :       '+data.claim_charge+
    //                     '<br>CLaim Approve   :       '+data.claim_approved+
    //                     '<br>Status          :       '+data.claim_status;


    //     $('.Cekdulu').html(nama);
    //     $('#claim_id').val(data.claim_id);
    //     $('#claim_approved').val(data.claim_approved);

    //         $('#myModal').modal('show');
    //         $('#open_claim').val("");

        },
        error:function(request, status, error) {
            console.log("ajax call went wrong:" + request.responseText);
            toastr.warning("Data Tidak Ditemukan");

        }
    });
});

$('.btn-action2').click(function(){
    var id = $('#cdv_claim').val();
    var res = id.replace(/\//g, '-');
    alert(id);
    $.ajax({
    //     type: "GET",
        url: '<?php echo base_url()?>index.php/Claim/cek_data/' + res,
    //     dataType: 'json',
        success: function(data) {
            var nama =  'Nama                :       '+data.member_name+
                        '<br>RS/Klinik       :       '+data.provider_name+
                        '<br>Client          :       '+data.group_name+
                        '<br>Claim Charge    :       '+data.claim_charge+
                        '<br>CLaim Approve   :       '+data.claim_approved+
                        '<br>Status          :       '+data.claim_status;


        $('.Cekdulu').html(nama);
        $('#claim_id2').val(data.claim_id);
        // $('#claim_approved').val(data.claim_approved);
        alert(data.claim_id);
            $('#myModal2').modal('show');
            $('#cdv_claim').val("");

        },
        error:function(request, status, error) {
            console.log("ajax call went wrong:" + request.responseText);
            toastr.warning("Data Tidak Ditemukan");

        }
    });
});

$('.btn-action3').click(function(){
    var id = $('#batch_claim_id').val();
    var res = id.replace(/\//g, '-');
    // alert(id);
    $.ajax({
    //     type: "GET",
        url: '<?php echo base_url()?>index.php/Claim/cek_data_batch/' + res,
    //     dataType: 'json',
        success: function(data) {
            var nama =  'Provider Name                :       '+data.provider_name+
                        '<br>Invoice                  :       '+data.invoice_number+
                        '<br>Client                   :       '+data.client_name+
                        '<br>Provider                 :       '+data.provider_name+
                        '<br>Client                   :       '+data.client_name+
                        '<br>Status                   :       '+data.batch_claim_status;


        $('.batch_claim').html(nama);
        $('#batch_claim_id_m').val(data.batch_claim_id);
        // $('#claim_approved').val(data.claim_approved);
            $('#myModal3').modal('show');
            $('#batch_claim_id').val("");

        },
        error:function(request, status, error) {
            console.log("ajax call went wrong:" + request.responseText);
            // alert('Data Tidak Ditemukan');
            toastr.warning("Data Tidak Ditemukan");

        }
    });
});

$('.btn-action4').click(function(){
    var id = $('#batch_claim_number').val();
    var res = id.replace(/\//g, '-');
    // alert(id);
    $.ajax({
    //     type: "GET",
        url: '<?php echo base_url()?>index.php/Claim/cek_data_batch/' + res,
    //     dataType: 'json',
        success: function(data) {
            var nama =  'Provider Name                :       '+data.provider_name+
                        '<br>Invoice                  :       '+data.invoice_number+
                        '<br>Client                   :       '+data.client_name+
                        '<br>Provider                 :       '+data.provider_name+
                        '<br>Client                   :       '+data.client_name+
                        '<br>Status                   :       '+data.batch_claim_status;


        $('.batch_claim').html(nama);
        $('#batch_claim_id_cdv').val(data.batch_claim_id);
        // $('#claim_approved').val(data.claim_approved);
            $('#myModal4').modal('show');
            $('#batch_claim_number').val("");

        },
        error:function(request, status, error) {
            console.log("ajax call went wrong:" + request.responseText);
            toastr.warning("Data Tidak Ditemukan");

        }
    });
});

</script>
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"> -->



<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> -->

<script type="text/javascript">
function toasterOptions() {
    toastr.options = {
      "closeButton": true,
      "debug": false,
      "newestOnTop": true,
      "progressBar": true,
      "positionClass": "toast-bottom-center",
      "preventDuplicates": false,
      "onclick": null,
      "showDuration": "300",
      "hideDuration": "10000",
      "timeOut": "5000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    };
};
toasterOptions();
<?php if($this->session->flashdata('success')){ ?>
    toastr.success("<?php echo $this->session->flashdata('success'); ?>");
<?php }?>
    </script>