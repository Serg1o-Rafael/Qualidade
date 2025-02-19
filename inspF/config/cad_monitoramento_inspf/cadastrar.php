<?php

// Faz um INSERT dos dados obtidos do formulário cad_monitoramento no banco de dados...

if(isset($_POST["salvar"])){

    include("C:/xampp/htdocs/qualidade/conexao.php");

    $id = $_POST["id"];
    $quant = $_POST["quant"];
    $sobra = $_POST["sobra"];
    $local = $_POST["local"];
    
   $sqlId= mysqli_query($mysqli, "SELECT * FROM ops where ID = '$id'");
   $result=mysqli_fetch_assoc($sqlId);
    $lt=$result['LOTE'];
    $op=$result['OP'];
   
    

    $sql= mysqli_query($mysqli, "INSERT INTO monitoramento(ID_OP,OP,LOTE,LOCAL,QUANT_TOTAL,SOBRA)
    VALUES('$id','$op','$lt','$local','$quant','$sobra')");


    header("location: /qualidade/inspF/tabela_monitoramento.php");

    

    
}
?>