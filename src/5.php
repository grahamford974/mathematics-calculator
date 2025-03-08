 <?php
function add($a,$b){
return $a+$b;
}

function subtract($a,$b){
return $a-$b;
}

function multiply($a,$b){
return $a*$b;
}

function divide($a,$b){
if($b==0)
{echo "Invalid Input";
return 0;
}else{
return $a/$b;
}
}
?>