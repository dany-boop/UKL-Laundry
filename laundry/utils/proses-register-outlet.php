<?php
    if($_POST){
        $name=$_POST['nama_outlet'];
        $address=$_POST['alamat'];
        $phone=$_POST['tlp'];
        
        if(empty($name || $address || $phone)) {
            echo "<script>alert('Harap semua data diisi dengan benar!');location.href='../admin/register-outlet.php';</script>";
        } else {
            include ("../koneksi.php");
            $insert = mysqli_query($conn,"insert into outlet (nama_outlet,alamat, tlp) value ('".$name."','".$address."','".$phone."')");
            
            if($insert){
                echo "<script>alert('Sukses menambahkan outlet!');location.href='../admin/outlet.php';</script>";
            } else {
                echo "<script>alert('Gagal menambahkan outlet! silakan coba kembali!');location.href='../admin/register-outlet.php';</script>";
            }
        }
    }
?>