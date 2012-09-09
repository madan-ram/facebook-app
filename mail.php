<?php

function isValidEmail($email){
return eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email);
}

if(!isValidEmail($_POST['e_mail']))
{
	die("invalid email id");
}
else
{
	require "./pass.php";
	$con=mysql_connect("$host","$username","$password");//function to connect to mysql//i use '' to indicate the env variable(return 0 if connected)
	if($con==FALSE)
	{
		echo "mysql not connected";
	}
	mysql_select_db("fc_team_77",$con);
	if(($_POST['e_mail'] && $_POST['message']))
	{
		$sql = "INSERT INTO message (`id`,`e_mail_id`,`message`) VALUES (NULL,'$_POST[e_mail]','$_POST[message]')";
		if(!(mysql_query($sql,$con)))
		{
			echo "not inserted</br>";
		}
		else
		{
			echo "<div style=''>Thank you for your suggession!!!</div></br>";
			header('Location: https://apps.facebook.com/plugin-pesit-bsc/') ;
		}
	}
	else
	{
		die("not inserted...some field is missing");
	}
	

}
mysql_close($con);
?>


