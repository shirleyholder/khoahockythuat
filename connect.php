<?php
$servername = "localhost";
$username = "";
$password = "";
$dbname = "khoahockythuat2019";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, lat, lng, time FROM toipham";
$result = $conn->query($sql);
$a='';$b='';$c='';$name='';
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $name =$row["name"];
        $a = $row["lat"];
        $b = $row["lng"];
        $c = $row["time"];
    }
    
} else {
    echo "0 results";
}
$conn->close();
// biến a,b,c là dữ liệu đầu ra
$fp = @fopen('infor.txt', "w");
fwrite($fp, $name);
fwrite($fp, $a);
fwrite($fp, $b);
fwrite($fp, $c);
?>