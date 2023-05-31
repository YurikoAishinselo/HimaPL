<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
if ($_POST['proses']) {
    include "koneksi.php";
    $extension = array('docx','pdf');
    $nameFile = $_FILES['proposal']['name'];
    $ext = pathinfo($nameFile, PATHINFO_EXTENSION);
    if(!in_array($ext, $extension)){
        echo"Format tidak Mendukung";
    }else{
        move_uploaded_file($_FILES['proposal']['tmp_name'],'Resources/documentDataBase/'.$nameFile);
    }

    $kodeProjek = $_POST['kodeProjek'];
    $namaProjek = $_POST['namaProjek'];
    $projekManager = $_POST['projectManager'];
    $deadline = $_POST['deadline'];
    $test = $_FILES['proposal']['tmp_name'];
    $test2 = $_FILES['proposal']['name'];
    $projectDescription = $_POST['projectDescription'];
    $query = mysqli_query($db, "insert into tblProjek values('$kodeProjek','$namaProjek', '$projekManager', '$deadline', '$nameFile', '$projectDescription')")or die(mysqli_error($db));
    if ($query) {
        echo "<script languange='JavaScript'>
        document.location=' main.php?page=daftarProjek';
        alert('Projek berhasil ditambahkan $test');
        </script>";
    } else {
        echo "Data gagal dimasukkan";
    }
}
?>
