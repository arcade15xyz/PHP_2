<?php

  $names = array('John','Jack','Jill');
  $numbers = [1,2,3,4,5,6];

  function inspect($value) {
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
  }

  // inspect($names);
  // inspect($numbers);

  // print_r($names);
  
  // echo $names[2];
  // echo $numbers[3];

  //Add element to array
  $numbers[]= 100;
  $numbers[]= 101;
  $numbers[3]= 200;

  unset($numbers[3]);

  $numbers = array_values($numbers);

  inspect($numbers);

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Hello</h1>
</body>
</html>