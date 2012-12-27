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

Lastly, I should point out that comments are also used to create official code documentation. The idea with documentation is closely related to the idea of encapsulation, which is a fancy word people in the Java world are particularly fond of. Basically, the idea is that other programmers should be able to use the code you've written without needing to understand the details of how your code works. If you wrote good documentation, I shouldn't have any problem using the code you've developed. This will make more and more sense as your understanding of Java classes and objects evolves. For now, just realize that if you wanted to leave a comments to document your code, you would start the comment with `/**` and end it with `*/`.

If you'd like to know more about creating official documentation for your code, you should look into the Javadoc tool.

Kowabunga,

Cam
