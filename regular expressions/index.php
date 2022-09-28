<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regular Expressions</title>
</head>
<body>
    <?php

    $string = "My name is Moh, Moh is my name";

    if(preg_match_all("/Moh/", $string, $array)){
        print_r($array);
    }
    
    //Replace string
     $string = "My name is Moh, Moh is my name";

    $string2 = preg_replace("/Moh/", "Kamau", $string);

    echo $string2;
    

    ?>
</body>
</html>