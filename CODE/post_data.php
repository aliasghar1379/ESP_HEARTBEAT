<?php

$severname = "localhost";
$dbname = "esp_data";
$username = "aliasgh3_aliasghar";
$password = "YOUR PASSWORD";

$api_key_value = "espforaliasghar";

$api_key = $SensorData = $LocationData = $value1 = $value2 = $value3 =  $reading_time = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $api_key = test_input($_POST["api_key"]);
    if($api_key == $api_key_value) {
        $SensorData = test_input($_POST["SensorData"]);
        $LocationData = test_input($_POST["LocationData"]);
        $value1 = test_input($_POST["value1"]);
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        
        $sql = "INSERT INTO ESPData (SensorData, LocationData, value1, value2, value3)
        VALUES ('" . $SensorData . "', '" . $LocationData . "', '" . $value1 . "')";
        
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } 
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        $conn->close();
    }
    else {
        echo "Wrong API Key";
    }

}
else {
    echo "No data posted HTTP POST.";
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}