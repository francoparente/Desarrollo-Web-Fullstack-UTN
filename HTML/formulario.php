<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario en clase</title>
</head>
<body>
    
<form action="formulario.php" method="get">
    Name: <input type="text" name="name" placeholder="ej. Pepito Grillo"><br>
    E-mail: <input type="email" name="email" placeholder="ej. pepito_grillo@mail.com"><br>
    <input type="submit">
</form>

Hola <?php isset($_GET["name"])? print_r($_GET['name']) : '' ?> ! <br>
Tu email es: <?php isset($_GET["email"])? print_r($_GET['email']) : '' ?> <br>

</body>
</html>