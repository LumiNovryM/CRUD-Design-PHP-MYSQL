<?php
include 'connect.php';

$id = $_GET['id'];
$sql = "SELECT * FROM data_buku WHERE id='$id'";
$query = mysqli_query($connect, $sql);
$buk = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die ("data tidak ditemukan");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starbhak Pustaka | Edit</title>
    <!-- CSS -->
    <link rel="stylesheet" href="Style/form-edit.css">
    <!-- Icons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>
    
    <div class="container">
        <!-- SIDEBAR -->
        <div class="sidebar">
            <h5><span class="biru"><a href="index.php">Starbhak</a></span><span class="putih"><a href="index.php">Pustaka</a></span></h5>
            <div class="menu">
                <div class="btn">
                    <ion-icon name="person"></ion-icon>
                    <p><a href="">Data Siswa</a></p>
                </div>
                <div class="btn">
                    <ion-icon name="book"></ion-icon>
                    <p><a href="">Data Buku</a></p>
                </div>
            </div>
            <h5 class="pre" >Preferences</h5>
            <div class="pre-child">
                <ion-icon name="sunny"></ion-icon>
                <p>Light Mode</p>
            </div>
        </div>
        <!-- SIDEBAR -->

        <!-- TABEL -->
        <div class="tabel">
            <div class="header">
                <h2>Edit Data Siswa</h2>
            </div>
            <div class="content">
            <div class="form">
                    <form action="edit-buku.php" method="post">
                        <div class="part">
                            <label>Id :</label>
                            <input type="text"  name="id" value="<?php echo $buk ['id']?>">
                        </div>
                        <div class="part">
                            <label>Judul :</label>
                            <input type="text" required   name="judul" value="<?php echo $buk ['judul']?>">
                        </div>
                        <div class="part">
                            <label >Nama Penerbit :</label>
                            <input type="text" required   name="nama_penerbit" value="<?php echo $buk ['nama_penerbit']?>" >
                        </div>
                        <div class="part">
                            <label>Tahun Terbit :</label>
                            <input type="text" required  name="tahun_terbit" value="<?php echo $buk ['tahun_terbit']?>" >
                        </div>
                        <div class="part">
                            <label>Nama Pengarang :</label>
                            <input type="text" required    name="nama_pengarang" value="<?php echo $buk ['nama_pengarang']?>" >
                        </div>
                        <div class="tombol">
                            <input type="submit" required name="simpan" value="simpan">
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
        <!-- TABEL -->


    </div>



</body>
</html>