<?php 
    include("C:/xampp/htdocs/qualidade/config/conexao.php");

    $sql= mysqli_query($mysqli, "SELECT * FROM info_material ORDER BY DATA_ENTREGA ASC");

    
?>  