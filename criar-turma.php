<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;
use Alura\Pdo\Infrastructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$connection = ConnectionCreator::createConnection();
$studentRepository = new PdoStudentRepository($connection);

$connection->beginTransaction();

$aStudent = new Student(null,'Teste 1',new DateTimeImmutable('1988-10-21'));
$studentRepository->save($aStudent);

$anotherStudent = new Student(null,'Teste 2',new DateTimeImmutable('1989-09-20'));
$studentRepository->save($anotherStudent);

$connection->commit();