<?php

// PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array

include 'quotes.php';

// I have created a separate quotes file to keep this one simple

// Create the getRandomQuote function and name it getRandomQuote

function getRandomQuote($var) {

//  This is not required in the exercise, but I will first check that the parameter is an array

   if (is_array($var)) {

//  If it is, we can start by selecting a quote via a random key

     $key = mt_rand(0, 2);

//     This is the most important step in this exercise
//     We are going to create a new associative array from the random $quotes elements
//     This new array $package will have a consistent number of keys
//     With null values for non-mandatory keys that are unspecified
//     This will simplify the job of outputting HTML from printQuote()

     $package['quote'] = $var[$key]['quote'];

     $package['source'] = $var[$key]['source'];

//     The quote and source keys are mandatory in $quotes
//     We can add them to $package without checking that they are specified
//     However, citation and year are non-mandatory keys
//     If either is unspecified, we will describe their value as null

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

//  We need the value of the array to be returned,
//  so that we can assign it to a new variable in printQuote()

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
