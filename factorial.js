/**
  Write a program that, given a number n from STDIN, prints out the factorial of n to STDOUT:

If n is 0, n factorial is 1
n! is not defined for negative numbers.
**/

function processData(input) {
    console.log(factorial(parseInt(input)));
} 

function factorial(n) {
    if (n == 0) return 1;
    return n * factorial(n -1);
}
