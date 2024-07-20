<?php 
$text = file('../files/other.txt');
foreach($text as $key => $value){
for($i==0;$i<=$key;$i++)
{
 $id=$key+1;
 $prepaire=explode('&',$value);
 list($title,$info)=$prepaire;
 $a = '<div class="card1"><div class="annot">'.$id.".".$title.'</div><div class="info">'.$info.'</div>
    <button class="more1"><a class="text2" href="./PHP1.html">Перейти</a></button>
    </div>';
 $array[$id]=$a;   
}    
}

print_r($array);
?>