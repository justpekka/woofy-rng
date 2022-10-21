<?php
  function randomizer($dice_type) {
    $value_min = 1;
    $value_max = $dice_type;

    return rand($value_min, $value_max);
  };

  $result = array();
  
  if( $_GET ) : 
    for($i=0; $i < $_GET['total-dice']; $i++) {
      $result[$i] = randomizer($_GET['dice-type']);
    };
  endif;

  print_r($result);
?>