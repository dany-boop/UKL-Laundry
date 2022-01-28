<?php
    if($_POST){
        $name=$_POST['nama'];
        $harga=$_POST['harga'];
        $jenis=$_POST['jenis'];
        
        if(empty($name || $harga || $jenis)) {
            echo "<script>alert('Harap semua data diisi dengan benar!');location.href='../admin/register-produk.php';</script>";
        } else {
            include ("../koneksi.php");
            $insert = mysqli_query($conn,"insert into paket (nama, harga, jenis) value ('".$name."','".$harga."','".$jenis."')");
            
            if($insert){
                echo "<script>alert('Sukses menambahkan produk!');location.href='../admin/produk.php';</script>";
            } else {
                echo "<script>alert('Gagal menambahkan produk! silakan coba kembali!');location.href='../admin/register-produk.php';</script>";
            }
        }
    }
?>