<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/home.css">
    <title>Document</title>

    <style>
        *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body{
    background-color: rgb(236, 233, 233);
}

#header {
  display: flex;
  justify-content: space-between ;
  align-items: center;
  width: 100%;
  height: 56px;
  background-color: white;
  padding: 18px;
  position: fixed;
  top: 0;
  left: 0;

 

}

#header  ul {
    list-style: none;
    
}

#header ul li a{
    color: black;
    font-size: 20px;
    
}

.h-left{
    display: flex;
    align-items: center;
}

.h-left img{
    width: 100px;
    margin-left: 0.5rem;
}

.h-search {
    align-items: center;
    display: flex;
}

.h-search form{
    border: 1px solid #ddd;
    height: 28px;
    display: flex;
    margin: 0;
    padding: 0;
    margin-right: 10px;
}

.h-search input{
    width: 300px;
    padding: 10px;
    margin: 0;
    border: none;
    border-radius: 4px;

}

.h-search button{
    height: 100%;
    width: 40px; 
    border: none;
    cursor: pointer;

}

.h-right{
    display: flex;
    align-items: center;

}

.h-right ul{
    display: flex;
    
    padding: 10px;
}

.h-right ul li a{
    padding: 10px;
    font-size: 20px;
}
 .h-right button{
     width: 50px;
     height: 50px;
     font-weight: bold;
     font-size: 10px;
     border: none;
    
     border-radius: 50%;

 }

 .h-right button i{
     color: red;
     margin-right: 3px;
     font-size: 20px;
   
     
 }

 .h-right li a{
     text-decoration: none;

 }


 #nav i {
     margin-top: 50px;
     position: relative;

 }

 #nav ul li a{
     position: absolute;
 
    
 }

 .content img{
     margin-left: 40%;
     margin-top: 80px;
     
 }
 
 .content h1{
    margin-left: 35%;
 }

 .join{
     width: 425px;
     height: 256px;
     background-color: white;
     margin-top: 30px;
     float: left;
     margin-left: 100px;
     
     


 }

 .join img{
     width: 150px;
     margin-left: 0px;
     margin-top: 20px;
     
 }

 .join h5{
     float: right;
     margin-top: 50px;
     margin-right: 80px;
     font-size: 20px;
 }

 .join p{
   margin-left: 50px;
   
   display: inline-block;

 }

 .join button{
     background: transparent;
     border-radius: 8px;
     border-color: turquoise;
     width: 200px;
     height: 50px;
     margin-top: 10px;
     margin-left: 120px;
     font-size: 20px;
     color: blue;
 }

 .join button:hover{
     background: rgb(69, 69, 241);
     color: white;
 }

 .join1{
    width: 425px;
    height: 256px;
    background-color: white;
    margin-top: 30px;
    margin-right: 150px;
    float:right;
    


}

.join1 img{
    width: 150px;
    margin-left: 0px;
    margin-top: 20px;
    
}

.join1 h5{
    float: right;
    margin-top: 50px;
    margin-right: 80px;
    font-size: 20px;
}

.join1 p{
  margin-left: 50px;
  
  display: inline-block;

}

.join1 button{
    background: transparent;
    border-radius: 8px;
    border-color: turquoise;
    width: 200px;
    height: 50px;
    margin-top: 10px;
    margin-left: 120px;
    font-size: 20px;
    color: blue;
}

.join1 button:hover{
    background: rgb(69, 69, 241);
    color: white;
}

.t_search{
    width: 100%;
    height: 324px;
    background: white;
    margin-top: 350px ;
    padding: 48px 40px;
   
}

.rechercher{
    width: 470px;
    margin-left: 100px;
   float: left;
}

.rechercher button{
    width: 100%;
    border-radius: 20px;
    border: none;
    background-color: rgb(233, 98, 98);
    height: 45px;
    margin-top: 30px;
}

.rechercher button:hover{
    background-color: rgb(236, 147, 141);
}

.rechercher input{
   height: 40px;
   width: 200px;
    border-radius: 5px;
    border-width: 1px;
    margin-top: 5px;
}

.input3{
    margin-left: 15px ;
}

.rechercher1{
    width: 470px;
    float: right;
    margin-right: 100px;
}

.rechercher1 button{
    background-color: rgb(18, 159, 214);
    border: none;
    width: auto;
    margin: 10px;
    font-size: 20px;
    border-radius: 20px;
    padding: 10px;
    color: white;
}

.rechercher1 button:hover{
    background-color: rgb(113, 218, 236);
}


.container {
    color: white;
}
.bg{
    color: white;
    padding-top:  5px ;

}

.text-decoration-none{
    color: white;
}

.iconfd i{
    color: white;
    padding: 10px;
    font-size: 25px;
}

.textfd a{
    color: white;
    padding-left: 20px;
}

    </style>
