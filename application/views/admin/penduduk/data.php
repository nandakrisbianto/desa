<?php $this->load->view('_partials/head') ?>
<?php $this->load->view('_partials/nav') ?>

    <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item">
            <a href="<?php echo base_url('/') ?>">Admin</a>
          </li>
          <li class="breadcrumb-item active">Data Penduduk</li>
        </ol>

        <!--pesan sistem-->
    <?php if ($this->session->flashdata('success')): ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Berhasil !</strong> <?php echo $this->session->flashdata('success'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <?php endif; ?>
    <!-- end pesan sistem -->

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <div class="row">
              <div class="col">
                 <i class="fas fa-table"></i> Daftar Penduduk
              </div>
              <div class="col text-right">
                <a class="btn btn-primary" href=""><i class="fas fa-plus"></i>Tambah Data</a>
              </div>
            </div>
           </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nik</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>alamat</th>
                    <th>Menu</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php foreach ($penduduk as $data) : ?>
                    <td><?php echo $data->nik; ?></td>
                    <td><?php echo substr($data->nama, 0, 80) ; ?></td>
                    <td><?php echo $data->tmp_lahir; ?></td>
                    <td><?php echo $data->tgl_lahir; ?></td>
                    <td><?php echo $data->jenis_kelamin; ?></td>
                    <td class="small">
                      <?php echo substr($data->alamat, 0, 120) ?>...</td>
                      <td><a class="badge badge-warning" href=""><i class="fa fa-edit"> Edit</i></a> <a onclick="deleteConfirm('<?php echo site_url('admin/penduduk/delete/'.$data->nik) ?>')" href="#!" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a></td>
                  </tr>
                <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

        <!--Modal Delete-->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
              </div>
            </div>
          </div>
        </div>
        <!-- End Modal Delete-->


<script>
function deleteConfirm(url){
  $('#btn-delete').attr('href', url);
  $('#deleteModal').modal();
}
</script>
 <?php $this->load->view('_partials/footer') ?>