<?php include_once('header.php') ?>
<br><br><br><br>
<!DOCTYPE html>
<head>
    <style>
        body{
            background: url("../../Logo/hotel.jpg");
            background-repeat: no-repeat;
        }
        form{
            width: 900px;
            height: 422px;
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
        td img{
            height: 100px;
            width: 100px;
            border-radius: 10px;
            margin-left: 15%;
        }
        label{
            font-size: 25px;
            color: black;
            opacity: .9;
            padding: 5px;
            margin: 5px;
        }
        input, select{
            padding: 5px;
            width: 130%;
            border: 2px solid black;
            text-align: center;
            opacity: .7;
            margin: 5px;
            font-size: 16px;
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
<?php

$db=mysqli_connect('localhost','root','','tourist');
if($db)
{
        $sql="SELECT * FROM `car` where id='$_GET[id]'";
        $qry=mysqli_query($db,$sql);
        if($qry)
        {
            if(mysqli_num_rows($qry))
            while($row=mysqli_fetch_assoc($qry))
            {
            ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <h1>Update Existing Car</h1>
        <table>
            <tr>
                <td>
                    <label for="carname">Car Brand</label>
                </td>
                <td>
                    <select name="brand" id="">
                        <option value="<?php echo $row['brand']; ?>"><?php echo $row['brand']; ?></option>
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
                        <option value="<?php echo $row['model'];?>"><?php echo $row['model'];?></option>
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
                        <option value="<?php echo $row['type'];?>"><?php echo $row['type'];?></option>
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
                        <option value="<?php echo $row['seat'];?> seats"><?php echo $row['seat'];?></option>
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
                    <input type="text" name="dailycost" value="<?php echo $row['dailycost'];?>"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="carimage">Car Image</label>
                </td>
                <td>
                <input type="file" name="image" >
                </td>
            </tr>
        </table>
        <input type="submit" name="submit" id="btn" value="Update Car" />
    </form>
</body>

                <?php
                }
            }
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

        if($filename=='')
        {
            $sql2="SELECT * FROM `car` where id='$_GET[id]'";
            $qry2=mysqli_query($db,$sql2);
            if($qry2)
            {
                if(mysqli_num_rows($qry2))
                {
                $row1=mysqli_fetch_assoc($qry2);
                
                    $sql1="UPDATE `car` SET `brand`='$brand',`model`='$model',`type`='$type',`seat`='$seat',`dailycost`='$dailycost',`image`='$row1[image]' WHERE id='$_GET[id]'";
                    $qry1=mysqli_query($db,$sql1);
                    if($qry1)
                    {
                        echo "<script>alert('".$brand." Successfully Updated.');window.location='viewtransport.php'</script>";
                    }
                    else
                    {
                        echo "error".$row1['image'];
                    }
                }
            }
        }
            else
            {
                $sql1="UPDATE `car` SET `brand`='$brand',`model`='$model',`type`='$type',`seat`='$seat',`dailycost`='$dailycost',`image`='$filename' WHERE id='$_GET[id]'";
                $qry1=mysqli_query($db,$sql1);
                if($qry1)
                {
                    echo "<script>alert('".$brand." Successfully Updated.');window.location='viewtransport.php'</script>";
                }
                else
                {
                    echo "error";
                }
            } 
        }
    
}


?>




<?php include_once('footer.php') ?>