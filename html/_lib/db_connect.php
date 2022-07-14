<?php
function db_connect(){
    $db_user = 'postgres';
    $db_pass = 'dnwnd112';
    $db_host = '3.39.25.111';
    $db_name = 'kwjportfolio';
    $dsn = "pgsql:host=$db_host;dbname=$db_name";
    try{
        $pdo = new PDO($dsn,$db_user,$db_pass);
        $pdo -> setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch (PDOException $Exception) {  
        die('오류:'.$Exception->getMessage());
    }
    return $pdo;
}
?>