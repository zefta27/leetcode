<?php
class Solution
{


  function twoSum($nums, $target)
  {
    $temp = 0;
    $res = [];
    for ($i = 0; $i < count($nums) - 1; $i++) {
      $f_number = $nums[$i];
      $f_index = $i;
      for ($j = $i + 1; $j < count($nums); $j++) {
        $s_number = $nums[$j];
        $s_index = $j;
        $temp = $f_number + $s_number;
        if ($temp == $target) {
          $res[0] = $f_index;
          $res[1] = $s_index;
        }
      }
    }
    return $res;
  }
}
