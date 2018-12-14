<?php

class Task{
    public $description;

    public $completed;

    public $person;

    public function __construct($description, $completed, $person)
    {
        $this->description = $description;
        $this->completed = $completed;
        $this->person = $person;
    }

}


$tasks = [
    new Task('Taking out the trash', true, 'Samuel'),
    new Task('Washing the dishes', false, 'Samuel'),
    new Task('Making dinner', true, 'Liz'),
    new Task('Giving me cuddles', false, 'Liz'),
];


//ARRAY COLUMN
$practice = array_column($tasks, 'person', 'description');

var_dump($practice);








/*
//ARRAY MAP
$modified = array_map(function ($task){

    return $task->person . ' is responsible for ' . $task->description;
    //return $task->description;

} ,$tasks);

var_dump($modified);
*/


/* 
//ARRAY FILTER
$completedTasks = array_filter($tasks, function($task){
    return $task->completed;
});

var_dump($completedTasks);



$unCompletedTasks = array_filter($tasks, function($task){
    return !$task->completed;
});

var_dump($unCompletedTasks); */