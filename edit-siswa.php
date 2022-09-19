<?php
include 'connect.php';

if (isset($_POST ['simpan'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];

    $sql = "UPDATE data_siswa SET nama='$nama', jurusan='$jurusan', alamat='$alamat', email='$email', telepon='$telepon' WHERE id ='$id'";

    $query = mysqli_query ($connect, $sql);
    if ($query){
        header('Location: data-siswa.php');
    }else{
        header('Location: edit.php?status=gagal');
    }

}
?>