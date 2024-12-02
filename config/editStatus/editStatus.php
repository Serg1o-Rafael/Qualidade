<?php
if(!empty($_GET["id"])){

    include("C:/xampp/htdocs/qualidade/config/conexao.php");
    $op= $_GET["id"];
   
     $sql = "SELECT * FROM status where OP = '$op'";
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
        print_r($op);
    }
    else{
        header('Location: /qualidade/inicial.php');
    }
   


    

    
}
?>