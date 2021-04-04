<?php
require_once('vendor/autoload.php');
\Stripe\Stripe::setApiKey('sk_test_51I7nZBHy19tVBih9wjp4SZEm2hCYZqhKNad4Zu4mZPHNWruZzGDqIUY5AgJOuq96XzfmwDr9G5wiCWoLscsfVbBR00FHdgGdjv');

$POST=filter_var_array($_POST,FILTER_SANITIZE_STRING);
$fullname=$POST['fullname'];
$email=$POST['email'];
$price=$POST['price']*100;
$token=$POST['stripeToken'];

$customer=\Stripe\Customer::create(array(
    "email"=>$email,
    "source" => $token
));

        $db=mysqli_connect('localhost','root','','tourist');
        if($db)
        {
            $sql="select * from carbooking where id='$_GET[bookid]'";
            $qry=mysqli_query($db,$sql);
            if($qry)
            {
                if(mysqli_num_rows($qry)>0)
                {
                    $row=mysqli_fetch_assoc($qry);
                }}}
            
$charge=\Stripe\Charge::create(array(
    "amount"=>$price,
    "currency"=>'bdt',
    "description"=> $row['carmodel'],
    "customer" => $customer->id
));
if($charge)

$db=mysqli_connect('localhost','root','','tourist');
if($db)
{
    $sql="UPDATE carbooking SET payment='paid' WHERE id='$_GET[bookid]'";
    if(mysqli_query($db,$sql))
    {
        echo "<script>alert('Payment Successfully Done!');window.location='slip.php?userid=".$_GET['userid']."&&bookid=".$_GET['bookid']."'</script>";
    }
    else
    {
        echo "<script>alert('Payment Is Not Successfully Done!');window.location='renthistory.php?userid=".$_GET['userid']."'</script>";
    }
}

