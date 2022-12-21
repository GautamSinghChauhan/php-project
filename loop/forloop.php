<?php
$age = 19;

if ($age >= 18 and $age < 65) {
    echo 'You can Drive' ;
}else{
    echo 'You cannot Drive';
}

echo"<br>";

$age = 44;

if($age > 25 && $age < 60){
	echo "You can drive vehicles";
}
elseif($age < 25){
	echo "You cannot Drive vehicles my child";
}
elseif($age > 60){
	echo "You cannot drive vehicles";
}
else{
	echo "you cannot drive";
}


?>
