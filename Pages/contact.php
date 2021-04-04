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
            margin-bottom: 100px;
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
        .feedback{
            margin-top: 60%;
            background-color: light slategray;
            margin-left: 40%;
            width: 80%;
        }
        input,textarea{
            width: 200%;
            font-size: 19px;
            padding: 5px;
            margin: 5px;
        }

    </style>
</head>
<body>
    <table>

<?php

    $db=mysqli_connect('localhost','root','','tourist');
    if($db)
    {
            $sql="SELECT * FROM `contact`";
            $qry=mysqli_query($db,$sql);
            if($qry)
            {
                if(mysqli_num_rows($qry))
                while($row=mysqli_fetch_assoc($qry))
                {
                    echo" 
                            <tr>
                                <td>
                                    <h1>".$row['heading']."</h1><hr></br>
                                    <h2>".$row['content1']."</h2>
                                    <h2>".$row['content2']."</h2>
                                </td>
                            </tr>
                        
                    ";
                }
            }
        }



?>
    </table>
    </br></br></br>
<div class="feedback">
            <h1>Want to write us?</h1>
        <form action="" method="POST" enctype="multipart/form-data">

            <input type="text" name="subject" placeholder="Enter Subject"><br>
            <input type="email" name="email" placeholder="Enter your email address..."><br>
            <textarea name="message" id="" cols="30" rows="10" placeholder="Write to us....."></textarea><br>
            <input type="submit" name="submit" value="Send">

        
            
            
            
            
        </form>
    </div>
</body>

    </br></br></br>

<?php
    $db=mysqli_connect('localhost','root','','tourist');
    if($db)
    {
        if(isset($_POST['submit']))
        {
            $subject=$_POST['subject'];
            $email=$_POST['email'];
            $message=$_POST['message'];

        $sql="INSERT INTO `query`(`subject`, `email`, `message`) VALUES ('$subject','$email','$message')";
        if(mysqli_query($db,$sql))
        {
            echo "<script>alert('Quering Successful.');window.location='contact.php'</script>";
        }
        else{
            echo "<script>alert('Quering Not Successful.');window.location='contact.php'</script>";
        }
    }
    }
?>


<?php include_once('footer.php') ?>