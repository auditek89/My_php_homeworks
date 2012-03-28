<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="homework_1.css" />
	</head>
	<body>
		<?php 
			function is_prime($i)
			//checks is the number prime or not 
			{
				$sqr= sqrt($i);
				$var=2;
				if($i==1) 
				{
					return false;
				}
				while ($var <= $sqr)
				{
					if ($i % $var ==0)
						{
							return false;
						}
					else 
					{
						$var ++;
					}
				}
				return true;
			}
			if(!isset ($_GET['number']))
			//checks if the user hasn`t set a GET parameter
			{	
				echo "<span id=\"normal\">Add the right thing in the address bar!</span>"; 
			}
			else
			// if the GET parameter is set
			{
				$number=$_GET['number'];
				if(! is_numeric($number))
				// checks does the parameter is a number
				{
					echo "<span id=\"notNumber\">The parameter is not a number</span>";
				}
				else
				{
				//if it is not a number then
					if ($number < 0 or $number > 19999)
					{
					//checks is the number in the range [0 - 19999]
						echo "<span id=\"notInteger\">The parameter is not within the range [0, 19999]</span>";
					}
					else
					{// if it is in the range
						if (is_prime($number))
						{
						//checks is the integer is prime by calling is_prime function
							echo "<span id=\"normal\">The number ". $number . " is prime!</span>";
						}
						else
						{
							//if it is not prime this message is printed
							echo "<span id=\"notPrime\">The number " . $number . " is NOT prime!</span>";
						}
					}
				}
			}
		?>
	</body>
 </html>