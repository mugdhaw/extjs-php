<?php
function startPatternInverted($input) {
 
  for ($clm = 1; $clm <= $input; $clm++) {
      for ($row = 1; $row <= $clm; $row++) {
            echo "*";
       }
      echo "\n";
  }
  
}

startPatternInverted(6);

/*
Output ::

*
**
***
****
*****
******

*/
?>