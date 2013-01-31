#Comments in Java
Because programming can be difficult, it's important for programmers to find ways to make it easier. A common practice in programming is to leave comments in the code to explain and clarify things that might otherwise be confusing. In the Java programming language, there are two ways to leave comments. Single-line comments start with `//`. Multi-line comments start with `/*` and end with `*/`.

```java
// This is an example of a single-line comment
 
/* This is an example 
  of a comment that spans
  multiple lines. It is common practice
  to leave comments directly above the code they pertain to.*/
  
/* This is a method that computes a factorial */
public static int factorial(int n) {
    if (n == 0) return 1; // You may also leave comments at the end of lines
    else return n * factorial(n-1);
}
```

My code examples in these textpages will have lots of comments aimed at helping you understand what the code is doing.
