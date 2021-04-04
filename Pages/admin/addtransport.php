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
            height: 368px;
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
        select, input{
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
                    <label for="carname">Car Brand</label>
                </td>
                <td>
                    <select name="brand" id="">
                        <option value="">Select one</option>
                        <option value="Toyota">Toyota</option>
                        <option value="Nissan">Nissan</option>
                        <option value="Jaguar">Jaguar</option>
                        <option value="Suzuki">Suzuki</option>
                        <option value="Audi">Audi</option>
                    </select><br/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="carmodel">Car Model</label>
                </td>
                <td>
                    <select name="model" id="">
                        <option value="">Select one</option>
                        <option value="Allion">Allion</option>
                        <option value="Hiace">Hiace</option>
                        <option value=""></option>
                    </select><br/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="cartype">Car Type</label>
                </td>
                <td>
                    <select name="type" id="">
                        <option value="">Select one</option>
                        <option value="Private">Private</option>
                        <option value="Micro">Micro</option>
                    </select><br/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="seatnumber">Quantity of Seats</label>
                </td>
                <td>
                    <select name="seat" id="">
                        <option value="">Select one</option>
                        <option value="4 seats">4 seats</option>
                        <option value="6 seats">6 seats</option>
                        <option value="10 seats">10 seats</option>
                        <option value="14 seats">14 seats</option>
                    </select><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="dailycost">Daily Cost</label>
                </td>
                <td>
                    <input type="text" name="dailycost" placeholder="Enter Cost Per Day...."><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="carimage">Car Image</label>
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
            $brand=$_POST['brand'];
            $model=$_POST['model'];
            $type=$_POST['type'];
            $seat=$_POST['seat'];
            $dailycost=$_POST['dailycost'];

            $filename=$_FILES['image']['name'];
            $filetempname=$_FILES['image']['tmp_name'];
            $folder='../../carimages/'.$filename;
            move_uploaded_file($filetempname, $folder);

            $sql="INSERT INTO `car` (`brand`, `model`, `type`, `seat`, `dailycost`, `image`) VALUES ('$brand', '$model', '$type', '$seat', '$dailycost', '$filename')";
            if(mysqli_query($db,$sql))
            {
                echo "<script>alert('".$brand." Registered Successfully.');window.location='addtransport.php'</script>";
            }
            else
            {
                echo "<script>alert('Error');window.location='addtransport.php'</script>";
            }
        }
    }
    else
    {
        mysqli_connect_errno();
    }

?>






