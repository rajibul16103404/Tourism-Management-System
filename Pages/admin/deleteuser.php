<?php
        $conn=mysqli_connect("localhost","root","","tourist");

        if($conn)
        {
            $p=$_GET['id'];
           $del="DELETE FROM user WHERE id='$p' ";
           $res=mysqli_query($conn,$del);
           if($res)
           {
            echo "<script>alert('Deleted Successfully!');window.location='viewuser.php'</script>";
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