#Three Types of Errors
There are three types of errors you'll encounter while programming: syntax errors, runtime errors, and logic errors.

Making errors is a natural part of programming. Even the best programmers make lots of errors. As you gain experience, you won't necessarily make fewer errors, but you will get very good at debugging (i.e., fixing the errors you make).

**Side Note:** I encourage you to do some searching for example of famous software errors. There are some really interesting example of major catastrophes that have occurred because of relatively simple programming errors.

##Syntax (Compile-Time) Errors

Every programming language has a certain syntax, or set of rules that must be followed when writing code. Basic syntax errors are difficult to avoid when programming, but they are usually easily fixed. Can you spot a syntax error in the following code?

```java
System.out.println("Hello World")
// The line above should end with a semicolon. Since it doesn't have one, there is a syntax error.
```

Syntax errors happen at "compile time". When you compile your source code your *.java files get converted into *.class files--that is, your plain text code gets converted into bytecode. This will only happen if the compiler doesn't catch any syntax errors in your code. If the compiler finds errors, your code will not be compiled; instead, you will be shown compiler error messages that give you hints as to what might be wrong with your code.

**Note:** In fancy IDEs like NetBeans and Eclipse, your code is automatically compiled for you as you program--actually, sometimes you need to save your code before it gets compiled, but the point is that you never have to explicitly tell the IDE to compile your code. The little red error messages you get are the error messages from the compiler.

##Runtime Errors
Runtime errors occur while the program is running--duh! Just because a program compiles correctly doesn't mean something bad won't happen while the program actually runs. Runtime errors will generally cause your program to crash. When this happens, you will be shown an error message that may help you spot the error.

###Example
```
Scanner sc = new Scanner(System.in);
double x = sc.nextDouble();
```

If the user of this program were to type in `7.2`, then the program would work fine because the scanner expected a double. But, if the user were to type in `hello`, the program would crash due to a runtime error.

Other common examples of runtime errors include:

* Using a Scanner to read in from a file that does not exist
* Trying to access an element of an array at a location that is beyond the bounds of the array
* Trying to access a character in a String at a location that is beyond the length of the String
* Running out of computer memory

##Logic Errors
Sometimes your program runs without runtime errors but doen't do what you wanted it to do. This type of error is a logic error and can be the most difficult type of error to spot and fix. For example, imagine you designed a video game in which bad guys gained health when you hit them instead of losing it. This type of thing is what we refer to as a logic error.
