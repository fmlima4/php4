<?php

namespace php4\Pdo\Config;

use PDO;

class Database
{

    public static function createConnection(): PDO
    {
        $databasePath = __DIR__ . '../../../banco.sqlite';

        return new PDO('sqlite:' . $databasePath);
    }
}
