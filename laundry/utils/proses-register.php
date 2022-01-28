<?php
    $nama = $_POST["nama"];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    include "../koneksi.php";
    $input = mysqli_query($conn, "INSERT INTO user
    (nama, username, password, role) VALUES 
    ('".$nama."', '".$username."','".md5($password)."','".$role."')");

    if ($input) {
        echo "<script>alert('Berhasil Registrasi');location.href='../login.php';</script>";
    }
    else {
        echo "<script>alert('Gagal Registrasi');location.href='register-user.php';</script>";
    }
?>