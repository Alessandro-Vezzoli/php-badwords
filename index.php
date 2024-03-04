<?php

//Creare un form PHP che permetta di inviare due campi: 
    //un paragrafo 
    //ed una parola da censurare.
    $homepage = file_get_contents('http://http://localhost/PHP/php-badwords/form.php');
    echo $homepage; 
$_POST  
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
       <form action=" " method="post">
        <label for="name"> Il tuo nome</label>
        <input type="text" name="name" id="name">
        <label for="lastname"> La tua password</label>
        <input type="password" id="pwd" name="pwd"> 

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