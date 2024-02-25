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
    $pegawai = htmlspecialchars($data["pegawai"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $mapel = htmlspecialchars($data["mapel"]);
    $ijazah = htmlspecialchars($data["ijazah"]);
    $niy = htmlspecialchars($data["niy"]);
    $tglmasuk = htmlspecialchars($data["tglmasuk"]);
    $tglmutasi = htmlspecialchars($data["tglmutasi"]);

    $img = uploadImg(); 

    $query = "INSERT INTO karyawan VALUES ('', '$nama', '$jabatan', '$tl', '$email', '$img', '$pegawai', '$alamat', '$mapel', '$ijazah', '$niy', '$tglmasuk', '$tglmutasi')";
   
    if (mysqli_query($conn, $query)) {
            echo "<article>Berhasil Ditambahkan! <a href='index.php'><button>Cek Daftar Karyawan</button></a></article>";
        }
}

function uploadImg() {
    $namaFile = $_FILES['img']['name'];
    $ukuranFile = $_FILES['img']['size'];
    $tmpFile = $_FILES['img']['tmp_name'];
    $typeFile = $_FILES['img']['type'];
    
    $namaFileBaru = uniqid() . "_" . $namaFile;

    if ($typeFile == 'image/jpeg' || $typeFile == 'image/png' || $typeFile == 'image/gif') {
        echo "<script>alert('sukses');</script>";
        move_uploaded_file($tmpFile, 'img/' . $namaFileBaru);
    }
    else {
        echo "<script>alert('yang anda upload bukan gambar!, coba lagi!');</script>";
        exit();
    }

    return $namaFileBaru;

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
    $pegawai = htmlspecialchars($data["pegawai"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $mapel = htmlspecialchars($data["mapel"]);
    $ijazah = htmlspecialchars($data["ijazah"]);
    $niy = htmlspecialchars($data["niy"]);
    $tglmasuk = htmlspecialchars($data["tglmasuk"]);
    $tglmutasi = htmlspecialchars($data["tglmutasi"]);

    $imgLama = htmlspecialchars($data["img"]);

    if( $_FILES['img']['error'] === 4 ) {
		$img = $imgLama;
	} else {
		$img = uploadImg();
	}

    $query = "UPDATE karyawan SET nama='$nama', jabatan='$jabatan', tl='$tl', email='$email', img='$img', pegawai='$pegawai', alamat='$alamat', mapel='$mapel', ijazah='$ijazah', niy='$niy', tglmasuk='$tglmasuk', tglmutasi='$tglmutasi' WHERE id='$id'";
    
    if (mysqli_query($conn, $query)) {
            header("Location: index.php");
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



