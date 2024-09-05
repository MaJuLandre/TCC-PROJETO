<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Aluno</title>
    <link rel="stylesheet" href="formata.css">
</head>
<body>
    <header><h1>Update de aluno</h1></header>
    
    <main>
        <form action="upusu1.php" method="POST">
        <table>
            <tr><td>Matrícula:</td><td><input type="text" name="cod"></td></tr>
            <tr><td><input type="reset" value="Apagar"></td>
            <td><input type="submit" value="Consultar"></td></tr>
        </table>
        </form>
    <?php
        if(isset($_POST["cod"])){
            $cod = $_POST["cod"];
        }
        else{
            $cod = null;
        }

       
        if($cod != null){
            include_once("conecta.php");
            $sql = "SELECT codusu, tipousu, nomeusu, endusu, docusu, statususu FROM usu WHERE codusu = '$cod'";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                                       
                    $nome = $row["nomeusu"];
                    $tipo = $row["tipousu"];
                    $ende = $row["endusu"];
                    $doc = $row["docusu"]; 
                    $status = $row["statususu"];  
                    
                }
            }else{
                echo"<p>Nada encontrado! </p>";
            }

                echo"
            <br><br><br>
            <form action='upusu2.php' method='POST'>
        <table>
            <tr><td>Matrícula:</td><td>$cod<input type='hidden' name='cod' value='$cod'></td></tr>
            <tr><td>Nome:</td><td><input type='text' name='nome' value='$nome'></td></tr>
            <tr><td>Tipo:</td><td><select name='tipo'>
                    <option value='$tipo'>'$tipo'</option>
                    <option value='aluno'>Aluno</option>
                    <option value='prof'>Professor</option>
                    <option value='func'>Funcionário</option>
                    <option value='outro'>Outro</option>
                    </select></td></tr>
            <tr><td>Endereço:</td><td><input type='text' name='ende' value='$ende'></td></tr>
            <tr><td>Documento:</td><td><input type='text' name='doc' value='$doc'></td></tr>
            <tr><td>Status:</td><td><select name='status'>
                    <option value='$status'>'$status'</option>
                    <option value='0'>Livre</option>
                    <option value='1'>1 Emprestimo</option>
                    <option value='2'>2 Emprestimos</option>
                    <option value='3'>Suspenso</option>
                    </select></td></tr>
            <tr><td><input type='reset' value='Apagar'></td>
            <td><input type='submit' value='Atualizar'></td></tr>
        </table>
        </form>
            ";
            }else{
                echo"<p>Nada encontrado! </p>";
            }

            
            
        

       

    ?>
    </main>
    
</body>
</html>