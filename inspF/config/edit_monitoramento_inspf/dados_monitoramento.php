<?php

// Pesquisa os valores salvos no banco de dados de cada campo relacionados ao ID_MATERIAL da tabela monitoramento e guarda-os numa váriavel...

if(!empty($_GET["id"])){

    include("C:/xampp/htdocs/qualidade/conexao.php");
    $id= $_GET["id"];
   
     $sql = "SELECT * FROM monitoramento where ID_MATERIAL = '$id'";
     $result = mysqli_query($mysqli, $sql);
  
    if($result->num_rows >0) {
        while($dados = mysqli_fetch_assoc($result)){
            $op = $dados["OP"];
            $snqc = $dados["SNQC"];
            $rd = $dados["RELATORIO_DIM"];
            $cal = $dados["CALIBRACAO"];
            $visual = $dados["VISUAL"];
            $quant = $dados["QUANT_TOTAL"];
            $sobra = $dados["SOBRA"];
            $local = $dados["LOCAL"];
          
          
        }
       
    }
    else{
        header('Location: /qualidade/inspF/monitoramento.php');
    }
   


    

    
}
?>