<?php
//CPC1
// *1
$a = 3;
$c =$a;
echo "1)" . $c;
echo "<br>";
//*2
$a = 10;
$b = 2;
$c= $a+$b;
$cp=$c/2;
echo  "2)" . $cp;
echo "<br>";
//3*
$c = 15;
$d = 2;
$rasult =$c + $d;
echo  "3)" . $rasult;
echo "<br>";
//4*
$a = 10;
$b = 2;
$c =5;
$z= $a + $b +$c;
$cp = $z/3;
$cp1=$z/$cp;
echo "4)" . $cp1;
echo "<br>";
//5*
$a = 17;
$b = 10;
$c = $a-$b;
$d=17;
$rasult= $c+ $d;
echo "5)" . $rasult;
echo "<br>";
//CPC2
//1*
$text = '1)Привет, мир!';
echo $text." Моя првая программа!";
echo "<br>";
//2*
$text1='2)Привет';
$text2=' Мир';
echo $text1.$text2;
echo "<br>";
//3*
$name="Диана!";
echo "3)Привет, ". $name;
$text = '\nНовый текст';
echo "<br>";
//4*
$age = 19;
$height= 162;
echo "4)Мой возраст:".$age. "|Мой рост:".$height;
echo "<br>";
//5*
echo "5)";
$text='adcbe';
echo $text[0] . "\n" . $text[2] . "\n" . $text[4];
echo "<br>";

//CPC3
//1*
echo "1)";
$arr = ['a','b','c'];
echo var_dump($arr);
echo "<br>";
//2*
echo "2)";
echo $arr[0] . $arr[1] . $arr[2];
echo "<br>";
//3*
echo "3)";
$arr = ['a','b','c','d'];
echo $arr[0]."+".$arr[1]. ", ".$arr[2]."+".$arr[3].", ".$arr[0]."-". $arr[3].", ".$arr[0]."/".$arr[3];
echo "<br>";
//4*
echo "4)";
$arr = [2, 5, 3, 9];
$a=$arr[0] * $arr[1];
$b=$arr[2] * $arr[3];
$result = $a+$b ;
echo $result;
echo "<br>";
//5*
echo "5)";
$arr []= 1;
$arr []= 2;
$arr []= 3;
$arr []= 4;
$arr []= 5;

//CPC
//1*
echo "1)";
$arr = ['a'=>11, 'b'=>20, 'c'=>30];
echo $arr['c'];
echo "<br>";


//2
echo "2)";
$arr = ['q3'=>12, 'r3'=>23, 'f3'=>34];
$result = 0;
foreach ($arr as $k => $v){
    $result += $v;
}
echo $result;
echo "<br>";
//3
echo "3)";
$arr = ['Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$'];
echo "З/п Пети: " . $arr['Петя'] . " | З/п Коли: " . $arr['Коля'];
echo "<br>";
//4
echo "4)";
$w = ['1'=>"январь",'2'=> "Февраль", '3'=>"Март", '4'=>"Апрель", '5'=>"Май", '6'=>"Июнь", '7'=>"Июль",'8'=>"Август", '9'=>"Сентябрь", '10'=>"Октябрь", '11'=>"Ноябрь" , '12'=>"Ноябрь"];
echo ($w['9']+$w['7']);
echo "<br>";
//5
echo "5)";
$w = ['1'=>"Понедельник", '2'=>"Вторник", '3'=>"Среда", '4'=>"Четверг", '5'=>"Пятница", '6'=>"Суббота", '7'=>"Воскресенье"];
$day = 3;
echo $w[$day];