<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
    


    <?php 

        echo "hello naim";
    
    ?>


<?php if(true){?>
    <h1>just a h1 tag</h1>
<?php } ?>






<?php 

// super global variables

    echo $_SERVER["DOCUMENT_ROOT"];
    echo "<br>";
    echo $_SERVER["PHP_SELF"];
    echo "<br>";
    echo $_SERVER["PHP_SELF"];
    echo "<br>";
    echo $_SERVER["SERVER_NAME"];
    echo "<br>";
    echo $_jjjSERVER["REQUEST_METHOD"];
    echo "<br>";


    echo $_GET["name"];
    echo $_GET["eyecolour"];

    echo $_REQUEST["name"];

    echo $_COOKIE["name"];
    echo $_SESSION[""];

    echo $_ENV[""];

    echo $GLOBALS[""];


    

?>


</body>
</html>