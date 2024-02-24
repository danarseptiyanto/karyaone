<?php

    session_start();

    if (isset($_SESSION["login"])) {
        header("Location: index.php");
        exit;
    }

    require "functions.php";
    if (isset($_POST["signup"])) {
        signup($_POST);
    }

?>
<html>
<head>
    <title>Document</title>
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
    <div class="container" style="max-width: 400px;">
    <h1>Sign Up</h1>
    <form action="" method="POST">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="passwordConfirm" placeholder="Konfirmasi Password">
        <button type="submit" name="signup">Daftar</button>
    </form>
    </div>
</body>
</html>