
<?php
/*------Swap two numbers with out third varible---*/
$a = 10;
$b = 20;
$a= $a+$b;
echo "$a"."<br>";
$b=$a-$b;
echo "Value of b"."$b"."<br>";
$a =$a-$b;
echo "Value of a"."$a"."<br>";


// ----index array----
// $cars= array("Volvo","BMW","Toyata");
$cars=["Volvo","BMW","Toyata"];

echo "I like this &nbsp;".$cars[0].",&nbsp;".$cars[1].",&nbsp;".$cars[2]."<br>";

//--------Assocative array

$cars=array("Volvo","BMW","Toyota");
$arrlength=count($cars);

for($x=0;$x<$arrlength;$x++)
  {
  echo $cars[$x];
  echo "<br>";
  }



$age=["Gaytam"=>"25","Sanjeev"=>"25","Savita"=>"25"];
$arraylengt=count($age);

echo("$arraylengt");

print_r($age);



$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

foreach($age as $x=>$x_value)
  {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
  }

echo("<br>");

  $cars=array(

     array("Volvo",20,30),
     array("BMW",40,50),
     array("Toyata",60,70)
  );

  


  if(!printf("Hello ")){

} else {
   echo "World";
}



?>
<script type="text/javascript">
	
const d = new Date();

document.write(d);	
</script>



