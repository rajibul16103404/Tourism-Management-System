<?php
        $conn=mysqli_connect("localhost","root","","tourist");

        if($conn)
        {
            $userid=$_GET['userid'];
            $p=$_GET['id'];
           $del="DELETE FROM carbooking WHERE id='$p' ";
           $res=mysqli_query($conn,$del);
           if($res)
           {
            echo "<script>alert('Deleted Successfully!');window.location='renthistory.php?userid=".$userid."'</script>";
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