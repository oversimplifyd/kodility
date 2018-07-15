/**
  For this question, you will write a program that generates values from the Fibonacci sequence. The Fibonnaci sequence is recursively defined by:
**/
import java.io.*;
import java.util.*;

public class Solution {

    public static void main(String[] args) {
        System.out.println(nthFib(new Scanner(System.in).nextInt()));
    }
    
    private static int nthFib(int n) {
        if (n <= 1) return n;
        return nthFib(n -1) + nthFib(n -2);
    }
}
