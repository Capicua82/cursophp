<?php
if ($_POST) {
    echo $_POST[' nombre '];
}

?>

<br />
<br />

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">


    <label for="nombre"> Ingresa tu  nombre </ label>
    <br />
    <br />

    <input type="text" placeholder="Nombre:" name="nombre">
    <br />
    <br />

    <label for="genero"> Ingresa género </ label>

    <br />
    <br />


    <label for="hombre"> Hombre</label>
    <input type="radio" name="sexo" value="hombre" id="hombre">

    <label for="mujer"> Mujer</label>
    <input type="radio" name="sexo" value="mujer" id="mujer">

    </br>
    </br>
    </br>



    <label for="edad"> Ingresa año de nacimiento </ label> 
       <select name="year" id="year">
        <option value="2000">2000</option>
        <option value="2001">2001</option>
        <option value="2002">2002</option>

    </select>

    </br>
    </br>
    </br>


    <label for="terminos"> ¿Aceptas los términos y condiciones?</label>
    <input type="checkbox"  name="terminos" id="terminos" value="ok">
    
    <input type="submit" value="Enviar">

</form>    

</body>
</html>