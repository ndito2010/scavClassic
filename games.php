

	
<?php

$db = 'scavenger_db';

$host ='localhost';

$dbuser = 'root';

$dbpass = '';


$connection= mysql_connect($host,$dbuser,$dbpass);

if(!$connection) {

die('Could not connect:'.mysql_error());

}
else {

$db_found = mysql_select_db($db, $connection);

}
?>

<html>
<head>
<meta charset="UTF-8">
 <link rel="stylesheet" href="styleScav.css" type="text/css" media="screen" />
</head>

<body>
	<header>
	<h1>ScavCreator</h1>
	<p> Available Games </p>
	
	</header>
	
	<section id= "spacer">
	</section>
	
	<?php
$sql_record = " SELECT games_tbl.game_id, games_tbl.game_name,games_tbl.game_desc FROM games_tbl";

$result = mysql_query($sql_record);

?>

<br>
<table align= 'center' width='400' border='2' cellspacing='0' cellpadding='3'>
<tr>
<th>No. </th>
<th> Name </th>
<th> Description </th>
</tr> 

<?php

while($row=mysql_fetch_array($result)) {

echo "<tr>";
echo "<td>" .$row['game_id']. "</td>";
echo "<td>" .$row['game_name']. "</td>";
echo "<td>" .$row['game_desc']. "</td>";
echo "</tr>";
}
?>
</table>
</body>
</html>	