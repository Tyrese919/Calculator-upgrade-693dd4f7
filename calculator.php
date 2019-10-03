<?php

echo "Welke wil je gerbuiken (+,-,%)?".PHP_EOL;
$som = readline();
if ($som == "+" || $som == "-" || $som == "%") {

  echo "Wat woord je eerste getal?".PHP_EOL;
  $getal1 = readline();

  if (is_numeric($getal1)) {

    echo "Wat woord je tweede getal?".PHP_EOL;
    $getal2 = readline();

    if (is_numeric($getal2)) {

      if ($som == "+") {
        echo $getal1 + $getal2;
      }

      if ($som == "-") {
        echo $getal1 - $getal2;
      }

      if ($som == "%") {
        echo $getal1 % $getal2;
      }
    }
    else {
      echo "Dit klopt niet";
      exit;
    }
  }
  }
  else {
    echo "Dit klopt niet";
    exit;
  }
