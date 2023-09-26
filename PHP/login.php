<?php
$uid = $_POST["uid"];
$pass = $_POST["pass"];

$con = new mysqli("localhost", "root", "", "test");

if ($con->connect_error) {
    include "errorPage.html";
}
else{
    $stmt = $con->prepare("insert into details(username, password) values(?, ?)");
    $stmt->bind_param("ss", $uid, $pass);
    $stmt->execute();
    include "followerPage.html";
    $stmt->close();
    $con->close();
}
?> 