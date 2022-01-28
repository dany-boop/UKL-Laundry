<?php
    if($_POST){
        $nama=$_POST['nama'];
        $alamat=$_POST['alamat'];
        $jenis_kelamin=$_POST['jenis_kelamin'];
        $tlp=$_POST['tlp'];
       

        if(empty($nama || $alamat || $jenis_kelamin || $tlp )) {
            echo "<script>alert('Harap semua data harus diisi!');location.href='../../kasir/edit-member.php.php?nama=$nama'</script>";
            } else {
            include ("../koneksi.php");
            $query = "update member set nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', tlp='$tlp' where nama='$nama'";
            $update=mysqli_query($conn,$query);
            if($update){
                echo "<script>alert('Sukses update data member!');location.href='../../kasir/tampil-member.php';</script>";
            } else {
            echo "<script>alert('Gagal update data member! silakan coba kembali!');location.href='../../kasir/edit-member.php?nama=".$nama."';</script>";
            } 
        }
    }
?>