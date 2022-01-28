<?php 
    if($_GET['nama']){
        include ("../koneksi.php");
        $delete=mysqli_query($conn,"delete from paket where nama='".$_GET['nama']."'");
        if($delete){
            echo "<script>alert('Sukses hapus data produk!');location.href='../admin/produk.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus data produk! silakan coba kembali!');location.href='../admin/produk.php';</script>";
        }
    }
?> 