<?php

use php4\Pdo\Domain\Model\Student;
use php4\Pdo\Infrastructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$pdo =  \php4\Pdo\Config\Database::createConnection();

$repository = new PdoStudentRepository($pdo);

$studentList = $repository->allStudents();

var_dump($studentList);