<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regular expressionn 1</title>
</head>
<body>
    <?php

    $string = "^My name is Moses, Moses is my name";

    echo preg_match("/\^.*e$/", $string);
    

    ?>


</body>
</html>