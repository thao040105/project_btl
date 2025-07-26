<?php
include("connect.php");
class cart{
    public function sl_cart($user, $id_pro){
        global $conn;
        $sql="select * from cart where user_name = '$user' and id_pro = '$id_pro' and id_donhang = 0";
        $run=mysqli_query($conn,$sql);
        return $run;
    }
    public function insert_cart($user,  $soluong, $id_pro,){
        global $conn;
        $sql="insert into cart (user_name , soluong, id_pro,id_donhang)
            values('$user',  '$soluong', '$id_pro',0)";
        $run=mysqli_query($conn,$sql);
        return $run;
    }
    public function update_cart($user,  $soluong, $id_pro){
        global $conn;
        $sql="update cart set soluong = '$soluong' where user_name = '$user' and id_pro = '$id_pro'";
        $run=mysqli_query($conn,$sql);
        return $run;
    }
    public function sl_cart_user($user){
        global $conn;
        $sql="select * from cart where user_name = '$user'  and id_donhang = 0";
        $run=mysqli_query($conn,$sql);
        return $run;
    }
    public function remove_cart($user, $id_pro){
        global $conn;
        $sql="delete from cart where user_name = '$user' and id_pro = '$id_pro'";
        $run=mysqli_query($conn,$sql);
        return $run;
    }
    public function get_cart($user){
        global $conn;
        $sql="select * from cart where user_name = '$user' and id_donhang = 0";
        $run=mysqli_query($conn,$sql);
        return $run;
    }
    public function set_id_donhang($user, $id_donhang,){
        global $conn;
        $sql="update cart set id_donhang = '$id_donhang' where user_name = '$user' and id_donhang = 0";
        $run=mysqli_query($conn,$sql);
        return $run;
    }
    public function sl_sl($user_name){
        global $conn;
        $sql="SELECT SUM(soluong) AS sl FROM cart where user_name = '$user_name' and id_donhang = 0";
        $run=mysqli_query($conn,$sql);
        if ($run) {
            $row = mysqli_fetch_assoc($run); 
            return $row['sl'] ?? 0; 
        } else {
            return 0; 
        }
    }


}


?>