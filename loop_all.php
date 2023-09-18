<?php
//Practice Problems::
// Think about the problem and Try to solve each exercise. You can take help from Google Youtube. If you are unable to solve I will provide the solution after next conceptual class. Good Luck!
// => Easy
// Exercise 1: Print the Even Number from 1 to 50
// Exercise 2: Print the Odd Number from 1 to 50
// Exercise 3: Print the Sum of Even Numbers from 1 to 50
// Exercise 4: Print the Sum of Odd Numbers from 1 to 50
// Exercise 5: Print the Sum of Numbers from 1 to 50
// Exercise 6: Print the Square of Numbers from 1 to 10

// => Medium
// Exercise 7: Count Digits in a Number (Like $numbers = 12345)
// Exercise 8: Multiplication Table of 1 to 10;
// Exercise 9: Reverse a Given String ($string = "I love PHP"); [For Module 2, You can skip this problem]

// => Hard
// Exercise 10: Fibonacci Sequence of First 10 Numbers.
// Exercise 11: Factorial Calculation of a Given Number.
//--------------------------------------------------------------------------
	// Basic for Loop
	/* for(init counter; test counter; increment counter ){
	    code to be executed for iteration
	}*/
	// Example of for Loop
	for($i=0;$i<=10;$i++)
	{
	  echo "for loop: $i".PHP_EOL;
	}
	
	//Basic while Loop
	/*
	variable initialized
	while(condition is true){
	  code to be executed
	  increment/decrement variable
	}
	*/
		// Example of while Loop
		$x=0;
		while($x<=10){
		  echo "while loop: $x".PHP_EOL;
		  $x++;
		}
		
	// Basic do While Loop
	/*	variable initialized
	do{
	  code to be executed
	  increment/decrement variable
	} while(condition is true);
	*/
	//Exampe of do while Loop
	$i=0;
	do{
    echo "do while loop: $i".PHP_EOL;
	  $i++;
	} while($i<=10);
