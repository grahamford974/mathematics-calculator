 <?php
function addition($a,$b)
{
return $a+$b;
}
function subtraction($a,$b){
return $a-$b;
}
function multiplication($a,$b){
return $a*$b;
}
function division($a,$b){
if ($b==0){
echo "error";
return 0;
}
else{
return $a/$b;
}
}
?>