<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $text= "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, tempore. Ratione itaque nihil dicta at doloribus aliquam, suscipit tempora omnis quia quo quod autem est voluptatibus quibusdam nostrum rerum similique." ;    
    echo $text;
    echo "<br>";
    echo "lunghezza paragrafo: " . strlen($text);
    echo "<br>";
    echo str_replace($_GET["name"],"***",$text);
    ?>
</body>
</html>