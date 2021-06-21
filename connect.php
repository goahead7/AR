<?php
function connect(): PDO
{
    $host='localhost';
    $db = 'db';
    $user = 'root';
    $password ='**********';
    try {
        $dsn = "mysql:host=$host;port=3306;dbname=$db;";

        return new PDO(
            $dsn,
            $user,
            $password,
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );
    } catch (PDOException $e) {
        die($e->getMessage());
    }
    finally {
        echo 'ok';
    }
}
return connect();