<?php
	session_start();
	
	include('include/dbselect.php');

// username and password sent from form 
$userid=$_POST['userid'];

$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 
$rememberme=$_POST['rememberme']; 


// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);

//$myusername = mysql_real_escape_string($myusername);
//$mypassword = mysql_real_escape_string($mypassword);
$mypassword = md5($mypassword);

$sql="SELECT * FROM users WHERE nickname='$myusername' and password='$mypassword'";
$result=mysqli_query($db,$sql);
while ($row = mysqli_fetch_assoc($result)) {
	$useriddb = $row['user_id'];
}

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
//session_start();
$_SESSION['login'] = "1";
$_SESSION['username'] = $myusername;
$_SESSION['userid'] = $useriddb;
$_SESSION['status'] = 0;
if ($rememberme == "on") {
	setcookie ("member_login77",$myusername,time()+ (10 * 365 * 24 * 60 * 60));
	
	setcookie ("member_password77",$mypassword,time()+ (10 * 365 * 24 * 60 * 60));	
}



header("location:listing-business.php?userid=$useriddb");
} else {

$_SESSION['login'] = '';
$_SESSION['username'] = '';
header("location:ingresar.php?error=y");
}


?>

