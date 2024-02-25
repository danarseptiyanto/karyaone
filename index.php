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
<html data-theme="dark">
<head>
    <title>Manajemen Karyawan</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2.0.3/css/pico.min.css"/>
</head>
<body>
    <div style="background-color: #161B23;">
    <br>
    <nav class="container">
        <ul>
            <li><strong><i class="ri-share-forward-box-line"></i> Employee</strong></li>
        </ul>
        <ul>
            <li><a class="contrast" href="index.php"><i class="ri-list-check-2"></i> Pegawai</a></li>
            <li><a class="contrast" href="add.php"><i class="ri-menu-add-line"></i> Tambah</a></li>
            <?php
            if (isset($_SESSION["login"])) {
                echo "<li><button><a class='contrast' href='signout.php'><i style='padding: 0 3 0 3' class='ri-logout-box-line'></i></button></a></li>";
            } else {
                echo "<li><button><a class='contrast' href='signin.php'><i style='padding: 0 3 0 3' class='ri-login-box-line'></i></button></a></li>";
            }
            ?>
        </ul>
    </nav>
    <br>
    <div class="container">
    <h1>Daftar Pegawai</h1>
    <form action="" method="GET">
        <div style="display: flex; gap: 15px;">
            <input type="text" name="keyword" placeholder="Cari Nama atau Jabatan">
            <button style="width: 100px;" type="submit" name="cari">Cari</button>
        </div>
    </form>
    </div>
    <hr>
    </div>
    <div>
        <?php if (isset($_GET["cari"])) { ?>
        <article>Hasil untuk pencarian <b><?= $keyword ?></b></article>
        <?php } ?>
    </div>
    <div class="container">
    <h4 class="m-none">Guru</h4>
    <div style="overflow-x: auto;">
    <table
      class="striped">
        <thead>
            <tr>
                <th class="p-table table" scope="col">No</th>
                <th class="p-table tablenama" scope="col">Nama</th>
                <th class="p-table" scope="col">Jabatan</th>
                <th class="p-table aksi-table" scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($karyawanGuru as $karyawan) : ?> 
            <tr>
                <th class="table" scope="row"><?= $nomorKaryawanGuru ?></th>
                <td class="tablenama"><?= $karyawan["nama"] ?></td>
                <td><?= $karyawan["jabatan"] ?></td>
                <td><a href="detail.php?id=<?= $karyawan["id"] ?>"><button class="btn-small">Detail</button></a></td>
            </tr>
            <?php $nomorKaryawanGuru++ ?>
            <?php endforeach ?>
        </tbody>
    </table>
    <p>Ditemukan <?= $nomorKaryawanGuru - 1 ?> Data <a href="exportcsv.php?pegawai=Guru"><button style="margin-left: 7;" class="btn-small secondary">Export CSV</button></a></p>
    <br>
    <h4 class="m-none">Staff</h4>
    <div style="overflow-x: auto;">
    <table class="striped">
        <thead>
            <tr>
                <th class="p-table table" scope="col">No</th>
                <th class="p-table tablenama" scope="col">Nama</th>
                <th class="p-table" scope="col">Jabatan</th>
                <th class="p-table aksi-table" scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($karyawanStaff as $karyawan) : ?> 
            <tr>
                <th class="table" scope="row"><?= $nomorKaryawanStaff ?></th>
                <td class="tablenama"><?= $karyawan["nama"] ?></td>
                <td><?= $karyawan["jabatan"] ?></td>
                <td><a href="detail.php?id=<?= $karyawan["id"] ?>"><button class="btn-small">Detail</button></a></td>
            </tr>
            <?php $nomorKaryawanStaff++ ?>
            <?php endforeach ?>
        </tbody>
    </table>
    <p>Ditemukan <?= $nomorKaryawanStaff - 1 ?> Data <a href="exportcsv.php?pegawai=Staff"><button style="margin-left: 7;" class="btn-small secondary">Export CSV</button></a></p>
    <br>
    <h4 class="m-none">Guru & Staff Mutasi</h4>
    <div style="overflow-x: auto;">
    <table class="striped">
        <thead>
            <tr>
                <th class="p-table table" scope="col">No</th>
                <th class="p-table tablenama" scope="col">Nama</th>
                <th class="p-table" scope="col">Jabatan</th>
                <th class="p-table aksi-table" scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($karyawanMutasi as $karyawan) : ?> 
            <tr>
                <th class="table" scope="row"><?= $nomorKaryawanMutasi ?></th>
                <td class="tablenama"><?= $karyawan["nama"] ?></td>
                <td><?= $karyawan["jabatan"] ?></td>
                <td><a href="detail.php?id=<?= $karyawan["id"] ?>"><button class="btn-small">Detail</button></a></td>
            </tr>
            <?php $nomorKaryawanMutasi++ ?>
            <?php endforeach ?>
        </tbody>
    </table>
    <p>Ditemukan <?= $nomorKaryawanMutasi - 1 ?> Data <a href="exportcsv.php?pegawai=Mutasi"><button style="margin-left: 7;" class="btn-small secondary">Export CSV</button></a></p>
    </div>
    <hr>
    <p>Made by <a href="http://danarandco.my.id" target="_blank">dnr</a></p><br>
    </div>
</body>
</html>