<?php
require 'connect.php';


$id = $_GET['id'];

$sql = "DELETE FROM data_siswa where id = '$id'";
$query = mysqli_query($connect,$sql);

if($query){
    header('Location: data-siswa.php');
}else{
    header('Location: delete-siswa.php?status=gagal');
}

?>