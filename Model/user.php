<?php
    include ("connect.php");
    class user{
        public function sl(){
            global $conn;
            $sql="SELECT * FROM user_inf ";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function sl_user( $username){
            global $conn;
            $sql="SELECT * FROM user_inf WHERE username='$username'";
            $run=mysqli_query($conn,$sql);
            return $run;
        } 
        public function insert_user($username, $email, $password){
            global $conn;
            $sql="INSERT INTO user_inf (username, email, pass) VALUES ('$username', '$email', '$password')";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function del_hoso($id){
            global $conn;
            $sql="DELETE FROM user_inf WHERE id_user='$id'";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function sl_id_user($id){
            global $conn;
            $sql="SELECT* from user_inf WHERE id_user='$id'";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function update_user($username, $email, $password){
            global $conn;
            $sql="update user_inf set pass = '$password', email = '$email' WHERE username='$username'";
            $run=mysqli_query($conn,$sql);
            return $run;
        }

        
        

    }
?>