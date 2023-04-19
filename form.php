<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <h2>to learn html and php form</h2>
    
    
    <!--  get method shows all the data in url
    so dont use it if the data is sencetive -->
    <form action="example.php" method = "get">
        <label for="firstname">First Name: </label>
        <input type="text" id="firstname" name = "firstname" placeholder="firstname" value="Naimul"     >
        <textarea name="massage" id="massage" cols="30" rows="10"></textarea>


    </form>
</body>
</html>