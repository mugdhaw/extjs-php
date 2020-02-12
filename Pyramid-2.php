<?php
function startPatternInverted($input) {
 
  for ($clm = 1; $clm <= $input; $clm++) {
      
      for ($row = $input; $row >= 1; $row--) {
            
              if ($row <= $clm)   {
                echo "*";              
              } else {              
                echo " ";
             }           
       }
      echo "\n";
  } 
}
startPatternInverted(5);

/*

Output ::

    *
   **
  ***
 ****
*****


*/
?>