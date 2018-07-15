<section id="contact">
    <div class="row card">
      <div class="col-sm-12 col-md-12">
        <div class="table-responsive">
          <h3>
            <a href="" class="btn btn-outline-primary" data-toggle="modal" data-target="#AddModal">Tambah Data</a>
          </h3>
          <table class="table table-striped table-bordered dataTables">
            <thead>
              <tr>
                <th>No</th>
                <th>No. KTP</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No. Hp</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <?php
            if ($data->num_rows() > 0) {
              foreach ($data->result() as $row) {
                ?>
                <tr>
                  <td><?php echo $row->no ?></td>
                  <td><?php echo $row->noktp ?></td>
                  <td><?php echo $row->nama ?></td>
                  <td><?php echo $row->alamat ?></td>
                  <td><?php echo $row->nohp ?></td>
                  <td>
                    <button data-toggle="modal" data-target=".show_<?php echo $row->no ?>" data-toggle="tooltip" data-placement="button" title="Edit Pendaki" class="btn btn-warning">Edit</button>
                    <a href="<?php echo base_url().'/c_pendaki/hapus/'.$row->no?>" class="btn btn-danger">Hapus</a>
                  </td>
                </tr>
                <?php
              }
            }
            ?>
          </table>
        </div>
      </div>
    </div>
    <div id="AddModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <div class="modal-title">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h3 align="center">TAMBAH DATA PENDAKI</h3>
            </div>
          </div>
          <div class="modal-body">
            <form action="<?php echo base_url('c_pendaki/insertPendaki') ?>" method="post" accept-charset="utf-8">
              <div class="form-group">
                <Label1>NO. KTP</Label1>
                <input class="form-control" type="number" name="noktp" placeholder="Masukkan Nomor KTP Atau Tanda Pengenal Anda Yang Lain" required="">
              </div>
              <div class="col-md-12">
                <?php echo form_error('noktp','<span class="text-danger>','</span>')?>
              </div>
              <div class="form-group">
                <Label1>NAMA</Label1>
                <input class="form-control" type="text" name="nama" placeholder="Masukkan Nama Anda Sesuai Kartu Identitas Yang Digunakan" required="">
              </div>
              <div class="col-md-12">
                <?php echo form_error('nama','<span class="text-danger>','</span>')?>
              </div>
              <div class="form-group">
                <Label1>ALAMAT</Label1>
                <input class="form-control" type="text" name="alamat" placeholder="Masukkan Alamat Anda Sesuai Dengan Yang Tertera Pada Kartu Tanda Pengenal Anda" required="">
              </div>
              <div class="col-md-12">
                <?php echo form_error('alamat','<span class="text-danger>','</span>')?>
              </div>
              <div class="form-group">
                <Label1>NO. HP</Label1>
                <input class="form-control" type="number" name="nohp" placeholder="Masukkan No. HP Anda Yang Bisa Dihubungi" required="">
              </div>
              <div class="col-md-12">
                <?php echo form_error('nohp','<span class="text-danger>','</span>')?>
              </div>
              <div class="form-group">
                <Label1></Label1>
                <input type="button" value="Batal" data-dismiss="modal">
                <input type="submit" name="" value="Simpan">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php
    if ($data->num_rows() > 0) {
      foreach ($data->result() as $row) {
        ?>
        <div class="modal fade show_<?php echo $row->no ?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <div class="modal-title">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h3 align="center">EDIT DATA PENDAKI</h3>
                </div>
              </div>
              <div class="modal-body">
                <form action="<?php echo base_url('c_pendaki/updatePendaki') ?>" method="post" accept-charset="utf-8">
                  <div class="form-group">
                    <input class="form-control" type="hidden" name="no" value="<?php echo $row->no ?>">
                    <Label1>NO. KTP</Label1>
                    <input class="form-control" type="number" name="noktp" placeholder="Masukkan Nomor KTP Atau Tanda Pengenal Anda Yang Lain" value="<?php echo $row->noktp ?>" required="">
                  </div>
                  <div class="col-md-12">
                    <?php echo form_error('noktp','<span class="text-danger>','</span>')?>
                  </div>
                  <div class="form-group">
                    <Label1>NAMA</Label1>
                    <input class="form-control" type="text" name="nama" placeholder="Masukkan Nama Anda Sesuai Kartu Identitas Yang Digunakan" value="<?php echo $row->nama ?>" required="">
                  </div>
                  <div class="col-md-12">
                    <?php echo form_error('nama','<span class="text-danger>','</span>')?>
                  </div>
                  <div class="form-group">
                    <Label1>ALAMAT</Label1>
                    <input class="form-control" type="text" name="alamat" placeholder="Masukkan Alamat Anda Sesuai Dengan Yang Tertera Pada Kartu Tanda Pengenal Anda" value="<?php echo $row->alamat ?>" required="">
                  </div>
                  <div class="col-md-12">
                    <?php echo form_error('alamat','<span class="text-danger>','</span>')?>
                  </div>
                  <div class="form-group">
                    <Label1>NO. HP</Label1>
                    <input class="form-control" type="number" name="nohp" placeholder="Masukkan No. HP Anda Yang Bisa Dihubungi" value="<?php echo $row->nohp ?>" required="">
                  </div>
                  <div class="col-md-12">
                    <?php echo form_error('nohp','<span class="text-danger>','</span>')?>
                  </div>
                  <div class="form-group">
                    <Label1></Label1>
                    <input type="button" value="Batal" data-dismiss="modal">
                    <input type="submit" name="" value="Update">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <?php
      }
    }
    ?>
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
