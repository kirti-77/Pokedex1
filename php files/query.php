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
$a="Poison";
$query="SELECT * FROM Pokemon 
WHERE (Type1='$a' OR Type2='$a');";
if(strpos($search,"Pokemon")!==false)
{
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
}
?>



<?php
$mysqli=new mysqli("localhost","root","","pokedex");
if($mysqli->connect_error)
die("connection failed".$mysqli->connect_error);
if(isset($_POST['submit']))
{
$search=$_POST['query'];
$query="SELECT * FROM POKEMON;";
if(strpos($search,"POKEMON")!==false)
{
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
}
?>

<!QUERY 2->
<?php
$mysqli=new mysqli("localhost","root","","pokedex");
if($mysqli->connect_error)
die("connection failed".$mysqli->connect_error);
if(isset($_POST['submit']))
{
$search=$_POST['query'];
$query="SELECT Type FROM Types
WHERE (DRA=2);
";
if(strpos($search,"Types")!==false)
{
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
}
?>


<?php
$mysqli=new mysqli("localhost","root","","pokedex");
if($mysqli->connect_error)
die("connection failed".$mysqli->connect_error);
if(isset($_POST['submit']))
{
$search=$_POST['query'];
$query="SELECT * FROM TYPES;";
if(strpos($search,"TYPES")!==false)
{
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
}
?>






<!QUERY 3->
<?php
$mysqli=new mysqli("localhost","root","","pokedex");
if($mysqli->connect_error)
die("connection failed".$mysqli->connect_error);
if(isset($_POST['submit']))
{
$search=$_POST['query'];
$query="SELECT * FROM Move_descriptions
WHERE (Power>=100);";

if(strpos($search,"Move_descriptions")!==false)
{
if($mysqli->multi_query($query))
{
if($sql="$query")
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
}
}
?>

<?php
$mysqli=new mysqli("localhost","root","","pokedex");
if($mysqli->connect_error)
die("connection failed".$mysqli->connect_error);
if(isset($_POST['submit']))
{
$search=$_POST['query'];
$query="SELECT * FROM MOVE_DESCRIPTIONS;";

if(strpos($search,"MOVE_DESCRIPTIONS")!==false)
{
if($mysqli->multi_query($query))
{
if($sql="$query")
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
}
}
?>






<!QUERY 4->
<?php
$mysqli=new mysqli("localhost","root","","pokedex");
if($mysqli->connect_error)
die("connection failed".$mysqli->connect_error);
if(isset($_POST['submit']))
{
$search=$_POST['query'];

$b="A%";
$query ="SELECT * FROM move_descriptions
WHERE (Moves_name LIKE '$b');";
if(strpos($search,"move_descriptions")!==false)
{
if($mysqli->multi_query($query))
{
if($sql="$query")
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
}
}
?>

<!QUERY 5->
<?php
$mysqli=new mysqli("localhost","root","","pokedex");
if($mysqli->connect_error)
die("connection failed".$mysqli->connect_error);
if(isset($_POST['submit']))
{
$search=$_POST['query'];

$c="Water";
$query ="SELECT * from MOve_descriptions
WHERE (Type='$c');";
if(strpos($search,"MOve_descriptions")!==false)
{
if($mysqli->multi_query($query))
{
if($sql="$query")
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
}
}
?>


<!QUERY 6->
<?php
$mysqli=new mysqli("localhost","root","","pokedex");
if($mysqli->connect_error)
die("connection failed".$mysqli->connect_error);
if(isset($_POST['submit']))
{
$search=$_POST['query'];
$query ="SELECT * FROM pokemon
WHERE (Type2 is not null);";
if(strpos($search,"pokemon")!==false)
{
if($mysqli->multi_query($query))
{
if($sql="$query")
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
}
}
?>


<!QUERY 7->
<?php
$mysqli=new mysqli("localhost","root","","pokedex");
if($mysqli->connect_error)
die("connection failed".$mysqli->connect_error);
if(isset($_POST['submit']))
{
$search=$_POST['query'];
$query ="SELECT * FROM POkemon
WHERE (AbilityH is not null);";
if(strpos($search,"POkemon")!==false)
{
if($mysqli->multi_query($query))
{
if($sql="$query")
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
}
}
?>



<!QUERY 8->
<?php
$mysqli=new mysqli("localhost","root","","pokedex");
if($mysqli->connect_error)
die("connection failed".$mysqli->connect_error);
if(isset($_POST['submit']))
{
$search=$_POST['query'];
$query ="SELECT * FROM Base_Stats
WHERE ID=9;";
if(strpos($search,"Base_Stats")!==false)
{
if($mysqli->multi_query($query))
{
if($sql="$query")
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
}
}
?>

<?php
$mysqli=new mysqli("localhost","root","","pokedex");
if($mysqli->connect_error)
die("connection failed".$mysqli->connect_error);
if(isset($_POST['submit']))
{
$search=$_POST['query'];
$query ="SELECT * FROM BASE_STATS;";
if(strpos($search,"BASE_STATS")!==false)
{
if($mysqli->multi_query($query))
{
if($sql="$query")
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
}
}
?>




<!QUERY 9->
<?php
$mysqli=new mysqli("localhost","root","","pokedex");
if($mysqli->connect_error)
die("connection failed".$mysqli->connect_error);
if(isset($_POST['submit']))
{
$search=$_POST['query'];
$query ="SELECT * FROM ev
WHERE ID<=3;";
if(strpos($search,"ev")!==false)
{
if($mysqli->multi_query($query))
{
if($sql="$query")
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
}
}
?>


<?php
$mysqli=new mysqli("localhost","root","","pokedex");
if($mysqli->connect_error)
die("connection failed".$mysqli->connect_error);
if(isset($_POST['submit']))
{
$search=$_POST['query'];
$query ="SELECT * FROM EV;";
if(strpos($search,"EV")!==false)
{
if($mysqli->multi_query($query))
{
if($sql="$query")
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
}
}
?>







<!QUERY view->
<?php
$mysqli=new mysqli("localhost","root","","pokedex");
if($mysqli->connect_error)
die("connection failed".$mysqli->connect_error);
if(isset($_POST['submit']))
{
$search=$_POST['query'];
$query ="SELECT * FROM VIEW;";
if(strpos($search,"VIEW")!==false)
{
if($mysqli->multi_query($query))
{
if($sql="$query")
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
}
}
?>



<!CQUERY 1->
<?php
$mysqli=new mysqli("localhost","root","","pokedex");
if($mysqli->connect_error)
die("connection failed".$mysqli->connect_error);
if(isset($_POST['submit']))
{
$search=$_POST['query'];
$query ="SELECT * FROM PoKemon
WHERE EXISTS 
(SELECT * FROM types
WHERE (Type=PoKemon.Type1 or Type=PoKemon.Type2) AND Bug=2);";
if(strpos($search,"PoKemon")!==false)
{
if($mysqli->multi_query($query))
{
if($sql="$query")
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
}
}
?>



<!CQUERY 2->
<?php
$mysqli=new mysqli("localhost","root","","pokedex");
if($mysqli->connect_error)
die("connection failed".$mysqli->connect_error);
if(isset($_POST['submit']))
{
$search=$_POST['query'];
$query ="SELECT Moves_name FROM MOVE_descriptions
WHERE EXISTS 
(SELECT m2.MID FROM moves_by_tm_or_hm as m2 
where m2.MID=MOVE_descriptions.MID);";
if(strpos($search,"MOVE_descriptions")!==false)
{
if($mysqli->multi_query($query))
{
if($sql="$query")
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
}
}
?>



<!CQUERY 3->
<?php
$mysqli=new mysqli("localhost","root","","pokedex");
if($mysqli->connect_error)
die("connection failed".$mysqli->connect_error);
if(isset($_POST['submit']))
{
$search=$_POST['query'];
$query ="SELECT Name FROM POKemon
WHERE 
(SELECT HP+ATK+DEF+SPATK+SPDEF+SPD AS Total FROM base_stats
WHERE base_stats.ID=POKEMON.ID)>500;";
if(strpos($search,"POKemon")!==false)
{
if($mysqli->multi_query($query))
{
if($sql="$query")
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
}
}
?>




<!CQUERY 4->
<?php
$mysqli=new mysqli("localhost","root","","pokedex");
if($mysqli->connect_error)
die("connection failed".$mysqli->connect_error);
if(isset($_POST['submit']))
{
$search=$_POST['query'];
$d="Bulbasaur";
$query ="SELECT m1.Moves_name, m1.Power FROM move_Descriptions m1, moves_by_leveling m2
where
m2.ID=(SELECT ID FROM poKemon
WHERE (Name='$d')) AND
m1.MID=M2.MID;";
if(strpos($search,"move_Descriptions")!==false)
{
if($mysqli->multi_query($query))
{
if($sql="$query")
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
}
}
?>



<!CQUERY 5->
<?php
$mysqli=new mysqli("localhost","root","","pokedex");
if($mysqli->connect_error)
die("connection failed".$mysqli->connect_error);
if(isset($_POST['submit']))
{
$search=$_POST['query'];
$query ="SELECT pOkemon.ID, HP, ATK, DEF, SPATK, SPDEF, SPD,Name FROM pOkemon, Base_stats
WHERE pOkemon.ID IN
(SELECT ID FROM Base_stats
WHERE HP=(SELECT MAX(HP) from Base_stats)) AND
pOkemon.ID=Base_stats.ID;";
if(strpos($search,"pOkemon")!==false)
{
if($mysqli->multi_query($query))
{
if($sql="$query")
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
}
}
?>



<!CQUERY 6->
<?php
$mysqli=new mysqli("localhost","root","","pokedex");
if($mysqli->connect_error)
die("connection failed".$mysqli->connect_error);
if(isset($_POST['submit']))
{
$search=$_POST['query'];
$query ="SELECT pokemOn.Name, base_Stats.*
FROM 
pokemOn RIGHT JOIN base_Stats
ON pokemOn.ID=base_Stats.ID;";
if(strpos($search,"pokemOn")!==false)
{
if($mysqli->multi_query($query))
{
if($sql="$query")
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
}
}
?>




<!CQUERY 7->
<?php
$mysqli=new mysqli("localhost","root","","pokedex");
if($mysqli->connect_error)
die("connection failed".$mysqli->connect_error);
if(isset($_POST['submit']))
{
$search=$_POST['query'];
$query ="SELECT pokemoN.Type1, AVG(HP), AVG(ATK), AVG(dEF), AVG(SPATK), AVG(SPDEF), AVG(SPD) FROM
pokemoN RIGHT JOIN BASE_Stats
ON pokemoN.ID=BASE_Stats.ID
GROUP BY pokemoN.Type1;";
if(strpos($search,"pokemoN")!==false)
{
if($mysqli->multi_query($query))
{
if($sql="$query")
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
}
}
?>



<!CQUERY 8->
<?php
$mysqli=new mysqli("localhost","root","","pokedex");
if($mysqli->connect_error)
die("connection failed".$mysqli->connect_error);
if(isset($_POST['submit']))
{
$search=$_POST['query'];
$query ="select MAX(Move_DEscriptions.Power) FROM Move_DEscriptions
WHERE Move_DEscriptions.Moves_name in
(SELECT Move_DEscriptions.Moves_name from
Move_DEscriptions RIGHT JOIN TYpes
ON Move_DEscriptions.Type=TYpes.Type
WHERE TYpes.FLY=0.5);";
if(strpos($search,"Move_DEscriptions")!==false)
{
if($mysqli->multi_query($query))
{
if($sql="$query")
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
}
}
?>



<!CQUERY 9->
<?php
$mysqli=new mysqli("localhost","root","","pokedex");
if($mysqli->connect_error)
die("connection failed".$mysqli->connect_error);
if(isset($_POST['submit']))
{
$search=$_POST['query'];
$query ="SELECT MOves_by_tm_or_hm.* FROM MOves_by_tm_or_hm, 
pokeMon RIGHT JOIN Base_STATS
ON pokeMon.ID=Base_STATS.ID
WHERE pokeMon.ID=moves_by_tm_or_hm.ID AND
SPD IN
(SELECT MAX(SPD) FROM Base_STATS);";
if(strpos($search,"MOves_by_tm_or_hm")!==false)
{
if($mysqli->multi_query($query))
{
if($sql="$query")
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
}
}
?>



<?php
$mysqli=new mysqli("localhost","root","","pokedex");
if($mysqli->connect_error)
die("connection failed".$mysqli->connect_error);
if(isset($_POST['submit']))
{
$search=$_POST['query'];
$query ="SELECT * FROM ABILITIES ;";
if(strpos($search,"ABILITIES")!==false)
{
if($mysqli->multi_query($query))
{
if($sql="$query")
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
}
}
?>



<?php
$mysqli=new mysqli("localhost","root","","pokedex");
if($mysqli->connect_error)
die("connection failed".$mysqli->connect_error);
if(isset($_POST['submit']))
{
$search=$_POST['query'];
$query ="SELECT * FROM MOVES_BY_LEVELING ;";
if(strpos($search,"MOVES_BY_LEVELING")!==false)
{
if($mysqli->multi_query($query))
{
if($sql="$query")
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
}
}
?>



<?php
$mysqli=new mysqli("localhost","root","","pokedex");
if($mysqli->connect_error)
die("connection failed".$mysqli->connect_error);
if(isset($_POST['submit']))
{
$search=$_POST['query'];
$query ="SELECT * FROM MOVES_BY_TM_OR_HM ;";
if(strpos($search,"MOVES_BY_TM_OR_HM")!==false)
{
if($mysqli->multi_query($query))
{
if($sql="$query")
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
}
}
?>



<?php
$mysqli=new mysqli("localhost","root","","pokedex");
if($mysqli->connect_error)
die("connection failed".$mysqli->connect_error);
if(isset($_POST['submit']))
{
$search=$_POST['query'];
$query ="SELECT * FROM MOVES_BY_TUTOR ;";
if(strpos($search,"MOVES_BY_TUTOR")!==false)
{
if($mysqli->multi_query($query))
{
if($sql="$query")
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
}
}
?>



<?php
$mysqli=new mysqli("localhost","root","","pokedex");
if($mysqli->connect_error)
die("connection failed".$mysqli->connect_error);
if(isset($_POST['submit']))
{
$search=$_POST['query'];
$query ="SELECT * FROM IMAGES ;";
if(strpos($search,"IMAGES")!==false)
{
if($mysqli->multi_query($query))
{
if($sql="$query")
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
}
}
?>



