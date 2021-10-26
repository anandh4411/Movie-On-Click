<?php
$id = $_GET["id"];
require_once '../db.php';
$query = "DELETE FROM movie WHERE id = '$id'";
mysqli_query($connect, $query);
header("Location: ../../pages/home.php");
?>