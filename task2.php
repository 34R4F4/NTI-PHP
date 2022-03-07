<!DOCTYPE html>
<html>
<head>
     <title>PHP task2</title>
</head>
<body>
     <?php
     // function give the next char. of given char.
     function nextLitter($litter){
          $asc = ord($litter);          //convert char to ASC
          if ($asc ==  90){             // if Z is given will return A
               $result = 65;
          }elseif ($asc ==  122){       // if z is given will return a
               $result = 97;
          }else{                        //give the next char by adding one to the original char (in ASC form)
               $result = $asc+1;
          }
          return(chr($result));         //re-convert the result ASC to char
     }
     echo nextLitter("G")

     /// =========   Arafa Khalaf Khalaf   ===================
     ?>
</body>
</html>