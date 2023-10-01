<?php
function connect_my_db()
{
    $host="localhost";
    $user="root";
    $password="";
    $db="techdrive";
    $con=mysqli_connect($host,$user,$password,$db) or die("Sorry unable to connect");
    return $con;
}
?>