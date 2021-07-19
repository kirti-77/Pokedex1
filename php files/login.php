<html>
<head>
<title>login</title>
<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
<div class="hero">
<div class="form-box">
<div class="button-box">
<div id="btn">
</div> 

<button type="button" class="toggle-btn" onclick="login()">Login</button>
<button type="button" class="toggle-btn" onclick="register()">Register</button>
</div>

<form id="login" class="input-group" action="login.php" method="post" >
<input type="text" name="username" class="input-field" placeholder="Username" required>
<input type="password"  name="password" class="input-field" placeholder="Password" required>
<button type="submit" name="login" class="submit-btn">Login</button>
</form>

<form id="register" class="input-group" action="login.php" method="post" >
<input type="text" name="username" class="input-field" placeholder="Username" required>
<input type="password" name="password" class="input-field" placeholder="Password" required>
<button type="submit" name="register" class="submit-btn">Register  </button>
</form>

</div>
</div>
<script>
var x=document.getElementById("login");
var y=document.getElementById("register");
var z=document.getElementById("btn");

function register()
{
x.style.left="-400px";
y.style.left="50px";
z.style.left="110px";
}
function login()
{
x.style.left="50px";
y.style.left="450px";
z.style.left="0";
}
</script>
</body>
</html>

<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'login');
if(isset($_POST['register']))
{
$username=$_POST['username'];
$password=$_POST['password'];

$s="select * from registration where username='$username';";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1)
{
echo "<script>alert('Username Already Taken')</script>";
}
else 
{
$reg="insert into registration(username,password)values('$username','$password');";
mysqli_query($con,$reg);
echo "<script>alert('Registration Successful')</script>";
echo "<script>window.open('login.php','_self')</script>";
}
}
?>

<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'login');
if(isset($_POST['login']))
{
$username=$_POST['username'];
$password=$_POST['password'];

$s="select * from registration where username='$username' && password='$password';";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1)
{
echo "<script>alert('Login Successful')</script>";
echo "<script>window.open('search.php','_self')</script>";
}
else
{

echo "<script>('Please enter correct Username and Password'</script>";
echo "<script>window.open('login.php','_self')</script>";
}
}
?>


