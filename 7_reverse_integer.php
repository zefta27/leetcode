<?php
class Solution
{

  function reverse($x)
  {
    $reverse_x = strrev($x);
    $split_reserve = str_split($reverse_x);
    if (
      $x == 0 || $reverse_x >= pow(2, 31) - 1 || $reverse_x <= pow(-2, 31)
    ) {
      $result = 0;
    } else {
      while (current($split_reserve) == 0) {

        array_shift($split_reserve);
      }


      if (end($split_reserve) == "-") {
        array_pop($split_reserve);
        array_unshift($split_reserve, "-");
      }
      $result = implode($split_reserve);
    }

    return  $result;
  }
}
