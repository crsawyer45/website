<?php
include "dbConnect.php";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Timestamp, Temperature, Humidity FROM PlantInfo ORDER BY Timestamp ASC LIMIT 170";
$result = $conn->query($sql);
$str = "var data = google.visualization.arrayToDataTable([['Timestamp', 'Temperature', 'Humidity'],";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $str .= "['" . $row["Timestamp"]. "', " . $row["Temperature"]. "," . $row["Humidity"]. "],";
    }
} else {
    echo "0 results";
}
$print = substr($str, 0, -1);
$print .= "]);";
$conn->close();
echo $print;
?>
