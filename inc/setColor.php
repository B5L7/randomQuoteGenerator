<?php

//I have assumed that we should manipulate background colour using PHP
//Consequently I have created an array of colours
//and a function that picks a random colour

  $color = [
    'Black',
    'Grey',
    'Green',
    'Aquamarine',
    'CadetBlue',
    'DarkCyan',
    'DarkGreen',
    'DarkSeaGreen',
    'DarkSlateGray',
    'ForestGreen',
    'LightSeaGreen',
    'MediumSeaGreen',
  ];

function setColor($var) {

  $key = mt_rand(0, 11);

  $style = " style=\"background-color: $var[$key];\" ";

  return $style;

}

echo setColor($color);

?>
