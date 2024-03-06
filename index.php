<?php

//Creare un form PHP che permetta di inviare due campi: 
    //un paragrafo 
    //ed una parola da censurare.
    

    $name = 'prova1';


?>


<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> badwords</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
       <form action="./form.php" method="get"  >
        <label for="name">Paragrafo</label>
        <input type="text" name="name" id="name"><br><br><br>
        <label for="pwd">Censurata</label>
        <input type="text" id="pwd" name="pwd"> <br><br>

        <button
            type="submit"
        >
            Invia
        </button>
        
       </form>

       <?php if(!empty($_POST) ) :  ?>
<p>
    Ciao <?php echo $_POST['name'] . ' ' . $_POST['pwd']?>
</p>
<?php endif;  ?>

    </body>
</html>