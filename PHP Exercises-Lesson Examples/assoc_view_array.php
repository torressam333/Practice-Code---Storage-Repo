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
    <ul>
        <?php foreach($person as $feature => $val) : ?>

        <li><strong><?= $feature . ': ';?><?= $val; ?></strong></li>
        <?php endforeach ?>
    
    
    </ul>


    </header>
</body>
</html>