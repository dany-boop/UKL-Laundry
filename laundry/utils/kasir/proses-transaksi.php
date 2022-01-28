<?php
    if($_POST){
        // detail transaction
        $qty = $_POST['qty'];
        $type = $_POST['id_paket'];

        // transanction
        $member = $_POST['member'];
        $date = $_POST['tgl'];
        $deadline = $_POST['batas_waktu'];
        $date_pay = $_POST['tgl_bayar'];
        $status = $_POST['status'];
        $payment = $_POST['dibayar'];

        // session login user
        session_start();
        $user = $_SESSION['id'];
        
        include ("koneksi.php");

        if(empty($member) || empty($date) || empty($deadline) || empty($date_pay) || empty($status) || empty($payment)){
            echo $member."<br>".
            $date."<br>".
            $deadline."<br>".
            $date_pay."<br>".
            $status."<br>".
            $payment."<br>";
    
            // echo "<script>alert('Harap semua data diisi dengan benar!');location.href='../admin/transaksi.php?total_paket=1';</script>";

        } else {
            $insert_transaction = mysqli_query($conn,"insert into transaksi (id_member, tgl, batas_waktu, tgl_bayar, status, dibayar, id_user) value ('".$member."','".$date."','".$deadline."','".$date_pay."','".$status."','".$payment."','".$user."')");
             echo mysqli_error($conn);
            //echo "insert into transaksi (id_member, tgl, batas_waktu, tgl_bayar, status, dibayar, id_user) value ('".$member."','".$date."','".$deadline."','".$date_pay."','".$status."','".$payment."','".$user."')";
            
            if($insert_transaction){
                echo "<script>alert('Transaksi Sukses!');location.href='../../kasir/dashboard-kasir.php';</script>";
            } else {
                echo "<script>alert('Transaksi Gagal! silakan coba kembali!');location.href='../../kasir/transaksi.php?total_paket=1';</script>";
            }
        }

        $id_transaction = mysqli_insert_id($conn);

        for($i=0; $i<count($qty); $i++){
            echo mysqli_error($conn);
            $insert_dtl_transaction = mysqli_query($conn,"insert into detil_transaksi (id_transaksi, id_paket, qty) value ('".$id_transaction."','".$type[$i]."','".$qty[$i]."')");
            echo mysqli_error($conn);
            //echo "insert into detil_transaksi (id_transaksi, id_paket, qty) value ('".$id_transaction."','".$type[$i]."','".$qty[$i]."')"        ;
        }
        
        // insert data to table detail transaction
        $qry_dtl_transaction = mysqli_query($conn,"select * from detil_transaksi order by id_detil_transaksi desc limit 1");
        echo mysqli_error($conn);
        $data_dtl_transaction = mysqli_fetch_array($qry_dtl_transaction);
        $id_transaction = $data_dtl_transaction['id_transaksi'];

        if($insert_dtl_transaction){
            echo "<script>alert('Transaksi Sukses!');location.href='../../kasir/dashboard-kasir.php';</script>";
        } else {
            echo "<script>alert('Transaksi Gagal! silakan coba kembali!');location.href='../../kasir/transaksi.php?total_paket=1';</script>";
        }
    }
?>