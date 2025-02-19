<?php

//Deleta a linha inteira relacionada a OP da tabela monitoramento no banco de dados...

if(!empty($_GET["id"])){

    include("C:/xampp/htdocs/qualidade/conexao.php");
    $id= $_GET["id"];
   
     $sql = "SELECT * FROM monitoramento where ID_OP = '$id'";
     $result = mysqli_query($mysqli, $sql);
  
    if($result->num_rows >0) {
        
        $sqlDelete="DELETE FROM monitoramento where ID_OP='$id'";
        $resultDelete = mysqli_query($mysqli, $sqlDelete);

        header('Location: /qualidade/inspF/tabela_monitoramento.php');
    }
    
    
   


    

    
}
?>