<?php
session_start()
?>

<?php
$id=$_POST['id'];
$First Name=$_POST['name'];
$Last Name=$_POST['name'];
$Age=$_POST['age'];
$Gender=$_POST['gender'];
$Occupation=$_POST['occupation'];
$Contact Number=$_POST['mobile'];
$Address=$_POST['address'];
$con=@mysql_connect("localhost","root","ikenna") or die(mysql_error());
$db=@mysql_select_db("hms",$con)or die(mysql_error());
$str="insert into patients values('$id','$name','$age','$gender','$occupation','$mobile','$address')";
$res=@mysql_query($str)or die(mysql_error());
if($res>=0)
{
echo'<br><br><b>Patient added !!<br>';
}

?>
<html>
<body style="background-image:url(back2.jpg)">
<br>
<a href="home.html"><b>Click here to return to the home page</b></a>
</body></html>