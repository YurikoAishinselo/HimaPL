<?php
    if($_POST['proses']){
        include "koneksi.php";
        $extension = array('docx','pdf');
        $nameFile = $_FILES['proposal']['name'];
        $ext = pathinfo($nameFile, PATHINFO_EXTENSION);
        if(!in_array($ext, $extension)){
            echo"Format tidak Mendukung";
        }else{
            move_uploaded_file($_FILES['proposal']['name'],'../../Resources/assets/documentDataBase/' .$nameFile);
        }

        $kodeProjek = $_POST['kodeProjek'];
        $namaProjek = $_POST['namaProjek'];
        $projekManager = $_POST['projekManager'];
        $deadline = $_POST['deadline'];
        $projectDescription = $_POST['projectDescription'];
        $query = mysqli_query($db, "update tblProjek set namaProjek = '$namaProjek', projekManager = '$projekManager', deadline = '$deadline', nameFile = '$nameFile', deskripsi = '$projectDescription' where kodeProjek = '$kodeProjek'")or die(mysqli_error($db));
        if ($query){
            echo "<script language='JavaScript'>
                    document.location='main.php?page=daftarProjek';
                    alert('Projek berhasil ditambahkan');
                </script>";
        } else {echo "Maaf Gagal Mengedit projek";}
    }
?>