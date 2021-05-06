<?php
	
	$id =isset($_POST['id'])? $_POST['id']:'';
	$user = isset($_POST['user'])? $_POST['user']:'';
	$pass = isset($_POST['pass'])? $_POST['pass']:'';
    $F_name = isset($_POST['F_name'])? $_POST['F_name']:'';
    $Dept = isset($_POST['Dept'])? $_POST['Dept']:'';
    $m1 = isset($_POST['m1'])? $_POST['m1']:'';
    $m2 = isset($_POST['m2'])? $_POST['m2']:'';
    $m3 = isset($_POST['m3'])? $_POST['m3']:'';
    $m4 = isset($_POST['m4'])? $_POST['m4']:'';
    $m5 = isset($_POST['m5'])? $_POST['m5']:'';
    $m6 = isset($_POST['m6'])? $_POST['m6']:'';
	
    
	// Database connection
	$conn = new mysqli('localhost','root','','nightpro');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else{
$sql = "INSERT INTO night (id,user,pass,F_name,Dept,m1,m2,m3,m4,m5,m6)
values ('$id','$user','$pass','$F_name','$Dept','$m1','$m2','$m3','$m4','$m5','$m6')";
if ($conn->query($sql)){
echo "<script>window.location.href='login.php';</script>";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
?>