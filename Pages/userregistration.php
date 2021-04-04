<?php include_once('header.php') ?>
<!DOCTYPE html>
<head>
    <style>
        body{
            background: url("../Logo/loginuser.jpg");
            background-repeat: no-repeat;
        }
        form{
            width: 800px;
            height: 383px;
            background-color: white;
            opacity: .5;
            margin-top: 25%;
            margin-left: 45%;
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
        #btn{
            float: left;
            border-top: 2px solid black;
            border-left: 2px solid black;
            border-right: none;
            border-bottom: none;
            opacity: .7;
            color: black;
            font-size: 26px;
            width: 25%;
            margin-left: 75%;
            font-weight: bolder;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <h1>User Registration</h1>
        <table>
            <tr>
                <td>
                    <label for="email">Email</label>
                </td>
                <td>
                    <input type="email" name="email" id="email" placeholder="Enter a valid email address..." /><br/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="fullname">Full Name</label>
                </td>
                <td>
                    <input type="text" name="fullname" id="fullname" placeholder="Enter your fullname..." /><br/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="address">Address</label>
                </td>
                <td>
                    <input type="text" name="address" id="address" placeholder="Enter your address..." /><br/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Phone">Phone Number</label>
                </td>
                <td>
                    <input type="int" name="phone" id="phone" placeholder="Enter your 11 digit phone number..." /><br/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password">Password</label>
                </td>
                <td>
                    <input type="password" name="password" id="password" placeholder="Enter a password..." /><br/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="image">Image</label>
                </td>
                <td>
                    <input type="file" name="image" required/><br/>
                </td>
            </tr>
        </table>
        <input type="submit" name="submit" id="btn" value="Register Now" />
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
            $fullname=$_POST['fullname'];
            $address=$_POST['address'];
            $phone=$_POST['phone'];
            $password=$_POST['password'];

            $filename=$_FILES['image']['name'];
            $filetempname=$_FILES['image']['tmp_name'];
            $folder='../userimages/'.$filename;
            move_uploaded_file($filetempname, $folder);

            $sql="INSERT INTO `user` (`email`, `fullname`, `phone`, `address`, `pass`, `image`) VALUES ('$email', '$fullname', '$phone', '$address', '$password', '$filename')";
            if(mysqli_query($db,$sql))
            {
                echo "<script>alert('Registered successfuly. Please log in.....');window.location='userlogin.php?user=".$fullname."'</script>";
            }
            else
            {
                echo "<script>alert('Error');window.location='userregistration.php'</script>";
            }
        }
    }
    else
    {
        mysqli_connect_errno();
    }

?>