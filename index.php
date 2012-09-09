<?php
	require "fb.php";
?>


<!----------------------------------------------------------------------------------------------------------------------------------------------------->

<html  xmlns:fb="http://ogp.me/ns/fb#" lang="en">
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes" />
	<link type="application/rss+xml" rel="alternate" href="http://feeds.arstechnica.com/arstechnica/open-source?format=xml" title="this is opensource"/>
<title>PLUGIN</title>
    <link rel="stylesheet" href="stylesheets/screen.css" media="Screen" type="text/css" />
    <link rel="stylesheet" href="stylesheets/mobile.css" media="handheld, only screen and (max-width: 480px), only screen and (max-device-width: 480px)" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=McLaren' rel='stylesheet' type='text/css' >
<link href="./css/mycss.css" type="text/css" rel="stylesheet"/>

<script type="text/javascript" src="./js/jquery-1.8.0.js"></script>
<script type="text/javascript" src="./js/jslider.js"></script>
<script src="./js/my.js" type="text/javascript" ></script>


    <meta property="og:title" content="<?php echo he($app_name); ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo AppInfo::getUrl(); ?>" />
    <meta property="og:image" content="<?php echo AppInfo::getUrl('/logo.png'); ?>" />
    <meta property="og:site_name" content="<?php echo he($app_name); ?>" />
    <meta property="og:description" content="My first app" />
    <meta property="fb:app_id" content="<?php echo AppInfo::appID(); ?>" />

<script type="text/javascript">
	$(document).ready(function()//$(target).(some function execution or tasks)
	{
		$(".slider").jslider(  //$(target).(some function execution or tasks)
		{
			btnPrev:".next",
			btnNext:".prv",
		});
	});
</script>


<script type="text/javascript" >
	$(document).ready(function()//when the document is ready to write a function(manuplate) which will hide the <p>(videoplay)($->jqurey)-->
	{
		$('div#player').hide();		
		$('div#fbutton_all').hide();	
		//$('div#activity').hide();			//get the videoplay(p)
		$('a#anchor').click(function()
		{
			$('div#player').show();
			$('div#fbutton_all').hide();
			$('div#activity').hide();
		});
	});
</script>

<script type="text/javascript" >
	$(document).ready(function()//when the document is ready to write a function(manuplate) which will hide the <p>(videoplay)($->jqurey)-->
	{						//get the videoplay(p)
		$('a#dev_anchor').click(function()
		{
			$('div#fbutton_all').show();
			$('div#player').hide();
			$('div#activity').hide();
		});
	});
</script>

<script type="text/javascript" >
	$(document).ready(function()//when the document is ready to write a function(manuplate) which will hide the <p>(videoplay)($->jqurey)-->
	{						//get the videoplay(p)
		$('a#act_anchor').click(function()
		{
			$('div#fbutton_all').hide();
			$('div#player').hide();
			$('div#activity').show();
		});
	});
</script>

<script type="text/javascript">
$(document).ready(function()
{
	$("#contentbox").keyup(function()
	{
		var box=$(this).val();
		var count= 400 - box.length;//box value length

		if( !(box.length <= 400))
		{
			alert(' Full ');
		}
		else
		{
			count=count+" character available";
			$('#count').html(count);		//alter the content of count $(the target).html(count) //(jquery task)
	}
	return false;
	});

});
</script>



