<?php
session_start();
include 'config.php';
?>
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
        background:linear-gradient(white,yellow);
        position: sticky;
        /* box-shadow:0 0 40px black; */
        }
        body{
            background-color: #d63384;
        }

        
    </style>
</head>
<body>
<header class="header">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container-fluid">
                <a href="" class="navbar-brand">
                    <h4>MAHI TRAVELS</h4>
                </a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mynav" aria-controls="mynav" aria-expanded="false" aria-label="Toggler navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mynav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item ps-5">
                            <h3><a href="" class="nav-link text-danger ">WELCOME ADMIN</a></h3>
                        </li>
                    </ul>
                    <a href="index.php" class="btn    btn-primary rounded-pill ms-auto ps-4 pe-4" style="border-radius: 50% ;">LOGOUT</a>
                </div>
            </div>

        </nav>
    </header>
    
    <div class="container">
    
    <!-- if(isset($_POST['print_ticket']))
    {
        
    } -->
    
    
    <div class="table-responsive mt-5">
        <table class="table table-bordered table-hover text-center table-primary">
    
        <thead class="table-warning">
            <tr>
                <th>PASSANGER NAME</th>
                <th>PASSANGER MOBILE</th>
                <th>BUS NAME</th>
                <th>SEAT NO</th>
                <th>TICKET NO</th>
                <th>STATUS</th>

            </tr>

        </thead>
        <tbody>
            <?php
            require('config.php');
            

            
            $query="SELECT * FROM passanger_details INNER JOIN bus_seats ON passanger_details.ticket_no=bus_seats.ticket_no";
            $sql=mysqli_query($conn,$query);
            if(mysqli_num_rows($sql)>0)
            {
                while($result=mysqli_fetch_assoc($sql))
                {
                    echo"<tr>";
                    echo "<td>".$result['passanger_name']."</td>";
                    echo "<td>".$result['passanger_mobile']."</td>";
                    echo "<td>".$result['bus_name']."</td>";
                    echo "<td>".$result['seat_no']."</td>";
                    echo "<td>".$result['ticket_no']."</td>";
                    echo "<td>".$result['status']."</td>";


                }
            }
            
            ?>
        </tbody>
    </table>
        </div>
        <br><br><br>
        <div class="table-responsive mt-5">
        <table class="table table-bordered table-hover text-center table-primary">
    
        <thead class="table-warning">
            <tr>
                <th>PASSANGER NAME</th>
                <th>PASSANGER MOBILE</th>
                <th>BUS NAME</th>
                <th>SEAT NO</th>
                <th>TICKET NO</th>
                <th>STATUS</th>

            </tr>

        </thead>
        <tbody>
            <?php
            
            

            
            $query="SELECT * FROM passanger_details INNER JOIN bus_seat ON passanger_details.ticket_no=bus_seat.ticket_no";
            $sql=mysqli_query($conn,$query);
            if(mysqli_num_rows($sql)>0)
            {
                while($result=mysqli_fetch_assoc($sql))
                {
                    echo"<tr>";
                    echo "<td>".$result['passanger_name']."</td>";
                    echo "<td>".$result['passanger_mobile']."</td>";
                    echo "<td>".$result['bus_name']."</td>";
                    echo "<td>".$result['seat_no']."</td>";
                    echo "<td>".$result['ticket_no']."</td>";
                    echo "<td>".$result['status']."</td>";


                }
            }
            
            ?>
        </tbody>
    </table>
        </div>
        <br><br>
        <div class="table-responsive mt-5">
        <table class="table table-bordered table-hover text-center table-primary">
    
        <thead class="table-warning">
            <tr>
                <th>PASSANGER NAME</th>
                <th>PASSANGER MOBILE</th>
                <th>BUS NAME</th>
                <th>SEAT NO</th>
                <th>TICKET NO</th>
                <th>STATUS</th>

            </tr>

        </thead>
        <tbody>
            <?php
            
            

            
            $query="SELECT * FROM passanger_details INNER JOIN bus_seat1 ON passanger_details.ticket_no=bus_seat1.ticket_no";
            $sql=mysqli_query($conn,$query);
            if(mysqli_num_rows($sql)>0)
            {
                while($result=mysqli_fetch_assoc($sql))
                {
                    echo"<tr>";
                    echo "<td>".$result['passanger_name']."</td>";
                    echo "<td>".$result['passanger_mobile']."</td>";
                    echo "<td>".$result['bus_name']."</td>";
                    echo "<td>".$result['seat_no']."</td>";
                    echo "<td>".$result['ticket_no']."</td>";
                    echo "<td>".$result['status']."</td>";


                }
            }
            
            ?>
        </tbody>
    </table>
        </div>
        <div class="table-responsive mt-5">
        <table class="table table-bordered table-hover text-center table-primary">
    
        <thead class="table-warning">
            <tr>
                <th>PASSANGER NAME</th>
                <th>PASSANGER MOBILE</th>
                <th>BUS NAME</th>
                <th>SEAT NO</th>
                <th>TICKET NO</th>
                <th>STATUS</th>

            </tr>

        </thead>
        <tbody>
            <?php
            
            

            
            $query="SELECT * FROM passanger_details INNER JOIN bus_seat2 ON passanger_details.ticket_no=bus_seat2.ticket_no";
            $sql=mysqli_query($conn,$query);
            if(mysqli_num_rows($sql)>0)
            {
                while($result=mysqli_fetch_assoc($sql))
                {
                    echo"<tr>";
                    echo "<td>".$result['passanger_name']."</td>";
                    echo "<td>".$result['passanger_mobile']."</td>";
                    echo "<td>".$result['bus_name']."</td>";
                    echo "<td>".$result['seat_no']."</td>";
                    echo "<td>".$result['ticket_no']."</td>";
                    echo "<td>".$result['status']."</td>";


                }
            }
            
            ?>
        </tbody>
    </table>
        </div>
    </div>
</body>
</html>