<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Halaman Pendaki</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudfare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

	<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/dataTables.semanticui.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css" media="screen">
		th,td
		{
			text-align: center;
		}
	</style>

</head>
<body>
	<div class="container">
		<h1 align="center">Data Pendaki Yang Terdaftar</h1><br>
		<a onclick="return confirm('yakin Ingin Keluar?')" href="<?php echo base_url('c_login/keluar') ?>" class="btn btn-info" style="float: right;">Keluar</a>
		<a style="margin-bottom: 10px;" href="" class="btn btn-primary" data-toggle="modal" data-target="#AddModal">Tambah Data</a>
		<table id="datatable" class="table table-hover table-striped">
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

<!-- <h3 align="left"><? echo anchor('c_login/keluar', 'LOGOUT', 'attributes'); ?></h3> -->
</body>
</html>
<script type="text/javascript">
	$(document).ready(function() {
		$('#datatable').dataTable();
	});
</script>