</head>
<body>
    <header>
        <div id="header">
            <div class="h-left">
                <ul>
                    <li><a href="">
                            <i class="fas fa-bars bars"></i>
                        </a>
    
                    </li>
    
                </ul>
                <a href="index.html">
                    <img src="./img/584c57c01fc21103bb375bae.png" alt="">
                </a>
            </div>
    
            <div class="h-search">
                <form action="">
                    <input type="text" placeholder="Search for keyword">
                    <button>
                        <i class="bi bi-search"></i>
    
                    </button>
                </form>
    
                
    
            </div>
    
            <div class="h-right">
                <ul>
                    <li><a href="">
                        <i class="bi bi-chat-left"></i>
                    </a></li>
                    
                    <li><a href="">
                        <i class="bi bi-bell"></i>
                        </a></li>
                      
                </ul>
                <button>
                    <i class="bi bi-person"></i>
                    
                </button>
                <div id="nav">
                    <i class="bi bi-caret-down"></i>
                    <ul >
                        <li><a href="">your events</a></li>
                        <li><a href="">your groups</a></li>
                        <hr>
                        <li><a href="">Display Profil</a></li>
                        <li><a href="">Settings</a></li>
                        <li><a href="">Sign out</a></li>
                    </ul>
                </div>
                        
               
                

            </div>
    
        </div>
    
    </header>

    <main>
        <div class="content">
            <img src="./img/Capture3.PNG" alt="">
            <h1>It's good to see you again</h1>
            <div class="join">
                <img src="./img/Capture4.PNG" alt="">
                <h5>Find your next event</h5>
                <p>Events take place 24/7. What do you want to do?</p>

                <button>Discover event</button>
            </div>

            <div class="join1">
                <img src="./img/Capture5.PNG" alt="">
                <h5>Join other groups</h5>
                <p>As a member, you will receive updates whenever your group schedules new events.</p>

                <button>Join groups</button>
            </div>
        </div>

    </main>

    <slider>
        <div class="t_search">
            <div class="rechercher">
                <h1>Find your next event:</h1>
                <i class="bi bi-search"></i><input  type="text" class="input1" > <input type="text" class="input2"> 
                <input type="text" class="input3"> <input type="text"  class="input4">

               <button>Rechercher</button>
            </div>
            <div class="rechercher1">
                <h1>Find out what's going on:</h1>
                <button>Shortly</button>
                <button>Today</button>
                <button>Tomorrow</button>
                <button>This week</button>
                <button>In line</button>
                <button>In person</button>
               <button>Popular near you</button>
            </div>
        </div>
    </slider>


    <footer class="bg  bg-dark ">


        <div class="container  mt-5 bg-dark">
            
             <h4>
                Create your own Meetup Groups                                  <button type="button" class="btn btn-primary btn-lg">To Start</button>
            </h4>
            <hr>
            <div class="compu row">
                <div class="col-md">
                   <h4>
                       Your Account
                   </h4> 
                   <ul class="list-unstyled">
                       <li><a href="a" class="text-decoration-none">Sign up</a></li>
                       <li><a href="a" class="text-decoration-none">Log in</a></li>
                       <li><a href="a" class="text-decoration-none">Help</a></li>
                   </ul>
                </div>
                <div class="col-md">
                    <h4>Discover</h4>
                    <ul class="list-unstyled">
                        <li><a href="a" class="text-decoration-none">Groups</a></li>
                        <li><a href="a" class="text-decoration-none">Calendar</a></li>
                        <li><a href="a" class="text-decoration-none">Topics</a></li>
                        <li><a href="a" class="text-decoration-none">Cities</a></li>
                        <li><a href="a" class="text-decoration-none">Online Events</a></li>
                        <li><a href="a" class="text-decoration-none">Local Guides</a></li>
                    </ul>
                </div>
                <div class="col-md">
                    <h4>
                        Meetup
                    </h4>
                    <ul class="list-unstyled">
                        <li><a href="a" class="text-decoration-none">About</a></li>
                        <li><a href="a" class="text-decoration-none">Blog</a></li>
                        <li><a href="a" class="text-decoration-none">Meetup Pro</a></li>
                        <li><a href="a" class="text-decoration-none">Careers</a></li>
                        <li><a href="a" class="text-decoration-none">Apps</a></li>
                    </ul>
                </div>
            </div>
            <h4>
                Follow Us
            </h4>
            <div class="iconfd">
                <i class="bi bi-facebook"></i>
                <i class="bi bi-twitter"></i>
                <i class="bi bi-youtube"></i>
                <i class="bi bi-instagram"></i>
            </div>
            <div class="textfd">
                &copy; 2021 Meetup
                <a href="https://help.meetup.com/hc/en-us/articles/360027447252" class="text-decoration-none">Terms Of Service</a>
                <a href="https://help.meetup.com/hc/en-us/articles/360044422391-Privacy-Policy/?urlkey=help&topic=help&__topic_subdomain=1" class="text-decoration-none">Privacy Policy</a>
                <a href="https://help.meetup.com/hc/en-us/articles/360046339551" class="text-decoration-none">Cookie Policy</a>
                <a href="https://help.meetup.com/hc/en-us" class="text-decoration-none">Help</a>
            </div>
        </div>
    </footer>  
</body>
</html>



   