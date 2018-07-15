import java.io.*;
import java.util.*;
import java.math.BigInteger;

public class Solution {

    public static void main(String[] args) {
        BigInteger num = new BigInteger(new Scanner(System.in).next());
        System.out.println(factorial(num));
        /* Enter your code here. Read input from STDIN. Print output to STDOUT. Your class should be named Solution. */
    }
    
    private static BigInteger factorial(BigInteger n) {
        if (n.intValue() == 0) return BigInteger.valueOf(1);
        return (n.multiply(factorial(n.subtract(BigInteger.valueOf(1)))));
    }
}
