<?php 
    include("C:/xampp/htdocs/qualidade/config/conexao.php");

   

    if(!empty($_GET['search']))
    {
        
      $data=$_GET['search'];
     $sql= mysqli_query($mysqli, "SELECT * FROM status WHERE ID_MATERIAL LIKE '%$data%' or OP LIKE '%$data%' or LOCAL LIKE '%$data%' or QUANT_TOTAL LIKE '%$data%' or SOBRA LIKE '%$data%' or CALIBRACAO LIKE '%$data%' or VISUAL LIKE '%$data%' or RELATORIO_DIM LIKE '%$data%' or SNQC LIKE '%$data%' ORDER BY ID_MATERIAL DESC");
     }
     else
     {
    $sql= mysqli_query($mysqli, "SELECT * FROM status ORDER BY ID_MATERIAL DESC");
     }


?>