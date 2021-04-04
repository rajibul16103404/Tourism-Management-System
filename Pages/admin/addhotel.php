<?php include_once('header.php') ?>

<!DOCTYPE html>
<head>
    <style>
        body{
            background: url("../../Logo/hotel.jpg");
            background-repeat: no-repeat;
        }
        form{
            width: 900px;
            height: 366px;
            background-color: white;
            opacity: .5;
            margin-top: 10%;
            margin-left: 20%;
            opacity: .7;
            position: absolute;
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
            width: 100%;
            border: 2px solid black;
            text-align: center;
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
        <h1>Register New Hotel</h1>
        <table>
            <tr>
                <td>
                    <label for="hotelname">Hotel Name</label>
                </td>
                <td>
                    <input type="text" name="hotelname" id="hotelname" placeholder="Enter a valid Hotel Name..." /><br/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Address">Hotel Address</label>
                </td>
                <td>
                    <input type="text" name="hoteladdress" id="address" placeholder="Enter Hotel Address..." /><br/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="quality">Hotel Quality</label>
                </td>
                <td>
                    <input type="text" name="hotelquality" id="hotelquality" placeholder="Enter Hotel Quality..." /><br/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="hotelphone">Hotel Phone Number</label>
                </td>
                <td>
                    <input type="int" name="hotelphone" id="hotelphone" placeholder="Enter hotels phone number..." /><br/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="hotelimage">Hotel Image</label>
                </td>
                <td>
                <input type="file" name="image" required>
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
            $hotelname=$_POST['hotelname'];
            $hoteladdress=$_POST['hoteladdress'];
            $hotelquality=$_POST['hotelquality'];
            $hotelphone=$_POST['hotelphone'];

            $filename=$_FILES['image']['name'];
            $filetempname=$_FILES['image']['tmp_name'];
            $folder='../../hotelimages/'.$filename;
            move_uploaded_file($filetempname, $folder);

            $sql="INSERT INTO `hotel` (`hotelname`, `hoteladdress`, `hotelquality`, `hotelphone`, `hotelimage`) VALUES ('$hotelname', '$hoteladdress', '$hotelquality', '$hotelphone', '$filename')";
            if(mysqli_query($db,$sql))
            {
                echo "<script>alert('".$hotelname." Registered Successfully.');window.location='addhotel.php'</script>";
            }
            else
            {
                echo "<script>alert('Error');window.location='addhotel.php'</script>";
            }
        }
    }
    else
    {
        mysqli_connect_errno();
    }

?>







<?php include_once('footer.php') ?>