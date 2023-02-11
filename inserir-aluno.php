<?php

use Alura\Pdo\Domain\Model\Student;
use FTP\Connection;

require_once 'vendor/autoload.php';

$pdo = Alura\Pdo\Infrastructure\Persistence\ConnectionCreator::createConnection();

$student = new Student(null, 'Luis Filipe Abreu', new \DateTimeImmutable('1987-11-22'));

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES ('{$student->name()}','{$student->birthDate()->format('Y-m-d')}');";

var_dump($pdo->exec($sqlInsert));
