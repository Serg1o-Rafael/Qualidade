<?php
if(!empty($_GET["id"])){

    include("C:/xampp/htdocs/qualidade/config/conexao.php");
    $op= $_GET["id"];
   
     $sql = "SELECT * FROM status where OP = '$op'";
     $result = mysqli_query($mysqli, $sql);
  
    if($result->num_rows >0) {
        
        $sqlDelete="DELETE FROM status where OP='$op'";
        $resultDelete = mysqli_query($mysqli, $sqlDelete);

        header('Location: /qualidade/inicial.php');
    }
    
    
   


    

    
}
?>