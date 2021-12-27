<?php

namespace php4\Pdo\Config;

use PDO;

class Database
{

    public static function createConnection(): PDO
    {
        $databasePath = __DIR__ . '../../../banco.sqlite';

        $connection = new PDO('sqlite:' . $databasePath);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $connection;
    }
}
