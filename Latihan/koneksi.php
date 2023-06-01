<?php
$hostname   = "localhost";
$username   = "root";
$password   = "";
$database   = "membership";

$konek=new mysqli($hostname,$username,$password,$database);
if ($konek->connect_error)
{
    
}
?>