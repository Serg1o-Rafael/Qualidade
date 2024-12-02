<?php

if(isset($_POST["salvar"])){

    include("C:/xampp/htdocs/qualidade/config/conexao.php");

    $op = $_GET["id"];
    print_r($op);
    $snqc = $_POST["snqc"];
    $rd = $_POST["rd"];
    $cal = $_POST["cal"];
    $visual = $_POST["visual"];
    $quant = $_POST["quant"];
    $sobra = $_POST["sobra"];
    $local = $_POST["mesa1"].$_POST["mesa2"].$_POST["mesa3"].$_POST["mesa4"].$_POST["mesa5"].$_POST["insp_cliente"];

    $sql= mysqli_query($mysqli, "INSERT INTO status(OP,LOCAL,CALIBRACAO,VISUAL,QUANT_TOTAL,SOBRA,RELATORIO_DIM,SNQC)
    VALUES('$op','$local','$cal','$visual','$quant','$sobra','$rd','$snqc')");

    header("location: /qualidade/inicial.php");

    

    
}
?>