<?php include_once('header.php') ?>
<!DOCTYPE html>
<head>
    <style>
        body{
            background: url("../Logo/loginuser.jpg");
            background-repeat: no-repeat;
        }
        form{
            width: 600px;
            height: 200px;
            background-color: white;
            opacity: .5;
            margin-top: 50%;
            margin-left: 80%;
            opacity: .7;
        }
        h1{
            font-size: 50px;
            color: black;
            opacity: .8;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            margin:15px;
        }
        table{
            margin-left: 20%;
        }
        label{
            font-size: 25px;
            color: black;
            opacity: .9;
            padding: 5px;
            margin: 5px;
        }
        input{
            padding: 5px;
            width: 150%;
            border: 2px solid black;
            opacity: .7;
            margin: 5px;
            font-size: 14px;
        }
        a{
            font-size: 40px;
            text-decoration: underline;
            color: slategrey;
            opacity: .6;
        }
        #btn{
            float: left;
            border-top: 2px solid black;
            border-left: 2px solid black;
            border-right: none;
            border-bottom: none;
            opacity: .7;
            color: black;
            font-size: 26px;
            width: 20%;
            margin-left: 80%;
            font-weight: bolder;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <h1>Log In / <a href="userregistration.php">Register here</a></h1>
        <table>
            <tr>
                <td>
                    <label for="email">Email</label>
                </td>
                <td>
                    <input type="email" name="email" placeholder="Enter a valid email address..." required/><br/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password">Password</label>
                </td>
                <td>
                    <input type="password" name="password" placeholder="Enter a password..." required/><br/>
                </td>
            </tr>
        </table>
        <input type="submit" name="submit" id="btn" value="Log In" />
    </form>
</body>





<?php include_once('footer.php') ?>

<?php
    $db=mysqli_connect('localhost','root','','tourist');
    if($db)
    {
        if(isset($_POST['submit']))
        {
            $email=$_POST['email'];
            $password=$_POST['password'];
            $sql="SELECT * FROM `user` WHERE email='$email' && pass='$password'";
            $qry=mysqli_query($db,$sql);
            if($qry)
            {
                
                $row=mysqli_fetch_assoc($qry);
                if($row['email']==$email && $row['pass']==$password)
                {
                    echo "<script>alert('Welcome--------------------".$row['fullname']."');window.location='user/homepage.php?userid=".$row['id']."'</script>";
                }
                else
                {
                    echo "<script>alert('Incorrect username or password');window.location='userlogin.php'</script>";
                }
            }
        }
    }
    else
    {
        mysqli_connect_errno();
    }
?>