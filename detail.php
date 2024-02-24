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
            <th scope="col">Judul</th>
            <th scope="col">Detail</th>
            </tr>
        </thead>
        <article>
            <img src="img/<?= $karyawans[0]["img"] ?>" alt="">
        </article>
        <tbody>
            <?php foreach($karyawans as $karyawan) : ?> 
            <tr>
                <td style="padding: 20px">Nama Lengkap</td>
                <td style="padding: 20px"><?= $karyawan["nama"] ?></td>
            </tr>
            <tr>
                <td style="padding: 20px">Jabatan</td>
                <td style="padding: 20px"><?= $karyawan["jabatan"] ?></td>
            </tr>
            <tr>
                <td style="padding: 20px">Tanggal Lahir</td>
                <td style="padding: 20px"><?= $karyawan["tl"] ?></td>
            </tr>
            <tr>
                <td style="padding: 20px">Email</td>
                <td style="padding: 20px"><?= $karyawan["email"] ?></td>
            </tr>
            <tr>
                <td style="padding: 20px">Status Kepegawaian</td>
                <td style="padding: 20px"><?= $karyawan["pegawai"] ?></td>
            </tr>
            <?php endforeach ?>
            <?php $nomor++ ?>
        </tbody>
    </table>
    <a href="edit.php?id=<?= $karyawans[0]["id"] ?>""><button>Ubah</button></a>
    <a href="delete.php?id=<?= $karyawans[0]["id"] ?>"><button class="secondary">Hapus</button></a>
    
    <br>
    <br>
    </div>
</body>
</html>