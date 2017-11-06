<?php
function soal1(){
	$color = array('white','green','red','blue','black');
echo"<b>Soal 1 </b></br>";
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: 
		the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. 
		The new president and his first lady. - Richard M. Nixon </br>" ;
}
soal1();

function soal2(){
echo "<b>Soal 2</b></br>";
$color = array('white', 'green', 'red'); 
for($i=0;$i < count($color);$i++){
	echo "$color[$i] ,";
}

for($i=0;$i < count($color);$i++){
	$j=$i+1;
	echo "<li>$color[$j]</li>";
		if($j==2){
		echo "<li>$color[0]</li>";
		break;
	}
}
}
soal2();

function soal3(){
	echo "<b>Soal 3</b></br>";
	 $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
	asort($ceu);
	foreach ($ceu as $key => $val) {
    echo "The capital of $key is $val</br>";
}
}
soal3();

function soal5(){
	echo "<b>Soal 5</b></br>";
	 $color = array(4 => 'white', 6 => 'green', 11=> 'red');
	 $first_value = reset($color);
	 echo "$first_value</br>";
	 //array_pop(array_reverse($color));
}
soal5();

function soal7(){
	echo "<b>Soal 7</b></br>";
	 $color = array('1','2','3','4','5');
	 $inserted="$";
	 array_splice( $color, 3, 0, $inserted ); 
	 foreach ($color as $val) {
    echo "$val &nbsp";
}
echo"</br>";
}
soal7();

function soal8(){
	echo "<b>Soal 8</b></br>";
	echo"A</br>";
	$isi = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
	asort($isi);
	foreach ($isi as $key => $val) {
    echo "$key , $val</br>";
}
echo"B</br>";
ksort($isi);
	foreach ($isi as $key => $val) {
    echo "$key , $val</br>";
}
echo"C</br>";
arsort($isi);
	foreach ($isi as $key => $val) {
    echo "$key , $val</br>";
}
echo"D</br>";
krsort($isi);
	foreach ($isi as $key => $val) {
    echo "$key , $val</br>";
}
} 
soal8();
function soal9(){
	echo"<b>Soal 9</b></br>";
	$temp=array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
	echo "Average Temperature</br>";
	$jml=array_sum($temp);
	$avg=$jml/count($temp);
	echo"$avg</br>";
	echo "Five Lowest Temperature</br>";
	asort($temp, SORT_NUMERIC);
	$hasil=array_slice($temp,0,5,true);
	foreach ($hasil as $has) {
    echo "$has &nbsp";
	}
	echo "</br>Five Higest Temperature</br>";
	arsort($temp, SORT_NUMERIC);
	$hasil2=array_slice($temp,0,5,true);
	foreach ($hasil2 as $has) {
    echo "$has &nbsp";
	}
} 
soal9();

function soal12(){
	echo"<b>Soal 12</b></br>";
	echo"</br>Lowercase</br>";
	$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
	$low = array_map('strtolower', $Color);
	foreach ($low as $key => $val) {
    echo "$key => $val</br>";
}
echo"</br>Uppercase</br>";
$low = array_map('strtoupper', $Color);
	foreach ($low as $key => $val) {
    echo "$key => $val</br>";
}
}
soal12();

function soal13(){
	echo"</br><b>Soal 13</b></br>";
	for($i=200;$i<=250;$i+=4){
		echo "$i &nbsp";
	}
}
soal13();

function soal14(){
	echo"</br><b>Soal 14</b></br>";
	$isi = array("abcd","abc","de","hjjj","g","wer");
	$hasil = array_map('strlen', $isi);
	echo "The shortest array length is " . min($hasil);
	echo " The longest array length is " . max($hasil);
}
soal14();

function soal15(){
	echo"</br><b>Soal 15</b></br>";
$numbers = range(11, 20);
shuffle($numbers);
foreach ($numbers as $number) {
    echo "$number ";
}
}
soal15();

function soal16(){
	echo"</br><b>Soal 16</b></br>";
	$arr = array(1,2,3,7,8,9,4,5,6,7,2) ;
$max_key = max( array_keys( $arr) ); 
echo $max_key;
}
soal16();

function soal17(){
	echo"</br><b>Soal 17</b></br>";
	$values=array(-1,0,1,12,-100,1);
	$temp=min(array_diff(array_map('intval', $values), array(0)));
	echo $temp;
}
soal17();

function soal36(){
	echo"</br><b>Soal 36</b></br>";
	$my_arr = array( "MeSsi", "RonalDo", "Jolp", "Smith"); 
	print_r($my_arr);
	echo"</br>";
	$low= array_map('strtolower', $my_arr);
	print_r($low);
	echo"</br>";
	$upp = array_map('strtoupper', $my_arr);
	print_r($upp);
}
soal36();

function soal37(){
	echo"</br><b>Soal 37</b></br>";
	$count = 0; 
    $my_array = array("c1"=>"Red", "c2"=>"Green", "c3"=>"Yellow", "c4"=>"Red");
    $sama = "Yellow";
    foreach ($my_array as $key => $value) 
    { 
        if ($value == $sama) 
        { 
            $count++; 
        } 
    } 
    
    echo "\n"."Yellow color appears $count". " time(s)."."\n";  
}
soal37();
?>