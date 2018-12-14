<?php

function connectToDb()
{
    try{

         return new PDO('mysql:host=127.0.0.1; dbname=mytodo', 'root', 'Webdev1!');
        
    }catch(PDOException $e){
        die($e->getMessage());
    }

}

function fetchAllTasks($pdo)
{
    $statement = $pdo->prepare('select * from todos;');
    $statement->execute();

  //$insert = $pdo->prepare('insert into todos (description, completed) VALUES ("Learn Laravel", false)');
  //$insert->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

}