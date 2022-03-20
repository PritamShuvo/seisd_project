<?php
$server = 'localhost';
$username = 'root';
$password = '';
$db = 'seisd_project';

$con = mysqli_connect($server,$username,$password,$db);

if(mysqli_connect_errno())
{
    echo "Failed Connect To The Server/Database! " .mysqli_connect_error();
}

?>