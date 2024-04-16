<?php

  // Creo la funzione per estrarre casualmente un elemento da uno degli array 

  function estrazioneCasuale($array){
    $indice_casuale = rand(0, count($array) - 1);
    return $array[$indice_casuale];
  }

?>