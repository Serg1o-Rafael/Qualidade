<?php 

//Faz um INSERT dos dados obtidos do formulário cad_material no banco de dados...

if(isset($_POST["salvar"])){

    include("C:/xampp/htdocs/qualidade/conexao.php");
    
    $op = $_POST["op"];
    $lt = $_POST["lt"];
    $cliente = $_POST["cliente"];
    $pedido = $_POST["pedido"];
    $revestimento = $_POST["revestimento"];
    $material = $_POST["material"];
    $data_entrada = $_POST["data_entrada"];
    $data_entrega = $_POST["data_entrega"];

   if( $lt == "")

   $lt = "Sem lote";
    


    $sql= mysqli_query($mysqli, "INSERT INTO ops(OP,LOTE,CLIENTE,PEDIDO,REVESTIMENTO,MATERIAL,DATA_ENTRADA,DATA_ENTREGA)
    VALUES('$op','$lt','$cliente','$pedido','$revestimento','$material','$data_entrada','$data_entrega')");

    $sql2=  "SELECT ID FROM ops where LOTE = '$lt' and OP = '$op'";
    $result = mysqli_query($mysqli, $sql2);
    $dados = mysqli_fetch_assoc($result);
    $id = $dados["ID"];


    header("location: /qualidade/inspF/cad_monitoramento.php?id=$id");
}


?>