<?php
function connect(): PDO {
    $host='localhost';
    $db = 'db';
    $user = 'root';
    $password ='**********';
    try {
        $dbh = new PDO ('mysql:host=$host:port=3306;dbname=$db',$user,$password);
    } catch (PDOException $e) {
        die($e->getMessage());
    }
