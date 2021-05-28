<?php
include '../model/database.php';
$db=new database();

$aksi=$_GET['aksi'];
if($aksi=="tambah"){
    $db->input($_POST['username'],$_POST['prodi'],$_POST['email']);
    header("location:../view/tampil.php");
}elseif($aksi=="hapus"){
    $db->hapus ($_GET['id']);
    header("location:../view/tampil.php");
}elseif($aksi=="update"){
    $db->update($_POST['id'],$_POST['username'],$_POST['prodi'],$_POST['emailS']);
    header("location:../view/tampil.php");
}
?>

