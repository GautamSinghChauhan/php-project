<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="    BACKGROUND: #00bcd4;text-align: center;">
<form method="post" attribute="post" style="margin: auto;width:50%;padding: 20px 0px; border: 2px solid #ff9800;">
<p>First Value:<br/>
<input type="text" id="first" name="first" required></p>
<p>Second Value:<br/>
<input type="text" id="second" name="second" required></p>
<input type="radio" name="group1" id="add" value="add" checked="true" >ADD
<input type="radio" name="group1" id="subtract" value="subtract">SUB
<input type="radio" name="group1" id="times" value="multiply">MULTIPLICATION
<input type="radio" name="group1" id="divide" value="divide">DIVISION
<p></p>
<button type="submit" name="answer" id="answer" value="answer">Calculate</button>

</form>
<p style="color: #fff; font-size: 20px; line-height: 30px; letter-spacing: 2px;">

<?php
if (isset($_POST['answer'])) {
    $num1=$_POST['first'];
    $num2=$_POST['second'];
    // echo $num1.$num2;
    $operation=$_POST['group1'];
  echo "$operation";
    switch ($operation) {
        case 'add':$sum = $num1+$num2;
           echo "The Addition of two Numbers {$sum}";
            break;
        
            case 'subtract':$subtract = $num1-$num2;
            echo "The Subtract of two Numbers {$subtract}";
             break;

             case 'multiply':$Multiply = $num1*$num2;
           echo "The Multiply of two Numbers {$Multiply}";
            break;

            case 'divide':$divide = $num1/$num2;
           echo "The divide of two Numbers {$divide}";
            break;

            default: echo "Sorry does not here";
    }
}
?>
</p>
</body>
</html>