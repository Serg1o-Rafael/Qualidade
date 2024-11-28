<?php
if(isset($_POST["salvar"])){

    include("C:/xampp/htdocs/qualidade/config/conexao.php");
    $op = $_POST["op"];
    $snqc = $_POST["snqc"];
    $rd = $_POST["rd"];
    $cal = $_POST["cal"];
    $visual = $_POST["visual"];
    $quant = $_POST["quant"];
    $sobra = $_POST["sobra"];
    $local = $_POST["local"];

    $sql= mysqli_query($mysqli, "INSERT INTO status(OP,SNQC,RELATORIO_DIM,CALIBRACAO,VISUAL,QUANT_APROVADA,SOBRA,LOCAL)
    VALUES('$op','$snqc','$rd','$cal','$visual','$quant','$sobra','$local')");

    header("location: /qualidade/index.php");

    

    
}
?>