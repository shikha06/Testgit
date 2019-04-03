<?php	
$f=1;
$reg=2;
$con=mysqli_connect("localhost","root","","eva");
if(!$con)
{
die("server could not connected");
}
session_start();
if(isset($_POST["btn"]))
{
$un=$_SESSION["umail"];
$name=$_POST["name"];
$address=$_POST["address"];
$sql="select * from reg where email='".$un."'";

$rs=mysqli_query($con,$sql);
$value1=mysqli_fetch_assoc($rs);

$sql="update reg set name='".$name."',address='".$address."'where email ='".$un."'";
$n=mysqli_query($con,$sql);
if($n!=0)
{
	$reg=1;
}
else
{
	$reg=0;
}
}

?>


<html>
<head>
     <title>eVa BeaUty</title>
<link rel="stylesheet" type="text/css" href="style1.css">
 
<style>
body
{
    margin-left:10px;
    padding:10px;
     background: url(image/100.gif);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center bottom ;
    font-family: sans-serif;
}

h1
{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    position: absolute;
    left: -120px;
    bottom:720px;
   
	
}

h2
{
    margin: 0;
    padding: 0 0 20px;
    text-align: left;
    font-size: 22px;
    position: absolute;
    left: 50px;
    bottom:720px;
}
.login{
    width: 320px;
    height: 490px;
    background-color:#8b3e2f;
    color: #fff;
    top: 55%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
    border-radius:30px;
}

h3
{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}
.login p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}
.login input{
    width: 100%;
    margin-bottom: 20px;
}
.login input[type="text"], input[type="password"]
{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	background: transparent;
}
.login input[type="radio"]
{
	background: transparent;
	
}


.login input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #1c8adb;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
	
}
.login input[type="submit"]:hover
{
    cursor: pointer;
    background: #39dc79;
    color: #000;
	
	
}

.login a{
    text-decoration: none;
    font-size: 14px;
    color: #fff;
	position: absolute;
    left: 170px;
    top: 265px;
}
.login a:hover
{
    color: #39dc79;
}
</style>
</head>
<body>

	<div id="wrapper">
		<div id="header">
			<div id="subheader">
	


				<!-- main header-->

				<div id="main-header">
					<!--logo-->

					<div id="logo"><span id="ist">EVa </span><span id="iist">BeaUty</span></div>
					
				</div>
				
				</div>
			</div>
		</div>


	            <!-- Navigation bar  -->

			<div id="navigation">
				<nav>
                                                <a href="home2.php">Home</a>
						<a href="h.php">Gallery</a>
						  <a href="logout.php">Logout</a> <a href="help.php">Help</a>
			</nav>
		</div>

<div class="login">

<h2>

<h3>Update Profile</h3>

<form action="<?php $_PHP_SELF ?>" method="post">
<p>Full Name</p>
<input type="text" name="name" placeholder="Full Name" value="<?php
if(isset($value1["name"])) echo $value1["name"];?>">

<p>Address</p><textarea rows="2" cols="30" name="address" placeholder="enter address here" value="address"><?php
if(isset($value1["address"])) echo $value1["address"];?></textarea><br><br>
<input type="submit" name="btn" value="UPDATE">
<?php
if($reg==1)
{
echo"updated successfully";
}

?>

</form>
</div>
    
</body>
</html>