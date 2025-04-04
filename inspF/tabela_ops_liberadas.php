<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/qualidade/css/inspf/body.css">
    <link rel="stylesheet" type="text/css" href="/qualidade/css/inspf/logo_forjafix.css">
    <link rel="stylesheet" type="text/css" href="/qualidade/css/inspf/btns.css">
    <title>Qualidade</title>
</head>

<body>
<h1>OP's Liberadas</h1>
    
<br><br>


<?php include("config/tabela_ops_liberadas/tabela.php"); ?>



<style>
        .box-search{
        display: flex;
        justify-content: center;
        gap: 0.1%;
    }
    </style>



<div class="logo">
    <img src="img/logo_forjafix.png"> <br>
    </div>

<div class="box-search">
        <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar" >
        <button onclick="searchData()" class="btn btn-primary">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
</svg>
</div><br>

<nav class="navbar bg-dark">
  <form class="container-fluid justify-content-start">
  <a href="cad_op.php"> <button class="btn btn-dark btn-outline" type="button">Cadastrar OP</button></a>
  <a href="tabela_ops.php"><button class="btn btn-dark btn-outline" type="button">OP's Cadastradas</button></a>
  <a href="tabela_retrabalho.php"><button class="btn btn-dark btn-outline" type="button">Retrabalho</button></a>
  <a href="tabela_monitoramento.php"><button class="btn btn-dark btn-outline" type="button">Monitoramento</button></a>
  
  </form>
</nav>
    <div class="m-3">
    <table class="table text-white table-bg">
            <thead>
                <tr>
                <th scope="col">OP </th>
                <th scope="col">QUANT_TOTAL</th>
                <th scope="col">SOBRA</th>
                <th scope="col">DATA</th>
                <th scope="col">...</th>

                </tr>
            </thead>
            <tbody>
                <?php 
                    while($dados = mysqli_fetch_assoc($sql)){

                        echo "<tr>";
                        echo "<td>".$dados["OP"]."</td>";
                        echo "<td>".$dados["QUANT_TOTAL"]."</td>";
                        echo "<td>".$dados["SOBRA"]."</td>";
                        echo "<td>".$dados["DATA"]."</td>";
                        

                        
                    }


                ?>
            </tbody>
</table>
</div>
</body>
<!-- SCRIPT DA PESQUISA-------->
<script>
    var search = document.getElementById('pesquisar');

    search.addEventListener("keydown", function(event){
        if (event.key === "Enter") {
            searchData();
        }
    });
    function searchData()
    {
        window.location = 'tabela_ops_liberadas.php?search='+search.value;
    }
</script>
</html>