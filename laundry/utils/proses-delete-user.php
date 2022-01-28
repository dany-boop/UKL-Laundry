<?php 
    if($_GET['id_user']){
        include ("../koneksi.php");
        $delete=mysqli_query($conn,"delete from user where id_user='".$_GET['id_user']."'");
        if($delete){
            echo "<script>alert('Sukses hapus data user!');location.href='../admin/user.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus data user! silakan coba kembali!');location.href='../admin/user.php';</script>";
        }
    }
?>