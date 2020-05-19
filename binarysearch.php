<?php
  $val = 10;
  $arr_sort = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
  $lower = 0;
  $upper = count($arr_sort) - 1;
  
  while($lower <= $upper)
  {
    if($arr_sort[($lower + $upper) / 2] == $val)
    {
      echo "Hasil pencarian binary search adalah " . $val;
      return;
    }
    else if ($arr_sort[($lower + $upper) / 2] < $val)
    {
      $lower = (int)(($lower + $upper) / 2 + 1);
    }
    else if ($arr_sort[($lower + $upper) / 2] > $val)
    {
      $upper = (int)(($lower + $upper) / 2 - 1);
    }
  }
  
  echo "Not found";
?>