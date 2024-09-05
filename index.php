<?php session_start() ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha biblioteca</title>
    <link rel="stylesheet" href="formata.css">
</head>
<body>
<header> <h1> Minha Biblioteca</h1></header>
    <main>
<?php 

if(!isset($_SESSION['login'])){
    if(isset($_POST['acao'])){
        $login = 'James';
        $senha = '2444';
        $loginForm = $_POST['login'];
        $senhaForm = $_POST['senha'];
            if($login == $loginForm and $senha == $senhaForm){
                $_SESSION['login'] = $login;
                header('Location: index.php');  
                }
            else{
                echo 'Dados inválidos.';
                }
    }
    include('login.php');
}
else{
    if(isset($_GET['logout'])){
        unset($_SESSION['login']);
        session_destroy();
        header('Location: index.php');
    }
    include('home.php');
 }
?>
</main>
</body>
</html>