 <!-- These headers are put by me here so I can overpass the api restrictions of awardspace -->
<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS"); 
header("Access-Control-Allow-Headers: Content-Type, Authorization"); 
?>
<?php
$host ='fdb1028.awardspace.net';
$user ='4558776_books';
$password ='booklibrary2025@#';
$dbname = '4558776_books';

$con = new mysqli($host, $user, $password, $dbname);

$sql = "SELECT id, name, description, credits FROM subjects";
$result = mysqli_query($con, $sql);

$subjects = array();
while ($row = mysqli_fetch_assoc($result)) {
    $subjects[] = $row;
}

echo json_encode($subjects);
?>