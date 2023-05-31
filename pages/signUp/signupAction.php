<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
if ($_POST['proses']) {
    include "../../koneksi.php";
    $NIM = $_POST['NIM'];
    $namaAnggota = $_POST['namaAnggota'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $birth = $_POST['birth'];
    $gender = $_POST['gender'];
    $divisi = $_POST['divisi'];
    $password = mysqli_real_escape_string($db, sha1($_POST['password']));
    $query = mysqli_query($db, "insert into tblanggota values('$namaAnggota','$NIM','$divisi', '$password', '$gender', '$birth', '$email','$phoneNumber')")or die(mysqli_error($db));
    if ($query) {
        echo "<script languange='JavaScript'>
        document.location='../Login/login.php';
        alert('Projek berhasil ditambahkan');
        </script>";
    } else {
        echo "Data gagal dimasukkan";
    }
}
?>
