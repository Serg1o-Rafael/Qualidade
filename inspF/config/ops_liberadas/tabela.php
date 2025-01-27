<?php 
    include("C:/xampp/htdocs/qualidade/conexao.php");

   

    if(!empty($_GET['search']))
    {
        
      $data=$_GET['search'];
     $sql= mysqli_query($mysqli, "SELECT * FROM ops_liberadas WHERE ID LIKE '%$data%' or OP LIKE '%$data%' or QUANT_TOTAL LIKE '%$data%' or SOBRA LIKE '%$data%' or DATA LIKE '%$data%' ORDER BY ID DESC");
     }
     else
     {
    $sql= mysqli_query($mysqli, "SELECT * FROM ops_liberadas ORDER BY ID DESC");
     }


?>