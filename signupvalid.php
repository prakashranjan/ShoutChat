<?php

$p;
$t;
$con3=mysql_connect("localhost","873630","abdulkalam");
                mysql_select_db("873630",$con3);

$value = $_GET['query'];
$formfield = $_GET['field'];



// Check Valid or Invalid user name when user enters user name in username input field.
if ($formfield == "username") {$t=0;
	
	$sql="SELECT username FROM member";
				$usr=mysql_query($sql,$con3);
if (strlen($value) < 4) {
echo "*Must be 3+ letters";
} else if($t==0){


				while($row = mysql_fetch_array($usr))
				{
if($value==$row[0]){
echo "<span>*already exist</span>";
			$t=1;
			break;}

}}
else if($t!=1)
	echo"<span style='color:green;
font-size:12px;'>valid</span>";
}



// Check Valid or Invalid password when user enters password in password input field.
if ($formfield == "password") {
if (strlen($value) < 4) {
echo "*Password too short";
} else {
echo "<span style='color:green;
font-size:12px;'>Strong</span>";
}

}



// Check Valid or Invalid email when user enters email in email input field.
if ($formfield == "email") {$p=0;
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $value)) {
echo "*Invalid email";
} else if($p==0){
	
	$sql="SELECT email FROM member";
				$mail=mysql_query($sql,$con3);
				while($ro = mysql_fetch_array($mail))
				{
if($value==$ro[0]){
echo "<span>*already exist</span>";
			$p=1;
			break;}

}
}
else if($p!=1)
	echo"<span style='color:green;
font-size:12px;'>valid</span>";
}

?>