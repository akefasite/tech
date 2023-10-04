<?php 
//Q1.Functional programming
 Function factorial($n) {
If ($n == 0){
     return 1;
}   else {
     return $n*factorial($n - 1);
}
}

$number = 5;
$result = factorial($number);
echo "factorial of, ($number) using functional programming: ($result)"; 



//Procedural programming
 
for ($i=1; $i<=20; $i++){
echo "factorial of using procedural programming"."<br>"; 
}



//Object oriented programming

Class Factorialcalculator {
     Public static function factorial($n)  {
            If ($n === 0)    {
                 return 1;
} else {
Return $n * self::factorial($n - 1); 
} 
}
}
$number = 5;
$result = factorialcalculator::factorial($number);
echo "factorial of {$number} using object-oriented programming:  {$result}"; 


?>
