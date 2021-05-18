<?
class Solution
{

  /**
   * @param String $s
   * @return Integer
   */
  function lengthOfLastWord($s)
  {



    $exp = explode(" ", $s);
    if (count($exp) > 0) {
      $max = 0;
      for ($i = 0; $i < count($exp); $i++) {
        if ($exp[$i] != "") {
          $str_split = str_split($exp[$i]);
          $count_str = count($str_split);
          if ($count_str > $max) {
            $max = $count_str;
          }
          if ($i == count($exp) - 1) {
            $max = $count_str;
          }
        }
      }
      return $max;
    } else {
      if ($s != " ") {
        $str = str_split($exp[0]);
        $count_str = count($str);
        return $count_str;
      } else {
        return 0;
      }
    }
  }
}
