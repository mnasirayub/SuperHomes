<?php require("connection.php");
session_start();
if (!isset($_SESSION["email"])) {
    header("location:login.php");
    exit();
}
?>

<?php
$url =$_SESSION['url'];
$id = $_REQUEST["id"];
$accept = 1;
$query = "UPDATE ads SET status='$accept' WHERE id='$id'";
$run = $conn->query($query);

if ($run) {
    header("location:$url");
}
?>