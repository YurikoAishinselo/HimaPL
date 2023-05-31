<?php
session_start();
include "../../koneksi.php";
$NIM = mysqli_real_escape_string($db, $_POST['NIM']);
$password = mysqli_real_escape_string($db, sha1($_POST['password']));
$login = mysqli_query($db, "select * from tblanggota where NIM = '$NIM' and password = '$password'");
$check = mysqli_num_rows($login);
if ($check > 0) {
    $data = mysqli_fetch_assoc($login);
    $_SESSION['NIM'] = $NIM;
    header("location: ../../main.php");
    }
 else {       
    echo "<script>alert('Gagal Login');
    window.history.back()</script>";
    
}
?>
