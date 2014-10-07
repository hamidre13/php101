
<p>This code shows how to work with strings in php</p>
<?php

echo "we have to use echo to print in the page </br>";
echo "Concat ". "  strings". " Use . to concat strings</br>";
echo  "";

?>
<strong>Strign functions</strong></br></br></br>
<?php
$first = "This is the first string";
$second = "This is the second string";

$third = $first;
$third .= $second;
echo $third;

?>

</br>
Lower case:		 <?php echo strtolower($third);    ?></br>
Upper case: 	 <?php echo strtoupper($second);   ?></br>
upper case first:<?php echo ucfirst($first); 	  ?></br>
upper case word :<?php echo ucwords($third); 	  ?></br>
String lenght : <?php echo "String lenth of {$third} is:"; echo strlen($third);?></br>
Trim(Trim will remove the white space</br>
from the end and the begining of the string that we are passing to it): 
<?php echo "A". trim('    B    C   D    ').'E';?></br>
Find(This will return the string and everything after it): <?php echo strstr($third, 'second');?></br>
Replace :<?php echo str_replace('first', 'repfirst', $first);?>