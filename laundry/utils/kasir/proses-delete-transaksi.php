<?php 
    if($_GET['id']){
        include ("koneksi.php");
        $delete=mysqli_query($con,"delete from transaksi where id='".$_GET['id']."'");
        if($delete){
            echo "<script>alert('Sukses hapus data!');location.href='../../kasir/dashboard-kasir.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus data! silakan coba kembali!');location.href='../../kasir/dashboard-kasir.php';</script>";
        }
    }
?>