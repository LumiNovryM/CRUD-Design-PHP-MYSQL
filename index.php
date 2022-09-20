<?php
// Koneksi ke database
include 'connect.php';

// Get data
$get_data_siswa = mysqli_query($connect,"SELECT * FROM data_siswa");
$count_data_siswa = mysqli_num_rows($get_data_siswa); // Menghitung seluruh kolom

// Get data
$get_data_buku = mysqli_query($connect,"SELECT * FROM data_buku");
$count_data_buku = mysqli_num_rows($get_data_buku); // Menghitung seluruh kolom

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starbhak Pustaka | Dashboard</title>
    <!-- CSS -->
    <link rel="stylesheet" href="Style/index.css">
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
            <h5><span class="biru"><a href="index.php" style="text-decoration: none; color: #055BF3">Starbhak</a></span><span class="putih"><a href="index.php" style="text-decoration: none; color: white">Pustaka</a></span></h5>
            <div class="menu">
                <div class="btn">
                    <ion-icon name="person"></ion-icon>
                    <p><a href="data-siswa.php">Data Siswa</a></p>
                </div>
                <div class="btn">
                    <ion-icon name="book"></ion-icon>
                    <p><a href="data-buku.php">Data Buku</a></p>
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
                <h2>Dashboard</h2>
                <div class="search">
                    <input type="text" placeholder="search">
                </div>
            </div>
            <div class="content">
                <div class="header">
                    <h4>Atur Datamu</h4>
                   <div class="overview">
                    <form action="">
                    <button><a href="add-siswa.html" style="text-decoration: none; color: white;">Tambah Data Siswa</a></button>
                    <button><a href="add-buku.html" style="text-decoration: none; color: white;">Tambah Data Buku</a></button>
                    </form>
                   </div>
                </div>
                <div class="parent-card">
                    <div class="header">
                        <p>Data Overview</p>
                    </div>
                    <div class="para-card">
                        <div class="card">
                        <div class="icon">
                        <ion-icon name="person"></ion-icon>
                        </div>
                        <div class="teks">
                            <p class="top">Siswa</p>
                            <p class="bottom"><?= $count_data_siswa ?></p>
                        </div>
                        </div>
                        <div class="card">
                            <div class="icon">
                            <ion-icon name="book"></ion-icon>
                            </div>
                            <div class="teks">
                                <p class="top">Buku</p>
                                <p class="bottom"><?= $count_data_buku ?></p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="icon">
                                <ion-icon name="person"></ion-icon>
                            </div>
                            <div class="teks">
                                <p class="top">Visitor</p>
                                <p class="bottom">1</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- TABEL -->


    </div>



</body>
</html>