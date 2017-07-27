<?php
error_reporting(E_ALL);
ini_set('display_error', true);
echo "This is SQL Test<br/>";

$params =  $_GET;
$id = !empty($params['id']) ? (int) $params['id'] : 0;
$id = !empty($params['id']) ? $params['id'] : 0;
print_r($params);
echo $id . '<br/>';

$conn = mysql_connect("10.212.225.36", "felix", "felix");

if (!$conn) {
	echo 'Error';
	print_r("Error: " . mysql_error());
}
else {
	echo 'Connected successfully';
	mysql_select_db("felix", $conn);
	$select = mysql_query("SELECT uid, mail, status FROM users_field_data WHERE uid = $id LIMIT 10", $conn);
		//or die("Error");
	print "<Pre>";
	print_r($select); # http://www.demodev1.local/sqltest.php?id=41%27%20--%20SELECT%201,2
	while ($result = mysql_fetch_assoc($select)) {
		print_r($result);
	}
	print "</Pre>";
	mysql_close($conn);
	
}

$conn = null;
