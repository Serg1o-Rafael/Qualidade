<?php 

if(isset($_POST["salvar"])){

    include("C:/xampp/htdocs/qualidade/config/conexao.php");
    $op = $_POST["op"];
    $cliente = $_POST["cliente"];
    $tipo_insp = $_POST["tipo_insp"];
    $pedido = $_POST["pedido"];
    $quant = $_POST["quant"];
    $data_entrega = $_POST["data_entrega"];
    $snqc = $_POST["snqc"];

    $sql= mysqli_query($mysqli, "INSERT INTO info_material(OP,CLIENTE,TIPO_INSP,PEDIDO,QUANT,DATA_ENTREGA,SNQC)
    VALUES('$op','$cliente','$tipo_insp','$pedido','$quant','$data_entrega','$snqc')");
    
    header("location: index.php");
}


?>