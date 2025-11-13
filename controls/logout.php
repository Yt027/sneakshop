<?php 
if(!isset($_SESSION)) {
    session_start();
}

$response = [
    "status" => "pending"
];

if(!isset($_POST["request"]) || $_POST["request"] != "logout") {
    $response["error"] = "Invalid request";
} else if(!isset($_SESSION["user"])) {
    $response["error"] = "No user to disconnect";    
} else {
    unset($_SESSION["user"]);
    $response["status"] = "Done";
}


echo json_encode($response);