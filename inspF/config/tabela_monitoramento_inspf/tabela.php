<?php 
    include("C:/xampp/htdocs/qualidade/conexao.php");

   

    if(!empty($_GET['search']))
    {
        
      $data=$_GET['search'];
     $sql= mysqli_query($mysqli, "SELECT * FROM monitoramento WHERE ID_OP LIKE '%$data%' or OP LIKE '%$data%' or LOCAL LIKE '%$data%' or QUANT_TOTAL LIKE '%$data%' or SOBRA LIKE '%$data%' ORDER BY ID_OP DESC");
     }
     else
     {
    $sql= mysqli_query($mysqli, "SELECT * FROM monitoramento ORDER BY ID_OP DESC");
     }


?>