#Three Types of Errors
There are three types of errors you'll encounter while programming: syntax errors, runtime errors, and logic errors. 

Making errors is a natural part of the programming process. As you gain experience, you won't necessarily make fewer errors, but you will get very good identifying and fixing errors. We use the term *debugging* to refer to this process of fixing errors, or "bugs", in our code.

##Syntax (Compile-Time) Errors

Every programming language has a certain syntax, or set of rules that must be followed when writing code. Basic syntax errors are difficult to avoid when programming, but they are usually easily fixed.

###Example

```java
System.out.println("Hello World")
// The line above should end with a semicolon. Since it doesn't have one, there is a syntax error.
```

Syntax errors are detected by the compiler at "compile time." When such an error is detected, you will be shown a message that helps you find it and fix it. You must fix all of these errors before you can successfully compile and run your program.

##Runtime Errors
Runtime errors occur while the program is running. Just because a program compiles correctly doesn't mean your code is error free. Runtime errors will generally cause your program to crash. When this happens, you will be shown an error message that may help you spot the error, but fixing runtime errors is generally a bit trickier than fixing syntax errors.

###Example
```
Scanner sc = new Scanner(System.in);
double x = sc.nextDouble();
```

If the user of this program were to type in `7.2`, then the program would work fine because the scanner expected a double. But, if the user were to type in `hello`, the program would crash due to a runtime error.

Other common examples of runtime errors include:

* Using a Scanner to read in from a file that does not exist
* Trying to access a character in a String at a location that is beyond the length of the String
* Running out of computer memory

##Logic Errors
Sometimes an error-free program might not work quite right. We refer to this sort of thing as a *logic error*. For example, imagine you designed a video game in which bad guys gained health when you hit them instead of losing it. This would be a logic error.

Logic errors can be the hardest type of error to find and correct. Expert programmers are good at creating tests to make sure their programs work as expected.

![](http://christensenacademy.org/img/signature.png)
