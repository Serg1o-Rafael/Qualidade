<?php

// Pesquisa os valores salvos no banco de dados de cada campo relacionados ao ID_MATERIAL da tabela monitoramento e guarda-os numa váriavel...

if(!empty($_GET["id"])){

    include("C:/xampp/htdocs/qualidade/conexao.php");
    $id= $_GET["id"];
   
     $sql = "SELECT * FROM materiais where ID = '$id'";
     $result = mysqli_query($mysqli, $sql);
  
    if($result->num_rows >0) {
        while($dados = mysqli_fetch_assoc($result)){
            $id = $dados["ID"];
            $op = $dados["OP"];
            $cliente = $dados["CLIENTE"];
            $pedido = $dados["PEDIDO"];
            $revestimento = $dados["REVESTIMENTO"];
            $data_entrada = $dados["DATA_ENTRADA"];
            $data_entrega = $dados["DATA_ENTREGA"];
          
          
          
        }
       
    }
    else{
        //header('Location: /qualidade/inspF/materiais.php');
    }
   


    

    
}
?>