<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Qualidade</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<div class="botoes">
    <a href="cadastro.php"><button type="btn" >Cadastrar Material</button></a>
    
    <a href="processo.php"><button type="btn" >Inserir Processo</button></a>
  
    <button type="btn">Pesquisar</button> <br><br>
</div>

    <?php include("config/index/tabela.php")?>
    <style>
        h1{text-align: center; color: white;}
        </style>
    <h1> Tabela de Processos </h1>
   
    <div class="m-5">
    <table class="table text-white table-bg">
            <thead>
                <tr>
                <th scope="col">OP</th>
                <th scope="col">SNQC</th>
                <th scope="col">RELATORIO_DIM</th>
                <th scope="col">CALIBRAÇÃO</th>
                <th scope="col">VISUAL</th>
                <th scope="col">QUANT_APROVADA</th>
                <th scope="col">SOBRA</th>
                <th scope="col">LOCAL</th>
                <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while($status = mysqli_fetch_assoc($sql)){

                        echo "<tr>";
                        echo "<td>".$status["OP"]."</td>";
                        echo "<td>".$status["SNQC"]."</td>";
                        echo "<td>".$status["RELATORIO_DIM"]."</td>";
                        echo "<td>".$status["CALIBRACAO"]."</td>";
                        echo "<td>".$status["VISUAL"]."</td>";
                        echo "<td>".$status["QUANT_APROVADA"]."</td>";
                        echo "<td>".$status["SOBRA"]."</td>";
                        echo "<td>".$status["LOCAL"]."</td>";
                    }


                ?>
            </tbody>
</table>
</div>
</body>
</html>