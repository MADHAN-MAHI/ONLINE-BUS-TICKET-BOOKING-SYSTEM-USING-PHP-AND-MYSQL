<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
         nav{
        background:linear-gradient(255deg,lightgreen,red);
        position: sticky;
        /* box-shadow:0 0 40px black; */
        }
        body{
            background-color:#d3cfcf ;
        }
    </style>
</head>
<body>
<header class="header">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container-fluid">
                <a href="" class="navbar-brand">
                    <h4>MADHAN BUS</h4>
                </a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mynav" aria-controls="mynav" aria-expanded="false" aria-label="Toggler navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mynav">
                    
                    <a href="print_ticket1.php" class="btn   ps-4 pe-4" style="border-radius: 50% ;">MY TICKET</a>
                </div>
                <div class="collapse navbar-collapse" id="mynav">
                    
                    <a href="logout.php" class="btn    btn-primary rounded-pill ms-auto ps-4 pe-4" style="border-radius: 50% ;">LOGOUT</a>
                </div>
            </div>

        </nav>
    </header>
    <?php
        session_start();
        include 'config.php';
        // if(isset($_GET['bus_id']))
        // {
        //     $bus_id=$_GET['bus_id'];
        // }
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
        // if(isset($_SESSION['email']))
        // {
        //     $email=$_SESSION['email'];
        //     $fetch_user_id_query="SELECT * from WHERE email='$email'";
        //     $fetch_user_id_query_result=mysqli_query($conn,$fetch_user_id_query);
        //     if($fetch_user_id_query_result)
        //     {
        //         while($row=mysqli_fetch_assoc($fetch_user_id_query_result))
        //         {
        //             $user_id=$row["user_id"];
        //         }
        //     }
        // }
        // else{
        //     header("Location:login.php");

        // }
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
                $fare=$row["fare"];
                $rating=$row["rating"];
                $seats_available=$row["seats_available"];
            }
        }
        ?>

        <div class="jumbotron m-5">
            <div class="container p-4 bg-info rounded-top rounded-bottom text-light font-weight-bold">
                <div class="row">
                    <div class="col-6">
                    <div class="col-12 col-md-6 col-lg-6 col-sm-6 ms-5">
                        Bus Name
                    </div>
                    </div>
                    <div class="col-6">
                    <div class="col-12 col-md-6 col-lg-6 col-sm-6">
                        <?php echo $bus_name ?>
                    </div>
                    </div>
                    <div class="col-6">
                    <div class="col-12 col-md-6 col-lg-6 col-sm-6 ms-5">
                        Boarding Station
                    </div>
                    </div>
                    <div class="col-6">
                    <div class="col-12 col-md-6 col-lg-6 col-sm-6">
                        <?php echo $boarding_station ?>
                    </div>
                    </div>
                    <div class="col-6">
                    <div class="col-12 col-md-6 col-lg-6 col-sm-6 ms-5">
                        destination Station
                    </div>
                    </div>
                    <div class="col-6">
                    <div class="col-12 col-md-6 col-lg-6 col-sm-6">
                        <?php echo $destination_station ?>
                    </div>
                    </div>
                    <div class="col-6">
                    <div class="col-12 col-md-6 col-lg-6 col-sm-6 ms-5">
                        Duration
                    </div>
                    </div>
                    <div class="col-6">
                    <div class="col-12 col-md-6 col-lg-6 col-sm-6">
                        <?php echo $duration ?> Hours
                    </div>
                    </div>
                    <div class="col-6">
                    <div class="col-12 col-md-6 col-lg-6 col-sm-6 ms-5">
                        Seats Available
                     </div>
                    </div>
                    <div class="col-6">
                    <div class="col-12 col-md-6 col-lg-6 col-sm-6">
                        <?php echo $seats_available ?>
                    </div>
                    </div>
                    <div class="col-6">
                    <div class="col-12 col-md-6 col-lg-6 col-sm-6 ms-5">
                        Rating
                    </div>
                    </div>
                    <div class="col-6">
                    <div class="col-12 col-md-6 col-lg-6 col-sm-6">
                        <?php echo $rating ?>
                    </div>
                    </div>
                    <div class="col-6">
                    <div class="col-12 col-md-6 col-lg-6 col-sm-6 ms-5">
                        Fare
                    </div>
                    </div>
                    <div class="col-6">
                    <div class="col-12 col-md-6 col-lg-6 col-sm-6">
                        <?php echo $fare ?>
                    </div>
                    </div>
                </div>

            </div>

        </div>


        <br><br><br>







