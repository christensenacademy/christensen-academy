#Beginning ActionScript
##Numbers, Strings, and Arrays
####by Cameron Christensen (2012)

**Goal:** By the end of the module, you should be able to create your own unique computer game.

* [Working with Numbers](#working-with-numbers)
* [Working with Strings](#working-with-strings)
* [Arrays](#arrays)

#Working with Numbers and Strings
##Working with Numbers
As you saw previously, you can use number variables and literals to perform basic mathimatical operations. This section just covers a few more useful things you can do with numbers.

###Advanced Assignment
```java
var pebbles:Number = 1;
pebbles += 2; // pebbles now has a value of 3
pebbles += 2; // pebbles now has a value of 5

var luckyCharms:Number = 1;
luckyCharms *= 3; // luckyCharms now has a value of 3
luckyCharms *= 3; // luckyCharms now has a value of 9

var slicesOfToast:Number = 8;
slicesOfToast -= 4; // slicesOfToast now has a value of 4

var bananas:Number = 5;
bananas /= 2; // bananas now has a value of 2.5

bananas++; // bananas now has a value of 3.5
bananas--; // bananas now has a value of 2.5
```
###Using Built-In Math Functions
```java
Math.abs(-3); // returns the absolute value of -3
Math.ceil(2.3); // returns the "ceiling" of 2.3, which is 3
Math.floor(2.7); // returns the "floor" of 2.7, which is 2. This is sometimes known as truncation
Math.round(2.5); // returns 3 as you would expect
Math.max(2, 5, 9, 4.6); // returns 9, which is the largest number
Math.min(2, 5, 9, 4.6); // returns 2, which is the smallest number
Math.pow(2, 3); // returns 8, which is the value of 2 raised to the third power
Math.sqrt(81); // returns 9, which is the square root of 81

Math.random(); // returns a pseudo-random value between 0 and 1
Math.random()*10; // returns a pseudo-random value between 0 and 10
Math.ceil(Math.random()*10); // returns a random integer between 1 and 10
Math.ceil(Math.random()*10 + 5); // returns a random integer between 6 and 15
```

**Note:** These built-in functions are all part of the Math class. The [official ActionScript 3.0 reference](http://help.adobe.com/en_US/FlashPlatform/reference/actionscript/3/Math.html) has a complete list of everything you can do with Math.

##Working with Strings
There are a lot of things we can do with strings. You already learned two of the most important ones: concatenation and converting to and from numbers. Here's a quick review:

```java
// concatenation
"Gr" + 8 + "!" // this expression evaluates to "Gr8!"

// converting numbers to strings
"" + 4 // this expression evaluates to "4"

// converting strings to numbers
Number("89") // this expression evaluates to 89
```

###String Methods
Remember how movie clip instances have properties like `alpha` and `height`? We were able to do things like `ghost.alpha = 0.5`, which assigned a new value to the alpha property of an instance named ghost. Like movie clip instances, strings have a property too:

```java
var example:String = "Hello World";
trace(example.length); // prints 11 because there are 11 characters in the string
```
**Note:** Unlike the properties of instances, the length property of Strings cannot be set directly; all it's good for is telling you how long the string is.

It turns out that `length` is the only property of strings. Instead of properties, strings have a lot of *methods*. Just as properties are variables attached to an instance, methods are functions attached to an instance. Here are some examples of useful string methods:

```java
var example:String = "Hello World";

example.indexOf("llo"); // returns 2, which is the position of the first occurrence of "llo" in "Hello World"
// Note: Each character has a position in the string. Numbering starts at zero with the leftmost character
example.lastIndexOf("o"); // returns 7, which is the position of the last occurrence of "o" in "Hello World"
example.lastIndexOf("kowabunga"); // returns -1 because "kowabunga" does not occur in "Hello World"
example.substr(0,5); // returns "Hello", which is the substring from position 0 up to but not including position 5
example.toUpperCase(); // returns "HELLO WORLD"
example.toLowerCase(); // returns "hello world"
```

**Note:** These methods do not change the value of the string variable; they just return a new string. If you wanted to change the value of a string variable, you'd have to do something like `example = example.toUpperCase();`.

**Note:** These are just some of the methods for strings. The [official ActionScript 3.0 reference](http://help.adobe.com/en_US/FlashPlatform/reference/actionscript/3/String.html) has a complete list of everything you can do with String.

##Arrays


