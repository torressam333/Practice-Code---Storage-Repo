<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        header{
            background-color: grey;
            padding: 2em;
            
        }
    </style>
</head>
<body>
    <header>
    <h1>Task For The Day</h1>
    <ul>
        <?php foreach($task as $heading => $value) : ?>
            <li>
                <strong><?=  ucfirst($heading); ?>: </strong><?= $value; ?>
            </li>
        <?php endforeach; ?>
    </ul>


    <ul>
        <li>
            <strong>Name: </strong><?= $task['title']; ?>
        </li>

        <li>
            <strong>Due: </strong><?= $task['due']; ?>
        </li>

         <li>
            <strong>Person Responsible: </strong><?= $task['assigned_to']; ?>
        </li>

         <li>
            <strong>Status: </strong><?= $task['Completed?'] ? 'Complete' : 'Incomplete'; ?>
        </li>
    </ul>


    </header>
</body>
</html>