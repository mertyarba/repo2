<?php
	//variable starts with $
	//string has to use quotation marks
	//line ends with semicolon



	$first_name = "Mert";
	$last_name = "Yarbaoglu";


	//show code to browser
	//for adding up numbers "+" sign
	//for adding up strings "." sign 
	echo $first_name.$last_name;
	
	// > greater than
	// < smaller than
	// >= greater than or equal
	// <= smaller than or equal
	// == equal
	// != not equal
	
	$age = 4;
	
	// if age is smaller than or equal to 6, then you can sleep at lunch time
	if ($age <= 5){
		
	
		//its true
		echo " yes you can sleep at lunch time"	;
		
	}else{
		//its false
		echo " no, you are at school";
	}
?>

<br>

<?php

	//loop
	
	for ($i=1; $i <= $age; $i=$i+1){
		
		//if condition is true 
		echo $i;
		
	}

?>

<br>

<?php

	echo  date('jS \of F Y G:i:s A');

?>