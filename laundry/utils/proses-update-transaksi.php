<?php
    if($_POST){
        // id member
        $member = $_POST['member'];

        // transanction
        $status = $_POST['status'];
        $payment = $_POST['dibayar'];

        include ("koneksi.php");

        if(empty($status) || empty($payment)){
            echo "<script>alert('Harap semua data diisi dengan benar!');location.href='../admin/detil-transaksi.php';</script>";

        } else {
            $qry_member = mysqli_query($conn, "select id_member from member where nama='$member'");
            $row_member = mysqli_fetch_array($qry_member);
            $id_member = $row_member['id_member'];


            $update_transaction = mysqli_query($conn,"update transaksi set status='$status', dibayar='$payment' where id_member='$id_member'");
            
            if($update_transaction){
                echo "<script>alert('Ubah Data Transaksi Sukses!');location.href='../admin/dashboard-admin.php';</script>";
            } else {
                echo "<script>alert('Ubah Data Transaksi Gagal! silakan coba kembali!');location.href='../admin/detil-transaksi.php';</script>";
            }
        }
    }
?>