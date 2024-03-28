<!-- Vendor js -->
<script src="<?php echo base_url() ?>assets/js/vendor.min.js"></script>

<!-- Bootstrap Datepicker js -->
<script src="<?php echo base_url() ?>assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

<!-- Chart js -->
<script src="<?php echo base_url() ?>assets/vendor/chart.js/chart.min.js"></script>

<!-- Projects Analytics Dashboard App js -->
<script src="<?php echo base_url() ?>assets/js/pages/demo.dashboard-projects.js"></script>

<!-- App js -->
<script src="<?php echo base_url() ?>assets/js/app.min.js"></script>

<!-- Datatables js -->
<script src="<?php echo base_url() ?>assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/datatables.net-fixedcolumns-bs5/js/fixedColumns.bootstrap5.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<!-- <script src="<?php echo base_url() ?>assets/vendor/datatables.net-select/js/dataTables.select.min.js"></script> -->


<!--  Select2 Js -->
<script src="<?php echo base_url() ?>assets/vendor/select2/js/select2.min.js"></script>

<script>
    $(document).ready( function () {
        $('#table_data').DataTable({
            order: [[0, 'desc']],
            stateSave: true
        });
    } );
</script>
<!-- System Modal -->
<script>
function modal_show() {
    $('#modal_show').modal('show')
}
$(document).ready(function(){
    $('.modal_show').on('click',function(){
        var dataNAME = $(this).attr('data-name');
        document.getElementById("modal_title").innerHTML = dataNAME;
        modal_show();
    }); 
});
</script>

<div class="modal fade" id="modal_show" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="modal_title"></h5>
<a class="btn-close" data-bs-dismiss="modal" aria-label="Close" data-dismiss="modal" href="#"></a>
</div>
<div class="modal-body" id="modal_body">
<iframe title="Actvity System" name="_innerpage2" frameborder="0" style="overflow:hidden;height:100%;width:100%;min-height:500px;"></iframe>
</div>
</div>
</div>
 