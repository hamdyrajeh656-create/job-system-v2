<?php
$db_url = getenv("DATABASE_URL");
if ($db_url) {
    $url = parse_url($db_url);
    $conn = mysqli_connect($url["host"], $url["user"], $url["pass"], substr($url["path"], 1), $url["port"]);
} else {
    die("Database Connection Error: DATABASE_URL not set.");
}
?>
