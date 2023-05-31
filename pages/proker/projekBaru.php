<form method="post" action="main.php?page=actionDaftarProject" enctype="multipart/form-data">
<h1>Projek Baru</h1>
<br>
<div class="form=row">
	<div class="col-md-12">
		<div class="form-group"><label><b>Kode Projek</b></label></div>
		<input type="text" name="kodeProjek" class="form-control">
	</div>
	<br>
	<div class="col-md-12">
		<div class="form-group"><label><b>Nama Projek</b></label></div>
		<input type="text" name="namaProjek" class="form-control">
	</div>
	<br>
	<div class="col-md-12">
		<div class="form-group"><label><b>Project Manager</b></label></div>
		<input type="text" name="projectManager" class="form-control">
	</div>
	<br>
	<div class="col-md-12">
		<div class="form-group"><label><b>Deadline</b></label></div>
		<input type="date" name="deadline" class="form-control">
	</div>
	<br>
	<div class="col-md-12">
		<div class="form-group"><label><b>Proposal</b></label></div>
		<input type="file" name="proposal" class="form-control">
	</div>
	<br>	
    <div class="col-md-12">
		<div class="form-group"><label><b>Deskripsi Proposal</b></label></div>
		<textarea class="form-control" rows="3" name="projectDescription"></textarea>
	</div>
	<br>

	<input type="submit" name="proses" value="Tambah" class="btm btn-primary px-3 py-1">
</div>

</form>
