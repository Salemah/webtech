<h1>Answer 2</h1>
<p>ID: 18-36896-1</p>

<?php
         function addFunction($num1, $num2,$num3,$num4,$num5) {
            $sum = $num1 + $num2+$num3+$num4+$num5;
            echo "Sum of the numbers is : $sum";
         }
		 
		 function avgFun($num1, $num2,$num3,$num4,$num5) {
            $avg = ($num1 + $num2+$num3+$num4+$num5)/5;
            echo "<br>Averageof the numbers is : $avg";
         }
		 
		 function modFun($num1, $num2,$num3,$num4,$num5) {
            $mod = ($num1 + $num2+$num3+$num4+$num5)%2;
            echo "<br>Modulus of the numbers is : $mod";
         }
         
         addFunction(3,6,8,9,6);
		 avgFun(3,6,8,9,6);
		 modFun(3,6,8,9,6);
  ?>



