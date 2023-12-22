<?php
include 'database.php';

$id = $_GET['id'];
$sql = "DELETE FROM tugas WHERE id_tugas = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
    header("Location: index.php");
} else {
    die(mysqli_error($conn));
}

?>