<?php
$f=1;


$reg=2;

session_start();
if(isset($_POST["btn"]))

{


$email=$_POST["email"];


$name=$_POST["name"];


$q=$_POST["query"];

   $reg=2;
include("connect.php");

/*selecting database*/

$sql="insert into help values('".$email."','".$name."','".$q."')";

$n = mysqli_query($con,$sql);

if($n!=0)

{

$reg=1;

}

else 
{

$reg=0;

}

}


if(isset($_SESSION["umail"]))
echo "hello!..".$_SESSION["umail"];
else
header("location:loginpro.php");
?>

<html>
<head>
  <title>eVa BeaUty</title>

<link rel="stylesheet" type="text/css" href="style1.css">
<style>
.login{
    width: 850px;
    height: 750px;
    background-color:black;
    color: #fff;
    top: 80%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 60px 10px;
    border-radius:20px;
}
.q{
    width: 250px;
    height: 60px;
    border-radius:20px;
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
						<a href="gallery.php">Gallery</a>
						  <a href="logout.php">Logout</a> <a href="help.php">Help</a>
			</nav>
		</div>
<div class="login">
<div id="help">
<h2><p><font color="red">CONTACT US</font><br><br>
<font color="blue">We're happy to help you with your questions. Please email us using the form below and we will respond to you as soon as possible.</font></p></h2>
<br>
<form action="<?php $_PHP_SELF ?>" method="post">
<p><h2>Full Name</h2></p>
<input type="text" name="name" placeholder="Full Name" class="q">
<p><h2>Email</h2></p>
<input type="text" name="email" placeholder="Email id" class="q">
<p><H2> HOW CAN WE HELP YOU?</H2></p>
<textarea id="edit-form-comments" name="query" cols="90" rows="5" class="q" placeholder="Enter your query here*" ></textarea><BR><BR>
<input type="submit" id="edit-submit" name="btn" value="Submit" class="form-submit" >

<?php

if($reg==1)


echo "<font color='Green'> Query Sent</font>";


?>

</div>
</div>
</body>
</html>
