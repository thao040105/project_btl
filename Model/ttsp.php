<?php
    include ("connect.php");
    class ttsp{
        public function insert_sp($danhmuc, $tensp, $gia, $hinhanh, $mota, $soluong){
            global $conn;
            $sql="insert into ttsp (danhmuc, tensp, gia, hinhanh, mota, soluong)
                values('$danhmuc', '$tensp', '$gia', '$hinhanh', '$mota', '$soluong')";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function select_danhmuc($danhmuc){
            global $conn;
            $sql="select* from ttsp where danhmuc = '$danhmuc'";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function get_sp($id){
            global $conn;
            $sql = "SELECT * FROM ttsp WHERE id = '$id'";
            return mysqli_query($conn, $sql);
        }
        
        public function get_sanpham_lienquan($danhmuc, $id){
            global $conn;
            $sql = "SELECT * FROM ttsp WHERE danhmuc = '$danhmuc' AND id != '$id' LIMIT 4";
            $result = mysqli_query($conn, $sql);
            $data = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
            return $data;
        }
        public function get_all_products(){
            global $conn;
            $sql = "SELECT * FROM ttsp";
            return mysqli_query($conn, $sql);
        }
        public function timkiemsp($keyword){
            global $conn;
            $sql = "SELECT * FROM ttsp WHERE tensp LIKE '%$keyword%'";
            return mysqli_query($conn, $sql);
        }
        public function sl(){
            global $conn;
            $sql="select * from ttsp";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function delete_product($id){
            global $conn;
            $sql="DELETE FROM ttsp WHERE id='$id'";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function update_product($id, $danhmuc, $tensp, $gia, $hinhanh, $mota, $soluong){
            global $conn;
            $sql="UPDATE ttsp SET danhmuc='$danhmuc', tensp='$tensp', gia='$gia', hinhanh='$hinhanh', mota='$mota', soluong='$soluong' WHERE id='$id'";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function sl_id_sp($id){
            global $conn;
            $sql="select * from ttsp where id='$id'";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function sl_all(){
            global $conn;
            $sql = "SELECT * FROM ttsp";
            $run = mysqli_query($conn, $sql);
            return mysqli_fetch_all($run, MYSQLI_ASSOC);
        }
        public function update_sp1($id_sp, $danhmuc, $tensp, $gia, $mota, $soluong){
            global $conn;
            $sql = "UPDATE ttsp SET danhmuc='$danhmuc', tensp='$tensp', gia='$gia', mota='$mota', soluong='$soluong' WHERE id='$id_sp'";
            return mysqli_query($conn, $sql);
        }
        
    }

?>