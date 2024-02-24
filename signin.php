<?php

    session_start();

    if (isset($_SESSION["login"])) {
        header("Location: index.php");
        exit;
    }

    require "functions.php";
    if (isset($_POST["signin"])) {
        
        $username = $_POST["username"];
        $password = $_POST["password"];

        $cekUsername = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
        
        if (mysqli_num_rows($cekUsername) === 1 ) {
            $row = mysqli_fetch_assoc($cekUsername);
            if (password_verify($password, $row["password"])) {

                $_SESSION["login"] = true;

                header("Location: index.php");
            }
        }
        
        echo "<script>
        alert('Username / Password Salah');
        window.location.replace('signin.php');
        </script>";
        exit();

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
    <h1>Sign In</h1>
    <form action="" method="POST">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <button type="submit" name="signin">Sign In</button>
    </form>
    </div>
</body>
</html>