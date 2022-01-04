<?php

$name1 = $_POST[ 'txtname'];
$email1 = $_POST[ 'txtemail'];
$pass1 = $_POST[ 'txtpass'];
   

   $conn = mysqli_connect('localhost','root','','btl_meetup');
   if(!$conn){
       die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
   }

   $sql01 = "SELECT * FROM db_nguoidung WHERE email = '$email1' ";

   $result01 = mysqli_query($conn,$sql01);
   if(mysqli_num_rows($result01) > 0){

    $error = "Yourname or Email is existed";
       header("location: signup.php?error=$error"); //Chuyển hướng về Trang quản trị
   }else{
        $pass_hash = password_hash($pass1, PASSWORD_DEFAULT);
       $sql02 = "INSERT INTO db_nguoidung (email,tenngdung,pass) values ('$email1','$name1',' $pass_hash' )";
       $result02 = mysqli_query($conn,$sql02);

       if($result02 == true){
           header("location:homemeetup.php");
       }else{
           $error = "Can not insert record . Please check ....";
           header("location: signup.php?error=$error");
       }
   }

   mysqli_close($conn);

?>