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
<html data-theme="dark">
<head>
    <title>Sign Up</title>
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
            <li><button><a class='contrast' href='signin.php'><i style='padding: 0 3 0 3' class='ri-login-box-line'></i></button></a></li>
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