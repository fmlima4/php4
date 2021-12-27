<?php

use php4\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$pdo =  \php4\Pdo\Config\Database::createConnection();

$student = new Student(null, 'Felipe', new \DateTimeImmutable('1997-10-15'));
//mostrando o bindParam
$name = $student->name();

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (:name,:birthdate);";

$statement = $pdo->prepare($sqlInsert);
//mostrando o bindParam, passa por referencia
$statement->bindParam( ':name', $name);
//mostrando o bindValue, passo por copia
$statement->bindValue( ':birthdate', $student->birthdate()->format('Y-m-d'));

$name = 'outro nome';

if ($statement->execute()){
    echo "aluno incluido";
}


