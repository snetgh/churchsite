<?php

require_once 'database_connection/database_connection.php';

$my_file_path = $_GET["my_file_path"];

$get_file = "SELECT * FROM tbl_sermon_uploads WHERE file_path='$my_file_path' LIMIT 1";
$execute_get_files = mysqli_query($my_connection_string,$get_file);

header("Content-Type:application/octet-stream");
header("Content-Disposition:application;filename=".basename($my_file_path));
header("Content-Length:".filesize($my_file_path));
readfile($my_file_path);

?>