<?php

// Faz um INSERT dos dados obtidos do formulário cad_monitoramento no banco de dados...

if(isset($_POST["salvar"])){

    include("C:/xampp/htdocs/qualidade/conexao.php");

    $op = $_POST["op"];
    $quant = $_POST["quant"];
    $sobra = $_POST["sobra"];
    $local = $_POST["local"];
    
   $sqlId= mysqli_query($mysqli, "SELECT * FROM materiais where OP = '$op'");
   $result=mysqli_fetch_assoc($sqlId);
    $id=$result['ID'];

   
    

    $sql= mysqli_query($mysqli, "INSERT INTO monitoramento(ID_MATERIAL,OP,LOCAL,QUANT_TOTAL,SOBRA)
    VALUES('$id','$op','$local','$quant','$sobra')");


    header("location: /qualidade/inspF/monitoramento.php");

    

    
}
?>