'use strict'

let a = 0,
    b = 1,
    n = 10

while (a <= n)  {
    console.log(a+"\n")
    let c = a + b;
    a = b,
    b = c
}
