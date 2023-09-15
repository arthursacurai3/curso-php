<?php
  $arr1 = [1,2,3,4,5];
  $arr2 = [2,4,5, 'teste'];
  
  print_r(array_diff($arr1, $arr2));
  print_r(array_diff($arr2, $arr1));

?>