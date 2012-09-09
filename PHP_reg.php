<?php

	require "fb.php";

?>

<!DOCTYPE html>
<html>
<head>
<title>(ACM)@PESIT(south campus)</title>
<link href="./css/mycss.css" type="text/css" rel="stylesheet"/>
<link href='http://fonts.googleapis.com/css?family=McLaren' rel='stylesheet' type='text/css'>
<script src="./js/my.js" type="text/javascript" ></script>
<link href="./css/mycss.css" type="text/css" rel="stylesheet"/>
<script type="text/javascript" src="./js/jquery-1.8.0.js"></script>
<script src="./js/my.js" type="text/javascript" ></script>
    <meta property="og:title" content="<?php echo he($app_name); ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo AppInfo::getUrl(); ?>" />
    <meta property="og:image" content="<?php echo AppInfo::getUrl('/logo.png'); ?>" />
    <meta property="og:site_name" content="<?php echo he($app_name); ?>" />
    <meta property="og:description" content="My first app" />
    <meta property="fb:app_id" content="<?php echo AppInfo::appID(); ?>" />

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
<div id="fb-root"></div>
<p id="picture" style="background-image: url(https://graph.facebook.com/<?php echo he($user_id); ?>/picture?type=normal);z-index:10;"></p>
<img id="picture" src="https://graph.facebook.com/<?php echo he($user_id); ?>/picture?type=normal"></img>
</header>
<form  action="./registration_php.php?choice=<?php echo $_GET['choice']; ?>" method="post">
<tr>
	<th><div style="display:inline;" class="font_ch">facebook id(uid):</div></th>
	<th><input type="text" class="font_ch" size='20' value="<?php echo $user_id; ?>" style="background-color:transparent;border:0px dotted;"  disabled="disabled"/></th>
</tr><br/>

<tr>
	<th><div style="display:inline;" class="font_ch">your name:</div></th>
	<th><input type="text" class="font_ch" size='50' value="<?php echo $user_name; ?>" style="background-color:transparent;border:0px dotted;"  disabled="disabled"/></th>
</tr><br/>
<tr>	<th><div style="display:inline;" class="font_ch">E-mail id:</div></th>
	<th><input size='60' class="font_ch" type="text" value="<?php echo $user_email; ?>" style="background-color:transparent;border:0px dotted;"  disabled="disabled"/></th>
</tr><br/>
<tr>	<th><div style="display:inline;" class="font_ch">gender:</div></th>
	<th><input size='60' class="font_ch" type="text" value="<?php echo $user_gender; ?>" style="background-color:transparent;border:0px dotted;"  disabled="disabled"/></th>
</tr><br/>
<tr>
	<th><div style="display:inline;" class="font_ch">mobile number:</div></th>
	<th><input type="text" size='15' class="default-value" name="mono" value="XXXXXXXXXX" /></th><br/>
	<th><div style="display:inline;" class="font_ch">mobile number is required for sending SMS, when there is some change in schedule</div></th>
</tr><br/>
<tr>
	<th><div style="display:inline;" class="font_ch"  >USN:</div></th>
	<th><input type="text" size='11' name="usn" class="default-value" /></th>
</tr><br/>
<tr>
	<th><div style="display:inline;" class="font_ch">semester:</div></th>
	<th><input type="text" size='2'  class="default-value" name="sem" value="" /></th>
</tr><br/>
<input class="PHP_REG_SUB" type="submit" value="submit" style="margin-left:530px;color:#CC00FF;cursor:pointer;margin-top:-25px;" />
</form>
</body>
</html>

