#Three Types of Errors
There are three types of errors you'll encounter while programming: compile-time errors, runtime errors, and logic errors.

Making errors is a natural part of programming. Even the best programmers make lots of errors. As you gain experience, you won't necessarily make fewer errors, but you will get very good at debugging (i.e., fixing the errors you make).

**Side Note:** I encourage you to do some searching for example of famous software errors. There are some really interesting example of major catastrophes that have occurred because of relatively simple programming errors.

##Compile-time Errors
When you compile your source code your *.java files get converted into *.class files--that is, your plain text code gets converted into bytecode. This will only happen if the compiler doesn't catch any errors in your code. If the compiler finds errors, your code will not be compiled; instead, you will be shown compiler error messages that give you hints as to what might be wrong with your code.

**Note:** In fancy IDEs like NetBeans and Eclipse, your code is automatically compiled for you as you program--actually, sometimes you need to save your code before it gets compiled, but the point is that you never have to explicitly tell the IDE to compile your code. The little red error messages you get are the error messages from the compiler.

Once you fix all of your compiler errors, your program will compile and you can actually run it. However, this doesn't mean that your program won't have anymore errors in it. It still might have runtime and logic erros.

##Runtime Errors
This probably won't happen to you much as you're starting out writing Java programs, but eventually you'll encounter runtime errors. Your program will be running just fine and then all of a sudden an error will occur. When this happens, you'll get some information about the error that will hopefully help you figure out what went wrong. Two classic examples of this are trying to read from a file that doesn't exist and trying to access an element of an array that is beyond the length of the array.

If you don't have a clue what I'm talking about, you will. Fixing runtime errors can be tricky, but I personally find them the best way to learn. It forces you to think carefully about the programs you've written and understand them at a deeper level.

##Logic Errors
Sometimes your program runs without runtime errors but doen't do what you wanted it to do. This type of error is a logic error and can be the most difficult type of error to spot and fix. For example, imagine you designed a video game in which bad guys gained health when you hit them instead of losing it. This type of thing is what we refer to as a logic error.
