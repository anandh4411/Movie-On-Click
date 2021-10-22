<?php
require_once '../db.php';

$name = $_POST["name"];
$year = $_POST["year"];
$category = $_POST["category"];
$duration = $_POST["duration"];
$link = $_POST["link"];
$image = $_FILES["image"];
$image_name = $_FILES["image"]["name"];
$imagetmp_name = $_FILES["image"]["tmp_name"];
// Path to store uploaded images
$destination = "../../../uploads/".basename($image_name);
$query = "INSERT INTO recomended_movie (name, year, category, duration, link, image)
VALUES ('$name', '$year', '$category', '$duration', '$link', '$image_name')";
mysqli_query($connect, $query);

// move uploaded image into uploads folder
if (move_uploaded_file($imagetmp_name, $destination)){
    header("Location: ../../pages/home.html");
}
else echo 'Cannot upload image! Please check uploads folder permissions. Make it read, write possible.';

?>