<?php
include 'connect.php';

$id = $_GET['id'];
$sql = "SELECT * FROM data_siswa WHERE id='$id'";
$query = mysqli_query($connect, $sql);
$sw = mysqli_fetch_assoc($query);

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
    <!-- ICO -->
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="Ico/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="Ico/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="Ico/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="Ico/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="Ico/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="Ico/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="Ico/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="Ico/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="Ico/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="Ico/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="Ico/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="Ico/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="Ico/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="Ico/mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="Ico/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="Ico/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="Ico/mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="Ico/mstile-310x310.png" />  
</head>
<body>
    
    <div class="container">
        <!-- SIDEBAR -->
        <div class="sidebar">
            <h5><span class="biru"><a href="index.php">Starbhak</a></span><span class="putih"><a href="index.php">Pustaka</a></span></h5>
            <div class="menu">
                <div class="btn">
                    <ion-icon name="person"></ion-icon>
                    <p><a href="data-siswa.php">Data Siswa</a></p>
                </div>
                <div class="btn">
                    <ion-icon name="book"></ion-icon>
                    <p><a href="data-buku.php">Data Siswa</a></p>
                </div>
            </div>
            <h5 class="pre" >Preferences</h5>
            <div class="pre-child">
                <ion-icon name="sunny"></ion-icon>
                <p>Dark Mode</p>
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
                    <form action="edit-siswa.php" method="post">
                        <div class="part">
                            <label>Id :</label>
                            <input type="text"  name="id" value="<?php echo $sw ['id']?>">
                        </div>
                        <div class="part">
                            <label>Nama :</label>
                            <input type="text" required   name="nama" value="<?php echo $sw ['nama']?>">
                        </div>
                        <div class="part">
                            <label >Jurusan :</label>
                            <input type="text" required   name="jurusan" value="<?php echo $sw ['jurusan']?>" >
                        </div>
                        <div class="part">
                            <label>Alamat :</label>
                            <input type="text" required  name="alamat" value="<?php echo $sw ['alamat']?>" >
                        </div>
                        <div class="part">
                            <label>Email :</label>
                            <input type="text" required    name="email" value="<?php echo $sw ['email']?>" >
                        </div>
                        <div class="part">
                            <label>No.Telp :</label>
                            <input type="text" required   name="telepon" value="<?php echo $sw ['telepon']?>" >
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