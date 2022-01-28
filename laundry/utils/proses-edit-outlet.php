<?php
    if($_POST){
        $name=$_POST['nama_outlet'];
        $address=$_POST['alamat'];
        $phone=$_POST['tlp'];

        if(empty($name || $address || $phone)) {
            echo "<script>alert('Harap semua data harus diisi!');location.href='../admin/edit-outlet.php?nama_outlet=$name'</script>";
            } else {
            include ("../koneksi.php");
            $query = "update outlet set nama_outlet='$name', alamat='$address', tlp='$phone' where nama_outlet='$name'";
            $update=mysqli_query($conn,$query);
            if($update){
                echo "<script>alert('Sukses update data outlet!');location.href='../admin/outlet.php';</script>";
            } else {
            echo "<script>alert('Gagal update data outlet! silakan coba kembali!');location.href='../admin/update-outlet.php?nama_outlet=".$name."';</script>";
            } 
        }
    }
?>