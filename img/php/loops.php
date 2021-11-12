<?php

/*
	Explode:   explode(Separator, $String, Limit)
*/

/*
	$str = "2019/2020";

	echo  $str. "<br>";

	$arr = explode("/", $str, -1);

	echo "<pre>";

	print_r($arr);
	
	echo "</pre>";
*/


	// $random = random_int(100000, 999999);

	// $a= 0;

	// for ($i = 0; $i<6; $i++) 
	// {
	//     $a .= random_int(0,9);
	// }

	// echo  $a. "<br>";

	// $a= 201915;
	
	// $sub_a = substr($a, 2);

	// echo  $sub_a. "<br>";


	

	function getStudentCode($length = 6){

		// $academic_year = "2019/2020"; //(2019/2020)
	    
	 //    $year_digits = explode("/", $academic_year, -1);  //(2019)
	 //    $str = implode("", $year_digits);

	 //    $sub_year = substr($str, 2); //(19)
	    

	    // $random= null;

	    // for ($i = 0; $i < $length; $i++) 
	    // {
	    //     $random .= random_int(0,9);
	    // }

	    // $student_code = (int)($sub_year . $random);
	    $student_code = random_int(0,2);

		return $student_code;
	}


	$x=1;

 	do {
    // $student_code = getStudentCode();
    // $found = Model::where('theColumn', $string)->exists();
    
    echo "<pre>";
	print_r(getStudentCode());
	echo "</pre>";

    $x++;

	} while ( $x<=5);


	

	
	// echo $string;



?>