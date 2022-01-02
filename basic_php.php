<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>
	<?php
	 /*
	 define("Web", "233");
	 echo "\n".Web;
	 echo "\n";
	    $x =10;
	    $y = 'Hello';
	    echo "<h4> Web Engineering </h4>";  
	    echo "$y \n";
	    */
	    $array1 =  array("Red","Green","Blue");
	    //echo  $array1[0];
	    //$array2 =  array("Red" => 1,"Green" => 2,"Blue" => 3);
	    //echo  $array2["Red"];
	    $a =10;
	    /*$b = 15;
	    if ($a == $b) {
	 	echo "True";
	     }
	    else 
	    {
	 	echo "False";
	     }*/
	     /*switch ($a) {
	     	case '5':
	     		echo "False";
	     		break;
	     	case '10':
	     		echo "True";
	     		break;
	     	
	     	default:
	     		echo "Not Found";
	     		break;
	     }*/
	     for($i =1;$i<=10;$i++){
	     	echo "$i \n";
	     }
	    ?> 
	    <?php
	function printArray($num1,$num2)
     {
     	$sum =$num1 + $num2;
     	echo "$sum <br>";
     	/*$var = readline('Enter a value:   ');
     	echo $var;*/
     $array1 = array("Red","Green","Blue");
	 foreach ($array1 as $value) {
	 	echo "$value \n";
	 }
	}
	 printArray(10,20);
	?>

</body>
</html>


