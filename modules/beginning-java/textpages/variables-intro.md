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

* **Every variable has a type.** The type of the variable in the example is `int`, which is short for integer and is a primitive data type, not an object. There are seven other primitive types to choose from and an almost limitless number of types of objects to choose from. For now, just realize that a variable cannot change types once it has been declared. The variable in the example above will always only be able to store an integer value.
* **Assignment statements must have the variable receiving a new value on the left of the equals sign.** The "stuff" on the right side of the equals sign must evaluate to value that can be assigned to the variable on the left. So, while `favoriteNumber = 3` makes perfect sense, `3 = favoriteNumber` makes no sense at all and is not valid Java code.
* Except for when they occur on the left-hand side of assignment statements, **variables are evaluated as the primitive value or object they are currently storing.**

###Primitive Data Types
For storing basic forms of data, Java has eight primitive data types, wich will be described in more detail elsewhere. Basically, these data types are for storing things like numbers and text. In the example above, `int` is a primitive data type, but there are 7 other primitive data types besides `int`. Here is another example of a primitive data type:

```java
double distance = 34.53221; // Assign the floating point number 34.53221 to the distance variable
System.out.println(distance/2); // Print out the value held by the distance variable divided by two
```

##Naming Conventions for Variables
Variable names, also called identifiers, should be written in "camelCase." Basically, this means that variables should not start with capital letters, and if they are composed of multiple words, every word after the first should start with a capital letter.

```java
int thisIsAValidButLongVariableName;
double x; // This works, but watch out for naming variable in such a way that their purpose is unclear.
int ticketsSold; // This is a good name because the purpose of this variable is clear.
```

Note also that varaible names can't have spaces in them or start with numbers.

###Reserved Keywords
Another thing to watch out for is accicentally naming a variable using a Java keyword like `int`, `double`, `final`, `class`, `return`, or any other word that has special meaning in the Java language.

Here's a link to a [wikipedia article](http://en.wikipedia.org/wiki/Java_syntax#Identifier) for more information on this topic.

![](http://christensenacademy.org/img/signature.png)
