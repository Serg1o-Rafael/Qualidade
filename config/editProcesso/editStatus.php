<?php
if(!empty($_GET["OP"])){

    include("C:/xampp/htdocs/qualidade/config/conexao.php");
    $op= $_GET["OP"];
    $sql = "SELECT * FROM status where OP = '$op'";
    $result = mysqli_query($mysqli, $sql);

    if($result->num_rows >0) {
        while($dados = mysqli_fetch_assoc($result)){
            $op = $dados["op"];
            $snqc = $dados["snqc"];
            $rd = $dados["rd"];
            $cal = $dados["cal"];
            $visual = $dados["visual"];
            $quant = $dados["quant"];
            $sobra = $dados["sobra"];
            $local = $dados["mesa1"].$dados["mesa2"].$dados["mesa3"].$dados["mesa4"].$dados["mesa5"].$dados["insp_cliente"];
        
           
        }
    }
    else{
        header('Location: /qualidade/inicial.php');
    }
   


    

    
}
?>