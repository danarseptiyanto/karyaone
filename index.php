<?php

    session_start();

    require "functions.php";
    $karyawanGuru = query("SELECT * FROM karyawan WHERE pegawai='Guru'");
    $karyawanStaff = query("SELECT * FROM karyawan WHERE pegawai='Staff'");
    $karyawanMutasi = query("SELECT * FROM karyawan WHERE pegawai='Mutasi'");
    $nomorKaryawanGuru = 1;
    $nomorKaryawanStaff = 1;
    $nomorKaryawanMutasi = 1;

    if (isset($_GET["cari"])) {
        $karyawanGuru = searchData($_GET["keyword"], "Guru");
        $karyawanStaff = searchData($_GET["keyword"], "Staff");
        $karyawanMutasi = searchData($_GET["keyword"], "Mutasi");
        $keyword = $_GET["keyword"];
    }
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
    <h1>Daftar Pegawai</h1>
    <form action="" method="GET">
        <div style="display: flex; gap: 15px;">
            <input type="text" name="keyword" placeholder="Cari Nama atau Jabatan">
            <button style="width: 100px;" type="submit" name="cari">Cari</button>
        </div>
    </form>
    <div>
        <?php if (isset($_GET["cari"])) { ?>
        <article>Hasil untuk pencarian <b><?= $keyword ?></b></article>
        <?php } ?>
    </div>
    <h4 class="m-none">Guru</h4>
    <div style="overflow-x: auto;">
    <table
      class="striped">
        <thead>
            <tr>
                <th class="p-table table" scope="col">No</th>
                <th class="p-table tablenama" scope="col">Nama</th>
                <th class="p-table" scope="col">Jabatan</th>
                <th class="p-table table" scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($karyawanGuru as $karyawan) : ?> 
            <tr>
                <th class="table" scope="row"><?= $nomorKaryawanGuru ?></th>
                <td class="tablenama"><?= $karyawan["nama"] ?></td>
                <td><?= $karyawan["jabatan"] ?></td>
                <td class="table"><a href="detail.php?id=<?= $karyawan["id"] ?>"><button class="btn-small">Detail</button></a></td>
            </tr>
            <?php $nomorKaryawanGuru++ ?>
            <?php endforeach ?>
        </tbody>
    </table>
    <p>Ditemukan <?= $nomorKaryawanGuru - 1 ?> Data <a href="exportcsv.php?pegawai=Guru"><button class="btn-small secondary">Export CSV</button></a></p>
    <br>
    <h4 class="m-none">Staff</h4>
    <div style="overflow-x: auto;">
    <table class="striped">
        <thead>
            <tr>
                <th class="p-table table" scope="col">No</th>
                <th class="p-table tablenama" scope="col">Nama</th>
                <th class="p-table" scope="col">Jabatan</th>
                <th class="p-table table" scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($karyawanStaff as $karyawan) : ?> 
            <tr>
                <th class="table" scope="row"><?= $nomorKaryawanStaff ?></th>
                <td class="tablenama"><?= $karyawan["nama"] ?></td>
                <td><?= $karyawan["jabatan"] ?></td>
                <td class="table"><a href="detail.php?id=<?= $karyawan["id"] ?>"><button class="btn-small">Detail</button></a></td>
            </tr>
            <?php $nomorKaryawanStaff++ ?>
            <?php endforeach ?>
        </tbody>
    </table>
    <p>Ditemukan <?= $nomorKaryawanStaff - 1 ?> Data <a href="exportcsv.php?pegawai=Staff"><button class="btn-small secondary">Export CSV</button></a></p>
    <br>
    <h4 class="m-none">Guru & Staff Mutasi</h4>
    <div style="overflow-x: auto;">
    <table class="striped">
        <thead>
            <tr>
                <th class="p-table table" scope="col">No</th>
                <th class="p-table tablenama" scope="col">Nama</th>
                <th class="p-table" scope="col">Jabatan</th>
                <th class="p-table table" scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($karyawanMutasi as $karyawan) : ?> 
            <tr>
                <th class="table" scope="row"><?= $nomorKaryawanMutasi ?></th>
                <td class="tablenama"><?= $karyawan["nama"] ?></td>
                <td><?= $karyawan["jabatan"] ?></td>
                <td class="table"><a href="detail.php?id=<?= $karyawan["id"] ?>"><button class="btn-small">Detail</button></a></td>
            </tr>
            <?php $nomorKaryawanMutasi++ ?>
            <?php endforeach ?>
        </tbody>
    </table>
    <p>Ditemukan <?= $nomorKaryawanMutasi - 1 ?> Data <a href="exportcsv.php?pegawai=Mutasi"><button class="btn-small secondary">Export CSV</button></a></p>
    </div>
</body>
</html>