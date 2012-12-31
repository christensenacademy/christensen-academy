#Boolean Expressions

A *boolean* is either `true` or `false`. Boolean values allow us to use *logic* in our programs. Consider the following bit of code:

```java
double distance = 2.54;
if(distance < 3) {
  System.out.println("Target in Range");
} else {
  System.out.println("Target out of Range");
}
```

The example above would print out "Target in Range" because the *boolean expression* `distance < 3` evaluates to the *boolean value* `true`.

###Comparison Operators

In the example boolean expression above, we used the `<` comparison operator. Here are some more examples using other comparison operators:

```java
var num1:Number = 3;
var num2:Number = 4;

num1 < num2 // true. '<' means 'less than'
num1 <= 10 // true. '<=' means 'less than or equal to'
3 > num1 // false. '>' means 'greater than'
3 >= num1 // true. '>=' means 'greater than or equal to'
num2 == 3 // false. '==' tests for equality
num2 == 4 // true
num2 != 4 // false. The '!' means 'not'; hence '!=' means 'not equal to'
```

**Note:** It's easy to confuse the assignment operator `=` with the equality comparison operator `==`. Just remember that when you want to compare things you need to use `==`, not `=`. Honestly, I feel like a lot of programming languages would have been wise to use a differnt symbol than `=` for assigning values to variables because all programmers inevitably use `=` accidentally when they really meant to use `==`.

**Note:** `!=` and `==` can be used to compare Strings as well as Numbers.

###Boolean Variables
It may be useful every once in a while to create a boolean variable to store either true or false.
```java
var outOfAmmo:Boolean = true;
var reloading = false;

if( outOfAmmo ){
  reloading = true;
}
```

###Logical Operators
Sometimes you'll want to make a more complex boolean expressions. For example, imagine you were developing medical software that alerted a doctor when a patient's heart rate dipped below 40 bpm *OR* a raced above 200 bpm. We could write a two-part boolean expression using the logical OR operator `||` as follows:

```java
if( heartRate < 40 || heartRate > 200 ){
  trace("DANGER!");
}
```

Similar to the logical OR operator (`||`), there is a logical AND operator `&&`.

Kowabunga,

Cam