<?php


        $fetch_seat_query="SELECT bus_seat.seat_no,bus_seat.status,bus_seat.bus_name FROM buses INNER JOIN bus_seat ON bus_seat.bus_name=buses.bus_name ";
        $fetch_seat_query_result=mysqli_query($conn,$fetch_seat_query);
        $seat_status=array();
        if($fetch_seat_query_result)
        {
            $total_seats=mysqli_num_rows($fetch_seat_query_result);
            while($row=mysqli_fetch_assoc($fetch_seat_query_result))
            {
                $seat_no[]=$row["seat_no"];
                $seat_status[]=$row["status"];

            }
        }
    ?>
    <div class="jumbotron container sear-arrangement bg-info">
        <h3>Seating arrrangement</h3>
        <div class="row">
        <div class="col-12 col-md-4 col-sm-4 col-lg-4">
                    <p class="bg-danger text-light font weight-bold p-2">Booked Seat</p>
                    <p class="bg-success text-light font weight-bold p-2">Available Seat</p>

                </div>
            <!-- <div class="col-12 col-md-4 col-sm-4 col-lg-4" > -->
            <div class="col-3">
                <div class="d-flex justify-content-center">
                    <?php
                        if($seat_status[0]=="booked")
                        {
                            echo "<p class='bg-danger rounded-circle p-2 m-2 text-light font-weight-bold'>L-1</p>";

                        }
                        else{
                            echo "<p class='bg-success rounded-circle p-2 m-2 text-light font-weight-bold'>L-1</p>";
                        }
                    ?>
                <!-- </div>
                <div class="d-flex justify-content-center"> -->
                    <?php
                        if($seat_status[1]=="booked")
                        {
                            echo "<p class='bg-danger rounded-circle p-2 m-2 text-light font-weight-bold'>L-2</p>";

                        }
                        else{
                            echo "<p class='bg-success rounded-circle p-2 m-2 text-light font-weight-bold'>L-2</p>";
                        }
                        ?>
                </div>
                <div class="d-flex justify-content-center">
                    <?php
                        if($seat_status[2]=="booked")
                        {
                            echo "<p class='bg-danger rounded-circle p-2 m-2 text-light font-weight-bold'>L-3</p>";

                        }
                        else{
                            echo "<p class='bg-success rounded-circle p-2 m-2 text-light font-weight-bold'>L-3</p>";
                        }
                        ?>
                <!-- </div>
                <div class="d-flex justify-content-center"> -->
                    <?php
                        if($seat_status[3]=="booked")
                        {
                            echo "<p class='bg-danger rounded-circle p-2 m-2 text-light font-weight-bold'>L-4</p>";

                        }
                        else{
                            echo "<p class='bg-success rounded-circle p-2 m-2 text-light font-weight-bold'>L-4</p>";
                        }
                        ?>
                </div>
                <div class="d-flex justify-content-center">
                    <?php
                        if($seat_status[4]=="booked")
                        {
                            echo "<p class='bg-danger rounded-circle p-2 m-2 text-light font-weight-bold'>L-5</p>";

                        }
                        else{
                            echo "<p class='bg-success rounded-circle p-2 m-2 text-light font-weight-bold'>L-5</p>";
                        }
                        ?>
                <!-- </div>
                <div class="d-flex justify-content-center"> -->
                    <?php
                        if($seat_status[5]=="booked")
                        {
                            echo "<p class='bg-danger rounded-circle p-2 m-2 text-light font-weight-bold'>L-6</p>";

                        }
                        else{
                            echo "<p class='bg-success rounded-circle p-2 m-2 text-light font-weight-bold'>L-6</p>";
                        }
                    ?>
                </div>
                <div class="d-flex justify-content-center">
                    <?php
                        if($seat_status[6]=="booked")
                        {
                            echo "<p class='bg-danger rounded-circle p-2 m-2 text-light font-weight-bold'>L-7</p>";

                        }
                        else{
                            echo "<p class='bg-success rounded-circle p-2 m-2 text-light font-weight-bold'>L-7</p>";
                        }
                        ?>
                <!-- </div>
                <div class="d-flex justify-content-center"> -->
                    <?php
                        if($seat_status[7]=="booked")
                        {
                            echo "<p class='bg-danger rounded-circle p-2 m-2 text-light font-weight-bold'>L-8</p>";

                        }
                        else{
                            echo "<p class='bg-success rounded-circle p-2 m-2 text-light font-weight-bold'>L-8</p>";
                        }
                        ?>
                </div>
                <div class="d-flex justify-content-center">
                    <?php
                        if($seat_status[8]=="booked")
                        {
                            echo "<p class='bg-danger rounded-circle p-2 m-2 text-light font-weight-bold'>L-9</p>";

                        }
                        else{
                            echo "<p class='bg-success rounded-circle p-2 m-2 text-light font-weight-bold'>L-9</p>";
                        }
                        ?>
                <!-- </div>
                <div class="d-flex justify-content-center"> -->
                    <?php
                        if($seat_status[9]=="booked")
                        {
                            echo "<p class='bg-danger rounded-circle p-2 m-2 text-light font-weight-bold'>L-10</p>";

                        }
                        else{
                            echo "<p class='bg-success rounded-circle p-2 m-2 text-light font-weight-bold'>L-10</p>";
                        }
                        ?>
                </div>
                </div>
                <div class="col-3">
                <div class="d-flex justify-content-center">
                    <?php
                        if($seat_status[10]=="booked")
                        {
                            echo "<p class='bg-danger rounded-circle p-2 m-2 text-light font-weight-bold'>R-1</p>";

                        }
                        else{
                            echo "<p class='bg-success rounded-circle p-2 m-2 text-light font-weight-bold'>R-1</p>";
                        }
                    ?>
                <!-- </div>
                <div class="d-flex justify-content-center"> -->
                    <?php
                        if($seat_status[11]=="booked")
                        {
                            echo "<p class='bg-danger rounded-circle p-2 m-2 text-light font-weight-bold'>R-2</p>";

                        }
                        else{
                            echo "<p class='bg-success rounded-circle p-2 m-2 text-light font-weight-bold'>R-2</p>";
                        }
                        ?>
                </div>
                <div class="d-flex justify-content-center">
                    <?php
                        if($seat_status[12]=="booked")
                        {
                            echo "<p class='bg-danger rounded-circle p-2 m-2 text-light font-weight-bold'>R-3</p>";

                        }
                        else{
                            echo "<p class='bg-success rounded-circle p-2 m-2 text-light font-weight-bold'>R-3</p>";
                        }
                        ?>
                <!-- </div>
                <div class="d-flex justify-content-center"> -->
                    <?php
                        if($seat_status[13]=="booked")
                        {
                            echo "<p class='bg-danger rounded-circle p-2 m-2 text-light font-weight-bold'>R-4</p>";

                        }
                        else{
                            echo "<p class='bg-success rounded-circle p-2 m-2 text-light font-weight-bold'>R-4</p>";
                        }
                        ?>
                </div>
                <div class="d-flex justify-content-center">
                    <?php
                        if($seat_status[14]=="booked")
                        {
                            echo "<p class='bg-danger rounded-circle p-2 m-2 text-light font-weight-bold'>R-5</p>";

                        }
                        else{
                            echo "<p class='bg-success rounded-circle p-2 m-2 text-light font-weight-bold'>R-5</p>";
                        }
                        ?>
                <!-- </div>
                <div class="d-flex justify-content-center"> -->
                    <?php
                        if($seat_status[15]=="booked")
                        {
                            echo "<p class='bg-danger rounded-circle p-2 m-2 text-light font-weight-bold'>R-6</p>";

                        }
                        else{
                            echo "<p class='bg-success rounded-circle p-2 m-2 text-light font-weight-bold'>R-6</p>";
                        }
                    ?>
                </div>
                <div class="d-flex justify-content-center">
                    <?php
                        if($seat_status[16]=="booked")
                        {
                            echo "<p class='bg-danger rounded-circle p-2 m-2 text-light font-weight-bold'>R-7</p>";

                        }
                        else{
                            echo "<p class='bg-success rounded-circle p-2 m-2 text-light font-weight-bold'>R-7</p>";
                        }
                        ?>
                <!-- </div>
                <div class="d-flex justify-content-center"> -->
                    <?php
                        if($seat_status[17]=="booked")
                        {
                            echo "<p class='bg-danger rounded-circle p-2 m-2 text-light font-weight-bold'>R-8</p>";

                        }
                        else{
                            echo "<p class='bg-success rounded-circle p-2 m-2 text-light font-weight-bold'>R-8</p>";
                        }
                        ?>
                </div>
                <div class="d-flex justify-content-center">
                    <?php
                        if($seat_status[18]=="booked")
                        {
                            echo "<p class='bg-danger rounded-circle p-2 m-2 text-light font-weight-bold'>R-9</p>";

                        }
                        else{
                            echo "<p class='bg-success rounded-circle p-2 m-2 text-light font-weight-bold'>R-9</p>";
                        }
                        ?>
                <!-- </div>
                <div class="d-flex justify-content-center"> -->
                    <?php
                        if($seat_status[19]=="booked")
                        {
                            echo "<p class='bg-danger rounded-circle p-2 m-2 text-light font-weight-bold'>R-10</p>";

                        }
                        else{
                            echo "<p class='bg-success rounded-circle p-2 m-2 text-light font-weight-bold'>R-10</p>";
                        }
                        ?>
                </div>
                </div>
                </div>
                
            </div>
        </div>
    </div>
    <br><br>
    <div class="jumbotron container">
        <form method="post">
            <input type="number" name="total_seat" class="form-control" placeholder="total_number_seat">
            <input type="hidden" name="bus_id" value="$bus_id">
            <button name="proceed_to_book_seat" class="form-control btn  btn-danger">Proceed to book seat</button>
        </form>
    </div>

    <?php
    $total_seat="";
    if(isset($_POST['proceed_to_book_seat']))
    {
        $total_seat=$_POST['total_seat'];
        if($total_seat==1)
        {
            ?><br>
            <div class="container jumbotron form-group ">
                <form method="post">
                    <h5>Customer details</h5>
                    <div class="d-flex justify-content-center">
                        <div class="p-2">
                            <input type="text" name="customer_name" placeholder="Customer name">
                        </div>
                        <div class="p-2">
                            <input type="number" name="customer_mobile_no" placeholder="mobile no">
                        </div>
                        
                    </div>
                    <input type="hidden" name="total_seat" value="<?php $total_seat?>"><br>

                    <button name="add_passanger" class="form-control btn btn-danger">Add Passanger</button>
                </form>
            </div>
            <?php
            $seat_no=array();
            $seat_status=array();
            $fetch_seat_query="SELECT bus_seat.seat_no,bus_seat.status,bus_seat.bus_name FROM buses INNER JOIN bus_seat ON bus_seat.bus_name=buses.bus_name";
      
            $fetch_seat_query_result=mysqli_query($conn,$fetch_seat_query);
            if($fetch_seat_query_result)
            {
                $total_seats=mysqli_num_rows($fetch_seat_query_result);
                while($row=mysqli_fetch_assoc($fetch_seat_query_result))
                {
                    $seat_status[]=$row["status"];
                    $seat_no[]=$row["seat_no"];


                }

            }
        ?>
        <br>
        <div class="container booking-selection">
            <form  method="post">
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-1">L-1
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-2">L-2
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-3">L-3
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-4">L-4
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-5">L-5
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-6">L-6
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-7">L-7
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-8">L-8
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-9">L-9
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-10">L-10
                </span>
                <br><br>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-1">R-1
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-2">R-2
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-3">R-3
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-4">R-4
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-5">R-5
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-6">R-6
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-7">R-7
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-8">R-8
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-9">R-9
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-10">R-10
                </span>
                <br><br>
                <p>FIRST PAY THEN CONTINUE TO BOOK YOUR SEATS     <a href="payment1.php">Pay</a> </p><br>
                <input type="number" name="ticket_no" placeholder="ticket no">
                <input type="hidden" name="total_seat"value="<?php echo $total_seat?>">
                <input type="hidden" name="fare"value="<?php echo $fare?>">
                <button name="book_seat">book seat</button>
            </form>
        </div>
        
        <?php
        
        
        }
        else if($total_seat==2)
        {
            ?><br>
            <div class="container jumbotron form-group ">
                <form method="post">
                    <h5>Customer details</h5>
                    <div class="d-flex justify-content-center">
                        <div class="p-2">
                            <input type="text" name="customer_name_1" placeholder="Customer name">
                        </div>
                        <div class="p-2">
                            <input type="text" name="customer_name_2" placeholder="Customer name">
                        </div>
                        <div class="p-2">
                            <input type="number" name="customer_mobile_no_1" placeholder="mobile no">
                        </div>
                        <div class="p-2">
                            <input type="number" name="customer_mobile_no_2" placeholder="mobile no">
                        </div>
                        
                    </div>
                    <input type="hidden" name="total_seat" value="<?php $total_seat?>"><br>

                    <button name="add_passanger" class="form-control btn btn-danger">Add Passanger</button>
                </form>
            </div>
            
        <br>
        <div class="container booking-selection">
            <form  method="post">
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-1">L-1
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-2">L-2
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-3">L-3
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-4">L-4
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-5">L-5
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-6">L-6
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-7">L-7
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-8">L-8
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-9">L-9
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-10">L-10
                </span>
                <br><br>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-1">R-1
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-2">R-2
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-3">R-3
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-4">R-4
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-5">R-5
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-6">R-6
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-7">R-7
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-8">R-8
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-9">R-9
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-10">R-10
                </span>
                <br><br>
                <input type="number" name="ticket_no" placeholder="ticket no">
                <input type="hidden" name="total_seat"value="<?php echo $total_seat?>">
                <button name="book_seat">book seat</button>
            </form>
        </div>
        
        <?php
        
        
        }
        else if($total_seat==3)
        {
            ?><br>
            <div class="container jumbotron form-group ">
                <form method="post">
                    <h5>Customer details</h5>
                    <div class="d-flex justify-content-center">
                        <div class="p-2">
                            <input type="text" name="customer_name_1" placeholder="Customer name">
                        </div>
                        <div class="p-2">
                            <input type="text" name="customer_name_2" placeholder="Customer name">
                        </div>
                        <div class="p-2">
                            <input type="text" name="customer_name_3" placeholder="Customer name">
                        </div>
                        <div class="p-2">
                            <input type="number" name="customer_mobile_no_1" placeholder="mobile no">
                        </div>
                        <div class="p-2">
                            <input type="number" name="customer_mobile_no_2" placeholder="mobile no">
                        </div>
                        <div class="p-2">
                            <input type="number" name="customer_mobile_no_3" placeholder="mobile no">
                        </div>
                    </div>
                    <input type="hidden" name="total_seat" value="<?php $total_seat?>"><br>

                    <button name="add_passanger" class="form-control btn btn-danger">Add Passanger</button>
                </form>
            </div>
            
        <br>
        <div class="container booking-selection">
            <form  method="post">
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-1">L-1
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-2">L-2
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-3">L-3
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-4">L-4
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-5">L-5
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-6">L-6
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-7">L-7
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-8">L-8
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-9">L-9
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="L-10">L-10
                </span>
                <br><br>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-1">R-1
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-2">R-2
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-3">R-3
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-4">R-4
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-5">R-5
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-6">R-6
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-7">R-7
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-8">R-8
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-9">R-9
                </span>
                <span class="bg-primary p-2 m-2">
                    <input type="checkbox" name="seat[]" class="font-weight-bold bg-primary text-light" value="R-10">R-10
                </span>

                <br><br>
                <input type="number" name="ticket_no" placeholder="ticket no">
                <input type="hidden" name="total_seat"value="<?php echo $total_seat?>">
                
                <button name="book_seat">book seat</button>
            </form>
        </div>
        
        <?php
        
        
        }

        
    }
    // error_reporting(0);
    if(isset($_POST["add_passanger"]))
        {
            $ticket_no=rand();
            $total_seat=isset($_POST["total_seat"]);
            
            if($total_seat==1)
            {
                // echo $email;
                $customer_name=$_POST["customer_name"];
                $customer_mobile_no=$_POST["customer_mobile_no"];
                $insert_passanger_details_query="INSERT INTO passanger_details(passanger_name,passanger_mobile,ticket_no)VALUES('$customer_name','$customer_mobile_no','$ticket_no')" ;
                $insert_passanger_details_query_result=mysqli_query($conn,$insert_passanger_details_query);
                if($insert_passanger_details_query_result)
                {
                    echo "<div class='bg-success font-weight-bold text-light'><p>Passanger added successfully</p>
                        <p>Your ticket no is <span class='text-danger font-weight-bold'>".$ticket_no."</span></p>
                        <p>Kindly use this ticket no to confirm your booking while choosing your specific seat</p>
                        </div>";
                    
                }
            }
            else if($total_seat==2){
                // echo $email;
                $customer_name_1=$_POST["customer_name_1"];
                $customer_mobile_no_1=$_POST["customer_mobile_no_1"];
                $customer_name_2=$_POST["customer_name_2"];
                $customer_mobile_no_2=$_POST["customer_mobile_no_2"];
                $insert_passanger_details_query="INSERT INTO passanger_details(passanger_name,passanger_mobile,ticket_no)VALUES('$customer_name_1','$customer_mobile_no_1','$ticket_no')" ;
                $insert_passanger_details_query_result=mysqli_query($conn,$insert_passanger_details_query);
                if($insert_passanger_details_query_result)
                {
                    $insert_passanger_details_query="INSERT INTO passanger_details(passanger_name,passanger_mobile,ticket_no)VALUES('$customer_name_2','$customer_mobile_no_2','$ticket_no')" ;
                    $insert_passanger_details_query_result=mysqli_query($conn,$insert_passanger_details_query);
                    if($insert_passanger_details_query_result){
                    echo "<div class='bg-success font-weight-bold text-light'><p>Passanger added successfully</p>
                        <p>Your ticket no is <span class='text-danger font-weight-bold'>".$ticket_no."</span></p>
                        <p>Kindly use this ticket no to confirm your booking while choosing your specific seat</p>
                        </div>";
                    }
                }
            }
            else if($total_seat==3){
                // echo $email;
                $customer_name_1=$_POST["customer_name_1"];
                $customer_mobile_no_1=$_POST["customer_mobile_no_1"];
                $customer_name_2=$_POST["customer_name_2"];
                $customer_mobile_no_2=$_POST["customer_mobile_no_2"];
                $customer_name_3=$_POST["customer_name_3"];
                $customer_mobile_no_3=$_POST["customer_mobile_no_3"];
                
                $insert_passanger_details_query="INSERT INTO passanger_details(passanger_name,passanger_mobile,ticket_no)VALUES('$customer_name_1','$customer_mobile_no_1','$ticket_no')" ;
                $insert_passanger_details_query_result=mysqli_query($conn,$insert_passanger_details_query);
                if($insert_passanger_details_query_result)
                {
                    $insert_passanger_details_query="INSERT INTO passanger_details(passanger_name,passanger_mobile,ticket_no)VALUES('$customer_name_2','$customer_mobile_no_2','$ticket_no')" ;
                    $insert_passanger_details_query_result=mysqli_query($conn,$insert_passanger_details_query);
                    if($insert_passanger_details_query_result){
                        
                        $insert_passanger_details_query="INSERT INTO passanger_details(passanger_name,passanger_mobile,ticket_no)VALUES('$customer_name_3','$customer_mobile_no_3','$ticket_no')" ;
                        $insert_passanger_details_query_result=mysqli_query($conn,$insert_passanger_details_query);
                        if($insert_passanger_details_query_result){
                        echo "<div class='bg-success font-weight-bold text-light'><p>Passanger added successfully</p>
                            <p>Your ticket no is <span class='text-danger font-weight-bold'>".$ticket_no."</span></p>
                            <p>Kindly use this ticket no to confirm your booking while choosing your specific seat</p>
                            </div>";
                    }
                }
            }
        }
    }
