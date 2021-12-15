<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercise</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <h1>First Exercise</h1>

    <p class="p1">Escribe una lista en un documento HTML usando un Array en PHP</p>

    <?php $games=["wow","lol","sws","aion"];?>
     
    <p class="p1"> <?php for ($i=0;$i<=3;$i++) { echo ($games[$i]."<br>");}?></p>
  
    <h1>Second Exercise</h1> 

    <p class="p1">Haz un formulario con un input de texto, un input de tipo “radio” y otro de tipo selector. 
        Usa el Método POST y escribe en un documento HTML los datos enviados.</p>
    <form name="form" method="POST" action='./index.php'>
        
        <p class="p2">juego: <input type="text" name="juego" value="" size="50"></p>
        <p class="p1">seleciona si has jugado a el juego</p>

        <P class="p2">jugado: <input type="radio" name="jugado" value="si"/>¿has jugado?</p>
        <p><input type="submit" value="Submit"></P>

        <select name="numero">
            <option>1</option>
            <option>2</option>
            <option selected>Mas de 2</option>
        </select>
    </form>    

      
   

    <h1>Third Exercise</h1>

    <p class="p1">Usa un array clave-valor para definir los datos de un usuario y 
        escríbelos en una tabla en un documento HTML.</p>
    
        <?php $jugador=["nombre"=>"LUIS","edad"=>"48"];

        
        ?>

        <table cellspacing="10" width="400" style="text-align:center;margin: 0;">
            <tr>
                <td class="p1">NOMBRE:</td>
                <td class="p1"> <?php echo $jugador["nombre"]; ?></td>
            </tr>
            <tr>
                <td class="p1" >EDAD:</td>
                <td class="p1"> <?php echo $jugador["edad"]; ?></td>
            </tr>
        </table>

    <h1>Four Exercise</h1>

    <p class="p1">Usa una clase para definir una película. 
        Crea varios objetos Película y dibujarlos en “cards” en un documento HTML.</p>
    <?php 

        class Game {
            public $name;

            public function getname() 
            {
              return $this->name;
            }
        }?>    
            <div class="border-1">
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
            <div class="border-2">
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