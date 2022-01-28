<?php
    if($_POST){
        $name=$_POST['nama'];
        $harga=$_POST['harga'];
        $jenis=$_POST['jenis'];

        if(empty($name || $harga || $jenis)) {
            echo "<script>alert('Harap semua data harus diisi!');location.href='../admin/edit-produk.php.php?nama=$name'</script>";
            } else {
            include ("koneksi.php");
            $query = "update paket set nama='$name', harga='$harga', jenis='$jenis' where nama='$name'";
            $update=mysqli_query($conn,$query);
            if($update){
                echo "<script>alert('Sukses update data Produk!');location.href='../admin/produk.php';</script>";
            } else {
            echo "<script>alert('Gagal update data produk! silakan coba kembali!');location.href='../admin/edit-produk.php?nama=".$name."';</script>";
            } 
        }
    }
?>