<!DOCTYPE html>
<head>

</head>
<body>
    <h1>Fomrulario</h1>
    
    <form id = "" name="" method = "post" action="index.php">
        <p>Escriba el primer numero</p>
        <input type="text" name= "dato1" id = "dato1">
        <br>
        <p>Escriba el segundo numero</p>
        <input type="text" name= "dato2" id = "dato2">
        <br>
        <br>
        <input type="submit" name = "suma" id = "suma" value = "  +  " >
        <input type="submit" name = "resta" id = "resta" value = "  -  ">
        <input type="submit" name = "multiplicacion" id = "multiplicacion" value = "  *  ">
        <input type="submit" name = "divicion" id = "divicion" value = "  /  ">
        <br>
    </form>
    <?php
        $numero = $_POST['dato1'];
        $numero2 = $_POST['dato2'];
        
        echo nl2br("\n Resultado: ");
        
        if (isset($_POST['suma']))
        {
            $resultado = (int)$numero + (int)$numero; 
            echo ($resultado);
        }
        else if (isset($_POST['resta']))
        {
            $resultado = (int)$numero - (int)$numero2; 
            echo ($resultado);
        }
        elseif (isset($_POST['multiplicacion']))
        {
            $resultado = (int)$numero * (int)$numero2; 
            echo ($resultado);
        }
        elseif (isset($_POST['divicion']))
        {
            $resultado = (int)$numero / (int)$numero2; 
            echo ($resultado);
        }
    ?>    

    
</body>
</html>