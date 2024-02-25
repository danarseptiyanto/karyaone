<?php 

session_start();

    if (!isset($_SESSION["login"])) {
        header("Location: signin.php");
        exit;
    }

require "functions.php";
?>
<html data-theme="dark">
<head>
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet"/>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@picocss/pico@2.0.3/css/pico.min.css"
    />
</head>
<body class="container">
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
    <h1>Tambah Pegawai</h1>
    <hr>
    <form action="" method="POST" enctype="multipart/form-data">
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
        <div>
            <label for="addImage">Foto</label>
            <input name="img" type="file" id="addImage" accept="image/*">
        </div>
        <button type="submit" name="submit">Simpan</button>
    </form>
    <?php
        if (isset($_POST["submit"])) {
            tambah($_POST);
        }
    ?>
    <hr>
    <p>Made by <a href="http://danarandco.my.id" target="_blank">dnr</a></p><br>
</body>
</html>