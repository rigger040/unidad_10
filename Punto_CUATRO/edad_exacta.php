<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CND BOOTSTARP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="edad_exacta.css">
    <title>mayor, Menor y Edad Exacta</title><!--Se cambia titulo-->
</head>
<body>
    <a href="../index.html#section-respuestas">
        <img class="home" src="../img/boton_inicio.png" alt="">
    </a>
    
    <div class="main-frame-cal">
    <form action="" method="POST"><!--Se agrega action-->
        <h1>Edad Exacta</h1><br>  <!--Ser agregó titulo-->
        <div class="form-group">
            <label for="exampleFormControlInput1">Seleccione su fecha de nacimiento:</label>
            <input type="date" name="f_n" class="form-control" id="exampleFormControlInput1">
        </div>
        <!--Ser agregó type-->
        <button type="submit" name="verificar" class="btn btn-outline-info">Envíar</button>
    </form>

    <?php
     $edad = 0;
     const constante_18 = 18;
     define ("constante0","0");
    
    if (isset($_POST['verificar'])) {
        $f_n = new DateTime($_POST['f_n']);
       
        $date2 = new DateTime(date("y-m-d"));

        $diff = $f_n->diff($date2);

        $edad_actual = $diff->y;
        $edad_meses = $diff->m;
        $edad_dias = $diff->d;

        if ($edad_actual >= constante_18) {
            echo "<h2> Su edad es de " . $edad_actual . " años y eres Mayor de Edad </h2>";#Se cambia el string de los echos
        }
        else if ($edad_actual < constante_18 && $edad_actual > constante0) {
            echo "<h2> Su edad es de " . $edad_actual . " años y eres Menor de Edad </h2>";
        }
        else {
            echo "<h2>  Valor no valido </h2>";
        }
        
        echo "<h2>Su edad exacta es de ".$edad_actual." años, ".$edad_meses." meses y ".$edad_dias . " dias</h2>";
         
    }

    ?>

</body>
</html>