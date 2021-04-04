<?php include_once('header.php') ?>

<!DOCTYPE html>
<head>
    <style>
        body{
            background: url('./../Logo/hotel.jpg');
            background-repeat: no-repeat;
        }
        table{
            width: 90%;
            margin-left: 5%;
            margin-top: 7%;
            position: absolute;
            opacity: .9;
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
            height: 200px;
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
        td select, input{
            font-size: 18px;
            font-weight: bold;
            margin-top: 15px;
            text-align: center;
            
            border: 2px solid gray;
            width: 20%;
        }
        td .button{
            font-size: 18px;
            padding: 7px;
            float: right;
            margin-left: 20px;
            cursor: pointer;
            font-weight: bolder;
            color: white;
            border: none;
            background-color: green;
        }

    </style>
</head>
<body>
    <table>

<?php

    $db=mysqli_connect('localhost','root','','tourist');
    if($db)
    {
        $carid=$_GET['carid'];
            $sql="SELECT * FROM `car` where id='$carid'";
            $qry=mysqli_query($db,$sql);
            if($qry)
            {
                if(mysqli_num_rows($qry))
                {
                while($row=mysqli_fetch_assoc($qry))
                {
                    echo" 
                            <tr>
                                <td>
                                    <img src='../../carimages/".$row['image']."'>
                                    <h1>".$row['brand']."</h1><hr></br>
                                    <h2>".$row['model']."</h2>
                                    <h3>".$row['type']."</h3>
                                    <h4>".$row['seat']."</h4> 
                                    <h4>".$row['dailycost']." Taka Per Day</h4>";?>
                                    <form method='POST' enctype='multipart/form-data'>
                                        <select name='days'>
                                            <option value=''>Select Days</option>
                                            <option value='1'>1 Days</option>
                                            <option value='2'>2 Days</option>
                                            <option value='3'>3 Days</option>
                                            <option value='4'>4 Days</option>
                                            <option value='5'>5 Days</option>
                                            <option value='6'>6 Days</option>
                                            <option value='7'>7 Days</option>
                                            <option value='8'>8 Days</option>
                                            <option value='9'>9 Days</option>
                                            <option value='10'>10 Days</option>
                                        </select>
                                        From <input type="date" name="date" required>
                                        <input class='button' type='submit' name='submit' value='Take Rent' />
                                    </form>
                                    <?php echo "
                                    </td>
                            </tr>
                        
                    ";
                }
            }
        }
        $sql1="SELECT * FROM `car` where id='$carid'";
            $qry1=mysqli_query($db,$sql1);
            if($qry1)
            {
                if(mysqli_num_rows($qry1))
                {
                $r=mysqli_fetch_assoc($qry1);
            
            if(isset($_POST['submit']))
            {
                $userid=$_GET['userid'];
                $days=$_POST['days'];
                $date=$_POST['date'];
                $total=$r['dailycost']*$days;
                $sql2="INSERT INTO `carbooking`(`carbrand`, `carmodel`, `carimage`, `cartype`, `dailycost`, `totalcost`, `userid`, `status`,`carseats`, `days`,`date`,`payment`) VALUES ('".$r['brand']."','".$r['model']."','".$r['image']."','".$r['type']."','".$r['dailycost']."','$total','$userid','unconfirmed','".$r['seat']."','$days','$date','pending')";  
                if(mysqli_query($db,$sql2))
                {
                    echo "<script>alert('".$r['brand']." successfully Taken In Rent With Cost ".$total." for ".$days." Days. Wait For Admins Approval.');window.location='transport.php?userid=".$userid."'</script>";
                }
                else
                {
                echo "Not Inserted";
                }
            }
        }
    }
}



?>
    </table>
    </br></br></br>
</body>

    </br></br></br>




<?php include_once('footer.php') ?>