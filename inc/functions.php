<?php

// PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array

include 'quotes.php';

// Create the getRandomQuote function and name it getRandomQuote

function getRandomQuote($var) {

   if (is_array($var)) {
     $key = mt_rand(0, 2);
     echo $key . '<br/>';

     $quote = $var[$key]['quote'];
     var_dump($quote);

     $source = $var[$key]['source'];
     var_dump($source);


        if (isset($var[$key]['citation'])) {
        $citation = $var[$key]['citation'];
          var_dump($citation);

      }

        if (isset($var[$key]['year'])){
        $year = $var[$key]['year'];
          var_dump($year);

      }

   }
}

getRandomQuote($quotes);


// Create the printQuote funtion and name it printQuote


  ?>
