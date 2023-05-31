<div class="table-responsive">
<table class="table table-border" id="dataTable" cellspacing="0">

    <tr>
        <td>No</td>
        <td>Kode Projek</td>
        <td>Nama Projek</td>
        <td>Project Manager</td>
        <td>Deadline</td>
        <td>Deskripsi</td>
        <td><center>Menu</center></td>
    </tr>
<?php
    include "koneksi.php";
    $sql = "select * from tblProjek";
    $query = mysqli_query($db, $sql);
    $nomor = 1;
    while($data  = mysqli_fetch_array($query)){

    
?>
<style>
    .btn-success{
        padding-left: 18px;
        padding-right: 18px;
    }
</style>
<tr>
        <td><?php echo $nomor; ?></td>
        <td><?php echo $data['kodeProjek'] ?></td>
        <td><?php echo $data['namaProjek'] ?></td>
        <td><?php echo $data['projekManager'] ?></td>
        <td><?php echo $data['deadline'] ?></td>
        <td class = "text-wrap" style="width:60pt"><?php echo $data['deskripsi'] ?></td>
        <td><center><a href="main.php?page=editProjekBaru&idb=<?php echo $data['namaProjek']?>" 
        class="btn btn-sm btn-success">Edit</a>
        <a href="main.php?page=delete&hapus=<?php echo $data['kodeProjek']?>" 
        onclick ="return confirm ('Are you sure to delete this file ?')"
        class="btn btn-sm btn-danger">Hapus</a></center></td>
    </tr>

<?php $nomor++;}?>
</table>
</div>