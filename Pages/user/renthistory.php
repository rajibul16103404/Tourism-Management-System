<?php include_once('header.php') ?>

<!DOCTYPE html>
<head>
    <style>
        body{
            background: url('../../Logo/hotel.jpg');
            background-repeat: no-repeat;
        }
        table{
            width: 90%;
            margin-left: 5%;
            margin-top: 7%;
            position: absolute;
            opacity: .9;
            margin-bottom: 50px;
        }
        table tr{
            margin: 30px;
        }
        table tr td{
            width: 15%;
            background-color: whitesmoke;
            margin: 30px;
            padding: 15px;
        }
        td img{
            width: 200px;
            height: 220px;
            border-radius: 0;
            float: left;
            margin-left: 5%;
            margin-right: 5%;
        }
        td h1{
            font-size: 50px;
            color: black;
            font-weight: bolder;
            margin: 0;
            padding: 0;
            margin-bottom: 0;
            opacity: .7;
        }
        hr{
            width: 50%;
            height: 5px;
            background-color: black;
            font-size: 50px;
            opacity: .9;
            margin: 0;
            padding: 0;
            float: left;
        }
        td h2, h3,h4{
            margin: 0px;
            padding: 2px;
            font-size: 18px;
            color: black;   
        }
        button{
            font-size: 18px;
            padding: 7px;
            float: right;
            margin-left: 20px;
            cursor: pointer;
            font-weight: bolder;
            color: white;
            border: none;
        }
        .update{
            background-color: green;
            opacity: .7;
        }
        .delete{
            background-color: red;
            opacity: .7;
        }

    </style>
</head>
<body>
    <table>

<?php

    $db=mysqli_connect('localhost','root','','tourist');
    if($db)
    {
        
            $sql="SELECT * FROM `carbooking`";
            $qry=mysqli_query($db,$sql);
            if($qry)
            {
                if(mysqli_num_rows($qry))
                while($row=mysqli_fetch_assoc($qry))
                {
                    echo" 
                            <tr>
                                <td>
                                    <img src='../../carimages/".$row['carimage']."'>
                                    <h1>".$row['carbrand']."</h1><hr></br>
                                    <h2>".$row['carmodel']."</h2>
                                    <h3>".$row['cartype']."</h3>
                                    <h4>".$row['carseats']."</h4>
                                    <h4>".$row['dailycost']." Taka Per Day</h4>
                                    <h4>".$row['totalcost']."</h4>
                                    <h4>Book For ".$row['days']." Days.</h4>
                                    ";

                                    echo "<a href='deleterenthistory.php?id=".$row['id']."&&userid=".$userid."'><button class='delete'>Delete</button></a>
                                    ";

                                    if($row['status']=='confirmed' && $row['payment']=='pending')
                                    {
                                        echo "<a href='paymentrent.php?bookid=".$row['id']."&&userid=".$row['userid']."'><button class='update'>Pay Now</button></a>";
                                    }
                                    if($row['payment']=='paid')
                                    {
                                        echo "<button class='update'>Already Paid.</button>";
                                    }

                                    echo"
                                
                                        
                                </td>
                            </tr>
                        
                    ";
                }
            }
        }



?>
    </table>
    </br></br></br>
</body>

    </br></br></br>




<?php include_once('footer.php') ?>