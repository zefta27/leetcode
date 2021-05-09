<?php
class Solution
{
  function romanToInt($s)
  {
    $spl_s = str_split($s);
    $cur_val = 0;
    $arr_roman  = array(
      'I' => 1,
      'V' => 5,
      'X' => 10,
      'L' => 50,
      'C' => 100,
      'D' => 500,
      'M' => 1000,

    );

    for ($i  = 0; $i < count($spl_s); $i++) {
      $sel_string = $spl_s[$i];
      if ($i > 0 && $arr_roman[$sel_string] > $arr_roman[$spl_s[$i - 1]]) {

        $cur_val += $arr_roman[$sel_string] - 2 * $arr_roman[$spl_s[$i - 1]];
      } else {
        $cur_val += $arr_roman[$sel_string];
      }
    }
    return $cur_val;
  }
}
