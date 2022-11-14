<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- <link rel="stylesheet" href="contact.css"> -->
    <style>
      body{
  margin: 0;
  padding: 0;
  background: url(./images/bus22.jpg);
  background-size: cover;
}
.contact-form{
  width: 85%;
  max-width: 600px;
  background: #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  padding: 30px 40px;
  box-sizing: border-box;
  border-radius: 8px;
  text-align: center;
  box-shadow: 0 0 20px #000000b3;
  font-family: "Montserrat",sans-serif;
}
.contact-form h1{
  margin-top: 0;
  font-weight: 200;
}
.txtb{
  border:1px solid gray;
  margin: 8px 0;
  padding: 12px 18px;
  border-radius: 8px;
}
.txtb label{
  display: block;
  text-align: left;
  color: #333;
  text-transform: uppercase;
  font-size: 14px;
}
.txtb input,.txtb textarea{
  width: 100%;
  border: none;
  background: none;
  outline: none;
  font-size: 18px;
  margin-top: 6px;
}
.btn{
  display: inline-block;
  background: #9b59b6;
  padding: 14px 0;
  color: white;
  text-transform: uppercase;
  cursor: pointer;
  margin-top: 8px;
  width: 100%;
}

    </style>
  </head>
  <body>
    
  <form action="" method="POST" class="login-email">
  <div class="contact-form">
    <h1>Contact Us</h1>
    <div class="txtb">
      
      <input type="text" name="name"  placeholder="Enter Your Name">
    </div>

    <div class="txtb">
      
      <input type="email" name="email"  placeholder="Enter Your Email">
    </div>

    <!-- <div class="txtb">
      
      <input type="text" name="" value="" placeholder="Enter Your Phone Number">
    </div> -->

    <div class="txtb">
      
      <textarea name="msg" value="Type Your Request"></textarea>
    </div>
    <input type="submit" value="SEND" name="submit" class="btn">
    <!-- <a class="btn" name="submit" role="button">Send</a> -->
  </div>
  </form>
  </body>
</html>
<?php
  include 'config.php';
   if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $msg=$_POST['msg'];
    $insert_contact_query="INSERT INTO contact(name,email,message)VALUES('$name','$email','$msg')" ;
                $insert_contact_query_result=mysqli_query($conn,$insert_contact_query);
                if($insert_contact_query_result)
                {
                  
                   echo "<script>alert('Your Message Was Sent!!!')</script>";
                    
                }
                
    
   }
  

?>
