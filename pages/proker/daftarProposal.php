<div class="table-responsive">
<table class="table table-border" id="dataTable" cellspacing="0">

    <tr>
        <td>No</td>
        <td>Kode Projek</td>
        <td>Nama Projek</td>
        <td>Proposal</td>
    </tr>
<?php
    include "koneksi.php";
    $sql = "select * from tblProjek";
    $query = mysqli_query($db, $sql);
    $nomor = 1;
    while($data  = mysqli_fetch_array($query)){
    $nameFile = $data['nameFile'];
    $path = 'Resources/documentDataBase/';
    

?>
<tr>
        <td><?php echo $nomor; ?></td>
        <td><?php echo $data['kodeProjek'] ?></td>
        <td><?php echo $data['namaProjek'] ?></td>
        <td><a href="Resources/documentDataBase/<?php echo $nameFile;?>" download><?php echo $data['nameFile'] ?></a></td>
    </tr>

<?php $nomor++;}?>
</table>
</div>