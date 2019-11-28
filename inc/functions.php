<?php

// PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array

include 'quotes.php';

// Create the getRandomQuote function and name it getRandomQuote

function getRandomQuote($var) {

   if (is_array($var)) {

     $key = mt_rand(0, 2);

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


// Create the printQuote funtion and name it printQuote

function printQuote($var) {

  $package = getRandomQuote($var);

//  We now have a standardised array of quote elements
//  The exercise requires us to create a string and then concatenate the appropriate quote elements

  $output = '<p class="quote">' . $package['quote'] . '</p>';

  $output .= '<p class="source">' . $package['source'];

//  Before we can close the <p> we need to check whether the quote has citation and/or year elements

  if ($package['citation']) {
    $output .= '<span class="citation">' . $package['citation'] . '</span>';
  }

  if ($package['year']) {
    $output .= '<span class="year">' . $package['year'] . '</span>';
  }

  $output .= '</p>';

//  The string is now complete. We only need to print it to the HTML doc

  echo $output;

}

printQuote($quotes);


  ?>
