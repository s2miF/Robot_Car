<!DOCTYPE html>
<html>
<head>
 
<link href="css.css" rel="stylesheet">
</head>
<body>
 
 
<form action="index.php" style="margin-left: 42%; margin-top: 235px;" method="POST">
<div>
<img src="https://www.raspberrypi.org/app/uploads/2015/08/raspberry-pi-logo.png" alt=""style="width: 110px; margin-left: 46px;" /><br>
<input type="text" placeholder="Enter Username" name="username"><br>
<input type="password" placeholder="Enter Password" name="password"><br>
<input type="submit" name="go" value="Login" />
</div>
</form>
<br>
 
<?php
 
$loguser = "cm9vdA==";
$logpass = "dG9vcg==";
$Deuser = base64_decode($loguser);
$Depass = base64_decode($logpass);
if(isset($_POST['go'])) {
$user = $_POST['username'];
$pass = $_POST['password'];
 
if ($user == '' || $pass == ''){
    echo"<div class='a22'>ENTER USERNAME AND PASSWORD </br></div>";
}
else if ($user != $Deuser || $pass != $Depass) {
    echo "<div class='a22'>You Entered Username Or Password Wrong </br></div>";
}
else {
print "<div class='a22'>SUCCESSFUL</div>"."<meta http-equiv = refresh content=3;url=control.php>";
}
}
 
?>
 
</body>
</html>