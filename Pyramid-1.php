function startPatternInverted($input) {
 
  for ($clm = 1; $clm <= $input; $clm++) {
  
      for ($row = 1; $row <= $clm; $row++) {
            echo "*";
       }
      echo "<br>";
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