if(isset($_POST["book_seat"]))
{
    $k=0;
    $j=0;
   
    $ticket_no=$_POST['ticket_no'];
    $choosen_seat=$_POST["seat"];
    $total_choosen_seat=count($choosen_seat);
    if($total_choosen_seat<=$seats_available)
    {
        $fetch_total_passanger_query="SELECT passanger_id FROM passanger_details WHERE ticket_no='$ticket_no'";
        $fetch_total_passanger_query_result=mysqli_query($conn,$fetch_total_passanger_query);
        if($fetch_total_passanger_query_result)
        {
            $total_no_passanger=mysqli_num_rows($fetch_total_passanger_query_result);
            if($total_no_passanger==$total_choosen_seat)
            {
                if($total_no_passanger==1)
                {
                    $fetch_bus_name_query="SELECT bus_name FROM buses WHERE id='2'";
                    $fetch_bus_name_query_result=mysqli_query($conn,$fetch_bus_name_query);
                    if($fetch_bus_name_query_result)
                    {
                        while($row=mysqli_fetch_assoc($fetch_bus_name_query_result))
                        {
                            $bus_name=$row["bus_name"];

                        }
                        $fetch_admin_id_query="SELECT id FROM users WHERE email='$email'";
                        $fetch_admin_id_query_result=mysqli_query($conn,$fetch_admin_id_query);
                        if($fetch_admin_id_query_result)
                        {
                            while($row=mysqli_fetch_assoc($fetch_admin_id_query_result))
                            {
                                $user_id=$row["id"];
                            }
                            $insert_ticket_detail_query="INSERT INTO ticket_details(ticket_no) VALUES ('$ticket_no')";
                            $insert_ticket_detail_query_result=mysqli_query($conn,$insert_ticket_detail_query);
                            if($insert_ticket_detail_query_result)
                            {
                                $update_ticket_admin_query="UPDATE ticket_details SET admin_id='$user_id' WHERE ticket_no='$ticket_no'";
                                $update_ticket_admin_query_result=mysqli_query($conn,$update_ticket_admin_query);
                                if($update_ticket_admin_query_result)
                                {

                                }
                            }
                        }

                
                    }
                    
                    foreach($choosen_seat as $value){
                        $fetch_seat_status_query="SELECT status FROM bus_seat WHERE seat_no='$value' AND bus_name='$bus_name'";
                        $fetch_seat_status_query_result=mysqli_query($conn,$fetch_seat_status_query);
                        if($fetch_seat_status_query_result)
                        {
                            while($row=mysqli_fetch_assoc($fetch_seat_status_query_result))
                            {
                                $seat_status=$row["status"];
                                if($seat_status=="booked")
                                {
                                    $k++;

                                }
                                else
                                {
                                    $update_seat_query="UPDATE bus_seat SET status='booked' , ticket_no='$ticket_no' WHERE seat_no='$value' AND bus_name='$bus_name'";
                                    $update_seat_query_result=mysqli_query($conn,$update_seat_query);
                                    if($update_seat_query_result)
                                    {
                                        $j++;
                                    }
                                }
                            } 
                        }
                    }
                    $remaining_seats_buses_table=$seats_available-$total_choosen_seat;
                    $update_seat_buses_table_query="UPDATE buses SET seats_available='$remaining_seats_buses_table' WHERE id='2'";
                    $update_seat_buses_table_query_result=mysqli_query($conn,$update_seat_buses_table_query);
                    if($update_seat_buses_table_query_result){
                        echo "seat in bus table updated";

                    }
                    if($total_choosen_seat==$k)
                    {
                        echo "<div class='bg-danger p-2 font-weight-bold text-light'>
                            <p>All choosen seats are booked already</p>
                            </div>";
                    }
                    else if($total_choosen_seat)
                    {
                        $remaining_seats=$total_choosen_seat-$k;
                        echo "<div class='bg-danger p-2 m-2 text-light font-weight-bold'>
                        <p>Your choosen seat are booked successfully</p></div>";
                    }
                    else if($total_choosen_seat==$j)
                    {
                        
                        echo "<div class='bg-danger p-2 m-2 text-light font-weight-bold'>
                        <p>Your seats are booked successfully</p></div>";
                    }
                }
                else if($total_no_passanger==2)
                {
                    $fetch_bus_name_query="SELECT bus_name FROM buses WHERE id='2'";
                    $fetch_bus_name_query_result=mysqli_query($conn,$fetch_bus_name_query);
                    if($fetch_bus_name_query_result)
                    {
                        while($row=mysqli_fetch_assoc($fetch_bus_name_query_result))
                        {
                            $bus_name=$row["bus_name"];

                        }
                        $fetch_admin_id_query="SELECT id FROM users WHERE email='$email'";
                        $fetch_admin_id_query_result=mysqli_query($conn,$fetch_admin_id_query);
                        if($fetch_admin_id_query_result)
                        {
                            while($row=mysqli_fetch_assoc($fetch_admin_id_query_result))
                            {
                                $user_id=$row["id"];
                            }
                            $insert_ticket_detail_query="INSERT INTO ticket_details(ticket_no) VALUES ('$ticket_no')";
                            $insert_ticket_detail_query_result=mysqli_query($conn,$insert_ticket_detail_query);
                            if($insert_ticket_detail_query_result)
                            {
                                $update_ticket_admin_query="UPDATE ticket_details SET admin_id='$user_id' WHERE ticket_no='$ticket_no'";
                                $update_ticket_admin_query_result=mysqli_query($conn,$update_ticket_admin_query);
                                if($update_ticket_admin_query_result)
                                {

                                }
                            }
                        }

                
                    }
                    foreach($choosen_seat as $value){
                        $fetch_seat_status_query="SELECT status FROM bus_seat WHERE seat_no='$value' AND bus_name='$bus_name'";
                        $fetch_seat_status_query_result=mysqli_query($conn,$fetch_seat_status_query);
                        if($fetch_seat_status_query_result)
                        {
                            while($row=mysqli_fetch_assoc($fetch_seat_status_query_result))
                            {
                                $seat_status=$row["status"];
                                if($seat_status=="booked")
                                {
                                    $k++;

                                }
                                else
                                {
                                    $update_seat_query="UPDATE bus_seat SET status='booked' , ticket_no='$ticket_no' WHERE seat_no='$value' AND bus_name='$bus_name'";
                                    $update_seat_query_result=mysqli_query($conn,$update_seat_query);
                                    if($update_seat_query_result)
                                    {
                                        $j++;
                                    }
                                }
                            } 
                        }
                    }
                    $remaining_seats_buses_table=$seats_available-$total_choosen_seat;
                    $update_seat_buses_table_query="UPDATE buses SET seats_available='$remaining_seats_buses_table' WHERE id='2'";
                    $update_seat_buses_table_query_result=mysqli_query($conn,$update_seat_buses_table_query);
                    if($update_seat_buses_table_query_result){
                        echo "seat in bus table updated";

                    }
                    if($total_choosen_seat==$k)
                    {
                        echo "<div class='bg-danger p-2 font-weight-bold text-light'>
                            <p>All choosen seats are booked already</p>
                            </div>";
                    }
                    else if($total_choosen_seat)
                    {
                        $remaining_seats=$total_choosen_seat-$k;
                        echo "<div class='bg-danger p-2 m-2 text-light font-weight-bold'>
                        <p>Your choosen seat are booked successfully</p></div>";
                    }
                    else if($total_choosen_seat==$j)
                    {
                        
                        echo "<div class='bg-danger p-2 m-2 text-light font-weight-bold'>
                        <p>Your seats are booked successfully</p></div>";
                    }
                }
                else if($total_no_passanger==3)
                {
                    $fetch_bus_name_query="SELECT bus_name FROM buses WHERE id='2'";
                    $fetch_bus_name_query_result=mysqli_query($conn,$fetch_bus_name_query);
                    if($fetch_bus_name_query_result)
                    {
                        while($row=mysqli_fetch_assoc($fetch_bus_name_query_result))
                        {
                            $bus_name=$row["bus_name"];

                        }
                        $fetch_admin_id_query="SELECT id FROM users WHERE email='$email'";
                        $fetch_admin_id_query_result=mysqli_query($conn,$fetch_admin_id_query);
                        if($fetch_admin_id_query_result)
                        {
                            while($row=mysqli_fetch_assoc($fetch_admin_id_query_result))
                            {
                                $user_id=$row["id"];
                            }
                            $insert_ticket_detail_query="INSERT INTO ticket_details(ticket_no) VALUES ('$ticket_no')";
                            $insert_ticket_detail_query_result=mysqli_query($conn,$insert_ticket_detail_query);
                            if($insert_ticket_detail_query_result)
                            {
                                $update_ticket_admin_query="UPDATE ticket_details SET admin_id='$user_id' WHERE ticket_no='$ticket_no'";
                                $update_ticket_admin_query_result=mysqli_query($conn,$update_ticket_admin_query);
                                if($update_ticket_admin_query_result)
                                {

                                }
                            }
                        }

                
                    }
                    foreach($choosen_seat as $value){
                        $fetch_seat_status_query="SELECT status FROM bus_seat WHERE seat_no='$value' AND bus_name='$bus_name'";
                        $fetch_seat_status_query_result=mysqli_query($conn,$fetch_seat_status_query);
                        if($fetch_seat_status_query_result)
                        {
                            while($row=mysqli_fetch_assoc($fetch_seat_status_query_result))
                            {
                                $seat_status=$row["status"];
                                if($seat_status=="booked")
                                {
                                    $k++;

                                }
                                else
                                {
                                    $update_seat_query="UPDATE bus_seat SET status='booked' , ticket_no='$ticket_no' WHERE seat_no='$value' AND bus_name='$bus_name'";
                                    $update_seat_query_result=mysqli_query($conn,$update_seat_query);
                                    if($update_seat_query_result)
                                    {
                                        $j++;
                                    }
                                }
                            } 
                        }
                    }
                    $remaining_seats_buses_table=$seats_available-$total_choosen_seat;
                    $update_seat_buses_table_query="UPDATE buses SET seats_available='$remaining_seats_buses_table' WHERE id='2'";
                    $update_seat_buses_table_query_result=mysqli_query($conn,$update_seat_buses_table_query);
                    if($update_seat_buses_table_query_result){
                        echo "seat in bus table updated";

                    }
                    if($total_choosen_seat==$k)
                    {
                        echo "<div class='bg-danger p-2 font-weight-bold text-light'>
                            <p>All choosen seats are booked already</p>
                            </div>";
                    }
                    else if($total_choosen_seat)
                    {
                        $remaining_seats=$total_choosen_seat-$k;
                        echo "<div class='bg-danger p-2 m-2 text-light font-weight-bold'>
                        <p>Your choosen seat are booked successfully</p></div>";
                    }
                    else if($total_choosen_seat==$j)
                    {
                        
                        echo "<div class='bg-danger p-2 m-2 text-light font-weight-bold'>
                        <p>Your seats are booked successfully</p></div>";
                    }
                }
                
                
            }
        }
    }

}
    ?>
</body>
</html>