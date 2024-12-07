<?php

// Faz um INSERT dos dados obtidos do formulário cad_monitoramento no banco de dados...

if(isset($_POST["salvar"])){

    include("C:/xampp/htdocs/qualidade/conexao.php");

    $op = $_POST["op"];
    $snqc = $_POST["snqc"];
    $rd = $_POST["rd"];
    $cal = $_POST["cal"];
    $visual = $_POST["visual"];
    $quant = $_POST["quant"];
    $sobra = $_POST["sobra"];
    $local = $_POST["local"];
    
   $sqlId= mysqli_query($mysqli, "SELECT * FROM materiais where OP = '$op'");
   $result=mysqli_fetch_assoc($sqlId);
    $id=$result['ID'];

   
    

    $sql= mysqli_query($mysqli, "INSERT INTO monitoramento(ID_MATERIAL,OP,LOCAL,CALIBRACAO,VISUAL,QUANT_TOTAL,SOBRA,RELATORIO_DIM,SNQC)
    VALUES('$id','$op','$local','$cal','$visual','$quant','$sobra','$rd','$snqc')");


    header("location: /qualidade/inspF/monitoramento.php");

    

    
}
?>