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
            height: 397px;
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
            font-family: sans-serif;
        }
        textarea{
            padding: 5px;
            width: 130%;
            border: 2px solid black;
            text-align: center;
            opacity: .7;
            margin: 5px;
            font-size: 16px;
            font-family: sans-serif;
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
        $sql="SELECT * FROM `blog` where id='$_GET[id]'";
        $qry=mysqli_query($db,$sql);
        if($qry)
        {
            if(mysqli_num_rows($qry))
            while($row=mysqli_fetch_assoc($qry))
            {
            ?>
        <form action="" method="POST" enctype="multipart/form-data">
    <h1>Update Existing Blog</h1>
        <table>
            <tr>
                <td>
                    <label for="image">Image</label>
                </td>
                <td>
                    <input type="file" name="image" /><br/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Blog Title</label>
                </td>
                <td>
                    <input type="text" name="blogname" id="" value="<?php echo $row['blogname']; ?>"/><br/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Blog Content</label>
                </td>
                <td>
                    <textarea name="content" id="content" cols="30" rows="7" ><?php echo $row['content']; ?></textarea>
                </td>
            </tr>
        </table>
        <input type="submit" name="submit" id="btn" value="Update Blog" />
    </form>
</body>

                <?php
                }
            }
    if(isset($_POST['submit']))
    {
        $blogname=$_POST['blogname'];
        $blogcontent=$_POST['content'];

        $filename=$_FILES['image']['name'];
        $filetempname=$_FILES['image']['tmp_name'];
        $folder='../../blogimage/'.$filename;
        move_uploaded_file($filetempname, $folder);

        if($filename=='')
        {
            $sql2="SELECT * FROM `blog` where id='$_GET[id]'";
            $qry2=mysqli_query($db,$sql2);
            if($qry2)
            {
                if(mysqli_num_rows($qry2))
                $row1=mysqli_fetch_assoc($qry2);
                {
                    $sql1="UPDATE `blog` SET `image`='$row1[image]',`blogname`='$blogname',`content`='$blogcontent' WHERE id='$_GET[id]'";
                    $qry1=mysqli_query($db,$sql1);
                    if($qry1)
                    {
                        echo "<script>alert('".$blogname." Successfully Updated.');window.location='viewblog.php'</script>";
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
                $sql1="UPDATE `blog` SET `image`='$filename',`blogname`='$blogname',`content`='$blogcontent' WHERE id='$_GET[id]'";
                $qry1=mysqli_query($db,$sql1);
                if($qry1)
                {
                    echo "<script>alert('".$blogname." Successfully Updated.');window.location='viewblog.php'</script>";
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