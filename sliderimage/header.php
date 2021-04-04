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
    margin-left: 5%;
    width:90%;
    position: fixed;
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
    width:125px;
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

	</style>
</head>
<body>
	<div class="menu">
		<div class="logo">
			<img src="../Logo/logo.png" alt="Logo" />
		</div>
		<ul>
			<a href="homepage.php"><li class="active"><i class="fa fa-home"></i>Home</li></a>
			<a href="blog.php"><li><i class="fa fa-edit"></i>Blogs</li></a>
			<a href="about.php"><li><i class="fa fa-question"></i>About</li></a>
            <a href="contact.php"><li><i class="fa fa-phone"></i>Contact</li></a>
            <a href="contact.php"><li><i class="fa fa-car"></i>Car Rent</li></a>
            <a href="contact.php"><li><i class="fa fa-bars"></i>Tour Packages</li></a>
				<li><i class="fa fa-lock"></i>Log In<i class="fa fa-double-circle-down">
					<div class="submenu">
						<ul>
						<a href="userlogin.php"><li><i class="fa fa-user"></i>User</li></a>
						<a href="adminlogin.php"><li><i class="fa fa-mortar-board"></i>Admin</li></a>
						</ul>
					</div>
				</li>
		<ul>
	</div>
</body>