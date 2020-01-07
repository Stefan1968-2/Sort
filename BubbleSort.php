<?php
  function bubbleSort(&$array) {
    for ($index1 = count($array) - 1; $index1 > 0 ; --$index1) {
      for ($index2 = 0; $index2 < $index1; ++$index2) {
        if ($array[$index2] > $array[$index2 + 1]) {
          $temp = $array[$index2];
          $array[$index2] = $array[$index2 + 1];
          $array[$index2 + 1] = $temp;
        }
      }
    }
  }
?>
