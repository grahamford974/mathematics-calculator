  <?php
  function add($a,$b){
    $result=$a+$b;
    return $result;
  }
  
function subtract($a,$b){
    $result=$a-$b;
    return $result;
  }
  
function multiply($a,$b){
    $result=$a*$b;
    return $result;
  }
  
function divide($a,$b){
    if($b==0){
        echo "Cannot divide by zero";
    }else{
        $result=$a/$b;
        return $result;
    }
}

$a=10;
$b=2;
echo "add:".add($a,$b)."<br>";
echo "subtract:".subtract($a,$b)."<br>";
echo "multiply:".multiply($a,$b)."<br>";
echo "divide:".divide($a,$b)."<br>";
?>