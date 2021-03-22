

<?php
  echo "<br>1<br>";
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
echo "<br>2<br>";
//$mysqli = new mysqli("localhost", "denemeusr", "123123", "denemedb");

$host = "db"; //The hostname "db" from our docker-compose.yml file
$username = "denemeusr"; //We use the root user
$pw = "123123"; //that's the password we set as environment variable
$database="denemedb";

$mysqli = new mysqli($host,$username,$pw,$database);

echo "<br>3<br>";
$query = "SELECT *  from t1 " ;  //Name, CountryCode FROM City ORDER BY ID DESC";
echo "<br>4<br>";
$result = $mysqli->query($query);
echo "<br>5<br>";
/* fetch object array */
while ($row = $result->fetch_row()) {
    printf("%s (%s)\n", $row[0], $row[1]);
    echo "<br>6<br>";
}