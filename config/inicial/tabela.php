<?php 
    include("C:/xampp/htdocs/qualidade/config/conexao.php");

    $sql= mysqli_query($mysqli, "SELECT * FROM status ORDER BY ID_MATERIAL DESC");
?>