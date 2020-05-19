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