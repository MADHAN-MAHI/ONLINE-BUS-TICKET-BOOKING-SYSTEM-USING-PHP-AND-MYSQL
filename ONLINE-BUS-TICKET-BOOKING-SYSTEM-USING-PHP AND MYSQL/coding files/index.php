<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Booking</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- <link rel="stylesheet" href="index.css"> -->
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    
}
body{
    height: 100vh;
    /* background-color: #1dcbd7; */
    background-color:#3399ff; 
    width: 100%;
    overflow: hidden;
}
.content{
    position: absolute; 
    /* width:50%; */
    
     /* top: 300px; */
      
    margin-top:10px;
     margin-left: 200px;
    z-index: 2;
} 
.content h3{
    color:white;
    text-align:center;
}
.content p{
    color:white;
    padding:10px;
}
.img-fluid{
    position: relative;
    object-fit:cover;
}
nav{
    background-color:white;
}
</style>
</head>
<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container">
                <a href="" class="navbar-brand">
                    <h4>MADHAN BUS</h4>
                </a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mynav" aria-controls="mynav" aria-expanded="false" aria-label="Toggler navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mynav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item ps-5">
                            <a href="" class="nav-link text-dark">HOME</a>
                        </li>
                        <!-- <li class="nav-item ps-5 dropdown">
                            <a href="" class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown" id="dp" aria-haspopup="true" aria-expanded="false">BOOKING</a>
                            <div class="dropdown-menu" aria-labelledby="dp">
                                <a href="busroutes.html" class="dropdown-item">AVAILABLE ROUTES</a>
                                
                            </div>
                        </li> -->
                        
                        <li class="nav-item ps-5">
                            <a href="about.html" class="nav-link text-dark">ABOUT US</a>
                        </li>
                        <li class="nav-item ps-5">
                            <a href="contact.php" class="nav-link text-dark ">CONTACT US</a>
                        </li>
                        

                    </ul>
                    <a href="logout.php" class="btn    btn-primary rounded-pill ms-auto ps-4 pe-4" style="border-radius: 50% ;">LOGIN / REGISTER</a>
                </div>
            </div>

        </nav>
    </header>
     <div class="content">
            <h3>MADHAN BUS</h3>
            <p>We are the creators of india's first fleet of branded buses that guarantee safe & comforable journeys</p>
            <p>We offer you a complete end-to-end travel experience with our professional crew, round the clock command centre and many oher featres</p><p>We put all our efforts into making every trip and on-time trip!</p><p> With MADHAN BUS, travellers can book bus tickets online at the lowest ticket fares</p>
        </div> 
     

     <div class="containers">
        
        <div class="img-fluid " id="indeximg">
            
             <img src="./images/bus21.jpg" alt="bus" width="100%" height="593px"> 
            
         </div>
        
        </div> 
    
    
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
</body>
</html>