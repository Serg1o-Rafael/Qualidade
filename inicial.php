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
    

  
    <button type="btn">Pesquisar</button> <br><br>
</div>

    <?php include("config/index/tabela.php")?>
    <style>
        h1{text-align: center; color: white;}
        
        </style>
    <h1> Monitoramento (Inspeção Final) </h1>
   
    <div class="m-5">
    <table class="table text-white table-bg">
            <thead>
                <tr>
                <th scope="col">OP</th>
                <th scope="col">LOCAL</th>
                <th scope="col">CALIBRAÇÃO</th>
                <th scope="col">VISUAL</th>
                <th scope="col">QUANT_TOTAL</th>
                <th scope="col">SOBRA</th>
                <th scope="col">RELATORIO_DIM</th>
                <th scope="col">SNQC</th>

                <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while($status = mysqli_fetch_assoc($sql)){

                        echo "<tr>";
                        echo "<td>".$status["OP"]."</td>";
                        echo "<td>".$status["LOCAL"]."</td>";
                        echo "<td>".$status["CALIBRACAO"]."</td>";
                        echo "<td>".$status["VISUAL"]."</td>";
                        echo "<td>".$status["QUANT_TOTAL"]."</td>";
                        echo "<td>".$status["SOBRA"]."</td>";
                        echo "<td>".$status["RELATORIO_DIM"]."</td>";
                        echo "<td>".$status["SNQC"]."</td>";




                     
                        echo "<td>
                        <a class = 'btn btn-primary' href='editStatus.php?id=$status[OP]'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
  <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325'/>
</svg> </td>";
                    }


                ?>
            </tbody>
</table>
</div>
</body>
</html>