<?php
include 'connect.php';

if (isset($_POST['simpan'])){
    $id = $_POST['id']; 
    $judul = $_POST['judul']; 
    $nama_penerbit = $_POST['nama_penerbit']; 
    $tahun_terbit = $_POST['tahun_terbit'];
    $nama_pengarang = $_POST['nama_pengarang'];

    $sql = "INSERT INTO data_buku  VALUES('$id', '$judul', '$nama_penerbit', '$tahun_terbit', '$nama_pengarang')";

    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: data-buku.php');
    }else {
        header('Location: save-buku.php?status=gagal'); 
    }
}
?>