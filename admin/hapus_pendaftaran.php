<?php
require "../function.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    mysqli_query($connect, "DELETE FROM pendaftaran WHERE id='$id'");
}

header("Location: data_pendaftaran.php");