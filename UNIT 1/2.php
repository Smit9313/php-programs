<!-- 2.Write a program in PHP to demonstrate the use of comments, echo and print.  -->

<?php

//This is single-line comment

/* This 
is 
multiple line
comment.*/

// Use of echo
echo "Hello"," ","World ", 34, "<br/>";
// Hello World 34

// Use of print
PRINT("Hello World<br/>");
// Hello World

// return 1
echo PRINT("");
// 1

eCHo("hello")." World";
// hello World


/* 1. echo is a language construct while print is a function.

   2. As a language construct, echo is slightly faster than print. 
    The reason for this is that echo does not need to return a value, 
    while print does. This means that echo can be executed more quickly 
    by the PHP interpreter.

   3. echo can output multiple expressions separated by commas, 
    while print can only output one expression.

   4. echo does not return any value while print returns a value of 1, 
    so it can be used in an expression.
*/

?>