<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h2 class="my_4 text-center">Payment</h2>
<?php
        $db=mysqli_connect('localhost','root','','tourist');
        if($db)
        {
            $sql="select * from carbooking where id='$_GET[bookid]'";
            $qry=mysqli_query($db,$sql);
            if($qry)
            {
                if(mysqli_num_rows($qry)>0)
                {
                    $sql1="select * from user where id='$_GET[userid]'";
                    $qry1=mysqli_query($db,$sql1);
                    if($qry1)
                    {
                        if(mysqli_num_rows($qry1)>0)
                        {
                    $row=mysqli_fetch_assoc($qry);
                    $r=mysqli_fetch_assoc($qry1);?>
<form action="charge2.php?userid=<?php echo $row['userid']; ?>&&bookid=<?php echo $_GET['bookid']; ?>" method="post" id="payment-form">
  <div class="form-row">
      

<input type="text" name="fullname" class="form-control mb-3 StripeElemrnt StripeElement--empty" value="<?php echo $r['fullname']; ?>">

<input type="email" name="email" class="form-control mb-3 StripeElemrnt StripeElement--empty" value="<?php echo $r['email']; ?>">
<input type="int" name="price" class="form-control mb-3 StripeElemrnt StripeElement--empty" value="<?php echo $row['totalcost']; ?>">
<?php
}
}
}}}

?>
    <div id="card-element">
      <!-- A Stripe Element will be inserted here. -->
    </div>

    <!-- Used to display form errors. -->
    <div id="card-errors" role="alert"></div>
  </div>

  <button>Submit Payment</button>
</form>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://js.stripe.com/v3/"></script>
<script src="charge.js"></script>
</body>