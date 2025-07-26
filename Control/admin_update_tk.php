<?php
    include("../Model/user.php");
    if(isset($_POST['sub_update'])){
        if(empty($_POST['txttendangnhap']) || empty($_POST['txtemail']) ||empty($_POST['txtpass'])){
            echo "<script>alert('Vui lòng nhập đủ thông tin');
             window.location.href = '../View/dangky.php';
            </script>";
        }
        else{
           $model = new user();
              $sl_username = $model->sl_user($_POST['txttendangnhap']);
                
                    $model->update_user($_POST['txttendangnhap'],$_POST['txtemail'],$_POST['txtpass']);
                
                    echo "<script>alert('Cập nhật thành công!')</script>";
                    echo "<script>window.location='../Admin/qltk.php'</script>";
                
        }
    }
?>