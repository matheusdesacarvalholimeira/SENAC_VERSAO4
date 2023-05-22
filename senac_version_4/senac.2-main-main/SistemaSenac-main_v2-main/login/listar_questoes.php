<?php

echo "listei todas as questoes";

if(isset($_POST['lista_questoes'])){
    header('location: professores.php');
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="submit" class="apare btn btn-primary" value="Liste de questôes" name="lista_questoes">
    </form>
</body>
</html>