<?php
header('Location: index.html');
include('config.php');

$cestinka = $_POST["cestina"];
$ajinka = $_POST["anglictina"];

$sql = "INSERT INTO slova (cestina, anglictina) VALUES ('$cestinka', '$ajinka')";
$conn->query($sql);

?>