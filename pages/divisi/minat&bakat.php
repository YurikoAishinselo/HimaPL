<div class="table-responsive">
<table class="table table-border" id="dataTable" cellspacing="0">
<h1>Minat & Bakat</h1>
<br>
    <tr>
        <td>No</td>
        <td>Nama</td>
        <td>NIM</td>
        <td>Gender</td>
        <td>Birth</td>
        <td>Email</td>
        <td>No Telp</td>
    </tr>
<?php
    include "koneksi.php";
    $sql = "select * from tblAnggota where divisi = 'Minat & Bakat'";
    $query = mysqli_query($db, $sql);
    $nomor = 1;
    while($data  = mysqli_fetch_array($query)){  
?>
<tr>
        <td><?php echo $nomor; ?></td>
        <td><?php echo $data['namaAnggota'] ?></td>
        <td><?php echo $data['NIM'] ?></td>
        <td><?php echo $data['gender'] ?></td>
        <td><?php echo $data['birth'] ?></td>
        <td><?php echo $data['email'] ?></td>
        <td><?php echo $data['phoneNumber'] ?></td>
    </tr>

<?php $nomor++;}?>
</table>
</div>