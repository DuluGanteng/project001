<div class="">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Barang <small> 
				<?php echo anchor(site_url('barang/create'), '<i class="fa fa-files-o"></i> Create', 'class="btn btn-sm btn-primary"'); ?>
				<?php echo anchor(site_url('barang/excel'), ' <i class="fa fa-file-excel-o"></i> Excel', 'class="btn btn-sm btn-primary"'); ?>
				<?php echo anchor(site_url('barang/word'), '<i class="fa fa-file-word-o"></i> Word', 'class="btn btn-sm btn-primary"'); ?>        </small></h2><div class="clearfix"></div>
                </div>
            <div class="x_content">
            <table class="table table-bordered table-striped" id="datatable-buttonss">
                <thead>
                    <tr>
                        <th width="10px">No</th>
                        <th>Id Kategori</th>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th width='103px'>Action</th>
                    </tr>
                </thead> 
            </table>              
            </div>            
        </div>
    </div>
</div>
<!-- Modal -->
  <div id="modal1" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Bagian heading modal</h4>
        </div>
        <!-- body modal -->
        <div class="modal-body">
          
        </div>
        <!-- footer modal -->
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup Modal</button>
        </div>
      </div>
    </div>
  </div>
<!-- end Modal -->
<script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
<script type="text/javascript">
$(document).ready(function() {
    var t =$('#datatable-buttonss').DataTable( {
        "processing": true,
        "serverSide": true,
        "responsive": true,
        "deferRender": true,
        "ajax": "<?php echo base_url().'index.php/barang/data'?>"
    } );
    t.on( 'order.dt search.dt', function () { t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {  cell.innerHTML = i+1;   } );
    } ).draw();
} );
</script>