

<?php
echo 19;
echo"<br>";
print (1.1);
echo"<br>";
echo "zadek";
echo"<br>";
print(TRUE);
echo"čau "."zdravim ";
echo"<img src=\"rouška2.jpg\">";
echo"\\";

$a = 9;
            echo"<br>";
            $b = 7;
            echo "<br>";
            var_dump($a + $b);
            echo "<br>";
            $a = 90;
            echo"<br>";
            $b = 7;
            var_dump ($a - $b);
            echo "<br>";
            $a = 90;
            echo"<br>";
            $b = 7;
            var_dump ($a * $b);
            echo "<br>";
            $a = 90;
            echo"<br>";
            $b = 7;
            var_dump ($a / $b);
            echo "<br>";
            $a = 90;
            echo"<br>";
            $b = 7;
            var_dump ($a += $b);
            echo "<br>";
            $a = 90;
            echo"<br>";
            $b = 7;
            var_dump ($a -= $b);
            echo "<br>";
            $a = 90;
            echo"<br>";
            $b = 7;
            var_dump ($a *= $b);
            echo "<br>";
            $a = 90;
            echo"<br>";
            $b = 7;
            var_dump ($a /= $b);
            echo "<br>";
            $a = 90;
            echo"<br>";
            $b = 7;
            var_dump ($a == $b);
            echo "<br>";
            $a = 90;
            echo"<br>";
            $b = 7;

            var_dump ($a != $b);
            echo "<br>";
            $a = 9;
            echo"<br>";
            $b = 4;
            var_dump ($a > $b);

            echo "<br>";

            $a = 9;
            echo"<br>";
            $b = 4;
            var_dump ($a < $b); 

            echo "<br>";
            $a = 9;
            echo"<br>";
            $b = 4;
            var_dump ($a || $b);

            echo "<br>";
            $a = 9;
            echo"<br>";
            $b = 4;
            var_dump ($a & $b);
            
             $janHostalek1=1;
             $janHostalek2=1;
             if(true){
                 echo "Hošťálek Jan<br>";
             }
             if ($janHostalek1 > $janHostalek2){
                 echo "Jan<br>";
             }
              
             if ($janHostalek1 > $janHostalek2){
                 echo "Hošťálek<br>";
             }
             else{
                     echo"Hošťálek<br>"; 
             }
              
             if ($janHostalek1 >= $janHostalek2){
                 echo "Hošťálek<br>";
             }
              
             if ($janHostalek1 == $janHostalek2){
                 echo "Jan<br>";
             }
             switch ($janHostalek1){
                 case 0:
                     break;
                 case 1:
                     echo "čau pozemnštaně";
                     break;
                 case 2:
                     break;
                 case 3:
                     break;
                 case 4:
                     break;
                 case 5:
                     break;
                 default:
                     break;
             }
                 $produkty = array(1 =>"kk", 2=>"kk1", 3=>"kk2", 4=>"kk3", 5=>"kk4", 6=>"kk5", 7=>"kk6", 8=>"kk7", 9=>"kk8", 10=>"kk9");
                 var_dump($produkty);
                  $produkty ["ok1"] = array();
                  $produkty ["ok2"] = array();
                  $produkty ["ok3"] = array(
    array('jméno' => 'a', 'pohlaví' => 'M', 'druh' => 'kočka', 'rasa' => 'hnědá', 'věk' => 5 ),
    array('jméno' => 'b', 'pohlaví' => 'F', 'druh' => 'kočka', 'rasa' => 'bílá', 'věk' => 8),
    array('jméno' => 'c', 'pohlaví' => 'M', 'druh' => 'kočka', 'rasa' => 'černá', 'věk' => 3 ),
    array('jméno' => 'd', 'pohlaví' => 'M', 'druh' => 'kočka', 'rasa' => 'dlouhoststá', 'věk' => 4),
    array('jméno' => 'e', 'pohlaví' => 'F', 'druh' => 'kočka', 'rasa' => 'penis', 'věk' => 5 ),
    array('jméno' => 'f', 'pohlaví' => 'M', 'druh' => 'kočka', 'rasa' => 'kunda', 'věk' => 9 ),
    array('jméno' => 'g', 'pohlaví' => 'M', 'druh' => 'kočka', 'rasa' => 'krátkoststá', 'věk' => 3),
    array('jméno' => 'h', 'pohlaví' => 'F', 'druh' => 'kočka', 'rasa' => 'bála', 'věk' => 1),
    array('jméno' => 'ch', 'pohlaví' => 'M', 'druh' =>'kočka', 'rasa' => 'pepko', 'věk' => 1),
    array('jméno' => 'i', 'pohlaví' => 'M', 'druh' => 'kočka', 'rasa' => 'blabla', 'věk' => 11),
                                 );
                           var_dump($produkty);                    
             
?>