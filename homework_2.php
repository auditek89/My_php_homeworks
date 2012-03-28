<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="homework_2.css" />
	</head>
	<body>
		<?php
		$myArray=range(20,1000,37);
		// create array 
		function is_prime($i)
		{
		// checks if a number is prime or not
			$sqr= sqrt($i);
			$var=2;
			if($i==1)
			{
				return false;
			}
			while($var <= $sqr)
			{	
				if ($i % $var ==0)
				return false;
				else $var ++;
			}
			return true;
		}
		function find_3_prime($arr)
		{
		// check which is the third prime number in array
			$counter = 0;
			foreach($arr as $number)
				{
					if(is_prime ($number))
					{
						++$counter;
					}
					if($counter == 3)
					{
						echo "The third prime number is ".$number . " !";
						return true;
					}
				}
		}
		function check_exist($arr)
			{
				// check does three given numbers exist in array
				if( in_array(146, $arr))
				{
					echo "The number 146 exist in the array!<br/>";
				}
				else
				{
					echo "The number 146 does not exist in the array!<br/>";
				}
				if( in_array(284, $arr))
				{
					echo "The number 284 exist in the array!<br/>";
				}
				else
				{
					echo "The number 284 does not exist in the array!<br/>";
				}
				if( in_array(871, $arr))
				{
					echo "The number 871 exist in the array!<br/>";
				}
				else
				{
					echo "The number 871 does not exist in the array!<br/>";
				}
			}
		?>
		<!-- display the results of calling the defined functions -->
		<h3>The result from the function find_3_prime!</h3>
			<div id="function">
				<?php
					find_3_prime ($myArray);
				?> 
			</div>
		<h3>The result from the function check_exist!</h3>
			<div id="function">
				<?php
					check_exist ($myArray);
				?> 
			</div>
	</body>
</html>