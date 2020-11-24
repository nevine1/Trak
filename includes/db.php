
<?php
$dsn = "mysql:host=localhost;dbname=emeel"; //dsn = database source name
$user = "root";
$pw = "";
$option = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);
try {
    $con = new PDO($dsn, $user, $pw, $option);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Failed to Connect" . $e->getMessage();
}
