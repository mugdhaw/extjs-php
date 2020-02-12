<?php

function startPatternInverted($input) {
  $space = 0;
  for ($clm = $input; $clm > 0; $clm--) {
      for ($row = 1; $row <= $clm; $row++) {
           echo "*";
       }
      echo "\n";
      $space++;
   }
}

startPatternInverted(5);

/*
 Output : 
 
*****
****
***
**
*


*/
?>