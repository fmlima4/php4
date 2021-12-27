<?php

require_once 'vendor/autoload.php';


$pdo =  \php4\Pdo\Config\Database::createConnection();

$sqlDelete = 'DELETE FROM students WHERE id = :id_aluno';
$preparedStatement = $pdo->prepare($sqlDelete);
$preparedStatement->bindValue(':id_aluno', 4, PDO::PARAM_INT);

if ($preparedStatement->execute()){
    echo "aluno deletado";
}

