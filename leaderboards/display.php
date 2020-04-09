<?php
// Send variables for the MySQL database class.
//Change User,PW and yourDBname
$conn = new mysqli('127.0.0.1', 'root', 'Apik12345', 'leaderboards');
// mysqli_select_db('leaderboards') or die('Could not select database');

 $query = "SELECT * FROM `scores` ORDER by `score` DESC LIMIT 100";
  $result = $conn->query($query);
//   $rows = array();
//   while($r = mysqli_fetch_assoc($result)) {
//       $rows[] = $r;
//   }
//   print json_encode($rows);
//  $num_results = mysqli_num_rows($result);


while($r = mysqli_fetch_assoc($result))
{
    // $row = mysql_fetch_array($result);
    echo $r['name'] . ";" . $r['score'] . ";";
}


/*
 * ORIGINAL:
for($i = 0; $i < $num_results; $i++)
{
    $row = mysql_fetch_array($result);
    echo $row['name'] . "\t" . $row['score'] . "\n";
}
______

$encode = array();
$i = 1;
while($row = mysql_fetch_assoc($result)) {
    $encode[$row['id']][] = $row['score'];
    $encode[$row['id']][] = $row['name'];
   // $encode[$row['id']][$i] = $row['name'];
    $i++;
}

echo json_encode($encode);
*/
?>
