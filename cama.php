<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aluno</title>
    <link rel="stylesheet" href="formata.css">
</head>
<body>
    <header><h1>Cadastro de Material</h1></header>
    <main>
        <form action="cama.php" method="POST">
        <table>
            <tr><td>Tipo:</td><td><select name="tipo">
                    <option value="">Selecione</option>
                    <option value="livro">Livro</option>
                    <option value="revista">Revista</option>
                    <option value="jornal">Jornal</option>
                    <option value="outro">Outro</option>
                    </select></td></tr>
            <tr><td>Título:</td><td><input type="text" name="titulo"></td></tr>
            <tr><td>Autor:</td><td><input type="text" name="autor"></td></tr>
            <tr><td>Tema:</td><td><input type="text" name="tema"></td></tr>
            <tr><td>Outro:</td><td><input type="text" name="outro"></td></tr>
            <tr><td>Status:</td><td><select name="status">
                    <option value="0">Selecione</option>
                    <option value="Livre">Livre</option>
                    <option value="Empretado">Emprestado</option>
                    <option value="Retido">Retido</option>
                   
                    </select></td></tr>
            <tr><td><input type="reset" value="Apagar"></td>
            <td><input type="submit" value="Cadastrar"></td></tr>
        </table>
        </form>
    <?php
       
        if(isset($_POST["tipo"])){
            $tipo = $_POST["tipo"];
        }
        else{
            $tipo = null;
        }

        if(isset($_POST["titulo"])){
            $titulo = $_POST["titulo"];
        }
        else{
            $titulo = null;
        }

        if(isset($_POST["autor"])){
            $autor = $_POST["autor"];
        }
        else{
            $autor = null;
        }

        if(isset($_POST["tema"])){
            $tema = $_POST["tema"];
        }
        else{
            $tema = null;
        }

        if(isset($_POST["outro"])){
            $outro = $_POST["outro"];
        }
        else{
            $outro = null;
        }

        if(isset($_POST["status"])){
            $status = $_POST["status"];
        }
        else{
            $status = null;
        }

        if($titulo != null){
            include_once("conecta.php");
            $sql = "INSERT INTO material (codmat, tipomat, titulomat, autormat, temamat, outromat, statusmat) VALUES (' ', '$tipo', '$titulo', '$autor', '$tema', '$outro', '$status')";
            if($conn->query($sql) === TRUE){
                echo"<p>Cadastrado com sucesso!</p>"; 
            }
            else{
                echo"Erro:".$sql."<br>".$conn->error;
            }
        }

    ?>
    </main>
    
</body>
</html>