</head>
<div class="all">
<body >
<div id="fb-root"></div>


    <script type="text/javascript">

      // Load the SDK Asynchronously
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '<?php echo AppInfo::appID(); ?>', // App ID
          channelUrl : '//<?php echo $_SERVER["HTTP_HOST"]; ?>/channel.html', // Channel File
          status     : true, // check login status
          cookie     : true, // enable cookies to allow the server to access the session
          xfbml      : true // parse XFBML
        });

	// Additional initialization code here

	//Next, find out if the user is logged in
	FB.getLoginStatus(function(response) {
		if (response.status === 'connected') {
			var uid = response.authResponse.userID;
			accessToken = response.authResponse.accessToken;

			FB.api('/me', function(info) {
				console.log(info);
			});


		} else if (response.status === 'not_authorized') {
			//User is logged into Facebook, but not your App


			  var oauth_url = 'https://www.facebook.com/dialog/oauth/';
			  oauth_url += '?client_id=<?php echo AppInfo::appID(); ?>'; //Your Client ID
			  oauth_url += '&redirect_uri=' + 'https://apps.facebook.com/plugin-pesit-bsc/'; //Send them here if they're not logged in
			  oauth_url += '&scope=user_about_me,email,user_location,user_photos,publish_actions,user_birthday,user_likes,user_education_history';
		
			  window.top.location = oauth_url;


		} else {
			// User is not logged into Facebook at all
			window.top.location ='https://www.facebook.com/index.php';
		} //response.status
	}); //getLoginStatus
}; //fbAsyncInit

// Load the JavaScript SDK Asynchronously
(function(d){
  var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
  js = d.createElement('script'); js.id = id; js.async = true;
  js.src = "//connect.facebook.net/en_US/all.js";
  d.getElementsByTagName('head')[0].appendChild(js);
}(document));

    </script>


<div class="font_ch" id="hover_font_ch" style="clear:both;border-radius:20px;height: 40px;font-size:30px;opacity:0.8;filter:alpha(opacity=80); /* For IE8 and earlier */"><center>PLUGIN( PESIT-BSC Libre User Group India)</center></div>
<div id="fb-root"></div>
	 <div style="margin-left:-105px;margin-top:30px;">
			<img src="./image/orange_frame.png" style="width:10%;height:58%;position:fixed;"/>
			<a href="http://www.fsmk.org/"><img src="./image/448px-FSMK_Logo.png" style="width:8%;height:20%;position:fixed;margin:20px;margin-left:10px"/></a>
			<a href="https://www.facebook.com/groups/theplugin/"><img src="./image/plugin-naked.png" style="width:8%;height:20%;position:fixed;margin-top:150px;margin-left:10px;"/></a>
</div>

<!--start slider--------------------------------------------------------------------------------------------->
<div id="slide_container">
	<img src="./image/prev.png"  class="prv"/>
	<img src="./image/next.png"  class="next"/>
	<div class="slider">
		<ul>
			<li><a href="http://www.linux.com" ><img src="./image/linux-hardware.jpg" /></a></li>
			<li><a href="http://www.wordpress.com" ><img src="./image/wordpress.jpg" /></a></li>
			<li><a href="http://www.ubuntu.com" ><img src="./image/ubuntu.jpg" /></a></li>
			<li><a href="http://www.firefox.com" ><img src="./image/firefox-thunderbird.jpg" /></a></li>
			<li><a href="https://developers.google.com/" ><img src="./image/google.jpg" /></a></li>
			<li><a href="http://www.gnu.org"><img src="./image/GnuTuxSoftRevolution-v1.jpg" style="width:580;height:400;"/></a></li>
		</ul>
	</div>
</div>
<!--end slider------------------------------------------------------------------------------------------------->
<!--start of button-------------------------------------------------------------------------------------------->
<div id="full_button">
<ul style="list-style:none;">
<li><div class="button">
	<a href="PHP_reg.php?choice=PHP" id="registe_1">php online register</a>
	<a href="PHP_reg.php?choice=GD" id="register_2">Game Devlopment</a>
	<a href="./mypost.php">post testing</a>
</div></li>
<li><div class="button">
	<a href="#" id="anchor">youtube tutorial</a>
	<a href="#" id="act_anchor">activity</a>
	<a href="#" id="dev_anchor">contact me</a>
</div>
</li>
</ul>
<!---youtube API -------------------------------------------------------------------------------------------->
 <div id="player"></div>
</div>
<!--end of button------------------------------------------------------------------------------------------->

