<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meetup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <script src="dn.js"></script>
    <link rel="stylesheet" href="/css/header.css">
</head>
<body>
<dangnhap>
        <div class="modol ">

            <form action="process-signup.php " method="post">
                <div class="container10 error">
                
                    <i class="bi bi-x-lg"></i>
                <img src="./img/logo.png" alt="">
                <h1>Sign Up</h1>
                <p>Not a member yet?               <a href="meetup.php">login</a></p>

                <div>

                   <input id='name' type="text" name="txtname" placeholder="Your Name" required autofocus>
                   <small class="smallname"></small>
               </div>
                
               <div>

                   <input id='email' type="email" name="txtemail" placeholder="Email" required autofocus>
                   <small class="smallemail"></small>
               </div>
                
               <div>

                   <input id= 'password' type="password" name="txtpass" placeholder="Password" required autofocus> 
                   <small class="smallpassword"></small>
               </div>
                

                <button type="submit" class="btn-submit">Sign up </button>

                <hr>
                
            </div>
            </form>
        
        </div>

        <style>
            .modol{
position: fixed;
top:0;
height: 100%;
width: 100%;
background: rgba(0,0,0, 0.6);
}

.container10{
    width: 480px;
    height: 100vh;
    border: none;
    border-radius: 10px;
    background: white;
    padding: 50px 80px  ;
    overflow-y: auto;
    margin-left: 35%;
    
  
}

.container10 img{
    width: 70px;
    margin-left: 40%;
}

.container10 i{
    float: right;
    font-size: 20px;
    
}

.container10 h1{
    text-align: center;
}

.container10 p {
    text-align: center;
    
}

.container10 input {
    width: 100%;
    height: 35px;
    margin-top: 50px;
    border-radius: 7px;
    border-width: 1px;
  

}


.container10 .btn-submit{
    margin-top: 50px;
    width: 100%;
    height: 40px;
    background-color: rgb(230, 98, 105);
    color: white;
    font-size: 20px;
    border: none;
    border-radius: 7px;

}

.btn_joh{
    width: 100%;
    border-radius: 5px;
    border-width: 1px;
    background: transparent;
    height: 40px;
    font-size: 18px;
    margin-top: 30px;
}

        </style>
</body>
</html>

<script>
//     var name = document.querySelector('#name')
//     var email = document.querySelector('#email')
//  var password = document.querySelector('#password')
//  var form = document.querySelector('form')

//  function showError(input, message){
//      let parent = input.parentElement;
//      let small = parent.querySelector('.smallname')
//      parent.classList.add('error')
//      small.innerText = message 
//  }  

//  function showSuccess(input){
//     let parent = input.parentElement;
//     let small = parent.querySelector('smallname')
//     parent.classList.remove('error')
//     small.innerText = ''
//  }

//  function checkEmptyError(listInput){
//      let isEmptyError = false;
//      listInput.forEach(input => {
//          input.value = input.value.trim()

//          if(!input.value){
//             isEmptyError = true;
//              showError(input, 'cannot be left blank')
//          }else{
//              showSuccess(input)
//          }

//      });

//      return isEmptyError

//     }

//     form.addEventListener('submit',function(e){
//     e.preventDefault()

//      let isEmptyError = checkEmptyError([name,email,password])
      
//     }

    $(document).ready(function(){

$("#email").change(function(){
    let emailPattern = /(@gmail.com)/;
    if(emailPattern.test($(this).val()) == false){
        $(".smallemail").text("Invalid email").css("color","red");
    }

    $.ajax({
        url : "pro"
    })
})
})
</script>

        
        