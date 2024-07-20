<?php
print_r($_GET);
function explodeText($a,$b){
switch($a){
    case $a=1:$text = file('../files/php_basic.txt');break;
    case $a=2:$text = file('../files/php_pre.txt');break;
}
echo "текст".$text;
    $i=0;
foreach($text as $key => $value){
for($i;$i<=$key;$i++)
{
 $id=$key+1;
 $prepaire=explode('&',$value);
 list($title,$info)=$prepaire;
 $result = '<div class="card1"><div class="annot">'.$id.".".$title.'</div><div class="info">'.$info.'</div>
    <button class="more1"><a class="text2" href="./PHP1.html">Перейти</a></button>
    </div>';
 $array[$id]=$result;   
}    
}
    if($b==1){
    for($i=0;$i<=5;$i++)
    {
        echo $array[$i];
    }
    }
    elseif($b==2){
        for($i=6;$i<=10;$i++)
    {
        echo $array[$i];
    }
        }
    elseif($b==3){
        for($i=11;$i<=15;$i++)
    {
        echo $array[$i];
    }
        }
    elseif($b==4){
        for($i=16;$i<=20;$i++)
    {
        echo $array[$i];
    }
        }
    elseif($b==5){
        for($i=21;$i<=25;$i++)
    {
        echo $array[$i];
    }
        }
    elseif($b==6){
        for($i=26;$i<=30;$i++)
    {
        echo $array[$i];
    }
        }
    elseif($b==7){
        for($i=31;$i<=35;$i++)
    {
        echo $array[$i];
    }
        }
    elseif($b==8){
        for($i=36;$i<=40;$i++)
    {
        echo $array[$i];
    }
        }
    elseif($b==9){
        for($i=41;$i<=45;$i++)
    {
        echo $array[$i];
    }
        }
    elseif($b==10){
        for($i=46;$i<=50;$i++)
    {
        echo $array[$i];
    }
        }
    elseif($b==11){
        for($i=51;$i<=55;$i++)
    {
        echo $array[$i];
    }
        }
}
?>