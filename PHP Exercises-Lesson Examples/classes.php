<?php
//require 'functions.php';


class Task {

    public $description;
    public $completed = false;

    public function __construct($description)
    {
        //Auto trigger on instantiation
        $this->description = $description;
    }

    public function complete()
    {
        $this->completed = true;

    }

    public function isComplete()
    {
        return $this->completed;
    }
    
}

$tasks = [

    new Task('Go to the store'),
    new Task('Get the Analyst position'),
    new Task('Impress Matt tomorrow by the grace of Yahuah')
];

$tasks[0]->complete();

//dd($task);
require 'classes.view.php';





?>
