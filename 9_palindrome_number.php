<?php
class Solution
{

  function isPalindrome($x)
  {
    $reverse_x = strrev($x);
    if ($x != $reverse_x) {
      return false;
    } else {
      return true;
    }
  }
}
