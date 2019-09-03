<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chand_application";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, company, position, qualification, interview_from,interview_to,info FROM notification";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<ul>
    <h4>Notification</h4>
    </ul>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<ul><li>" . $row["company"]. "<br> " . $row["position"]. "<br>" . $row["qualification"]. "<br> " . $row["interview_from"]. "<br> " . $row["interview_to"]. "<br> " . $row["info"].  "</li></ul>";
    }
    echo "</ul>";

    while ($row = $result->fetch_assoc()) {
        echo"Notification :".$row["company"].
       " " .$row["position"].
       " " .$row["qualification"].
        " ".$row["interview_from"].
        " ".$row["interview_to"].
        " " .$row["info"]."<br>";



    }



    
} else {
    echo "0 results";
}
$conn->close();
?>
