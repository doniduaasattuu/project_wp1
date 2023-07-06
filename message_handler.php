<?php

$email = trim($_POST["exampleInputEmail1"]);
$fullname = trim($_POST["exampleInputFullname"]);
$phone_number = trim($_POST["exampleInputPhoneNumber"]);
$address = trim($_POST["exampleInputAddress"]);
$message = trim($_POST["exampleInputMessage"]);


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $sql = "INSERT INTO message_handler (email, fullname, phone_number, address, message) VALUES ('$email', '$fullname', '$phone_number', '$address', '$message')";

    $database = "project_wp1";
    $username = "root";
    $password = "";
    $port = "3306";
    $host = "localhost";

    $connection = new \PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
    $connection->query($sql);
    $connection = null;

    $alert = <<<SCRIPT
        <script>
            alert("Your message have been received ✅");
            window.location = "/";
        </script>
    SCRIPT;

    echo $alert;
}
