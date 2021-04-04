<?php
    $db=mysqli_connect('localhost','root','','tourist');
    if($db)
    {
        $sql="update userbooking set status='confirmed' where id='$_GET[bookid]'";
        if(mysqli_query($db,$sql))
        {
            echo "<script>alert('Confirmed Successfully!');window.location='tourhistory.php'</script>";
        }
    }



?>