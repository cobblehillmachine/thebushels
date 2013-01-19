<?php
 /*
Template Name: Download
*/

get_header(); ?>
<?php

/* Subject and Email Variables */
	
	$emailSubject = 'The Bushels Mailing List';
	$webMaster = 'thebushels@gmail.com';
	
/* Gather variables */

	$emailField = $_POST['email'];

	
	
	$body = <<<EOD
<br><hr><br>
Email: $emailField <br>

EOD;

	$headers = "From: $emailField\r\n";
	$headers .= "Content-type: text/html\r\n";
	$success = mail($webMaster, $emailSubject, $body, $headers);
	
/* Results rendered as HTML */
	
	$theResults = <<<EOD
<html>
<head>
<title>The Bushels Thanks You</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	background-color:#FFF;
	font-size:100%;
	font-family:Verdana, Geneva, sans-serif;
	background-color:#FFF;
	margin:0;
	padding:0;
	background-image:url(images/top_repeat.gif);
	background-repeat:repeat-x;
	text-align:center;
}
a {
	color:#C53907;
	text-decoration:none;
}

a:hover {
	color:#F89922;
	text-decoration:none;
}

p {
	font-size:.8625em;
	font-family:Georgia, "Times New Roman", Times, serif;
	line-height:1.35em;
	margin:5px 0 25px 0;
	color:#FFF;
	margin:0 65px;
	text-align:center;
}

#wrapper {
	width:311px;
	margin:40px auto;
	background-color:#FFF;
	padding-top:265px;
	background-image:url(images/formBACKaged.gif);
	background-repeat:no-repeat;
	height:615px;
}
-->
</style>
</head>

<div id="wrapper">
  <div align="left">
  <p><a href="wp-content/themes/thebushels/media/06_cortez_1.mp3.zip">DOWNLOAD YOUR SONG</a></p>
  <p>Thanks for your interest and enjoy the song.</p><p>&nbsp;</p><p>&nbsp;</p><p>
<a href="/home"><strong>Take me back to the home page &#187 </strong></a></p></div>
</div>
</body>
</html>
EOD;
echo "$theResults";
	

?>