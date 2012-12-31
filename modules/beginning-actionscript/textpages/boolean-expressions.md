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
var example1:Boolean = true;
var example2:Boolean = 34 < 22; // the boolean expression evaluates to false, hence example2 now stores false
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

Kowabunga,

Cam
