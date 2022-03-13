<?php
    if ($_POST) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        include "../koneksi.php";
        $query_login=mysqli_query($conn,"SELECT * FROM user WHERE username = '".$username."' and password = '".md5($password)."'");

        if (mysqli_num_rows($query_login)>0) {
            $data_login = mysqli_fetch_array($query_login);
            session_start();
            $_SESSION['id']=$data_login['id'];
            $_SESSION['nama']=$data_login['nama'];
            $_SESSION['role']=$data_login['role'];
            $_SESSION['status_login']=true;

            // switch case
            switch($_SESSION['role']){
                case 'admin':
                    header("location:../admin/dashboard-admin.php");
                    break;
                case 'kasir':
                    header("location:../kasir/dashboard-kasir.php");
                    break;
                case 'owner':
                    header("location:../owner/dashboard-owner.php");
                    break;
                default:
                    echo("<script>alert('silakan login terlebih dahulu!');location.href='../login.php'</script>");
            }

            // if else
            if($_SESSION['role']=='admin'){
                echo"<script>location.href='home_admin.php';</script>";
            }else if($_SESSION['role']=='kasir'){
                echo"<script>location.href='home_kasir.php';</script>";
            }else if($_SESSION['role']=='kasir'){
                echo"<script>location.href='home_owner.php';</script>";
            } 
        }else{
            echo "<script>alert('Login Gagal');location.href='../login.php';</script>";
        }
    }
?> 