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

function jumlahnya(){
	echo "</br>5.";
	$invest=1000;
	$bunga=10/100;
	$thn=5;
	for($i=0;$i<$thn;$i++){
		$bung=$invest * $bunga;
		$invest=$bung+$invest;
		echo"$i => $invest ,";
	}

}
jumlahnya();
echo"</br> 6. ";
$tot=0;
for ($i=0; $i < 10; $i++) { 
        for($j=0;$j<20;$j++){
        	echo " ".utf8_encode( chr($tot) );
        	$tot++;
        }
        echo"</br>";
    }