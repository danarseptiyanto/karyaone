<?php 

session_start();

    if (!isset($_SESSION["login"])) {
        header("Location: signin.php");
        exit;
    }

require "functions.php";

$id = $_GET["id"];
deleteById($id);
header("Location: index.php");
?>