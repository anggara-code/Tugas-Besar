<section id="contact">
    <div class="row card">
      <div class="col-sm-12 col-md-12">
        <div class="table-responsive">
          <h3>
            <a href="<?php echo base_url('/C_berita/insertBerita') ?>" class="btn btn-outline-primary">Tambah Data</a>
          </h3>
          <table class="table table-striped table-bordered dataTables">
            <thead>
              <tr>
                <th>No</th>
                <th>judul</th>
                <th>waktu</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <?php
              foreach ($data->result() as $row) {
                ?>
                <tr>
                  <td><?php echo $row->id ?></td>
                  <td><?php echo $row->judul ?></td>
                  <td><?php echo $row->waktu ?></td>
                  <td>
                    <button data-toggle="modal" data-target=".show_<?php echo $row->id ?>" data-toggle="tooltip" data-placement="button" title="Edit Pendaki" class="btn btn-warning">Edit</button>
                    <a href="<?php echo base_url().'/c_pendaki/hapus/'.$row->id?>" class="btn btn-danger">Hapus</a>
                  </td>
                </tr>
                <?php
            }
            ?>
          </table>
        </div>
      </div>
    </div>
</section>
<script src="<?=base_url()?>assets/bootstrap/js/jquery.js"></script>
<script src="<?=base_url()?>assets/dataTables/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/dataTables/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('.dataTables').DataTable();
} );
</script>
