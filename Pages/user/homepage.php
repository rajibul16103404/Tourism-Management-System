<?php require('header.php') ?>

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
        .container{
            width: 1400px;
            height: 400px;
            margin-top: 100px;
            box-sizing: border-box;
            margin-left: 70px;
            border-radius: 20px;
            overflow: hidden;
            margin-bottom: -80px;
        }
        .sliderimage img{
            width: 1400px;
            height: 400px;
            border-radius: 10px;
            float: left;
        }
        .slider{
            position: relative;
            width: 9000px;
            animation-name: slider;
            animation-duration: 30s;
        }
        @keyframes slider
        {
            0%{
                left: 0px;
            }
            10%{
                left: -1400px;
            }
            20%{
                left: -2800px;
            }
            30%{
                left: -4200px;
            }
            40%{
                left: -5600px;
            }
            50%{
                left: -7000px;
            }
            60%{
                left: -8400px;
            }
            70%{
                left: -9800px;
            }
            80%{
                left:-11200px;
            }
            90%{
                left: -12600px;
            }
            100%{
                left: 0px;
            }

        }

    </style>
</head>
<body>
        <div class="container">
            <div class="slider">
                <div class="sliderimage">
                    <img src="../../sliderimage/0.jpg" alt="">
                </div>
                <div class="sliderimage">
                    <img src="../../sliderimage/1.jpg" alt="">
                </div>
                <div class="sliderimage">
                    <img src="../../sliderimage/2.jpg" alt="">
                </div>
                <div class="sliderimage">
                    <img src="../../sliderimage/3.jpg" alt="">
                </div>
                <div class="sliderimage">
                    <img src="../../sliderimage/4.jpg" alt="">
                </div>
                <div class="sliderimage">
                    <img src="../../sliderimage/5.jpg" alt="">
                </div>
                <div class="sliderimage">
                    <img src="../../sliderimage/6.jpg" alt="">
                </div>
                <div class="sliderimage">
                    <img src="../../sliderimage/7.jpg" alt="">
                </div>
                <div class="sliderimage">
                    <img src="../../sliderimage/8.jpg" alt="">
                </div>
                <div class="sliderimage">
                    <img src="../../sliderimage/9.jpg" alt="">
                </div>
                <div class="sliderimage">
                    <img src="../../sliderimage/10.jpg" alt="">
                </div>

            </div>
        </div>

    <table>

<?php

    $db=mysqli_connect('localhost','root','','tourist');
    if($db)
    {
            $sql="SELECT * FROM `tour`";
            $qry=mysqli_query($db,$sql);
            if($qry)
            {
                if(mysqli_num_rows($qry))
                while($row=mysqli_fetch_assoc($qry))
                {
                    echo" 
                            <tr>
                                <td>
                                    <img src='../../tourimages/".$row['tourimage']."'>
                                    <h1>".$row['tourname']."</h1><hr></br>
                                    <h2>".$row['tourtype']."</h2>
                                    <h3>".$row['tourlocation']."</h3>
                                    <h4>".$row['tourprice']." Taka</h4> 
                                    <h4>".$row['tourfeatures']."</h4>
                                    <h4>".$row['tourdetails']."</h4>
                            
                                    <a href=''><button class='update'>Details</button></a>
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