<!----------------------------------------------------------------------------------------------------------->
<div id="activity" style="position:relative;margin-bottom:20px;">
	<div id="box"></div>
	<div class="text_box">
		<h4>upcoming activity</h4><br/>
		<h5>Game Development</h5><br/>
		<p class="text_box_p">1 and 2 September 2012<br/>
			9 am to 4 pm<br/>
			@ CCPLAB Ground floor<br/><br/>
		       <h5>Requirement<h5><br/></p>
			<h5>will we announced shortly</h5>
	<br/><br/>
	<h4>php announcement</h4><br/>
	<p class="text_box_p">
	php class will be conducted in seminar hall 1 opp to ccplab.
	<br/>
	bring your laptop.
	<br/>
	since most of them requested for css and html, we would have <br/>
 <ul class="text_box_li" style="margin-left:20px;margin-top:10px;">
<li>-the basic html</li>
<li>-glance on css</li>
<li>-we have a set of videos on css and html<br/> bring pen drive to take a copy of it.</li>
</ul> 	
</p>
	</div>
</div>
<!----------------------------------------------------------------------------------------------------------->


<div id="fbutton_all" >
<div class="buttonhover">
<a href="https://twitter.com/madan_ram"><img border="0" src="./image/twitter-button.png" width="64" height="64" /></a>
<a href="https://www.facebook.com/pages/PES-institute-of-technology-open-sourcesouth-campus/113083252106512"><img border="0" src="./image/facebook_button.png" width="64" height="64" /></a>
<a href="http://www.linkedin.com/home?trk=hb_tab_home_top"><img border="0" src="./image/linkedin-round.png" width="64" height="64" /></a>
</div> 

<p id="line" style="margin: 0px 0px -10px 0px;"></p>

<form id="post_me" action="./mail.php" method="post">
<p style="color:black;">
your E-mail-id:<input id="e_mail" type="text" name="e_mail" size="38" value="<?php echo $user_email;?>" /></br></br>
<i>suggestion to the developer...</i>
</p >
<textarea id="contentbox"
  rows="5"
  cols="61" name="message" style="font-size:15px;margin-bottom:px;"></textarea><br/>
<p>
<div id="count" style="color:black;" > 400 character available</div>
<div class="button">
<input type="submit" name="send" value="Send Your Message" style="margin-left:30px;"/>
</div>
</p>
</form>
</div>

<!-- begin htmlcommentbox.com 
 <div id="HCB_comment_box"><a href="http://www.htmlcommentbox.com"></a> </div>
 <script type="text/javascript" language="javascript" id="hcb"> /*<!--*/ if(!window.hcb_user){hcb_user={  };} (function(){s=document.createElement("script");s.setAttribute("type","text/javascript");s.setAttribute("src", "http://www.htmlcommentbox.com/jread?page="+escape((window.hcb_user && hcb_user.PAGE)||(""+window.location)).replace("+","%2B")+"&opts=470&num=10");if (typeof s!="undefined") document.getElementsByTagName("head")[0].appendChild(s);})();  </script>
<!-- end htmlcommentbox.com -->

</div>
<!-------------------------------------------------------------------------------------------------------------->
<!--<iframe class="feed" width="580" height="120" "border:none;" src="http://output78.rssinclude.com/output?type=iframe&amp;id=514225&amp;hash=f6a1b49b00d0a2029147ecf5812f0b85"></iframe> -->
<!------------------------------------------------------------------------------------------------------------------->
</div>
<div style="margin-left:-140px;">
<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/deed.en_US"><img alt="Creative Commons License" style="border-width:0;" src="http://i.creativecommons.org/l/by-nc-sa/3.0/88x31.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">PLUGIN</span> by <span xmlns:cc="http://creativecommons.org/ns#" property="cc:attributionName">PLUGIN</span> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/deed.en_US">Creative Commons Attribution-NonCommercial-ShareAlike Unported License</a>.
</div>
</body>
</html>
