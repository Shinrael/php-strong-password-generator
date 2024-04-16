<?php
  // I miei array

  $lettere_minuscole = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
  $lettere_maiuscole = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
  $numeri = ['0','1','2','3','4','5','6','7','8','9'];
  $simboli = ['!','?','&','%','$','<','>','^','+','-','*','/','(',')','[',']','{','}','@','#','_','='];
  $pswrd_generata = [];
  
  // Unisco gli array tramite array_merge

  $unione_array = array_merge($lettere_minuscole, $lettere_maiuscole, $numeri, $simboli);
  
  // Tramite il require prendo la mia funzione dal file esterno

  require_once __DIR__ . '/data/functions.php';

  // Per assicurarmi che la mia password abbia almeno uno degli elementi da ciascun array pusho dentro il mio array vuoto almeno un elemento da ciascun array 

  array_push($pswrd_generata, estrazioneCasuale($lettere_minuscole));
  array_push($pswrd_generata, estrazioneCasuale($lettere_maiuscole));
  array_push($pswrd_generata, estrazioneCasuale($numeri));
  array_push($pswrd_generata, estrazioneCasuale($simboli));

  // Creo un ciclo for partendo da 4, avendo già i primi 4 elementi e ciclo fino al numero scelto dall'utente per la lunghezza della password, dopodichè pusho brutalmente sempre dentro il solito array inizialmente vuoto 

   for ($i=4; $i < $_GET['lunghezzaPassword']; $i++) { 
       $el_casuale = estrazioneCasuale($unione_array);
       array_push($pswrd_generata, $el_casuale);    
   }

  //  Prima mischio tutti gli elementi dentro l'array con shuffle
   shuffle($pswrd_generata);

  //  E dopo li unisco per andare a formare la password

   $pswrd_generata_unita = implode('', $pswrd_generata);
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
      <?php if (isset($_GET['lunghezzaPassword'])): ?>
      <p class="pt-2"> <?php echo $pswrd_generata_unita ?> </p> 
      <?php endif; ?>     
    </div>
    <div class="container-parametri">
      <form class="text-center" action="index.php" method="GET">
        <div class="mb-3 mt-5 d-flex flex-column align-items-center">
          <label for="lunghezzaPassword" class="form-label">Lunghezza Password</label>
          <input type="number" class="form-control" id="lunghezzaPassword" name="lunghezzaPassword" min="4">
        </div>
        <button type="submit" class="btn btn-primary">Genera</button>
      </form>
    </div>
  </div>

<script src="js/script.js"></script>
</body>
</html>