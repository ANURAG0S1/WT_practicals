<?php
    $host = "localhost";
    $dbusername = "root"; // username
    $dbpassword = "password"; // your password
    $dbname = "test";  // dbname

    //Create connection
    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

    $sql = "SELECT * FROM fruit";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    echo "<ul>";
    if ($resultCheck > 0) {
        while ($rows = mysqli_fetch_assoc($result)) {
            //echo $row['username'] . "<br>";
            echo "<li> A ".$rows["name"]." is ".$rows["color"]. "</li>";

    }
    } else {
            echo "Fail";
    }
echo "</ul>";
?>