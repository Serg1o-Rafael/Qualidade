<?php 
    include("C:/xampp/htdocs/qualidade/conexao.php");

   

    if(!empty($_GET['search']))
    {
        
      $data=$_GET['search'];
     $sql= mysqli_query($mysqli, "SELECT * FROM retrabalho WHERE ID_OP LIKE '%$data%' or OP LIKE '%$data%' or QUANT_TOTAL LIKE '%$data%' ORDER BY ID_MATERIAL DESC");
     }
     else
     {
    $sql= mysqli_query($mysqli, "SELECT * FROM retrabalho ORDER BY ID_OP DESC");
     }


?>