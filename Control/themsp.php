<?php
include ("../Model/ttsp.php");
if(isset($_POST['txtsub'])){
    if(empty(['txtdanhmuc']) || empty(['txtten']) || empty(['txtgia']) || empty($_FILES['txthinhanh']['name'])  || empty(['txtmota']) || empty(['txtsoluong']) ){
        echo "<script>
        alert('Vui lòng nhập đủ thông tin');
        window.location.href = '../Admin/themsp.php';
        </script>"; 
    }
    else{
        $model = new ttsp();
        $id = uniqid();
        move_uploaded_file($_FILES['txthinhanh']['tmp_name'],'../upload/'.$_FILES['txthinhanh']['name']);
        $insert = $model->insert_sp($_POST['txtdanhmuc'],$_POST['txtten'],$_POST['txtgia'],$_FILES['txthinhanh']['name'],$_POST['txtmota'],$_POST['txtsoluong'] );
        echo "<script>
        alert('Thêm thành công');
        window.location.href = '../Admin/themsp.php';
        </script>";
    }
}
?>