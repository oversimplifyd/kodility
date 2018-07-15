/**
  Write a program that, given a number n from STDIN, prints out all numbers from 1 to n (inclusive) to STDOUT, each on their own line. But there's a catch:

For numbers divisible by 3, instead of n, print Fizz
For numbers divisible by 5, instead of n, print Buzz
For numbers divisible by 3 and 5, just print FizzBuzz
For example, given the input 1, your program should output
**/

function processData(input) {
    input = parseInt(input);
    for (var i = 1; i < input + 1; i++) {
        if (i % 3 == 0 && i % 5 == 0) {
            console.log('FizzBuzz');
        } else if (i % 3 == 0) {
            console.log('Fizz');
        } else if (i % 5 == 0) {
            console.log('Buzz');
        } else {
            console.log(i)
        }
    }
} 
