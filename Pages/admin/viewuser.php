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
            $sql="SELECT * FROM `user`";
            $qry=mysqli_query($db,$sql);
            if($qry)
            {
                if(mysqli_num_rows($qry))
                while($row=mysqli_fetch_assoc($qry))
                {
                    echo" 
                            <tr>
                                <td>
                                    <img src='../../userimages/".$row['image']."'>
                                    <h1>".$row['fullname']."</h1><hr></br>
                                    <h2>".$row['email']."</h2>
                                    <h3>".$row['address']."</h3>
                                    <h4>".$row['phone']."</h4>
                                    <a href='deleteuser.php?id=".$row['id']."'><button class='delete'>Delete</button></a>
                                    
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