<h4>     osman atam</h4>
<h1>        http://localhost:8080      </h1>
<?php
    header("content-type: text");
    $host = "db"; //The hostname "db" from our docker-compose.yml file
    $username = "root"; //We use the root user
    $pw = "123123123"; //that's the password we set as environment variable

    $host = "db"; //The hostname "db" from our docker-compose.yml file
    $username = "denemeusr"; //We use the root user
    $pw = "123123"; //that's the password we set as environment variable
    $database="denemedb";

    $conn = new mysqli($host,$username,$pw);//,$database);
    echo "<br>1<br>";
    if ($conn->connect_errno > 0) {
        echo $db->connect_error;
    } else {
        echo "DB Connection successful\n\n";
        //we read out the content
        $result=mysqli_query($conn,"show databases");// "select * from t1");  //SHOW DATABASES;");
        
        echo "<br>2<br>";
        while ($row = $result->fetch_row()) {
            //while( $row = mysqli_fetch_row( $result ) ){
            //echo $row[0]."\n";
            printf("%s\n", $row[0]);
        }
    }
    echo "<br>enson<br>";
?>
<h1>        http://localhost:8080      </h1>