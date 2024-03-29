<?php

// Target grade: Exceeds Expectations

include 'quotes.php';

// In the interests of simplicity, I have created a separate quotes file.

function getRandomQuote($var) {

//  This is not required in the exercise, but I will first check that the parameter is an array

   if (is_array($var)) {

//  If it is, we can start by selecting a quote via a random key

     $key = mt_rand(0, 7);

//     This is the most important step in this exercise
//     We are going to create a new associative array from the random $quotes elements
//     This new array, $package, will have a consistent number of keys
//     With null values for non-mandatory keys that are unspecified
//     This will simplify the job of outputting HTML in printQuote()

     $package['quote'] = $var[$key]['quote'];

     $package['source'] = $var[$key]['source'];

//     The quote and source keys are mandatory in $quotes
//     We can add them to $package without checking that they are specified
//     However, citation, year and tag are non-mandatory keys
//     If unspecified, we will describe their value as null

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

     if (isset($var[$key]['tag'])){
        $package['tag'] = $var[$key]['tag'];
      } else {
          $package['tag'] = null;
        }

   }

//  We need the value of the array to be returned,
//  so that we can assign it to a new variable in printQuote()

  return $package;

}

function printQuote($var) {

  $package = getRandomQuote($var);

//  We now have a standardised array of quote elements within the function scope

//  We are required to create a string and then concatenate the appropriate quote elements

  $output = '<p class="quote">' . $package['quote'] . '</p>';

  $output .= '<p class="source">' . $package['source'];

//  Before we can close the <p> we need to check whether the quote has citation/year/tag elements

  if ($package['citation']) {
    $output .= '<span class="citation">' . $package['citation'] . '</span>';
  }

  if ($package['year']) {
    $output .= '<span class="year">' . $package['year'] . '</span>';
  }

  $output .= '</p>';

  if ($package['tag']) {
    $output .= '<p class="source">' . $package['tag'] . '</p>';
  }



//  The string is now complete. We only need to print it to the HTML doc

  echo $output;

}

printQuote($quotes);


  ?>
