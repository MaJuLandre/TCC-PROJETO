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
    <header><h1>Update de Material</h1></header>
    
    <main>
        <form action="upma1.php" method="POST">
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
            $sql = "SELECT codmat, tipomat, titulomat, autormat, temamat, outromat, statusmat FROM material WHERE codmat = '$cod%'";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $tipo = $row["tipomat"];
                    $titu = $row["titulomat"];
                    $autor = $row["autormat"];
                    $tema = $row["temamat"];
                    $outro = $row["outromat"];  
                    $status = $row["statusmat"];                      
            }}
            else{
                echo"<p>Nada encontrado! </p>";
            }
                echo"
            <br><br><br>
            <form action='upma2.php' method='POST'>
        <table>
            <tr><td>Código:</td><td>$cod<input type='hidden' name='cod' value='$cod'></td></tr>
            <tr><td>Tipo:</td><td><select name='tipo'>
                    <option value='$tipo'>'$tipo'</option>
                    <option value='livro'>Livro</option>
                    <option value='revista'>Revista</option>
                    <option value='jornal'>Jornal</option>
                    <option value='outro'>Outro</option>
                    </select></td></tr>
            <tr><td>Título:</td><td><input type='text' name='titu' value='$titu'></td></tr>
            <tr><td>Autor:</td><td><input type='text' name='autor' value='$autor'></td></tr>
            <tr><td>Tema:</td><td><input type='text' name='tema' value='$tema'></td></tr>
            <tr><td>Outro:</td><td><input type='text' name='outro' value='$outro'></td></tr>
            <tr><td>Status:</td><td><select name='status'>
                    <option value='$status'>'$status'</option>
                    <option value='Livre'>Livre</option>
                    <option value='Empretado'>Emprestado</option>
                    <option value='Retido'>Retido</option>
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