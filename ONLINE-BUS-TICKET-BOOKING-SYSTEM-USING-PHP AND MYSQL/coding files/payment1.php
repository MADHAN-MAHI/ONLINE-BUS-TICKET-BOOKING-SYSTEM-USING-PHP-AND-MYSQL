<?php 

include 'config.php';

error_reporting(0);

session_start();
$email="";
$name="";
$bus_id="";
$user_id="";
$bus_name="";
$boarding_station="";
$destination_station="";
$fare="";
$duration="";
$rating="";
$seats_available="";

        $fetch_bus_detail_query="SELECT * FROM buses WHERE id='2'";
        $fetch_bus_detail_query_result=mysqli_query($conn,$fetch_bus_detail_query);
        if($fetch_bus_detail_query_result)
        {
            while($row=mysqli_fetch_assoc($fetch_bus_detail_query_result))
            {
                $bus_name=$row["bus_name"];
                $boarding_station=$row["boarding_station"];
                $destination_station=$row["destination_station"];
                $duration=$row["duration"];
                $fare=$row["FARE"];
                $rating=$row["rating"];
                $seats_available=$row["seats_available"];
            }
        }
        ?>

<?php
    
    if(isset($_POST['get']))
    {
        
        $ticket_no=$_POST['ticket_no'];
        $passanger_name="";
        $passanger_mobile="";
        
        $fetch_passanger_query="SELECT * FROM passanger_details WHERE ticket_no='$ticket_no'";
        $fetch_passanger_query_result=mysqli_query($conn,$fetch_passanger_query);
        if($fetch_passanger_query_result)
        {
            while($row=mysqli_fetch_assoc($fetch_passanger_query_result))
            {
                $passanger_name=$row['passanger_name'];
                $passanger_mobile=$row['passanger_mobile'];

            }
        }
    }
    ?>
        
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style1.css">

	<title>Payment</title>
</head>
<body>
    
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">PAYMENT</p>
            <div class="input-group">
                <input type="text" name="ticket_no" placeholder="ticket no" class="form-control">
            </div>
            <div class="input-group">
            <input type="submit" name="get" value="Get User details"
                        class="form-control btn btn-danger">
				
            </div>
			<div class="input-group">
				<input type="text" placeholder="bn" name="bus_name" value="<?php echo $bus_name ?>" required>
			</div>
			<div class="input-group">
				<input type="text" name="boarding_station" value=" <?php echo $boarding_station ?>" required>
			</div>
			<div class="input-group">
				<input type="text"  name="destination_station" value="<?php echo $destination_station ?>" required>
            </div>
            <div class="input-group">
				<input type="text"  name="fare" value="<?php echo $fare?>Rs" required>
			</div>
            
            <div class="input-group">
                <input type="text"  name="cn" value="<?php echo $passanger_name?>" placeholder= "Customer name" >
            </div>
                <div class="input-group">
				<input type="text"  name="cm" value="<?php echo $passanger_mobile ?>" placeholder="Customer mobile" >
			</div>
			<div class="input-group">
				<button name="pay" class="btn">Pay</button>
			</div>
			
		</form>
	</div>
    <?php
    if (isset($_POST['pay'])) {

      $ticket_no=$_POST['ticket_no'];
      $bus_name=$_POST['bus_name'];
      $boarding_station=$_POST['boarding_station'];
      $destination_station=$_POST['destination_station'];
      $fare=$_POST['fare'];
      $passanger_name=$_POST['cn'];
      $passanger_mobile=$_POST['cm'];
      
      $insert_contact_query="INSERT INTO payment(bus_name,boarding_station,destination_station,fare,customer_name,customer_mobile,ticket_no)VALUES('$bus_name','$boarding_station','$destination_station','$fare','$passanger_name','$passanger_mobile','$ticket_no')" ;
                  $insert_contact_query_result=mysqli_query($conn,$insert_contact_query);
                  if($insert_contact_query_result)
                  {
                    
                    
                     header("Location: http://localhost/project/log/seat_available.php");
                      
                  }
                  else
                  {
                    echo "<script>alert('Your Payment was Failure !!!')</script>";
                  }
    
                  
      
     }
	
    ?>
    </body>
</html>