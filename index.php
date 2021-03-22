<?php
        header("content-type: text");
        $host = "db"; //The hostname "db" from our docker-compose.yml file!!!
        $username = "root"; //We use the root user
        $pw = "123123123"; //that's the password we set as environment variable
        $conn = new mysqli($host,$username,$pw);
        if ($conn->connect_errno > 0) {
                echo $db->connect_error;
        } else {
                echo "DB Connection successful\n\n";
        }
?>