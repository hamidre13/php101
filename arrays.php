<?php

$num = array(1,2,3,4,5,6,7,8);

echo $num[3];


for( $i= 0 ;$i<7;$i++)
{

	echo $num[$i].'</br>';
}


echo"we can also show the array for development perpose like this:</br>";
print_r($num);

echo "</br> But it won't print out with the regulra print statment</br>";
echo $num;

echo "If i want to add an item to the array I have to put arraynamr[] = value";

echo "In Php 5.4 and aboveadd new array syntax</br>";

$newarray = [2,3,4,5,6];
print_r($newarray);



?>
</br>
<h1>Assosiative array</h1>
<?php

$AssosiativeArray = ['key1'=>'value1','key2'=>'value2','key3'=>'value3'];

print_r($AssosiativeArray);

echo '</br>'. $AssosiativeArray['key1'];

?>
</br>
<h1>Array functions</h1>
count:<?php echo count($AssosiativeArray);?></br>
Max value : <?php echo max($newarray);?></br>
Min value : <?php echo min($newarray);?></br>

<strong>Sorting arrays</strong>
</br>
<?php

sort($AssosiativeArray);
print_r($AssosiativeArray);


echo "</br> Soritng desending";
 rsort($AssosiativeArray);
 print_r($AssosiativeArray);

?>
</br>

<strong> Breaking the arrrays and trurn them into the long string</strong></br>
<?php 
	$longarraystring = implode('****', $AssosiativeArray);
	echo $longarraystring;
	echo "</br> Opposite of implode is explode. It gets a string and "
?>

