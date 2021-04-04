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
            height: 388px;
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
        textarea, input{
            padding: 7px;
            width: 120%;
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
    <h1>Update About Page</h1>
        <table>
            <tr>
                <td>
                    <label for="">Heading</label>
                </td>
                <td>
                    <input type="text" name="heading" id="" placeholder="Enter heading....." /><br/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for=""> Content</label>
                </td>
                <td>
                    <textarea name="content" id="content" cols="30" rows="10" placeholder="Write Content Here.........."></textarea>
                </td>
            </tr>
        </table>
        <input type="submit" name="submit" id="btn" value="Update" />
    </form>

</body>

<?php include_once('footer.php') ?>

<?php
    $db=mysqli_connect('localhost','root','','tourist');
    if($db)
    {
        if(isset($_POST['submit']))
        {
            $heading=$_POST['heading'];
            $content=$_POST['content'];
            

            $sql1="UPDATE `about` SET `heading`='$heading',`content`='$content' WHERE id='1'";
                if(mysqli_query($db,$sql1))
                {
                    echo "<script>alert('".$heading." successfully Updated.');window.location='contact.php'</script>";
                }
                else
                {
                    $sql="INSERT INTO `about` ( `heading`, `content`) VALUES ('$heading', '$content')";
                if(mysqli_query($db,$sql))
                {
                    echo "<script>alert('".$heading." successfully added.');window.location='contact.php'</script>";
                }
                else
                {
                    echo "not inserted";
                }
                    
                }
        }
    }
    else
    {
        mysqli_connect_errno();
    }

?>