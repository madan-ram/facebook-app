<?php

	require "./fb.php";


	function isValidMono($mono){
		return eregi("^[0-9]{10}$", $mono);
	}

	if(!isValidMono($_POST['mono']))
	{
		die("invalid mobile number");
	}


	function isValidUSN($USN){
		return eregi("^[0-9][a-zA-Z]{2}[0-9]{2}[a-zA-Z]{2}[0-9]{3}$", $USN);
	}

	if(!isValidUSN($_POST['usn']))
	{
		die("invalid USN");
	}
	

	function isValidSem($SEM){
		return eregi("^[1-8]$", $SEM);
	}

	if(!isValidSem($_POST['sem']))
	{
		die("invalid semester");
	}	

	$user_choice=$_GET['choice'];
	$user_sem=$_POST['sem'];
	$user_USN=$_POST['usn'];
	$user_mono=$_POST['mono'];
	require "./pass.php";
	$con=mysql_connect("$host","$username","$password");//function to connect to mysql//i use '' to indicate the env variable(return 0 if connected)
	if($con==FALSE)
	{
		echo "mysql not connected";
	}
	mysql_select_db("fc_team_77",$con);
	if($user_id && $user_sem && $user_USN && $user_mono)
	{
		$sql = "INSERT INTO `user_data_fb`(`USN`, `id`, `name`, `phone`, `sem`, `email`, `birthday`, `gender`) VALUES ('$user_USN',$user_id,'$user_name',$user_mono,$user_sem,'$user_email','$user_birthday','$user_gender')";
	mysql_query($sql,$con);
	if($user_choice=='PHP')
{	
	$sql="UPDATE `user_data_fb` SET `PHP`=1  where id=$user_id";
	mysql_query($sql,$con);
echo "

<div style='margin-left:20px;'>
<h3>Successful registration !!!</h3>
<div style='margin-left:400px;'><h4>venue</h4>
PESIT-BSC(formally PESSE)<br/>
5 day seccion<br/>
start on 23/08/2012(every Thursday at 3:30 PM)<br/></div><br/>
<div style='color:green;position:absolute;margin-top:-40px;'>cost:free<br/></div>
1)the basic in php,security and database basic introduction(with a GUI framework)<br/>
2)the complete registration and login system modules<br/>
3)the upload files/image and viewing album<br/>
4)php regular expression and some JavaScript(basics in jQurey for Animation)<br/>
5)using php based web page to send sms(for registration confirmation)<br/>
6)talk about project ,interested people can become part of it.<br/>
(minimum one project is required to be submitted to department)<br/>


<h4>Requirement</h4>
1)Linux system (with LAMP installed(LINUX apache2 mysql-server php5))<br/>
2)for window user you can run WAMP<br/>
3)basic in HTML(basic tag in html)<br/>

<br/><br/>
<div style='color:yellow;'>
for installing LAMP see
<a href='http://www.linuxcandy.com/2012/05/how-to-install-lamp-in-ubuntu-12-04-precise-pangolin.html'>installation of LAMP</a>

(installation work for(Linux Mint/Ubuntu/Kubuntu/latest Debian)
<p>or any debian base system</p>
</div>
</div>";
}
else
{
		$sql="UPDATE `user_data_fb` SET `GD`=1  where id=$user_id";
	mysql_query($sql,$con);
	echo "<h3>Successful registration !!!</h3>
		<h2>You have been registered for Game Devlopment<h2>
		Further information will be posted in the group page<br/>
	<div style='color:green;'>cost:100<span class='WebRupee'>Rs</span><br/></div>";
}

		
	}
	else
	{
		die("not inserted...some field is missing");
	}
mysql_close($con);
?>

<!DOCTYPE html>
<html>
<head>
<title>(ACM)@PESIT(south campus)</title>
<link rel="stylesheet" type="text/css" href="http://cdn.webrupee.com/font">
<style type="text/css" media="screen">
#my_body
{
	background-image:url("./image/Background-AbstractLines.jpg");
	background-size:cover;
}
body
{
	background-image:url("./image/Background-AbstractLines.jpg");
	background-size:cover;
}
  </style>
</head>
<body id="my_body">
</body>
</html>
