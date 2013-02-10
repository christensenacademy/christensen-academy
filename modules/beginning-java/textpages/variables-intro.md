#Java Variables Intro
Variables in programming are different from variables in math. In math, variables often represent values we don't know and are trying to figure out. In Java and other programming languages, variables a more like containers that store objects or primitive data type values.

So, if variables are used to store stuff (i.e., objects and primitive values), there must be some way to write code to create new variables and tell them what to store. We call a piece of creates a new variable a **variable declaration**, can we call a piece of code that assigns a new value to a variable an **assignment statement**. Here are some examples of code that stores different integer values in a variable using assignment statements:

```java
  int favoriteNumber; // Declare a new integer variable called favoriteNumber
  
  favoriteNumber = 89; // Assign favoriteNumber an value
  System.out.println(favoriteNumber); // Prints out 89
  
  favoriteNumber = favoriteNumber + 3; // Assign favoriteNumber a new value.
  System.out.println(favoriteNumber); // Prints out 92
  
  favoriteNumber + 4; // Add 4 to favoriteNumber
  System.out.println(favoriteNumber); // Prints out 92
```

There are three extremely important things to realize about the code above:

* **Every variable has a type.** The type of the variable in the example is int, which is short for integer and is a primitive type, not an object. There are seven other primitive types to choose from and an almost limitless number of types of objects to choose from. For now, just realize that a variable cannot change types once it has been declared. The variable in the example above will always only be able to store an integer value.
* **Assignment statements must have the variable receiving a new value on the left of the equals sign.** The "stuff" on the right side of the equals sign must evaluate to value that can be assigned to the variable on the left. So, while `favoriteNumber = 3` makes perfect sense, `3 = favoriteNumber` makes no sense at all and is not valid Java code.
* Whenever a variable name appears anywhere other than on the left-hand side of an assignment statement, the variable will be *evaluated* as the primitive value or object it is currently storing. In the example above, the variable name was simply replaced with the value the variable was storing, which was different at different points in the program.

##Other Types of Variables

In the example above, we only used one type of variable--an "int"--but you will will quickly find that there are many types of variables you'll be working with in your programs. These variables can be thought of as coming in two major categories: primitive data types and objects.

###Primitive Data Types
For storing simple, basic forms of data, Java has eight primitive data types, wich will be described in more detail elsewhere. Basically, these data types are for storing things like numbers and text. In the example above, `int` is a primitive data type, but there are 7 other primitive data types besides `int`. Here is another example of a primitive data type:

```java
double distance = 34.53221; // Assign the floating point number 34.53221 to the distance variable
System.out.println( distance * 2 ); // Print out the value held by the distance variable divided by two
```

###Objects
Objects are a bit more complex than primitive data types because they have *state* and *behavior*. Here's a quick example:

```java
Scanner sc = new Scanner( System.in ); // Instantiate a new Scanner object
String input; // Declare a new String object 
input = sc.nextLine(); // Have the scanner read the next line of input and assign that input to the "input" variable
System.out.println( input.length() ); // Print out the length of the input string.
```

Notice how we typed `sc.nextLine()` and `input.length()`. These are both examples of objects having *behavior*. Later on, we'll refer to this sort of thing as "calling a method on an object", but we'll wait until later to explain what that means.


##Variable Naming Conventions

In the example above, I named my variable favoriteNumber. You may have found it strange how I combined the words favorite and number into one word and capitalized the letter N. It turns out, however, that this is the way you're supposed to name variables in Java. I like to call this naming convention `camelCase` because the capital letters look like humps of a camel. Here are some other rules for how you should name variables in Java:

* Use only alphanumeric characters (i.e., letters and numbers).
* Start with a lowercase letter (no numbers or other symbols allowed)
* No spaces in names.
* Try to make the names descriptive. This makes your code easier to understand.

##Conclusion
To fully understand what variables are and how they work, you'll need to gain some real programming experience. I encourage you to continue trying to write interesting programs and push the limits of what you know.
