<?php
 session_start();
 if(isset($_POST['dangnhap'])){
    $email = $_POST['txtemail'];
    $pass  = $_POST['txtpass'];
 
    
    $conn = mysqli_connect('localhost','root','','btl_meetup');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }

    $sql = "SELECT * FROM db_nguoidung WHERE email = '$email' AND matkhau='$pass'";
  
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){

        $_SESSION['ismeetupOK'] = $email;
        header("location: homemeetup.php"); //Chuyển hướng về Trang quản trị
    }else{
        $error = "Bạn nhập thông tin Email hoặc mật khẩu chưa chính xác";
        header("location: meetup.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
    }

    mysqli_close($conn);
}else{
    header("location:meetup.php");
}
?>
