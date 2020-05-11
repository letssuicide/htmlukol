<?php
 require 'tracy/tracy (2).phar';
use Tracy\Debugger;
Debugger::enable();
Debugger::$strictMode = true;

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
            dump($a + $b);
            echo "<br>";
            $a = 90;
            echo"<br>";
            $b = 7;
            dump ($a - $b);
            echo "<br>";
            $a = 90;
            echo"<br>";
            $b = 7;
            dump ($a * $b);
            echo "<br>";
            $a = 90;
            echo"<br>";
            $b = 7;
            dump ($a / $b);
            echo "<br>";
            $a = 90;
            echo"<br>";
            $b = 7;
            dump ($a += $b);
            echo "<br>";
            $a = 90;
            echo"<br>";
            $b = 7;
            dump ($a -= $b);
            echo "<br>";
            $a = 90;
            echo"<br>";
            $b = 7;
            dump ($a *= $b);
            echo "<br>";
            $a = 90;
            echo"<br>";
            $b = 7;
            dump ($a /= $b);
            echo "<br>";
            $a = 90;
            echo"<br>";
            $b = 7;
            dump ($a == $b);
            echo "<br>";
            $a = 90;
            echo"<br>";
            $b = 7;

            dump ($a != $b);
            echo "<br>";
            $a = 9;
            echo"<br>";
            $b = 4;
            dump ($a > $b);

            echo "<br>";

            $a = 9;
            echo"<br>";
            $b = 4;
            dump ($a < $b); 

            echo "<br>";
            $a = 9;
            echo"<br>";
            $b = 4;
            dump ($a || $b);

            echo "<br>";
            $a = 9;
            echo"<br>";
            $b = 4;
            dump ($a & $b);
            
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
                 dump($produkty);
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
                           dump($produkty);  
                           
   $radekhostalekjan=5; 
$sloupechostalekjan=16; 
            echo "<table border=1>";
            for($i=1;$i<=$radekhostalekjan;$i++) {
                echo "<tr>";
for($x=1;$x<=$sloupechostalekjan;$x++){
    echo "<td>".$i."-".$x."</td>";
}
                echo "</tr>";
            }
            echo "</table><br><br><br>";

           echo abs(6)."<br>";
            echo ceil(150)."<br>";
           $string="whats up";
          echo strstr($string, "up")."<br>";
          echo strpos($string, "up")."<br>";
          echo sizeof($produkty);
          array_splice($produkty, 0, 1, "oi1"); 
          dump($produkty);

          $i=1;
          foreach ($produkty as $produkt){
              echo $i."-".$produkt."<br>";
              $i++;
          }

                  $vyska="180cm";        
        echo "velikost: ".$vyska;
        dump(velikost($vyska)); 
      
        function velikost (string $vyska, bool $volba = false){       
            $rust=substr($vyska,0,2);
            $kilogram= substr(date("Y"),2,2);
            if($rust <=$kilogram){ 
                $rust= "20".$rust;
            }
            else{
                $narozeni= "19".$narozeni;
            }
            $vek=date("Y")-$narozeni;
            if ($volba == true){
                return $narozeni;
            }
            return $vek;
        }
                           

                           
       
          
?>