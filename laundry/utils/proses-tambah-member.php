<?php
if($_POST){
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $tlp=$_POST['tlp'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    if(empty($nama)){
        echo "<script>alert('name cannot be null');location.href='tambah_kelas.php';</script>";

    } elseif(empty($alamat)){
        echo "<script>alert('adress cannot be null');location.href='tambah_kelas.php';</script>";
        
    } elseif(empty($tlp)){
        echo "<script>alert('telephone cannot be null');location.href='tambah_kelas.php';</script>";
        
    } elseif(empty($jenis_kelamin)){
        echo "<script>alert('gender cannot be null');location.href='tambah_kelas.php';</script>";
    

    } else {
        include ("../koneksi.php");
        $insert=mysqli_query($conn,"insert into member (nama, alamat, jenis_kelamin, tlp) value ('".$nama."','".$alamat."','".$jenis_kelamin."','".$tlp."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan member');location.href='../admin/tambah-member.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan member');location.href='../admin/tambah-member.php';</script>";
        }
    }
}
?>
