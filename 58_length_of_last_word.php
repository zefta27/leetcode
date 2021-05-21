<?
class Solution {

  /**
   * @param String $s
   * @return Integer
   */
  function lengthOfLastWord($s) {
      
  
      
      $exp = explode(" ", $s);
      if(count($exp)>0)
      {
              $res = 0;
              for($i=count($exp)-1;$i>=0;$i--)
              {
                  if($exp[$i]!="")
                  {
                      $str_split = str_split($exp[$i]);
                      $count_str = count($str_split);
                      $res  = $count_str;
                      break;
                  }
              }
              return $res;
       
      }
      else{
          if($s!=" ")
          {
               $str = str_split($exp[0]);
               $count_str = count($str);
              return $count_str;
          }else{
              return 0;
          }
          
          
      }
  }
}