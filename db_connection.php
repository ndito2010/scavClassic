<?php


echo "<body background='purty_wood.png'>";

echo "<header>";
	echo "<h1 style=font-size:70px;color:#521400;font-family:Open Sans;>ScavCreator</h1>";
	echo "<p> Available Games </p>";
	
echo "</body>";

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

$sql_record = " SELECT games_tbl.game_id, games_tbl.game_name,games_tbl.game_desc FROM games_tbl";

$result = mysql_query($sql_record);

echo "<centre>";
echo "<table width='400' border='1' cellspacing='0' cellpadding='3'>";
echo "<tr>
<th> Name </th>
<th> Description </th>
</tr> " ;

while($row=mysql_fetch_array($result)) {

$game_name = $row['game_name'];

$game_desc = $row['game_desc'];

echo "<tr><td>" .$game_name . "</td><td> ".$game_desc . "</td></tr>";

}

echo "</table>";
echo "</centre>";



?>