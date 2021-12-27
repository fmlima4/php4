<?php

use php4\Pdo\Domain\Model\Student;
use php4\Pdo\Config\Database;
use php4\Pdo\Infrastructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$connection = Database::createConnection();
$studentRepository = new PdoStudentRepository($connection);

$connection->beginTransaction();

try {
$aStudent = new Student(null, 'Felipe', new \DateTimeImmutable('1997-10-15'));
$studentRepository->save($aStudent);

$anotherStudent = new Student(null, 'Felipe errado', new \DateTimeImmutable('1997-10-15'));
$studentRepository->save($anotherStudent);

$connection->commit();

} catch (\RuntimeException $e) {
    echo $e->getMessage();
    $connection->rollBack();
}



