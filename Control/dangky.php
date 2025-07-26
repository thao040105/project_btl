<?php
    include("../Model/user.php");
    if(isset($_POST['sub_dk'])){
        if(empty($_POST['txttendangnhap']) || empty($_POST['txtemail']) ||empty($_POST['txtpass']) || empty($_POST['txtrepass'])){
            echo "<script>alert('Vui lòng nhập đủ thông tin');
             window.location.href = '../View/dangky.php';
            </script>";
        }
        else{
           $model = new user();
              $sl_username = $model->sl_user($_POST['txttendangnhap']);
                if($sl_username->num_rows > 0){
                    echo "<script>alert('Tên đăng nhập đã tồn tại!')</script>";
                    echo "<script>window.location='../View/dangky.php'</script>";
                }
                else{
                    if($_POST['txtpass'] != $_POST['txtrepass']){
                        echo "<script>alert('Mật khẩu không khớp!')</script>";
                        echo "<script>window.location='../View/dangky.php'</script>";
                    }
                    else{
                        $model->insert_user($_POST['txttendangnhap'],$_POST['txtemail'],$_POST['txtpass']);
                        echo "<script>alert('Đăng ký thành công!')</script>";
                        echo "<script>window.location='../View/dangnhap.php'</script>";
                    }
                }
        }
    }
?>