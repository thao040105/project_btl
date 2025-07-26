<?php
include("../Model/user.php");
if(isset($_POST['sub_dn'])){
    if(empty($_POST['username']) || empty($_POST['password'])){
        echo "<script>alert('Vui lòng nhập đầy đủ thông tin!')</script>";
        echo "<script>window.location='dangnhap.php'</script>";
    }
    else{
        $model = new user();
        $sl_username = $model->sl_user($_POST['username']);
        if($sl_username->num_rows == 0){
            echo "<script>alert('Tên đăng nhập hoặc mật khẩu không đúng!')</script>";
            echo "<script>window.location='dangnhap.php'</script>";
        }
        else{
            $row = $sl_username->fetch_assoc();
            if($row['pass'] != $_POST['password']){
                echo "<script>alert('Tên đăng nhập hoặc mật khẩu không đúng!')</script>";
                echo "<script>window.location='dangnhap.php'</script>";
            }
            else{
                session_start();
                $_SESSION['username'] = $row['username'];
                header("location:../View/trangchu.php");
            }
        }
    }
}

?>