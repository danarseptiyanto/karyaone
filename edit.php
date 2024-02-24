<?php 

session_start();

    if (!isset($_SESSION["login"])) {
        header("Location: signin.php");
        exit;
    }

require "functions.php";

$id = $_GET["id"];

$karyawans = query("SELECT * FROM karyawan WHERE id = $id");
?>

<html>
<head>
    <title>Edit Data</title>
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
    <h1>Edit Data Pegawai</h1>
    <hr>
    <form action="" method="POST">
        <?php foreach($karyawans as $karyawan) : ?>
        <input type="hidden" name="id" value="<?=$karyawan["id"] ?>">
        <div>
            <label for="addNama">Nama</label>
            <input name="nama" type="text" id="addNama" value="<?=$karyawan["nama"] ?>">
        </div>
        <div>
            <label for="addJabatan">Jabatan</label>
            <input name="jabatan" type="text" id="addJabatan" value="<?=$karyawan["jabatan"] ?>">
        </div>
        <div>
            <label for="addTanggalLahir">Tanggal Lahir</label>
            <input name="tl" type="text" id="addTanggalLahir" value="<?=$karyawan["tl"] ?>">
        </div>
        <div>
            <label for="addEmail">Email</label>
            <input name="email" type="text" id="addEmail" value="<?=$karyawan["email"] ?>">
        </div>
        <div>
            <label for="addImage">Foto</label>
            <input name="img" type="text" id="addImage" value="<?=$karyawan["img"] ?>">
        </div>
        <div>
        <label for="addPegawai">Status</label>
            <select name="pegawai" id="addPegawai" value="<?=$karyawan["pegawai"] ?>">
                <option style="display: none;" value="<?=$karyawan["pegawai"] ?>" selected><?=$karyawan["pegawai"] ?></option>
                <option value="Guru">Guru</option>
                <option value="Staff">Staff</option>
                <option value="Mutasi">Mutasi</option>
            </select>
        </div>
        <div>
            <label for="addAlamat">Alamat</label>
            <input name="alamat" type="text" id="addAlamat" value="<?=$karyawan["alamat"] ?>">
        </div>
        <div>
            <label for="addMapel">Mengajar Mapel</label>
            <input name="mapel" type="text" id="addMapel" value="<?=$karyawan["mapel"] ?>">
        </div>
        <div>
            <label for="addIjazah">Ijazah</label>
            <input name="ijazah" type="text" id="addIjazah" value="<?=$karyawan["ijazah"] ?>">
        </div>
        <div>
            <label for="addNIY">NIY</label>
            <input name="niy" type="text" id="addNIY" value="<?=$karyawan["niy"] ?>">
        </div>
        <div>
            <label for="addTglmasuk">Tanggal Masuk</label>
            <input name="tglmasuk" type="text" id="addTglmasuk" value="<?=$karyawan["tglmasuk"] ?>">
        </div>
        <div>
            <label for="addTglmutasi">Tanggal Mutasi</label>
            <input name="tglmutasi" type="text" id="addTglmutasi" value="<?=$karyawan["tglmutasi"] ?>">
        </div>
        <br>
        <button type="submit" name="submit">Simpan</button>
        <?php endforeach ?>
    </form>
    <?php
        if (isset($_POST["submit"])) {
            edit($_POST);
        }
    ?>
</body>
</html>