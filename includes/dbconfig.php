<?php
$host = "localhost";
$userhost = "myhyper.ru";
$passhost = "5yh6kjfdsd4";
$datebase = "myhyper.ru";

$db = mysqli_connect($host, $userhost, $passhost, $datebase);
mysqli_query($db, "set character_set_client='utf8mb4'");
mysqli_query($db, "set character_set_results='utf8mb4'");
mysqli_query($db, "set collation_connection='utf8mb4_unicode_ci'");

?>