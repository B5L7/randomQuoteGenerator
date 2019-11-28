<?php

// PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array

include 'quotes.php';

//echo '<pre>';
//var_dump($quotes);
//echo '</pre>';

// Create the getRandomQuote function and name it getRandomQuote

function getRandomQuote($var) {

   if (is_array($var)) {
     $key = mt_rand(1, 3);
     echo $key;
   }
}

getRandomQuote($quotes);





        // if ($var[$key]['citation']) {
     //   echo "This quote DOES have a citation";
//   } else {
     //   echo "No citation";
     // }


    // check that the variable is an array
    // if it is, create a logic branch that returns a quote from the array
    // to do this, create a random number
    // for the time being, let's limit the range of random to the number of keys in the quotes array
    // return the value for the random key


    // What should we do with citation and year?
    // Also, does the index file expect the quote and citation to be returned independently?
    // If so, what is the best way to hand this data to the printQuote function?



// Create the printQuote funtion and name it printQuote


  ?>
