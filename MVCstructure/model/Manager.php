<?php

namespace safwen\blog\Model;

class Manager
{
    protected function connectDB()
    {
        try {
            $pdo = new \PDO('mysql:host=localhost; dbname=we_love_food', 'root');
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (\Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }
    }
}
