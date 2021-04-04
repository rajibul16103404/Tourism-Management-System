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
            height: 465px;
            background-color: white;
            opacity: .5;
            margin-top: 7%;
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
        $sql="SELECT * FROM `tour` where id='$_GET[id]'";
        $qry=mysqli_query($db,$sql);
        if($qry)
        {
            if(mysqli_num_rows($qry))
            while($row=mysqli_fetch_assoc($qry))
            {
            ?>
        <form action="" method="POST" enctype="multipart/form-data">
    <h1>Update Tour Package</h1>
        <table>
            <tr>
                <td>
                    <label for="">Tour Name</label>
                </td>
                <td>
                    <input type="text" name="tourname" value="<?php echo $row['tourname']; ?>"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Tour Type</label>
                </td>
                <td>
                    <select name="tourtype">
                        <option value="<?php echo $row['tourtype']; ?>"><?php echo $row['tourtype']; ?></option>
                        <option value="Couple Tour">Couple Tour</option>
                        <option value="Family Tour">Family Tour</option>
                        <option value="Friends Tour">Friends Tour</option>
                    </select><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Tour Location</label>
                </td>
                <td>
                    <input type="text" name="tourlocation" value="<?php echo $row['tourlocation']; ?>"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Tour Price</label>
                </td>
                <td>
                    <input type="int" name="tourprice" value="<?php echo $row['tourprice']; ?>"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Tour Features</label>
                </td>
                <td>
                    <input type="text" name="tourfeatures" value="<?php echo $row['tourfeatures']; ?>"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Tour Details</label>
                </td>
                <td>
                    <input type="text" name="tourdetails" value="<?php echo $row['tourdetails']; ?>"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Image</label>
                </td>
                <td>
                    <input type="file" name="tourimage" ><br>
                </td>
            </tr>
        </table>
        <input type="submit" name="submit" id="btn" value="Update Tour">
    </form>
</body>

                <?php
                }
            }
    if(isset($_POST['submit']))
    {
        $tourname=$_POST['tourname'];
        $tourtype=$_POST['tourtype'];
        $tourlocation=$_POST['tourlocation'];
        $tourprice=$_POST['tourprice'];
        $tourfeatures=$_POST['tourfeatures'];
        $tourdetails=$_POST['tourdetails'];

        $filename=$_FILES['tourimage']['name'];
        $filetempname=$_FILES['tourimage']['tmp_name'];
        $folder='../../tourimages/'.$filename;
        move_uploaded_file($filetempname, $folder);

        if($filename=='')
        {
            $sql2="SELECT * FROM `tour` where id='$_GET[id]'";
            $qry2=mysqli_query($db,$sql2);
            if($qry2)
            {
                if(mysqli_num_rows($qry2))
                {
                $row1=mysqli_fetch_assoc($qry2);
                
                    $sql1="UPDATE `tour` SET `tourimage`='$row1[tourimage]',`tourname`='$tourname',`tourtype`='$tourtype',`tourlocation`='$tourlocation',`tourprice`='$tourprice',`tourfeatures`='$tourfeatures',`tourdetails`='$tourdetails' WHERE id='$_GET[id]'";
                    $qry1=mysqli_query($db,$sql1);
                    if($qry1)
                    {
                        echo "<script>alert('".$tourname." Successfully Updated.');window.location='viewtour.php'</script>";
                    }
                    else
                    {
                        echo "error".$row1['tourimage'];
                    }
                }
            }
        }
            else
            {
                $sql1="UPDATE `tour` SET `tourimage`='$filename',`tourname`='$tourname',`tourtype`='$tourtype',`tourlocation`='$tourlocation',`tourprice`='$tourprice',`tourfeatures`='$tourfeatures',`tourdetails`='$tourdetails' WHERE id='$_GET[id]'";
                $qry1=mysqli_query($db,$sql1);
                if($qry1)
                {
                    echo "<script>alert('".$tourname." Successfully Updated.');window.location='viewtour.php'</script>";
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