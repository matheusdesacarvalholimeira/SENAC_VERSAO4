<?php

if(isset($_POST['lista_questoes'])){
  header('location: listar_questoes.php');
}



?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Professor</title>
</head>
<body>

  
  
    <nav class="navbar navbar-expand-sm " id="bgnav">
        <a class="navbar-brand" href="#">
        <img src="img/logo-senac.png" alt="logo" style="width:65px;" class="logoo">
        </a>
    </nav>
    <input type="submit" class="apare btn btn-primary" value="ADD Quetões">
    <form action="" method="post">
    <input type="submit" class="apare btn btn-primary" value="Liste de questôes" name="lista_questoes">
    </form>
    
    
  <div class="esconder">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title ">Quetoes</h5>
        <button type="submit" class="btn-close"></button>

        <!--o x para cancelar a quetao-->
      <!--  <button type="submit" class="btn-close" ></button>-->
       

      </div>
      <div class="numques">
        <label for="" class="quess">numero da questao: </label>
        <input type="number" class="quess2">
      </div>
      
      <div class="area_text">
        <textarea name="questao_in" id="questao_in" name="area_t"></textarea>
      </div>

      <div class="add_diff">
      <button type="submit" class="add_dif">ADD dificuldades</button>
      </div>
      <div class="niveis">
      <input type="radio" id="dificuldade" name="dificuldade" value="dif_1" class="dificul">
      <label for="" class="label_dif">dif 1</label>
      <input type="radio" id="dificuldade" name="dificuldade" value="dif_1" class="dificul">
      <label for="" class="label_dif">dif 2</label>
      <input type="radio" id="dificuldade" name="dificuldade" value="dif_1" class="dificul">
      <label for="" class="label_dif">dif 3</label>
      <input type="radio" id="dificuldade" name="dificuldade" value="dif_1" class="dificul">
      <label for="" class="label_dif">dif 4</label>
      <input type="radio" id="dificuldade" name="dificuldade" value="dif_1" class="dificul">
      <label for="" class="label_dif">dif 5</label>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>
<script src="scripts/script_professor.js"></script>
</body>
</html>