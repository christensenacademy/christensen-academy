#Boolean Expressions

A *boolean* is either `true` or `false`. Boolean values allow us to use *logic* in our programs. Consider the following bit of code:

```java
double distance = Math.random()*5; // random number between 0 and 5 gets assigned to the distance variable
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
var num1:Number = Math.ceil((Math.random()*6); // generates a random integer from 1 to 6
var num2:Number = Math.ceil(Math.random()*6);

num1 < num2 // '<' means 'less than'
num1 <= 5 // '<=' means 'less than or equal to'
3 > num1 // '>' means 'greater than'
3 >= num1 // '>=' means 'greater than or equal to'
num1 == num2 // '==' tests for equality 
num1 != 4 // The '!' means 'not'; hence '!=' means 'not equal to'
```

**Note:** It's easy to confuse the assignment operator `=` with the equality comparison operator `==`. Just remember that when you want to compare things you need to use `==`, not `=`. Honestly, I feel like a lot of programming languages would have been wise to use a differnt symbol than `=` for assigning values to variables because all programmers inevitably use `=` accidentally when they really meant to use `==`.

**Note:** `!=` and `==` can be used to compare Strings as well as Numbers: `"hello" == "hello"` evaluates to true, but `"Hello" == "hello"` evaluates to false.

###Boolean Variables
It may be useful every once in a while to create a boolean variable to store either true or false.
```java
var example1:Boolean = true;
var example2:Boolean = Math.random()*6 < 3;
```

###Logical Operators
We can combine boolean expression with `||` and `&&` to make more complex expressions.

`||` is the logical OR operator. Example: `3 < 7 || 3 > 10`. This complex expression will be true of either `3 < 7` OR `3 > 10` is true. In this case, just `3 < 7` is true, and even though `3 > 10` is false, the entire expression `3 < 7 || 3 > 10` is true.

`&&` is the logical AND operator. Example: `4 <= 9 && 3 < 2`. This complex expression will evaluate to false. In order for it to be true, the expression to the left of `&&` and the expression to the right of `&&` would have needed to be true.

####Truth Table
```java
true && true // true
true && false // false
false && true // false
false && false // false

true || true // true
true || false // true
false || true // true
false || false // false
```

###Not (!)
While the `!` symbol can be placed next to the `=` to mean "not equal to" (e.g., `3 != 4`), it can also be used to get the opposite boolean value from an entire expression.

```java
var example:Number = 3;
example > 4 // false
!(example > 4) // true

var exampleBool:Boolean = true;
!exampleBool // false
```

###Parenthesis
You can also use parenthesis to organize complex boolean expressions.
```java
(( 3 <= 3 && ( 4 < 3 || 9 == 4 )) || "Hello" == "Hello" )
```
This is obviously difficult to read, and I recommend avoiding using expressions like these unless absolutely necessary.

Kowabunga,

Cam
