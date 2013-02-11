#Scanner Basics
The `Scanner` class was introduced in version 1.5 of the Java language. It provides a simple means of input for your programs. Using a scanner will allow you to get basic user input while your program runs.

You'll need to import the Scanner class before you can use it.

```java
import java.util.Scanner; // This is the line of code you need. Notice its position near the top of the file.

public class Example {
  //rest of code goes here...
```
Notice that the import statement goes just above the class definition.

To create a new instance of the `Scanner` class, do the following:
```java
Scanner sc = new Scanner(System.in); // Instantiate a scanner that scans standard input
```
This will allow the user to input data through a terminal interface. Basically, in the same area that your `System.out.println()` statements appear, users will be able to type in data.

##Scanner Methods
For a complete list of all methods for Scanner objects, check out the [official documentation](http://docs.oracle.com/javase/7/docs/api/java/util/Scanner.html#method_summary).

**Note:** In the eyes of the scanner, values are separated by whitespace. This is just a default, and you can change it if you want to.

```java
/*
Assume a scanner object named sc exists and that the input it is scanning is the following:
  
  In 1981 a movie named Scanners was released.
  I personally found this movie mind blowing (literally).
*/
String firstWord = sc.next(); // Returns the string "In"
double year = sc.nextDouble(); // Returns the double 1981.0. Note: We could also have used sc.nextInt();
String restOfLine = sc.nextLine(); // Returns the rest of the line as a String: "a movie named Scanners was released."
String secondLine = sc.nextLine(); // Returns the entire second line of text.
```

###Watching Out for Errors
Using `nextInt()` and `nextDouble()` are risky because if the Scanner can't convert the string data it's looking at to the an `int` or `double`, a runtime error will occur. Actually, even `next()` is risky because the scanner may not actually have anything left to scan.

To safeguard agains these errors, you should use the following methods: `hasNext()`, `hasNextLine()`, `hasNextInt()`, and `hasNextDouble()`.

```java
double x = 0.0;
if(sc.hasNextDouble()){
  x = sc.nextDouble();
}
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

**Note:** You can also set up a scanner to read a String: `Scanner sc = new Scanner("Hello World")`. This can be useful from time to time, especially in programming competitions.


![](http://christensenacademy.org/img/signature.png)
