<?php

//Deleta a linha inteira relacionada a OP da tabela monitoramento no banco de dados...

if(!empty($_GET["id"])){

    include("C:/xampp/htdocs/qualidade/conexao.php");
    $op= $_GET["id"];
   
     $sql = "SELECT * FROM monitoramento where OP = '$op'";
     $result = mysqli_query($mysqli, $sql);
  
    if($result->num_rows >0) {
        
        $sqlDelete="DELETE FROM monitoramento where OP='$op'";
        $resultDelete = mysqli_query($mysqli, $sqlDelete);

        header('Location: /qualidade/inspF/monitoramento.php');
    }
    
    
   


    

    
}
?>