<?php include_once('header.php') ?>
<?php
    $db=mysqli_connect('localhost','root','','tourist');
    if($db)
    {
        $i=0;
        $j=0;
        $k=0;
        $l=0;
        $m=0;
        $n=0;
            $sql="SELECT * FROM `user`";
            $qry=mysqli_query($db,$sql);
            if($qry)
            {
                if(mysqli_num_rows($qry))
                while($row=mysqli_fetch_assoc($qry))
                {
                    $i++;
                }
            }

            $sql1="SELECT * FROM `car`";
            $qry1=mysqli_query($db,$sql1);
            if($qry1)
            {
                if(mysqli_num_rows($qry1))
                while($row=mysqli_fetch_assoc($qry1))
                {
                    $j++;
                }
            }


            $sql2="SELECT * FROM `tour`";
            $qry2=mysqli_query($db,$sql2);
            if($qry2)
            {
                if(mysqli_num_rows($qry2))
                while($row=mysqli_fetch_assoc($qry2))
                {
                    $k++;
                }
            }


            $sql3="SELECT * FROM `blog`";
            $qry3=mysqli_query($db,$sql3);
            if($qry3)
            {
                if(mysqli_num_rows($qry3))
                while($row=mysqli_fetch_assoc($qry3))
                {
                    $l++;
                }
            }


            $sql4="SELECT * FROM `user`";
            $qry4=mysqli_query($db,$sql4);
            if($qry4)
            {
                if(mysqli_num_rows($qry4))
                while($row=mysqli_fetch_assoc($qry4))
                {
                    $m++;
                }
            }


            $sql5="SELECT * FROM `user`";
            $qry5=mysqli_query($db,$sql5);
            if($qry5)
            {
                if(mysqli_num_rows($qry5))
                while($row=mysqli_fetch_assoc($qry5))
                {
                    $n++;
                }
            }

        }
?>
<!DOCTYPE html>
<head>
        <style>
            .box1,.box2,.box3,.box4{
                margin-top: 7%;
                width: 300px;
                height: 150px;
                float: left;
                margin: 20px;
                text-align: center;
                padding: 20px;
            }
            h1{
                font-size: 40px;
            }
            h2{
                font-family: sans-serif;
                font-size: 25px;
                margin-top: 0;
            }
            .box1{
                background-color: greenyellow;
            }
            .box2{
                background-color: violet;
            }
            .box3{
                background-color: lightgreen;
            }
            .box4{
                background-color: lightpink;
            }
        </style>
</head>
<body>
    <br><br><br><br>
    <div class="box1">
        <h1><?php echo $i; ?></h1>
        <h2>Registered Users</h2>
    </div>
    <div class="box2">
        <h1><?php echo $j; ?></h1>
        <h2>Registered Cars</h2>
    </div>
    <div class="box3">
        <h1><?php echo $k; ?></h1>
        <h2>Tour Packages Added</h2>
    </div>
    <div class="box4">
        <h1><?php echo $l; ?></h1>
        <h2>Blogs Added</h2>
    </div>
    <div class="box5">

    </div>
    <div class="box6">

    </div>
</body>






<?php include_once('footer.php') ?>