<?php

$math=23;

$geo=82;

$eng=65;

$chem=34;

$calculate=($math+$geo+$eng+$chem)*100/400;
 

if($calculate<50){

echo "you have got d.&nbsp;&nbsp;&nbsp; because your marks is low: ".$calculate;

 

}

else{

echo 'BRAVO!'.$calculate.' %';
}
 ?>