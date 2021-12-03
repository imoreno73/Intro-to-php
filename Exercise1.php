<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercise</title>
</head>
<body>
    
    <h1 style="background-color: #00ffff">First Exercise</h1>

    <p style="border: ridge #ec7c26 1px">Escribe una lista en un documento HTML usando un Array en PHP</p>

    <?php $games=["wow","lol","sws","aion"];?>
     
    <p style="border: ridge #0f0fef 1px"><?php var_dump($games[0]).PHP_EOL;?></p>
    
    <p style="border: ridge #0f0fef 1px"><?php var_dump($games[1]).PHP_EOL;?></p> 
    
    <p style="border: ridge #0f0fef 1px"><?php var_dump($games[2]).PHP_EOL;?></p>

    <p style="border: ridge #0f0fef 1px"><?php var_dump($games[3]).PHP_EOL;?></p>


    <h1 style="background-color: #00ffff">Second Exercise</h1>

    <p style="border: ridge #ec7c26 1px">Haz un formulario con un input de texto, un input de tipo “radio” y otro de tipo selector. 
        Usa el Método POST y escribe en un documento HTML los datos enviados.</p>
    <form id="form" action="C:\xampp\htdocs\pruebas\index.php" method="POST">
        
        <p>juego: <input type="text" name="ingrese un juego de pc" size="50"></p>
        <p>seleciona si has jugado a el juego</p>

        <P><input type="radio" name="jugado" value="no"/>¿has jugado?</p>
        <p><input type="submit" value="Submit"></P>

        <select name="cuantas veces jugaste">
            <option>1</option>
            <option>2</option>
            <option selected>Mas de 2</option>
        </select>
    </form>    

      
   

    <h1 style="background-color: #00ffff">Third Exercise</h1>

    <p style="border: ridge #ec7c26 1px">Usa un array clave-valor para definir los datos de un usuario y 
        escríbelos en una tabla en un documento HTML.</p>
    
        <?php $jugador=["nombre"=>"LUIS","edad"=>"48"];

        
        ?>

        <table cellspacing="10" width="400" style="text-align:center;margin: 0;">
            <tr style="border: ridge #0f0fef 1px">
                <td style="border: ridge #0f0fef 1px">NOMBRE:</td>
                <td style="border: ridge #0f0fef 1px"> <?php echo $jugador["nombre"]; ?></td>
            </tr>
            <tr style="border: ridge #0f0fef 1px">
                <td style="border: ridge #0f0fef 1px" >EDAD:</td>
                <td style="border: ridge #0f0fef 1px"> <?php echo $jugador["edad"]; ?></td>
            </tr>
        </table>

    <h1 style="background-color: #00ffff">Four Exercise</h1>

    <p style="border: ridge #ec7c26 1px">Usa una clase para definir una película. 
        Crea varios objetos Película y dibujarlos en “cards” en un documento HTML.</p>
    <?php 

        class Game {
            public $name;

            public function getname() 
            {
              return $this->name;
            }
        }?>    
            <div>
                    <img src="./assets/wow.jpg" width="45%"> 
                <?php
                    $game = new Game();
                    $game->name = '_WOW_';
                    echo $game->getname(); 
                ?>
                    <img src="./assets/lol.jpg" width="45%"> 
                <?php
                    $game = new Game();
                    $game->name = '_LOL_';
                    echo $game->getname(); 
                ?>
            </div>
            <div>
                    <img src="./assets/sws.jpg" width="45%">    
                <?php
                    $game = new Game();
                    $game->name = '_SWS_';
                    echo $game->getname(); 
                ?>
                    <img src="./assets/aion.jpg" width="45%"> 
                <?php
                    $game = new Game();
                    $game->name = '_AION_';
                    echo $game->getname(); 
                ?>
            </div>    

</body>
</html>