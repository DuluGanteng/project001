<?php 
/*
$string = "<div class=\"row\" style=\"margin-bottom: 10px\">
            <div class=\"col-md-4\">
                <h2 style=\"margin-top:0px\">".ucfirst($table_name)." List</h2>
            </div>
            <div class=\"col-md-4 text-center\">
                <div style=\"margin-top: 4px\"  id=\"message\">
                    <?php echo \$this->session->userdata('message') <> '' ? \$this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class=\"col-md-4 text-right\">
                <?php echo anchor(site_url('".$c_url."/create'), 'Create', 'class=\"btn btn-primary\"'); ?>";
if ($export_excel == '1') {
    $string .= "\n\t\t<?php echo anchor(site_url('".$c_url."/excel'), 'Excel', 'class=\"btn btn-primary\"'); ?>";
}
if ($export_word == '1') {
    $string .= "\n\t\t<?php echo anchor(site_url('".$c_url."/word'), 'Word', 'class=\"btn btn-primary\"'); ?>";
}
if ($export_pdf == '1') {
    $string .= "\n\t\t<?php echo anchor(site_url('".$c_url."/pdf'), 'PDF', 'class=\"btn btn-primary\"'); ?>";
}
$string .= "\n\t    </div>
        </div>";
*/

$string='<div class="">
    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>'.ucfirst($table_name).' <small> ';
$string .= "\n\t\t\t\t   <?php echo anchor(site_url('".$c_url."/create'), '<i class=\"fa fa-files-o\"></i> Create', 'class=\"btn btn-sm btn-primary\"'); ?>";

if ($export_excel == '1') {
    $string .= "\n\t\t\t\t   <?php echo anchor(site_url('".$c_url."/excel'), ' <i class=\"fa fa-file-excel-o\"></i> Excel', 'class=\"btn btn-sm btn-primary\"'); ?>";
}
if ($export_word == '1') {
    $string .= "\n\t\t\t\t   <?php echo anchor(site_url('".$c_url."/word'), '<i class=\"fa fa-file-word-o\"></i> Word', 'class=\"btn btn-sm btn-primary\"'); ?>";
}
if ($export_pdf == '1') {
    $string .= "\n\t\t\t\t   <?php echo anchor(site_url('".$c_url."/pdf'), 'PDF', 'class=\"btn btn-sm btn-primary\"'); ?>";
}
$string .='        </small></h2><div class="clearfix"></div>
                </div>
            <div class="x_content">';

$string.="
        <table class=\"table table-bordered table-striped\" id=\"datatable-buttonss\">
            <thead>
                <tr>
                    <th width=\"10px\">No</th>";
foreach ($non_pk as $row) {
    $string .= "\n\t\t\t\t<th>" . label($row['column_name']) . "</th>";
}
$string .= "\n\t\t\t\t<th width='103px'>Action</th>
                </tr>
            </thead>";
$string.=" 
        </table>              
            </div>            
        </div>
    </div>
</div>";

$string.="<script src=\"<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>\"></script>
<script src=\"<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>\"></script>
<script src=\"<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>\"></script>
<script type=\"text/javascript\">
$(document).ready(function() {
    var t =$('#datatable-buttonss').DataTable( {
        \"processing\": true,
        \"serverSide\": true,
        \"responsive\": true,
        \"deferRender\": true,
        \"ajax\": \"<?php echo base_url().'index.php/".  strtolower($c)."/data'?>\"
    } );
    t.on( 'order.dt search.dt', function () { t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {  cell.innerHTML = i+1;   } );
    } ).draw();
} );
</script>";

$hasil_view_list = createFile($string, $target."views/" . $c_url . "/" . $v_list_file);


?>