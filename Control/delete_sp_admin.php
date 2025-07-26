<?php
   $id=$_GET['id'];
   include('../Model/ttsp.php');
    $model=new ttsp();
    $delete=$model->delete_product($id);
        if($delete) echo "<script> alert('Xóa sản phẩm thành công')
                        window.location='../Admin/ql_sanpham.php'</script>";
        else echo "<script>alert('Chưa thực thi được')</script>";
?>