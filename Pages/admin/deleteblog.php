<?php
        $conn=mysqli_connect("localhost","root","","tourist");

        if($conn)
        {
            $p=$_GET['id'];
           $del="DELETE FROM blog WHERE id='$p' ";
           $res=mysqli_query($conn,$del);
           if($res)
           {
            echo "<script>alert('Deleted Successfully!');window.location='viewblog.php'</script>";
           }
        }
 ?>
 <!DOCTYPE html>
 <html>
     <head>
         <title>Delete</title>
     </head>
     <body>
         <META http-equiv="refresh" content="0"; >
     </body>
 </html>