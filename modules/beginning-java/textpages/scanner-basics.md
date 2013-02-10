#Scanner Basics

While you probably dream of writing graphically rich programs such as games or other software applications similar to those you use on a daily basis, doing so is complex--at least in Java--and it is probably wise to start with something a bit more practical albeit less visually pleasing.

The `Scanner` class was introduced in version 1.5 of the Java language. It provides a simple means of input for your programs. Using a scanner will allow you to get basic user input while your program runs.

###Importing
You'll need to import the Scanner class before you can use it.

```java
package christensenacademy.org.java;

import java.util.Scanner; // This is the line of code you need. Notice its position near the top of the file.

public class Example {
```

###Scanning Standard Input
```java
Scanner sc = new Scanner(System.in); // Instantiate a scanner that scans standard input
```
This will allow the user to input data through a terminal interface. Basically, in the same area that your `System.out.println()` statements appear, users will be able to type in data.

###Scanning a String
```java
Scanner sc = new Scanner("Hello, World!");
```



##Scanning a File
While getting user input using a scanner is helpful for simple programs, a more common thing you might want to do is actually use a Scanner to read in from a file.

**Note:** Programming competitions are typically formatted such that each problem involves input data stored in a file. One of my favorite Project Euler problems ([problem 54](http://projecteuler.net/problem=54)) also requires reading data in from a file.

```java
import java.util.Scanner;

public class Example {
  public static void main(String[] args) throws IOException { // "throws IOException" is needed to compile
   Scanner sc = new Scanner(new File("input.txt") );
   while(sc.hasNextLine)) {
     String line = sc.nextLine();
     // do stuff with each line of text from the file
   }
}
```


