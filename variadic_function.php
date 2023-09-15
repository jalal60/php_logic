<?php

//Strict mode enable 
//declare(strict_types=1);

//variadic function which usually a array.
function sum(...$numbers)
{
  echo $numbers[2];
}

sum(20, 10, 12, 52, 42);
