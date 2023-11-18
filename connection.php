<?php
$db_host = "localhost";
$db_username = "root";
$db_pass = "";
$db_name = "test";

try{
    $conn = mysqli_connect($db_host, $db_username, $db_pass, $db_name);

}
catch(mysqli_sql_exception){
    echo 'Connection';
}
?>
