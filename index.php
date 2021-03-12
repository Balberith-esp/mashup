<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
    
    <style>
        *{
            margin: 5px;
        }
    </style>




    <?php 
        require_once 'edamanService.php';
        require_once 'motivationalQuotes.php';
        require_once 'fitnessCalculatorService.php';

        if(isset($_POST['buscaIngrediente'])){
            $resp = json_decode(buscaIngrediente($_POST['ingrediente']));
            
        }

        if(isset($_POST['generarFrase'])){
            $respFrase = json_decode(generaFrase());
            
        }
    ?>

</head>
<body>
    
    <form action="" method="post">
        <h3>Valores nutricionales</h3>
        <input type="text" name="ingrediente" id="ingrediente">
        <input type="submit" name="buscaIngrediente" id="buscaIngrediente" value="Buscar">
        <?php

            if(isset($resp)){
                echo "</br>".$resp->parsed[0]->food->label;
                echo "</br><img src=".$resp->parsed[0]->food->image."></br><h6>Valores nutricionales:</h6><br>";
                echo "<p> Valor energetico: ".$resp->parsed[0]->food->nutrients->ENERC_KCAL." cal.</p>";
                echo "<p> Proteina: ".$resp->parsed[0]->food->nutrients->PROCNT.".</p>";
                echo "<p> Grasas : ".$resp->parsed[0]->food->nutrients->FAT.".</p>";
                echo "<p> Carbohidratos: ".$resp->parsed[0]->food->nutrients->CHOCDF." .</p>";
                echo "<p> Fibra: ".$resp->parsed[0]->food->nutrients->FIBTG." .</p>";
            }

        ?>
    </form>

    <form action="" method="post">
        <h3>Frase motivacional</h3>
        <input type="submit" name="generarFrase" id="generarFrase" value="Crea frase">
        <?php

            if(isset($respFrase)){
                var_dump($respFrase);
            }

        ?>
    </form>

    <hr><hr>
    <h4>Fitnnes calculator</h4>
    <form action="" method="post">
        <fieldset>
            <legend>Datos</legend>
                <label for="peso">Peso</label>
                <input type="number" name="peso" id="peso">
                <label for="altura">Altura</label>
                <input type="number" name="altura" id="altura">
                <label for="edad">Edad</label>
                <input type="number" name="edad" id="edad"><br>
                <label for="cintura">Cintura</label>
                <input type="number" name="cintura" id="cintura">
                <label for="cadera">Cadera</label>
                <input type="number" name="cadera" id="cadera">
                <label for="cuello">Cuello</label>
                <input type="number" name="cuello" id="cuello">
                <label for="genero">Genero</label><br>
                <input type="radio" name="genero" value="male" checked>Masculino <br>
                <input type="radio" name="genero" value="female">Femenino <br>
        </fieldset>
        <fieldset>
            <legend>Opciones</legend>
                <input type="radio" name="opcion" value="getBMI" checked> &nbsp;Calcular BMI <br>
                <input type="radio" name="opcion" value="pesoIdeal"> &nbsp;Calcular peso Ideal <br>
                <input type="radio" name="opcion" value="getMacros"> &nbsp;Calcular macros <br>
                <input type="radio" name="opcion" value="getPorcentajeGrasaCorporal"> &nbsp;Calcular porcentaje de grasa corporal <br>
                <input type="radio" name="opcion" value="getCaloriaDiarias">&nbsp; Calcular calorias diarias <br>
        </fieldset>
        <fieldset>
            <legend>Deportes</legend>
                <input type="radio" name="opcion" value="getMets"> &nbsp;Ver mets <br>
        </fieldset>
        <input type="submit" value="Calcular" name="calcular" id="calcular">
    </form>
    <?php
        if(isset($_POST['calcular'])){
            
            switch ($_POST['opcion']) {
                case "getBMI":
                    if($_POST['edad'] != "" and $_POST['peso'] != "" and $_POST['altura'] != ""){
                        
                        $response =json_decode(getBMI($_POST['edad'],$_POST['peso'],$_POST['altura']));

                        echo "<p>Su BMI es de". round($response->bmi,2)." </p>";
                        echo "<p>Estado general: ". $response->health." </p>";
                        

                    }else{
                        
                    }
                    break;
                case "pesoIdeal":
                    if($_POST['genero'] != "" and $_POST['peso'] != "" and $_POST['altura'] != ""){
                        
                        $response =json_decode(pesoIdeal($_POST['genero'],$_POST['peso'],$_POST['altura']));
                        
                        echo "<p>Su peso ideal  es de: ". round($response->Hamwi,2)." </p>";
                        
                        

                    }else{
                        
                    }
                    break;
                case "getMacros":
                    
                    break;
                case "getPorcentajeGrasaCorporal":
                    if($_POST['genero'] != "" and $_POST['peso'] != "" and $_POST['altura'] != "" and
                            $_POST['edad'] != "" and $_POST['cuello'] != "" and $_POST['cintura'] != "" and $_POST['cadera'] != ""){
                        
                        $response =json_decode(getPorcentajeGrasaCorporal(
                                    $_POST['genero'],$_POST['peso'],$_POST['altura'],
                                    $_POST['edad'],$_POST['cuello'],$_POST['cintura'],$_POST['cadera']));
                        
                        var_dump($response);
                        
                        

                    }else{
                        
                    }
                    break;
                case "getmets":
                    // $response =json_decode(getMets());
                    // foreach ($response as $r){
                    //     var_dump($r);
                    // }
                    // var_dump($response);
                    break;
                case "getCaloriaDiarias":
                    
                    // var_dump($_POST);
                    if($_POST['edad'] != "" and $_POST['genero'] != "" and $_POST['peso'] != "" and $_POST['altura'] != ""){
                        
                        $response =json_decode(getCaloriaDiarias($_POST['edad'],$_POST['peso'],$_POST['altura'], $_POST['genero']));
                        
                        var_dump($response);
                        
                        

                    }else{
                        
                    }
                    break;
            }
        }
    ?>
</body>
</html>