<?php
$mysqli=new mysqli("localhost","root","","pokedex");
if($mysqli->connect_error)
die("connection failed".$mysqli->connect_error);
if(isset($_POST['button']))
{
$search=$_POST['search'];
echo "1.Pokemon";
echo "<br>";
echo "2.Move Description";
echo "<br>";
echo "3.EV";
echo "<br>";
echo "4.Moves By Leveling";
echo "<br>";
echo "5.Moves By TM or HM";
echo "<br>";
echo "6.Moves By Tutor";
echo "<br>";
echo "7.Base Stats";
echo "<br>";
echo "8.Types";
echo "<br>";
$query ="SELECT * FROM Pokemon where(Name='$search');";
$query .="SELECT m1.Moves_name, m1.Power,m1.Type,m1.Accuracy,m1.Details FROM move_Descriptions m1, moves_by_leveling m2
where
m2.ID=(SELECT ID FROM poKemon
WHERE (Name='$search')) AND
m1.MID=M2.MID;";
$query .="SELECT * FROM EV where ((SELECT ID FROM Pokemon WHERE(Name='$search') AND EV.ID=Pokemon.ID));";
$query .="SELECT * FROM moves_by_leveling where((SELECT ID FROM Pokemon WHERE(Name='$search') AND moves_by_leveling.ID=Pokemon.ID));";
$query .="SELECT * FROM moves_by_tm_or_hm where((SELECT ID FROM Pokemon WHERE(Name='$search') AND moves_by_tm_or_hm.ID=Pokemon.ID));";
$query .="SELECT * FROM moves_by_tutor where((SELECT ID FROM Pokemon WHERE(Name='$search') AND moves_by_tutor.ID=Pokemon.ID));";
$query .="SELECT * FROM base_stats where((SELECT ID FROM Pokemon WHERE(Name='$search') AND base_stats.ID=Pokemon.ID));";
$query .="SELECT * FROM Types where((SELECT ID FROM Pokemon WHERE(Name='$search') AND Types.Type=Pokemon.Type1));";
if($mysqli->multi_query($query))
{
do
{
$result=$mysqli->store_result();
echo "Total record:" .$result->num_rows;
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
}while($mysqli->next_result());
}
}
?>

<html>
<head>
<title>pokemon</title>
<link rel="stylesheet" type="text/css" href="css/search1.css">
</head>
<body>
<div class="btn">
<ul>
<li><a href="http://localhost/pokedex/search.php">Search</a>
</li>
<li><a href="http://localhost/pokedex/query.php">Query</a>
</li>
</ul>
</div>
</body>
</html>
