
<?php


$randNumber = rand(0,1000);

echo $randNumber."<br>";


$j=2;
for ($i=0; $i <=10 ; $i++) { 
echo $i*$j ."<br>";
}

for ($i=10; $i>=1 ; $i--) { 
echo $i*$j ."<br>";
}


for ($i=0; $i<6; $i++) { 
  for ($j=0; $j<$i; $j++) { 
    echo "*";
  }
  echo"<br>";
}


for ($i=5; $i>0; $i--) { 
  for ($j=0; $j<$i; $j++) { 
    echo "*";
  }
  echo"<br>";
}

?>

