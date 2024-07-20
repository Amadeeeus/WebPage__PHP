<?php 
$text = file('./files/other.txt');
print_r($text);
/*$textafter = explode("&",$text);
echo "<br>";
list($titlebefore,$infobefore)= $textafter;
$baza = [$titlebefore=>$infobefore];
print_r($baza);*/
foreach($text as $key => $value){
for($i==0;$i<=$key;$i++)
{
 $id=$key+1;
 $prepaire=explode('&',$value);
 list($title,$info)=$prepaire;
 echo "<br>",$id,$title,$info;
}    
}

?>