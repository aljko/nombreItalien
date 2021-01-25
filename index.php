<?php

  include("enLettre.php");
  for ($i = 1; $i <= 10; $i++) {
    $a = rand(1, 9999);
    echo $a." ".enLettre($a);
    echo "</br>";
    $a = rand(1, 999);
    echo $a." ".enLettre($a);
    echo "</br>";
    $a = rand(1, 99);
    echo $a." ".enLettre($a);
    echo "</br>";
    $a = rand(1, 9);
    echo $a." ".enLettre($a);
    echo "</br>";
  }
