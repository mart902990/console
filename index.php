<?php

/*fwrite(STDOUT, $text . PHP_EOL);
fscanf(STDIN, "%d\n", $number); //читает число из STDIN
echo "$number";
var_dump ($number);
var_dump(is_int($number));
2$text = stream_get_contents(STDIN);
fwrite(STDOUT, "Done" . PHP_EOL);
*/
$number = trim(fgets(STDIN)); //читает одну строку из STDIN
$number = $number*1;
if (!is_int($number)) { 
     echo 'ввeдите целое число:';
     $number = trim(fgets(STDIN)); 
    }
$num = trim(fgets(STDIN)); 
$num = $num*1; 
    var_dump ($num);
    var_dump(is_int($num));
    
if ($num == 0)
    {  
    fwrite(STDERR, "На 0 делить нельзя!");
    echo 'введи правильный делитель:';
    $num = trim(fgets(STDIN)); 
    $num = $num*1; 
    } 
if (!is_int( $num))
   { 
    echo 'делить надо на целое число введи его:';
    $num = trim(fgets(STDIN));    
}      
fwrite(STDOUT,  $number/$num);

