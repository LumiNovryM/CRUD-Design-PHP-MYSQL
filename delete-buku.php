<?php
require 'connect.php';


$id = $_GET['id'];

$sql = "DELETE FROM data_buku where id = '$id'";
$query = mysqli_query($connect,$sql);

if($query){
    header('Location: data-buku.php');
}else{
    header('Location: delete-buku.php?status=gagal');
}

?>