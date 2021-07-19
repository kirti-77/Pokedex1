<html>
<head>
<title>query</title>
</head>
<body>
<div align="center">
<form name="search" action="query.php" method="post">
<textarea name="query" rows="5" cols="20"></textarea>
<br>
<input type="submit" name="submit" value="GO">
</form>
</div>
</body>
</html>

<!QUERY 1->
<?php
$mysqli=new mysqli("localhost","root","","pokedex");
if($mysqli->connect_error)
die("connection failed".$mysqli->connect_error);
if(isset($_POST['submit']))
{
$search=$_POST['query'];

$query=$search;

if($mysqli->multi_query($query))
{
$result=$mysqli->store_result();
echo "Total Record:".$result->num_rows;
echo "<hr width='100px' align='left'/>";
$finfo=$result->fetch_fields();
echo "<table border='1'>";
echo "<tr>";
foreach($finfo as $f)
{
echo "<th>".$f->name."</th>";
}
echo "</tr>";
while($row=$result->fetch_assoc())
{
echo "<tr>";
foreach($row as $v)
{
echo "<td>".$v."</td>";
}
echo "</tr>";
}
echo "</table>";
}
}

?>




