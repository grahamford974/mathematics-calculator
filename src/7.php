 <?php
$result = 0;
if(isset($_POST['action'])){
    switch ($_POST['action']) {
        case 'add':
            $result = $_POST['num1'] + $_POST['num2'];
            break;
        case 'subtract':
            $result = $_POST['num1'] - $_POST['num2'];
            break;
        case 'multiply':
            $result = $_POST['num1'] * $_POST['num2'];
            break;
        case 'divide':
            if($_POST['num2'] != 0){
                $result = $_POST['num1'] / $_POST['num2'];
            } else {
                $result = "Error: Cannot divide by zero!";
            }
            break;
    }
}
echo $result;
?>