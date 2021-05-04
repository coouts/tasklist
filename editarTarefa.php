<?php
 
    require("./database/conexao.php");
 
    if(isset($_GET["tarefaId"])){
        //aq ele está recebendo o id tarefa
 
        $tarefaId = $_GET["tarefaId"];
        
        $sqlConsulta = "SELECT * FROM tbl_task WHERE id = $tarefaId";
        
        //consulta
 
        $resultado = mysqli_query($conexao, $sqlConsulta);
 
        $tarefa = mysqli_fetch_array($resultado);
        if(!$tarefa) {
            die("Impossível editar, tarefa não foi encontrada");
        }
 
        
    }
 
    //colocar descrição da tarefa dentro do value
?>
 
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tarefa</title>
    <link rel="stylesheet" href="styles-global.css" />
</head>
 
<body>
 
    <div class="content">
        <h1>Editar Tarefa</h1>
        <form method="POST" action="taskActions.php">
            <div class="input-group">
                <input type="hidden" name="acao" value="editar"/>
                <label for="tarefa">Descrição da tarefa</label>
                <input type="hidden" value="<?=$tarefa["id"]?>" name="tarefaId">
                <input type="text" value="<?=$tarefa["descricao"]?>" name="tarefa" id="tarefa" placeholder="Digite a tarefa" required/>
            </div>
            <button>Editar</button>
        </form>
    </div>
</body>
</html>
