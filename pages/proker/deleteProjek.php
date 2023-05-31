<?php
include "koneksi.php";
$kodeProjek = $_GET['hapus'];
$query = mysqli_query($db,"delete from tblProjek where kodeProjek = '$kodeProjek'");
if($query){
    echo"<Script language='JavaScript'>
    alert('Projek Berhasil Dihapus!');
    document.location='main.php?page=daftarProjek';
    </script>";
}
?>