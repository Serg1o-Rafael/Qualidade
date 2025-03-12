<?php 
    include("C:/xampp/htdocs/qualidade/conexao.php");

    if(!empty($_GET['search']))
    {
        
      $data=$_GET['search'];
     $sql= mysqli_query($mysqli, "SELECT * FROM ops WHERE ID LIKE '%$data%' or OP LIKE '%$data%' or CLIENTE LIKE '%$data%' or PEDIDO LIKE '%$data%' or REVESTIMENTO LIKE '%$data%' or MATERIAL LIKE '%$data%' or DATA_ENTRADA LIKE '%$data%' or DATA_ENTREGA LIKE '%$data%' ORDER BY ID DESC");
     }
     else
     {
    $sql= mysqli_query($mysqli, "SELECT * FROM ops ORDER BY ID DESC");
     }


    
?>  