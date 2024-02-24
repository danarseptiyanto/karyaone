<?php
$conn = mysqli_connect("localhost", "root", "", "daftarguru");

function query($query) {
    global $conn;
    $results = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($results)) {
        $rows[] = $row;
    }
    return $rows;
}

function searchData($keyword, $pegawai) {
    $query = "SELECT * FROM karyawan WHERE pegawai = '$pegawai' AND nama LIKE '%$keyword%'";
    return query($query);
}


function tambah($data) {
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $jabatan = htmlspecialchars($data["jabatan"]);
    $tl = htmlspecialchars($data["tl"]);
    $email = htmlspecialchars($data["email"]);
    $img = htmlspecialchars($data["img"]);
    $pegawai = htmlspecialchars($data["pegawai"]);

    $query = "INSERT INTO karyawan VALUES ('', '$nama', '$jabatan', '$tl', '$email', '$img', '$pegawai')";
   
    if (mysqli_query($conn, $query)) {
            echo "<article>Berhasil Ditambahkan! <a href='index.php'><button>Cek Daftar Karyawan</button></a></article>";
        }
}

function deleteById($id) {
    global $conn;
    $id = mysqli_real_escape_string($conn, $id);
    $query = "DELETE FROM karyawan WHERE id = '$id'";
    mysqli_query($conn, $query);
}

function edit($data) {
    global $conn;
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $jabatan = htmlspecialchars($data["jabatan"]);
    $tl = htmlspecialchars($data["tl"]);
    $email = htmlspecialchars($data["email"]);
    $img = htmlspecialchars($data["img"]);
    $pegawai = htmlspecialchars($data["pegawai"]);

    $query = "UPDATE karyawan SET nama='$nama', jabatan='$jabatan', tl='$tl', email='$email', img='$img', pegawai='$pegawai' WHERE id='$id'";
    
    if (mysqli_query($conn, $query)) {
            header("Location: index.php");;
        }
}

function signup($data) {
    global $conn;
    $username = $data["username"];
    $password = $data["password"];
    $passwordConfirm = $data["passwordConfirm"];

    $queryCekUsername = "SELECT * FROM user WHERE username = '$username'";
    $CekUsername = $conn->query($queryCekUsername);
    
    if ($CekUsername->num_rows > 0) {
        echo "<script>
        alert('Username sudah ada');
        window.location.replace('signup.php');
        </script>";
        exit();
    }

    if ($password !== $passwordConfirm) {
        echo "<script>alert('Password tidak sama')</script>";
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn,"INSERT INTO user VALUES('', '$username', '$password')");
}

?>



