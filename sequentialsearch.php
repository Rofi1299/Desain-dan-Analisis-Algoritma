<?php
  /**
   * Performs a sequential search using sentinel
   * and changes the array after the value is found
   *
   * @param array $arr
   * @param mixed $value
   */
  function sequential_search(&$arr, $value)
  {
    $arr[] = $value;
    $index = 0;
   
    while ($arr[$index++] != $value);
   
    if ($index < count($arr)) {
      array_unshift($arr, $arr[$index-1]);
      unset($arr[$index]);
      unset($arr[count($arr)+1]);
   
      return true;
    }
   
    return false;
  }

  $arr = array(1, 2, 3, 3.14, 5, 4, 6, 9, 8);

  $x = 12;
   
  if (sequential_search($arr, $x)) {

    echo "Nilai yang diinput adalah 1,2,3,3.14,5,4,6,9,8 <br>";
    echo "Nilai yang dicari adalah $x <br>";
    echo "Nilai $x ditemukan!";
  } else {
    echo "Nilai yang diinput adalah 1,2,3,3.14,5,4,6,9,8 <br>";
    echo "Nilai yang dicari adalah $x <br>";
    echo "Nilai $x tidak ditemukan di dalam list! <br>";
  }
?>