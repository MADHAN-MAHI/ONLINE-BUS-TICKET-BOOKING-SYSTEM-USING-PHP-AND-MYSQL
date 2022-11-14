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
        body{
            background-color:teal ;
        }
        nav{
        background:linear-gradient(255deg,lightgreen,red);
        position: sticky;
        /* box-shadow:0 0 40px black; */
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
                    
                    <a href="print_ticket.php" class="btn   ps-4 pe-4" style="border-radius: 50% ;">MY TICKET</a>
                </div>
                <div class="collapse navbar-collapse" id="mynav">
                    
                    <a href="logout.php" class="btn    btn-primary rounded-pill ms-auto ps-4 pe-4" style="border-radius: 50% ;">LOGOUT</a>
                </div>
            </div>

        </nav>
    </header>
    <div class="container print_ticket_top">
        <h2 class="p-4 mt_4">PRINT YOUR TICKET</h2>
        <p class="print-ticket-top-para">Verify your details and <span class="text-danger font-weight-bold">print</span>your ticket</p>
        <div class="form-group">
            <form  method="post">
                <div class="d-flex justify-content-center">
                    <div class="p-4">
                        <input type="text" name="ticket_no" placeholder="ticket no" class="form-control">
                    </div>
                    <div class="p-4">
                        <input type="submit" name="print_ticket" value="print your ticket"
                        class="form-control btn btn-danger">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php
    if(isset($_POST['print_ticket']))
    {
        
        $ticket_no=$_POST['ticket_no'];
        $passanger_name=array();
        $passanger_mobile=array();
        $seat_no=array();
        $bus_name=array();
        $fetch_passanger_query="SELECT * FROM passanger_details WHERE ticket_no='$ticket_no'";
        $fetch_passanger_query_result=mysqli_query($conn,$fetch_passanger_query);
        if($fetch_passanger_query_result)
        {
            while($row=mysqli_fetch_assoc($fetch_passanger_query_result))
            {
                $passanger_name[]=$row['passanger_name'];
                $passanger_mobile[]=$row['passanger_mobile'];

            }
            $fetch_seat_query="SELECT * FROM bus_seat2 WHERE ticket_no='$ticket_no'";
            $fetch_seat_query_result=mysqli_query($conn,$fetch_seat_query);
            if($fetch_seat_query_result)
            {
                while($row=mysqli_fetch_assoc($fetch_seat_query_result))
                {
                    $seat_no[]=$row['seat_no'];
                    $bus_name[]=$row['bus_name'];
                }
                $total_no_passanger=mysqli_num_rows($fetch_passanger_query_result);
                if($total_no_passanger==1)
                {
                    ?>
                    <div class="jumbtron container">
                        <table class="table table table-bordered table-hover text-center table-primary">
                            <thead>
                                Passanger  details
                            </thead>
                            <tbody>
                                <tr>
                                    <td>passanger name</td>
                                    <td><?php echo $passanger_name[0]?></td>
                                    <td>mobile</td>
                                    <td><?php echo $passanger_mobile[0]?></td>
                                </tr>
                                <tr>
                                    <td>Bus name</td>
                                    <td><?php echo $bus_name[0]?></td>
                                    <td>Seat no</td>
                                    <td><?php echo $seat_no[0]?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <?php
                }
            }
        }
    }
    ?>
</body>
</html>