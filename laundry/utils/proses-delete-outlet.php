<?php 
    if($_GET['nama_outlet']){
        include ("../koneksi.php");
        $delete=mysqli_query($conn,"delete from outlet where nama_outlet='".$_GET['nama_outlet']."'");
        if($delete){
            echo "<script>alert('Sukses hapus data outlet!');location.href='../admin/outlet.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus data outlet! silakan coba kembali!');location.href='../admin/outlet.php';</script>";
        }
    }
?> 