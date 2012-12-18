#Java Variables Intro
The goal of this post is to introduce what variables are and how they work in the Java programming language.

Variables in programming are different from variables in math.

In math, variables often represent values we don't know and are trying to figure out. In Java, and in programming in general, variables a more like containers that we can use to store objects or primitive values, such as numbers. The term "variable" actually makes more sense in programming, I think, because the contents of a variable may change or vary as the program runs.

So, if variables are used to store stuff, there must be some way to write code to tell variables what to store. We call a line of code that assigns a new value to a variable an *assignment statement*. Here are some examples of variables and assignment statements:

```java
public class VariableExample1 {
  public static void main(String[] args) {
    
    int favoriteNumber; // Declare a new integer variable called favoriteNumber
    
    favoriteNumber = 89; // Assign favoriteNumber an value
    System.out.println(favoriteNumber); // What value will be printed out?
    
    favoriteNumber = favoriteNumber + 3; // Assign favoriteNumber a new value.
    System.out.println(favoriteNumber); // What value will be printed out?
    
    favoriteNumber + 4; // Add 4 to favoriteNumber
    System.out.println(favoriteNumber); // What value will be printed out?
  }
}
```

There are two extremely important things to realize about the code above:

* Every variable has a type. The type of the variable in the example is int, which is short for integer. There are many, many other types to choose from, which I'll discuss in another post. For now, just realize that a variable cannot change types. The variable in the example above will always only be able to store an integer value.
* Assignment statements must have the variable receiving a new value on the left of the equals sign. The "stuff" on the right side of the equals sign must evaluate to value that can be assigned to the variable on the left. So, while `favoriteNumber = 3` makes perfect sense, `3 = favoriteNumber` makes no sense at all and is not valid Java code.

##Variable Naming Conventions

In the example above, I named my variable favoriteNumber. You may have found it strange how I combined the words favorite and number into one word and capitalized the letter N. It turns out, however, that this is the way you're supposed to name variables in Java. I like to call this naming convention `camelCase` because the capital letters look like humps of a camel. Here are some other rules for how you should name variables in Java:

* Use only alphanumeric characters (i.e., letters and numbers).
* Start with a lowercase letter (no numbers or other symbols allowed)
* No spaces in names.
* Try to make the names descriptive. This makes your code easier to understand.