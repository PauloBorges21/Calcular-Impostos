

<?php 
if(!empty($_POST['valor'] && $_POST['taxa'])){

    $valor = addslashes($_POST['valor']);
    $taxa = addslashes($_POST['taxa']);

    $valor = floatval(str_replace("," , "." , str_replace("." , "",$valor)));
    $taxa = ($taxa != "") ? floatval(str_replace("," , "." , str_replace(".", "",$taxa))) : 0 ;
}?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calduladora de taxa</title>
</head>
<body>
    <h3>Calculadora de taxa</h3>
    <form method="POST">
        Valor do produto:<br/>
        <input type="text" name="valor" placeholder="0,00" pattern="[0-9.,]{1,}" style="text-align:right"/><br/><br/>
        Taxa de taxa (em %)<br/>
        <input type="text" name="taxa" placeholder="0,0" pattern="[0-9,-]{1,}" style="text-align:right"/><br/><br/>
        <input type="submit" value="Enviar"/><br/>
    </form>

    <?php 

    if(isset($valor)){

        $valor = number_format($valor, 2,",","");
        $taxa = number_format( $taxa, 1, ",","" );
        $imposto = number_format(($valor * $taxa / 100), 2, "," ,"" );
        $produtoImposto = number_format(($valor - $valor * $taxa/100), 2, "," ,"" );
       

       echo "Valor do produto:  $valor </br>";
       echo "Taxa de imposto: $taxa <br>";
       echo "Imposto: $imposto <br>";
       echo  "Valor do Produto sem imposto $produtoImposto";
       //$produto = number_format(())
    }

    ?>

</body>
</html>