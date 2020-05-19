# Desain-dan-Analisis-Algoritma
Contoh penerapan penerapan kompleksitas Algoritma pada bahasa pemrograman PHP

Program ini dibuat menggunakan bahasa pemrograman PHP

1.	Binary Search

Script :
 
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


Output :

Hasil pencarian binary search adalah 10

 
2.	Mencari Nilai Terbesar

Script :

<?php
 
 error_reporting(0);
 $nilai = Array(2,4,1,12,20,14,45,62,90,12,16,17,16,34,32,31,10);         
 $jml=count($nilai);
 for($i=0; $i<=$jml-1; $i++)
 {
  $j=$i+1;
  if($nilai[$i]>=$nilai[$j])
   {
   $j=$nilai[$j]; 
   }else{
   $temp=$nilai[$j];
   if($nilai[j]>=$temp)
    {
     $maksimal=$nilai[$j];
    }else{
     $maksimal=$temp;
    }
   }
 }
 echo 'Nilai terbesar dari bilangan array 2,4,1,12,20,14,45,62,90,12,16,17,16,34,32,31, dan 10 adalah '.$maksimal ;
?>


Output :
 
Nilai terbesar dari bilangan array 2,4,1,12,20,14,45,62,90,12,16,17,16,34,32,31, dan 10 adalah 34




3.	Mencari rata-rata

Script :

<?php
/* Mendefinisikan Nilai
dan Jumlah Data */

$n1 = 34;
$n2 = 89;
$n3 = 55;
$n4 = 32;
$n5 = 89;
$n6 = 55;
$n7 = 36;
$n8 = 78;
// Proses Hitung
$jumlah = $n1 + $n2 + $n3 + $n4 + $n5 + $n6 + $n7 + $n8 ;
$hasil = $jumlah/8;
echo "Nilai rata-rata dari $n1, $n2, $n3, $n4, $n5, $n6, $n7, dan $n8 adalah " .$hasil ;
?>

 
Output :
 
Nilai rata-rata dari 34, 89, 55, 32, 89, 55, 36, dan 78 adalah 58.5




4.	Selection Sort

Script :

<?php

function selection_sort($data)
{
for($i=0; $i<count($data)-1; $i++) {
     $min = $i;
     for($j=$i+1; $j<count($data); $j++) {
          if ($data[$j]<$data[$min]) {
               $min = $j;
          }
     }
    $data = swap_positions($data, $i, $min);
}
return $data;
}

function swap_positions($data1, $left, $right) {
     $backup_old_data_right_value = $data1[$right];
     $data1[$right] = $data1[$left];
     $data1[$left] = $backup_old_data_right_value;
     return $data1;
}
$my_array = array(3, 0, 2, 5, -1, 4, 1);
echo "Inputan Array :\n";
echo implode(', ',$my_array ); 

?> <br>

<?php

echo "\nArray yang Sudah Diurut :\n";
echo implode(', ',selection_sort($my_array)). PHP_EOL;
?>


Output :
 
Inputan Array : 3, 0, 2, 5, -1, 4, 1
Array yang Sudah Diurut : -1, 0, 1, 2, 3, 4, 5




5.	Sequential Search

Script :


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


Output :
 
Nilai yang diinput adalah 1,2,3,3.14,5,4,6,9,8
Nilai yang dicari adalah 12
Nilai 12 tidak ditemukan di dalam list!
