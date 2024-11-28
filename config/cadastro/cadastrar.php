<?php 

if(isset($_POST["salvar"])){

    include("C:/xampp/htdocs/qualidade/config/conexao.php");
    $op = $_POST["op"];
    $cliente = $_POST["cliente"];
    $pedido = $_POST["pedido"];
    $data_entrega = $_POST["data_entrega"];
    $revestimento = $_POST["opcao2"];
    $insp_q = $_POST["opcao1"];

    $sql= mysqli_query($mysqli, "INSERT INTO info_material(OP,CLIENTE,PEDIDO,DATA_ENTREGA,INSP_Q,REVESTIMENTO)
    VALUES('$op','$cliente','$pedido','$data_entrega','$insp_q','$revestimento')");
    
    header("location: inicial.php");
}


?>