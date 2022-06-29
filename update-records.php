<?php
require_once 'conn.php';

$id = $_GET['update'];

$name = $_POST['name'];
$age = $_POST['age'];
$number = $_POST['number'];
$address = $_POST['address'];
$email = $_POST['email'];

$sql = mysqli_query($conn," UPDATE table_records SET NAME='$name', AGE='$age', CONTACT_NUMBER='$number', ADDRESS='$address', EMAIL='$email' WHERE ID='$id' ");
if($sql){
    echo "<script>alert('Record Updated!');</script>";
    echo "<script>document.location='index.php';</script>";
}else {
    echo "<script>alert('Something went wroing');</script>";
}
