<?php
include("config.php");
$id = $_GET['id'];

$result = mysqli_query($mysqli, "DELETE FROM wedri WHERE id=$id");

header("Location:../view/UpdateData.php");
?>

