<?php 
    if($_GET['nama']){
        include ("../koneksi.php");
        $delete=mysqli_query($conn,"delete from member where nama='".$_GET['nama']."'");
        if($delete){
            echo "<script>alert('Sukses hapus data Member!');location.href='../admin/tampil-member.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus data Member! silakan coba kembali!');location.href='../admin/tampil-member.php';</script>";
        }
    }
?>