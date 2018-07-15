<section id="contact">
    <div class="row card">
      <div class="col-sm-12 col-md-12">
        <div class="table-responsive">
          <h3>
            <a href="" class="btn btn-outline-primary" data-toggle="modal" data-target=".AddModal">Tambah Data</a>
          </h3>
          <table class="table table-striped table-bordered dataTables">
            <thead>
              <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Waktu</th>
                <th>Foto</th>
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
                  <td><?php echo $row->foto ?></td>
                  <td>
                    <button data-toggle="modal" data-target=".show_<?php echo $row->id ?>" data-toggle="tooltip" data-placement="button" title="Edit Pendaki" class="btn btn-warning">Edit</button>
                    <a href="<?php echo base_url().'/c_berita/hapus/'.$row->id?>" class="btn btn-danger">Hapus</a>
                  </td>
                </tr>
                <?php
            }
            ?>
          </table>
        </div>
      </div>
    </div>
     <div class="AddModal modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <div class="modal-title">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h3 align="center">TAMBAH BERITA</h3>
            </div>
          </div>
          <div class="modal-body">
            <form action="<?php echo base_url('c_berita/insertBerita') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
              <div class="form-group">
                <Label1>Judul</Label1>
                <input class="form-control" type="text" name="judul" placeholder="Masukkan Judul Berita" required="">
              </div>
              <div class="col-md-12">
                <?php echo form_error('noktp','<span class="text-danger>','</span>')?>
              </div>
              <div class="form-group">
                <Label1>Isi</Label1>
                <textarea class="form-control" type="text" name="isi" placeholder="Masukkan Isi Berita" required=""></textarea>
              </div>
              <div class="col-md-12">
                <?php echo form_error('nama','<span class="text-danger>','</span>')?>
              </div>
              <!-- <div class="form-group">
                <Label1>Waktu</Label1>
                <input class="form-control" type="" name="alamat" placeholder="Masukkan Tanggal Berita" required="">
              </div>
              <div class="col-md-12">
                <?php echo form_error('alamat','<span class="text-danger>','</span>')?>
              </div> -->
              <div class="form-group">
                <Label1>Foto</Label1>
                <input class="form-control" type="file" name="foto" placeholder="Masukkan Foto" required="">
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
    <div class="modal fade show_<?php echo $row->id ?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <div class="modal-title">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h3 align="center">EDIT DATA BERITA</h3>
                </div>
              </div>
              <div class="modal-body">
                <form action="<?php echo base_url('c_berita/updateBerita') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                  <div class="form-group">
                    <input class="form-control" type="hidden" name="id" value="<?php echo $row->id ?>">
                    <Label1>Judul</Label1>
                    <input class="form-control" type="text" name="judul" placeholder="" value="<?php echo $row->judul ?>" required="">
                  </div>
                  <div class="col-md-12">
                    <?php echo form_error('judul','<span class="text-danger>','</span>')?>
                  </div>
                  <div class="form-group">
                    <Label1>Isi</Label1>
                    <textarea class="form-control"  name="isi" placeholder="" required=""><?php echo $row->isi ?></textarea>
                  </div>
                  <div class="col-md-12">
                    <?php echo form_error('isi','<span class="text-danger>','</span>')?>
                  </div>
                  <div class="form-group">
                    <Label1>Foto</Label1>
                    <input class="form-control" type="file" name="foto" placeholder="" value="<?php echo $row->foto ?>" required="">
                  </div>
                  <div class="col-md-12">
                    <?php echo form_error('foto','<span class="text-danger>','</span>')?>
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
</section>
<script src="<?=base_url()?>assets/bootstrap/js/jquery.js"></script>
<script src="<?=base_url()?>assets/dataTables/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/dataTables/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('.dataTables').DataTable();
} );
</script>
