<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/qualidade/css/inspf/body.css">
    <link rel="stylesheet" type="text/css" href="/qualidade/css/inspf/logo_forjafix.css">

    <title>Qualidade</title>

</head>
<body>
<div class="botoes">
    

  

</div>

    <?php include("config/tabela_ops_inspf/tabela.php")?>
        
      
    <h1> OP's Cadastradas (Inspeção Final)</h1>
   
     
<br><br>

    <style>

.box-search{display: flex; justify-content: center; gap: 0.1%;}

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
        </button>
        </div> <br>

        <nav class="navbar bg-dark">
  <form class="container-fluid justify-content-start">
  <a href="cad_op.php"> <button class="btn btn-dark btn-outline" type="button">Cadastrar OP </button> </a>
  <a href="tabela_monitoramento.php"><button class="btn btn-dark btn-outline" type="button">Monitoramento</button></a>
  <a href="tabela_ops_liberadas.php"><button class="btn btn-dark btn-outline" type="button">OP's Liberadas</button></a>
  <a href="tabela_retrabalho.php"><button class="btn btn-dark btn-outline" type="button">Retrabalho</button></a>

  </form>
</nav>

    <div class="m-3">
    <table class="table text-white table-bg">
            <thead>
                <tr>
                <th scope="col">OP </th>
                <th scope="col">LT</th>
                <th scope="col">CLIENTE</th>
                <th scope="col">PEDIDO</th>
                <th scope="col">REVESTIMENTO/TIPO</th>
                <th scope="col">MATERIAL</th>
                <th scope="col">ENTRADA_SETOR</th>
                <th scope="col">DATA_ENTREGA</th>
                <th scope="col">...</th>

                </tr>
            </thead>
            <tbody>
                <?php 
                    while($dados = mysqli_fetch_assoc($sql)){

                        echo "<tr>";
                        echo "<td>".$dados["OP"]."</td>";
                        echo "<td>".$dados["LOTE"]."</td>";
                        echo "<td>".$dados["CLIENTE"]."</td>";
                        echo "<td>".$dados["PEDIDO"]."</td>";
                        echo "<td>".$dados["REVESTIMENTO"]."</td>";
                        echo "<td>".$dados["MATERIAL"]."</td>";
                        echo "<td>".$dados["DATA_ENTRADA"]."</td>";
                        echo "<td>".$dados["DATA_ENTREGA"]."</td>";
                        
                        

                   
                        
                        echo "<td>
                        <a class = 'btn btn-primary' href='edit_tabela_op.php?id=$dados[ID]'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                        <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325'/>
                        </svg>
                        </a>
                        <a class = 'btn btn-danger' href='config/edit_op_inspf/delete_material.php?id=$dados[ID]'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                        <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0'/>
                        </svg>
                        </a>
                            </td>";
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
        window.location = 'tabela_ops.php?search='+search.value;
    }
</script>
</html>