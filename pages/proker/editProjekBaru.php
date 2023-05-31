<?php
include "koneksi.php";
$id = $_GET['idb'];
$sql = mysqli_query($db, "Select * from tblProjek where namaProjek = '$id'");
$data = mysqli_fetch_array($sql);
?>

<form method="post" action="main.php?page=update" enctype="multipart/form-data">
    <div class="form-row">
        <h1>Edit Projek</h1>
		<div class="col-md-12">
		    <div class="form-group"><label><b>Kode Projek</b></label></div>
		    <input type="text" name="kodeProjek" class="form-control" value="<?php echo $data['kodeProjek'] ?>" readonly>
	    </div>
	        <br>
        <div class="col-md-12">
		    <div class="form-group"><label><b>Nama Projek</b></label></div>
		    <input type="text" name="namaProjek" class="form-control" value="<?php echo $data['namaProjek'] ?>">
	    </div>
	        <br>
	    <div class="col-md-12">
		    <div class="form-group"><label><b>Project Manager</b></label></div>
		    <input type="text" name="projekManager" class="form-control" value="<?php echo $data['projekManager'] ?>">
	    </div>
	    <br>
        <div class="col-md-12">
		    <div class="form-group"><label><b>Deadline</b></label></div>
		    <input type="date" name="deadline" class="form-control" value="<?php echo $data['deadline'] ?>">
	    </div>
	    <br>
	    <div class="col-md-12">
		    <div class="form-group"><label><b>Proposal</b></label></div>
		    <input type="file" name="proposal" class="form-control" value="<?php echo $data[''] ?>">
	    </div>
	    <br>
        <div class="col-md-12">
		    <div class="form-group"><label><b>Deskripsi Proposal</b></label></div>
		    <textarea class="form-control" rows="3" name="projectDescription" value="<?php echo $data['deskripsi'] ?>"></textarea>
	    </div>
	    <br>
        <input type="submit" name="proses" value="Confirm" class="btn btn-primary">

		<a href="main.php?page=daftarProjek" 
        class="btn btn-sm btn-danger" style="padding-top: 8px; padding-bottom: 8px; padding-left: 15px; padding-right: 15px;">Cancel</a>
</form>