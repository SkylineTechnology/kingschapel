<?php
$sitename="Kings Chapel International Ministry.";
$conn=mysqli_connect("localhost", "root", "", "kingschapeldb");
if(!$conn){
    die(mysqli_error($conn)."Error connecting Database!");
}
?>
     