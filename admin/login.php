<?php
include '../config.php';

if(isset($_POST['login'])){
$user=$_POST['user'];
$pass=$_POST['pass'];

$data=$conn->query("SELECT * FROM admin WHERE username='$user' AND password='$pass'");

if($data->num_rows>0){
$_SESSION['admin']=true;
header("Location: dashboard.php");
}
}
?>

<form method="POST">
<input name="user" placeholder="Username">
<input type="password" name="pass">
<button name="login">Login</button>
</form>