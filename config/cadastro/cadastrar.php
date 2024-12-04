<?php 

if(isset($_POST["salvar"])){

    include("C:/xampp/htdocs/qualidade/config/conexao.php");
    $op = $_POST["op"];
    $cliente = $_POST["cliente"];
    $pedido = $_POST["pedido"];
    $revestimento = $_POST["opcao2"];
    $insp_q = $_POST["opcao1"];
    $data_entrada = $_POST["data_entrada"];
    $data_entrega = $_POST["data_entrega"];



    $sql= mysqli_query($mysqli, "INSERT INTO info_material(OP,CLIENTE,PEDIDO,INSP_Q,REVESTIMENTO,DATA_ENTRADA,DATA_ENTREGA)
    VALUES('$op','$cliente','$pedido','$insp_q','$revestimento','$data_entrada','$data_entrega')");

    header("location: statusAtalho.php?id=$op");
}


?>