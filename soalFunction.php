<?php
function hitung($sisi){
	$luas = $sisi*$sisi;
	return $luas;
}
echo "1. Luas Persegi adalah ".hitung(30);

function pemisah(){
	echo "</br> 2. ";
	$str="120831";
	for($i=0;$i < strlen($str);$i++){
		if($i%2==0){
			echo " ";
		}
		echo "$str[$i]";	
	}
	
}
pemisah();

function tengah(){
	echo "</br>";
	$str="350970";
	$tengah=strlen($str)/2;
	$atas=ceil($tengah);
	$bwh=floor($tengah)-1;
	echo "3. ";
	if(strlen($str)%2==0){
		echo substr($str,$bwh,2)."<br>";
	}else{
		echo substr($str,$tengah,1)."<br>";
	}
}
tengah();
$string ="my name is crisyanto";
echo "4. There are <strong>".preg_match_all('/[aeiou]/i',$string,$matches)." vowels</strong> in the string <strong>".$string."</strong>";

echo "</br>5. There is ".str_word_count($string)." Word";

function futureInvest($amount, $monthRate,$thn){
	return $amount*pow(1+$monthRate,$thn*12);
}
function jumlahnya(){
	echo "</br>6.";
	$invest=1000;
	$rate=10*0.01;
	$thn=5;
	echo "</br>Years            Future Value</br>";
	for($i=1;$i<$thn+1;$i++){
		
		echo "<pre>$i    ".futureInvest($invest,$rate/12,$i).", </pre> </br>";
	}

}
jumlahnya();
echo"</br> 7. </br>";
function printchar($char1,$char2,$n){
	for ($ctr = 1; $char1 <= $char2; $ctr++, $char1++) {
           // echo "$char1 "."";
            echo chr($char1)." ";
            if ($ctr % $n == 0){
            	echo "</br>";
            } 
           
        }
}
echo printchar(ord("("),ord("z"),20);