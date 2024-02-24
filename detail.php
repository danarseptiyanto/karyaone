<?php

    session_start();

    if (!isset($_SESSION["login"])) {
         header("Location: signin.php");
         exit;
     }

    require "functions.php";

    $id = $_GET["id"];

    $karyawans = query("SELECT * FROM karyawan WHERE id = $id");
    $nomor = 1;

?>
<html>
<head>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@picocss/pico@2.0.3/css/pico.min.css"
    />
</head>
<body class="container">
    <br>
    <nav>
    <ul>
        <li><strong>Aplikasi</strong></li>
    </ul>
    <ul>
        <li><a href="index.php">Pegawai</a></li>
        <li><a href="add.php">Tambah</a></li>
        <?php
        if (isset($_SESSION["login"])) {
            echo "<li><button class='secondary'><a class='contrast' href='signout.php'>Log Out</button></a></li>";
        } else {
            echo "<li><button class='secondary'><a class='contrast' href='signin.php'>Log In</button></a></li>";
        }
        ?>
    </ul>
    </nav>
    <br>
    <h1><?= $karyawans[0]["nama"] ?></h1>
    <div style="overflow-x: auto;">
    
    <table class="striped">
        <thead>
            <tr>
            <th class="p-table" scope="col">Judul</th>
            <th class="p-table" scope="col">Detail</th>
            </tr>
        </thead>
        <article>
            <img src="img/<?= $karyawans[0]["img"] ?>" alt="">
        </article>
        <tbody>
            <?php foreach($karyawans as $karyawan) : ?> 
            <tr>
                <td class="p-table">Nama Lengkap</td>
                <td class="p-table"><?= $karyawan["nama"] ?></td>
            </tr>
            <tr>
                <td class="p-table">Jabatan</td>
                <td class="p-table"><?= $karyawan["jabatan"] ?></td>
            </tr>
            <tr>
                <td class="p-table">Tanggal Lahir</td>
                <td class="p-table"><?= $karyawan["tl"] ?></td>
            </tr>
            <tr>
                <td class="p-table">Email</td>
                <td class="p-table"><?= $karyawan["email"] ?></td>
            </tr>
            <tr>
                <td class="p-table">Status Kepegawaian</td>
                <td class="p-table"><?= $karyawan["pegawai"] ?></td>
            </tr>
            <tr>
                <td class="p-table">Status Kepegawaian</td>
                <td class="p-table"><?= $karyawan["pegawai"] ?></td>
            </tr>
            <tr>
                <td class="p-table">Alamat</td>
                <td class="p-table"><?= $karyawan["alamat"] ?></td>
            </tr>
            <tr>
                <td class="p-table">Mengajar Mapel</td>
                <td class="p-table"><?= $karyawan["mapel"] ?></td>
            </tr>
            <tr>
                <td class="p-table">Ijazah</td>
                <td class="p-table"><?= $karyawan["ijazah"] ?></td>
            </tr>
            <tr>
                <td class="p-table">NIY</td>
                <td class="p-table"><?= $karyawan["niy"] ?></td>
            </tr>
            <tr>
                <td class="p-table">Tanggal Masuk</td>
                <td class="p-table"><?= $karyawan["tglmasuk"] ?></td>
            </tr>
            <tr>
                <td class="p-table">Tanggal Mutasi</td>
                <td class="p-table"><?= $karyawan["tglmutasi"] ?></td>
            </tr>
            <?php endforeach ?>
            <?php $nomor++ ?>
        </tbody>
    </table>
    <a style="margin-right: 10px;" href="edit.php?id=<?= $karyawans[0]["id"] ?>""><button>Ubah</button></a>
    <a href="delete.php?id=<?= $karyawans[0]["id"] ?>"><button class="secondary">Hapus</button></a>
    
    <br>
    <br>
    </div>
</body>
</html>