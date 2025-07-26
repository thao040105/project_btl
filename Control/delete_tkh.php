<?php
 include('../Model/user.php');
 $id = $_GET['id'];
 $data=new user();
 $del=$data->del_hoso($id);
 echo "<script> window.location.href = '../Admin/qltk.php';</script>;";
 ?>