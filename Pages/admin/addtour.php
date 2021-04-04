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
            height: 454px;
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
        label{
            font-size: 25px;
            color: black;
            opacity: .9;
            padding: 5px;
            margin: 5px;
        }
        input,textarea,select{
            padding: 5px;
            width: 130%;
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
    <h1>Add Tour Package</h1>
        <table>
            <tr>
                <td>
                    <label for="">Tour Name</label>
                </td>
                <td>
                    <input type="text" name="tourname" placeholder="Enter Tour Name"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Tour Type</label>
                </td>
                <td>
                    <select name="tourtype">
                        <option value="Single Tour">Single Tour</option>
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
                    <input type="text" name="tourlocation" placeholder="Enter Tour Location"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Tour Price</label>
                </td>
                <td>
                    <input type="int" name="tourprice" placeholder="Enter Tour Price"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Tour Features</label>
                </td>
                <td>
                    <input type="text" name="tourfeatures" placeholder="Enter Tour Features"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Tour Details</label>
                </td>
                <td>
                    <input type="text" name="tourdetails" placeholder="Enter Tour Details"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Image</label>
                </td>
                <td>
                    <input type="file" name="tourimage" required><br>
                </td>
            </tr>
        </table>
        <input type="submit" name="submit" id="btn" value="Add Tour">
    </form>
        
</body>

<br><br><br><br>

<?php
    $db=mysqli_connect('localhost','root','','tourist');
    if($db)
    {
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

            $sql="INSERT INTO `tour`(`tourimage`,`tourname`, `tourtype`, `tourlocation`, `tourprice`, `tourfeatures`, `tourdetails`) VALUES ('$filename','$tourname','$tourtype','$tourlocation','$tourprice','$tourfeatures','$tourdetails')";
            if(mysqli_query($db,$sql))
            {
                echo "<script>alert('".$tourname." successfully added.');window.location='addtour.php'</script>";
            }
            else

            {
               echo " ('$tourname', '$tourtype', '$tourlocation', '$tourprice', '$tourfeatures', '$tourdetails', '$filename')";
            }
        }
    }
    else
    {
        mysqli_connect_errno();
    }

?>

<?php include_once('footer.php') ?>








