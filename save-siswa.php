<?php
include 'connect.php';

if (isset($_POST['simpan'])){
    $id = $_POST['id']; 
    $nama = $_POST['nama']; 
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat']; 
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];

    $sql = "INSERT INTO data_siswa  VALUES('$id', '$nama', '$jurusan', '$alamat', '$email', '$telepon')";

    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: data-siswa.php');
    }else {
        header('Location: save-siswa.php?status=gagal'); 
    }
}
?>