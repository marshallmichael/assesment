<?php
require("connection.php");

if(!empty($_POST["biography"])){
    // $user = $_POST["user_id"];
    $data = $_POST["biography"];
    $email = $_POST["email"];

    $sql = "UPDATE `Bio` SET `biography`='$data'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    
    $conn->close();
}

?>