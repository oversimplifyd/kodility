/**
  For this question, you will write a program that, given a positive integer M and a list of integers L, outputs the list element M links away from the end of the list. For this program, we will use 1-indexing. That means mth_to_last(1) is the "1st-to-last" element, or simply the last element in the list.
**/

import java.io.*;
import java.util.*;

public class Solution {

 public static void main(String[] args) {
  Scanner input = new Scanner(System.in);
  int index = input.nextInt();
  CustomLinkedList a = new CustomLinkedList();

  while (input.hasNextInt()) {
   a.insertAfter(input.nextInt());
  }

  System.out.println((a.mthToLastElement(index) != null) ? a.mthToLastElement(index).data : "NIL");

 }

 private static class CustomLinkedList {

  Node head;

  private class Node {
   Node next;
   int data;

   public Node(int data) {
    this.data = data;
    next = null;
   }
  }

  public void insertBefore(int data) {
   Node node = new Node(data);
   node.next = head;
   head = node;
  }

  public void insertAfter(int data) {
   Node node = new Node(data);
   if (head == null) {
    head = node;
   } else {
    Node temp = head;
    while (temp.next != null) {
     temp = temp.next;
    }
    temp.next = node;
   }
  }

  public Node mthToLastElement(int len) {
   Node current = head;
   Node follower = head;

   for (int i = 0; i < len - 1; i++) {
    if (current.next == null) return null;
    current = current.next;
   }

   while (current.next != null) {
    current = current.next;
    follower = follower.next;
   }

   return follower;
  }
 }
}
