<?php
try
{
  $pdo = new PDO('mysql:host=localhost;dbname=task1', 'root', '');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  echo $output = 'Unable to connect to the database server.';
  exit();
}

$arr[0]['name']='Иван';
$arr[0]['surname']='Иванов';
$arr[0]['tel']='89506893231';
$arr[1]['name']='Петр';
$arr[1]['surname']='Петров';
$arr[1]['tel']='89647559323';

for ($i=0;$i<count($arr);$i++)
{
$pdoQuery = "INSERT INTO `buyer`(`name`, `surname`, `tel`) VALUES (:name,:surname,:tel)";

$pdoResult = $pdo->prepare($pdoQuery);

$pdoExec = $pdoResult->execute($arr[$i]);

    }

    $pdo = null;