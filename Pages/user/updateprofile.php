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
            height: 464px;
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
        input{
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
        $sql="SELECT * FROM `user` where id='$userid'";
        $qry=mysqli_query($db,$sql);
        if($qry)
        {
            if(mysqli_num_rows($qry))
            while($row=mysqli_fetch_assoc($qry))
            {
            ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <h1>Update Profile</h1>
        <table>
            <tr>
                    <td>
                        <label for="">Choose Image</label> 
                    </td>
                    <td>
                        <img src="../../userimages/<?php echo $row['image']; ?>" alt="Profile Image"><br>
                        <input type="file" name="image"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                       <label for="">Full Name</label> 
                    </td>
                    <td>
                        <input type="text" name="fullname" value="<?php echo $row['fullname']; ?>"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                       <label for="">Email</label> 
                    </td>
                    <td>
                        <input type="text" name="email" value="<?php echo $row['email']; ?>"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                      <label for="">Phone</label>  
                    </td>
                    <td>
                        <input type="int" name="phone" value="<?php echo $row['phone']; ?>"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                      <label for="">Address</label>  
                    </td>
                    <td>
                        <input type="text" name="address" value="<?php echo $row['address']; ?>"><br>
                    </td>
                </tr>
        </table>
        <input type="submit" name="submit" id="btn" value="Update Now" />
    </form>
</body>

                <?php
                }
            }
    if(isset($_POST['submit']))
    {
        $email=$_POST['email'];
        $fullname=$_POST['fullname'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];

        $filename=$_FILES['image']['name'];
        $filetempname=$_FILES['image']['tmp_name'];
        $folder='../../userimages/'.$filename;
        move_uploaded_file($filetempname, $folder);

        if($filename=='')
        {
            $sql2="SELECT * FROM `user` where id='$userid'";
            $qry2=mysqli_query($db,$sql2);
            if($qry2)
            {
                if(mysqli_num_rows($qry2))
                $row1=mysqli_fetch_assoc($qry2);
                {
                    $sql1="update user set email='$email', fullname='$fullname', phone='$phone', address='$address', image='$row1[image]' where id='$userid'";
                    $qry1=mysqli_query($db,$sql1);
                    if($qry1)
                    {
                        echo "<script>alert('".$fullname." Successfully Updated.');window.location='profile.php?userid=".$userid."'</script>";
                    }
                    else
                    {
                        echo "error";
                    }
                }
            }
        }
            else
            {
                $sql1="update user set email='$email', fullname='$fullname', phone='$phone', address='$address', image='$filename' where id='$userid'";
                $qry1=mysqli_query($db,$sql1);
                if($qry1)
                {
                    echo "<script>alert('".$fullname." Successfully Updated.');window.location='profile.php?userid=".$userid."'</script>";
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