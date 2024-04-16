<?php

  $lettere_minuscole = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
  $lettere_maiuscole = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
  $numeri = ['0','1','2','3','4','5','6','7','8','9'];
  $simboli = ['!','?','&','%','$','<','>','^','+','-','*','/','(',')','[',']','{','}','@','#','_','='];
  
  function estrazioneCasuale($array){
    $indice_casuale = rand(0, count($array) - 1);
    return $array[$indice_casuale];
  }

   
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-strong-password-generator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>  
  <div class="container mt-5 d-flex justify-content-center flex-column align-items-center ">
    <h1 class="text-danger">STRONG PASSWORD GENERATOR</h1>
    <h2>Genera una password sicura!</h2>
    <div class="generated-password mt-5 text-center border-df">
      <p class="pt-2"></p>      
    </div>
    <div class="container-parametri">
      <form class="text-center" action="index.php" method="GET">
        <div class="mb-3 mt-5 d-flex flex-column align-items-center">
          <label for="lunghezzaPassword" class="form-label">Lunghezza Password</label>
          <input type="number" class="form-control" id="lunghezzaPassword" name="lunghezzaPassword" value="">
        </div>
        <button type="submit" class="btn btn-primary">Genera</button>
      </form>
    </div>
  </div>

<script src="js/script.js"></script>
</body>
</html>