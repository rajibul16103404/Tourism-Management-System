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
        input{
            padding: 7px;
            width: 25%;
            border: 2px solid black;
            text-align: center;
            opacity: .7;
            margin: 5px;
            font-size: 14px;
        }
        button{
            width: 5%;
            font-size: 18px;
            padding: 7px;
            float: right;
            margin-left: 20px;
            cursor: pointer;
            font-weight: bolder;
            color: white;
            border: none;
            background-color: green;
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
        $tourid=$_GET['tourid'];
            $sql="SELECT * FROM `tour` where id=$tourid";
            $qry=mysqli_query($db,$sql);
            if($qry)
            {
                if(mysqli_num_rows($qry))
                {
                $row=mysqli_fetch_assoc($qry);
                
                    echo" 
                            <tr>
                                <td>
                                    <img src='../tourimages/".$row['tourimage']."'>
                                    <h1>Tour Name:\t".$row['tourname']."</h1><hr></br>
                                    <h2>Tour Type:\t".$row['tourtype']."</h2>
                                    <h3>Tour Location:\t".$row['tourlocation']."</h3>
                                    <h4>Tour Price:\t".$row['tourprice']." Taka</h4> 
                                    <h4>Tour Features:\t".$row['tourfeatures']."</h4>
                                    <h5>Tour Details:\t".$row['tourdetails']."</h5>
                                    <a href='userlogin.php'><button>Book</button></a>
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