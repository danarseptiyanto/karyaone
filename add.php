<?php 

session_start();

    if (!isset($_SESSION["login"])) {
        header("Location: signin.php");
        exit;
    }

require "functions.php";
?>
<html>
<head>
    <title>Tambah Data</title>
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
        <li><a href="index.php">Daftar Pegawai</a></li>
        <li><button><a class="contrast" href="add.php">Tambah</button></a></li>
    </ul>
    </nav>

    <br>
    <h1>Tambah Pegawai</h1>
    <hr>
    <form action="" method="POST">
        <div>
            <label for="addNama">Nama</label>
            <input name="nama" type="text" id="addNama">
        </div>
        <div>
            <label for="addJabatan">Jabatan</label>
            <input name="jabatan" type="text" id="addJabatan">
        </div>
        <div>
            <label for="addTanggalLahir">Tanggal Lahir</label>
            <input name="tl" type="text" id="addTanggalLahir">
        </div>
        <div>
            <label for="addEmail">Email</label>
            <input name="email" type="text" id="addEmail">
        </div>
        <div>
            <label for="addImage">Foto</label>
            <input name="img" type="text" id="addImage">
        </div>
        <div>
        <label for="addPegawai">Status Kepegawian</label>
            <select name="pegawai" id="addPegawai">
                <option value="Guru">Guru</option>
                <option value="Staff">Staff</option>
                <option value="Mutasi">Mutasi</option>
            </select>
        </div>
        <div>
            <label for="addAlamat">Alamat</label>
            <input name="alamat" type="text" id="addAlamat">
        </div>
        <div>
            <label for="addMapel">Mengajar Mapel</label>
            <input name="mapel" type="text" id="addMapel">
        </div>
        <div>
            <label for="addIjazah">Ijazah</label>
            <input name="ijazah" type="text" id="addIjazah">
        </div>
        <div>
            <label for="addNIY">NIY</label>
            <input name="niy" type="text" id="addNIY">
        <div>
            <label for="addTglmasuk">Tanggal Masuk</label>
            <input name="tglmasuk" type="text" id="addTglmasuk"?>
        </div>
        <div>
            <label for="addTglmutasi">Tanggal Mutasi</label>
            <input name="tglmutasi" type="text" id="addTglmutasi"?>
        </div>
        <br>
        <button type="submit" name="submit">Simpan</button>
    </form>
    <?php
        if (isset($_POST["submit"])) {
            tambah($_POST);
        }
    ?>
</body>
</html>