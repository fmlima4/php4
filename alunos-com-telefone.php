<?php

use php4\Pdo\Infrastructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$connection =  \php4\Pdo\Config\Database::createConnection();
$repository = new PdoStudentRepository($connection);


$studentList = $repository->studentsWithPhones();

var_dump($studentList);


