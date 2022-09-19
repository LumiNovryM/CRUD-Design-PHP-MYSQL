<?php
include 'connect.php';

if (isset($_POST['simpan'])){
    $id = $_POST['id']; 
    $judul = $_POST['judul']; 
    $tahun_terbit = $_POST['tahun_terbit'];
    $nama_penerbit = $_POST['nama_penerbit']; 
    $nama_pengarang = $_POST['nama_pengarang'];

    $sql = "UPDATE data_buku SET judul='$judul', tahun_terbit='$tahun_terbit', nama_penerbit='$nama_penerbit', nama_pengarang='$nama_pengarang'";

    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: data-buku.php');
    }else {
        header('Location: edit-buku.php?status=gagal'); 
    }
}
?>