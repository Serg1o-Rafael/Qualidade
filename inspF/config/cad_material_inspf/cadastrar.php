<?php 

//Faz um INSERT dos dados obtidos do formulário cad_material no banco de dados...

if(isset($_POST["salvar"])){

    include("C:/xampp/htdocs/qualidade/conexao.php");
    $op = $_POST["op"];
    $cliente = $_POST["cliente"];
    $pedido = $_POST["pedido"];
    $revestimento = $_POST["opcao2"];
    $insp_q = $_POST["opcao1"];
    $data_entrada = $_POST["data_entrada"];
    $data_entrega = $_POST["data_entrega"];



    $sql= mysqli_query($mysqli, "INSERT INTO materiais(OP,CLIENTE,PEDIDO,INSP_Q,REVESTIMENTO,DATA_ENTRADA,DATA_ENTREGA)
    VALUES('$op','$cliente','$pedido','$insp_q','$revestimento','$data_entrada','$data_entrega')");

    header("location: /qualidade/inspF/cad_monitoramento_atalho.php?id=$op");
}


?>