<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario en php</title>
</head>
<body>
    <h1>Formulario en php</h1>
    <form method="POST" action = "recibir.php"> 
        <label for="nombre">Nombre</label>
        <input type="text" name= "nombre">

        <label for="apellidos">Apellidos</label>
        <input type="text" name= "apellidos">

        <input type="submit" value= "Enviar datos">
    </form>
</body>
</html>