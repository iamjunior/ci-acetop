<script src="<?php echo base_url()?>assets/js/jsfungsi/demo.js"></script>
<div class="row">
  <div class="col-xs-12">
    <div class="table-header">
      View 

      <div class="widget-toolbar no-border pull-right">
  			<a href="<?php echo site_url('Supplier/add')?>" class="btn btn-small btn-info" role="button" name="tambah" id="tambah">
  				<i class="icon-check"></i>
  				Tambah
  			</a>
		  </div>
    </div>

    <!-- div.table-responsive -->

    <!-- div.dataTables_borderWrap -->
    <div>
      <table id="demo-table" class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th class="center">No</th>
            <th>Nama</th>
            <th>Phone Office</th>
            <th class="hidden-480">Phone HP</th>
            <th class="hidden-480">Contact Person</th>
            <th class="hidden-480">Email</th>
            <th class="hidden-480">Alamat</th>
            <th></th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td class="center" width="10%"></td>

            <td>1</td>
            <td>Satu</td>
            <td class="hidden-480">Dua</td>
            <td class="hidden-480">Tiga</td>
            <td class="hidden-480">Empat</td>
            <td class="hidden-480">Lima</td>

            <td class="center" width="10%">
              <div class="hidden-sm hidden-xs action-buttons">
                <a href="" class="green">
                  <i class="ace-icon fa fa-pencil bigger-130"></i>
                </a>

                <a class="red" href=""
                  onClick="return confirm('Do you want to Delete  ?')">
                  <i class="ace-icon fa fa-trash-o bigger-130"></i>
                </a>
              </div>

              <div class="hidden-md hidden-lg">
                <div class="inline pos-rel">
                  <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                  </button>

                  <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">

                    <li>
                      <a  href="javascript"
                          data-kode=""
                          data-nama=""
                          data-toggle="modal" data-target="#edit-datasupplier"
                          class="tooltip-success" data-rel="tooltip" title="Edit">
                        <span class="green">
                          <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                        </span>
                      </a>
                    </li>

                    <li>
                      <a href="javascript"
                      data-kode=""
                      data-toggle="modal" data-target="#delete-datasupplier"
                      class="tooltip-error" data-rel="tooltip" title="Delete">
                        <span class="red">
                          <i class="ace-icon fa fa-trash-o bigger-120"></i>
                        </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
