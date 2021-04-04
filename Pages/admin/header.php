<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<Title>Hellow Tourists</Title>
	
	<style>
		body{
    background-color: lightgray;
    background-position: center;
    font-family: sans-serif;
}
.logo{
    width: 40px;
    height: 40px;
    float: left;
}
img{
    width: 140px;
    height: 70px;
    border-radius:10px 0px 0px 10px;
}
.menu{
    background-color: lightslategray;
    opacity: 1;
    text-align: center;
    border-radius: 10px;
    margin-left: 4%;
    width:93%;
    position: absolute;
    z-index: 80;
    margin-bottom: 0px;
}
.menu ul{
    display: inline-flex;
    list-style: none;
    color: cornsilk;
    
}
.menu ul li{
    margin: 5px 5px;
    padding: 5px;
    width:130px;
}
.menu ul a{
    text-decoration: none;
	color: white;
	font-size: 16px;
}
.active, .menu ul li:hover{
    background-color: lightgray;
    border-radius: 5px;
    color: black;
}
.menu .fa{
    margin-right: 5px;
}
.submenu{
    display: none;
    margin-top: 5px;
    border-radius: 10px;
    margin-left: -100px;
}
.menu ul li:hover .submenu{
    display: block;
    position: absolute;
    background-color: gray;
    visibility: visible;
	z-index: 80;
}
.menu ul li:hover .submenu ul{
    display: block;
}
.menu ul li:hover .submenu ul li{
    width:210px;
    padding: 5px;
    border-bottom: 1px dotted white;
    background-color: transparent;
    text-align: left;
    margin-top: 2px;
}
.menu ul li:hover .submenu ul li:first-child{
    margin-top:25px;
}
.menu ul li:hover .submenu ul li:last-child{
    border-bottom: 0px;
}
.menu ul li:hover .submenu ul li:hover{
    background-color: lightgray;
}
.submenu1{
    display: none;
    margin-top: 5px;
    border-radius: 10px;
    margin-left: -6px;
}
.menu ul li:hover .submenu1{
    display: block;
    position: absolute;
    background-color: gray;
    visibility: visible;
	z-index: 80;
}
.menu ul li:hover .submenu1 ul{
    display: block;
}
.menu ul li:hover .submenu1 ul li{
    width:210px;
    padding: 5px;
    border-bottom: 1px dotted white;
    background-color: transparent;
    text-align: left;
    margin-top: 2px;
}
.menu ul li:hover .submenu1 ul li:first-child{
    margin-top:5px;
}
.menu ul li:hover .submenu1 ul li:last-child{
    border-bottom: 0px;
}
.menu ul li:hover .submenu1 ul li:hover{
    background-color: lightgray;
}

	</style>
</head>
<body>
	<div class="menu">
		<div class="logo">
			<img src="../../Logo/logo.png" alt="Logo" />
		</div>
		<ul>
			<a href="dashboard.php"><li class="active"><i class="fa fa-bar-chart"></i>Dashboard</li></a>
            <li><i class="fa fa-user"></i>Users
            <div class="submenu1">
						<ul>
                        <a href="viewuser.php"><li><i class="fa fa-eye"></i>View existing</li></a>
						</ul>
					</div>
            </li>
            <li><i class="fa fa-car"></i>Car Rent
            <div class="submenu1">
						<ul>
                        <a href="addtransport.php"><li><i class="fa fa-plus"></i>Add new</li></a>
                        <a href="viewtransport.php"><li><i class="fa fa-eye"></i>View existing</li></a>
                        <a href="renthistory.php"><li><i class="fa fa-eye"></i>Rent History</li></a>
						</ul>
					</div>
            </li>
            <li><i class="fa fa-bars"></i>Tour Packages
            <div class="submenu1">
						<ul>
                        <a href="addtour.php"><li><i class="fa fa-plus"></i>Add new</li></a>
                        <a href="viewtour.php"><li><i class="fa fa-eye"></i>View existing</li></a>
                        <a href="tourhistory.php"><li><i class="fa fa-eye"></i>Tour History</li></a>
						</ul>
					</div>
            </li>
            <li><i class="fa fa-edit"></i>Blogs
            <div class="submenu1">
						<ul>
                        <a href="addblog.php"><li><i class="fa fa-plus"></i>Add new</li></a>
                        <a href="viewblog.php"><li><i class="fa fa-eye"></i>View existing</li></a>
						</ul>
					</div>
            </li>
            <li><i class="fa fa-code"></i>Manage Pages
            <div class="submenu1">
						<ul>
                        <a href="about.php"><li><i class="fa fa-question"></i>About Us</li></a>
                        <a href="contact.php"><li><i class="fa fa-phone"></i>Contact Us</li></a>
                        <a href="query.php"><li><i class="fa fa-eye"></i>View existing Query</li></a>
						</ul>
					</div>
            </li>
			<a href="../homepage.php"><li><i class="fa fa-close"></i>Log Out</li></a>
		<ul>
	</div>
</body>