<?php
    if($_POST){
        $name=$_POST['nama'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $roles=$_POST['roles'];

        if(empty($name || $username || $password || $roles)) {
            echo "<script>alert('semua data harus diisi!');location.href='../admin/update-employee.php?name=$name'</script>";
            } else {
            include ("koneksi.php");
            $query = "update user set name='$name', username='$username', password='$password', role='$roles' where name='$name'";
            $update=mysqli_query($conn,$query);
            if($update){
                echo "<script>alert('Sukses update data karyawan!');location.href='../admin/employee.php';</script>";
            } else {
            echo "<script>alert('Gagal update data karyawan! silakan coba kembali!');location.href='../admin/update-employee.php?name=".$name."';</script>";
            } 
        }
    }
?>