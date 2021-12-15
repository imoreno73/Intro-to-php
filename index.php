<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    
    
</head>
<body>

    <h1>Formulario</h1>

    <?php echo var_dump($_POST); ?>

    <p>juego:</p>
        <?php $juego=$_POST['juego']; echo$juego; ?>
    <p>¿has jugado?</p>
        <?php echo $_POST['jugado']; ?>
    <p>¿cuantas veces jugaste?<p>
        <?php echo $_POST['numero']; ?>
   
    
</body>
</html>