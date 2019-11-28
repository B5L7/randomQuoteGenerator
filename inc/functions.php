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

     $package['quote'] = $var[$key]['quote'];

     $package['source'] = $var[$key]['source'];

        if (isset($var[$key]['citation'])) {
        $package['citation'] = $var[$key]['citation'];
      } else {
          $package['citation'] = null;
        }

        if (isset($var[$key]['year'])){
        $package['year'] = $var[$key]['year'];
      } else {
          $package['year'] = null;
        }

   }

  return $package;

}

function testing($var) {
  $package = getRandomQuote($var);
  var_dump($package);
}

echo '<pre>';
testing($quotes);
echo '<pre>';

// Create the printQuote funtion and name it printQuote


  ?>
