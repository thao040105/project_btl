<?php
    include ("connect.php");
    class orders{
        public function insert_order($user_name,$hoten,$sdt,$diachi,$cuahang,$email,$tongtien ){
            global $conn;
            $sql="insert into donhang (user_name,hoten,sdt,diachi,cuahang,email,tongtien)
                values('$user_name','$hoten','$sdt','$diachi','$cuahang','$email','$tongtien')";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function select_order($id_user){
            global $conn;
            $sql="select* from orders where id_user = '$id_user'";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function get_order($id_donhang){
            global $conn;
            $sql = "SELECT * FROM orders WHERE id_donhang = '$id_donhang'";
            return mysqli_query($conn, $sql);
        }
        public function sl_id_donhang(){
            global $conn;
            $sql = "SELECT MAX(id_donhang) AS max_id FROM donhang";
            $run = mysqli_query($conn, $sql);
        
            // Kiểm tra nếu truy vấn thành công
            if ($run) {
                $row = mysqli_fetch_assoc($run); // Lấy kết quả dưới dạng mảng kết hợp
                return $row['max_id']; // Trả về giá trị max_id
            } else {
                return null; // Trả về null nếu truy vấn thất bại
            }
        }
        public function layDonHangTheoUser($user_name) {
            global $conn;
            $sql = "SELECT * FROM donhang WHERE user_name = '$user_name'";
            $result = mysqli_query($conn, $sql);
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
        public function sl_all(){
            global $conn;
            $sql = "SELECT * FROM donhang";
            $run = mysqli_query($conn, $sql);
            return mysqli_fetch_all($run, MYSQLI_ASSOC);
        }
        public function sl_id($id){
            global $conn;
            $sql = "SELECT * FROM donhang WHERE id_donhang = '$id'";
            $run = mysqli_query($conn, $sql);
            return $run;
        }
        public function updateTrangThai($id, $trangthai) {
            global $conn;
            $sql = "UPDATE donhang SET trangthai = '$trangthai' WHERE id_donhang = '$id'";
            return mysqli_query($conn, $sql);
        }
        public function delete_order($id_donhang) {
            global $conn;
            $sql = "DELETE FROM donhang WHERE id_donhang = '$id_donhang'";
            return mysqli_query($conn, $sql);
        }
        public function chitietdonhang($id_donhang) {
            global $conn;
            $sql = "SELECT 
                donhang.id_donhang, 
                donhang.user_name, 
                donhang.hoten, 
                donhang.sdt, 
                donhang.diachi, 
                donhang.cuahang, 
                donhang.ngaydat, 
                donhang.tongtien,
                ttsp.tensp,
                ttsp.hinhanh,
                ttsp.gia,
                ttsp.id AS id_sanpham,
                cart.soluong,
                cart.id_cart
            FROM donhang 
            JOIN cart ON donhang.id_donhang = cart.id_donhang
            JOIN ttsp ON cart.id_pro = ttsp.id
            WHERE donhang.id_donhang = '$id_donhang'";
    
            return mysqli_query($conn, $sql);
        }
            public function getDoanhThuNgay($conn) {
            $sql = "SELECT DATE(ngaydat) AS ngay, COUNT(*) AS so_don, SUM(tongtien) AS doanhthu 
                    FROM donhang 
                    GROUP BY DATE(ngaydat) 
                    ORDER BY DATE(ngaydat) DESC";
            return $conn->query($sql);
        }

        public function getDoanhThuThang($conn) {
            $sql = "SELECT MONTH(ngaydat) AS thang, YEAR(ngaydat) AS nam, COUNT(*) AS so_don, SUM(tongtien) AS doanhthu 
                    FROM donhang 
                    GROUP BY MONTH(ngaydat), YEAR(ngaydat) 
                    ORDER BY nam DESC, thang DESC";
            return $conn->query($sql);
        }

        public function getDoanhThuNam($conn) {
            $sql = "SELECT YEAR(ngaydat) AS nam, COUNT(*) AS so_don, SUM(tongtien) AS doanhthu 
                    FROM donhang 
                    GROUP BY YEAR(ngaydat) 
                    ORDER BY nam DESC";
            return $conn->query($sql);
        }
        
    }




?>