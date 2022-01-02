<?php

if(!isset($_POST['btn-submit'])){
  header("location: sign.php");
}

$name = $_POST[ 'txtname'];
$email = $_POST[ 'txtemail'];
$pass = $_POST[ 'txtpass'];
   

   $conn = mysqli_connect('localhost','root','','btl_meetup');
   if(!$conn){
       die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
   }

   $sql01 = "SELECT * FROM db_nguoidung WHERE email = '$email' AND Yourname='$name'";

   $result01 = mysqli_query($conn,$sql01);
   if(mysqli_num_rows($result) > 0){

    $error = "Yourname or Email is existed";
       header("location: signup.php?error=$error"); //Chuyển hướng về Trang quản trị
   }else{
       $sql02 = "INSERT INTO db_nguoidung (Yourname,email,matkhau) values ('$name' , '$email' , '$pass' )";
       $result02 = mysql_query($conn,$sql02);

       if($result02 == true){
           header("location:meetup.php");
       }else{
           $error = "Can not insert record . Please check ....";
           header("location: sigunup.php?error=$error");
       }
   }

   mysqli_close($conn);

?>