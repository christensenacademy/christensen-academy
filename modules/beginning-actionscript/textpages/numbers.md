#Numbers in ActionScript 3.0
```java
// declare a new variable named 'dollars' and assign it a value
var pesos:Number;
pesos = 11;

// same as above but in a single line
var dollars:Number = 5.99;

// note: only use the 'var' keyword when declaring a variable (i.e., the first time you use it)
// note: when we type values like 5.99, we refer to these as Number literals (as opposed to variables)

// order of operations works as you'd expect
dollars = (4+3*2)/2; // evaluates to 5

// remember, the right side of an assignment statement always evaluates to a value
dolloars = dollars*dollars + 2; // evaluates to 27
```

####Modulus Operator (for Finding Remainders)
```java
var remainder:Number = 12%5; // evaluates to 2 because 12/5 has a remainder of 2
remainder = 32%4; // evaluates to 0 because there is no remainder when 32 is divided by 4
```

####Convert Numbers To and From Strings
```java
var value:Number = 3;
var text:String = "" + value; // converts the Number variable to a string
text = "" + 5; // converts the Number literal to a string

value = Number("548"); // converts the String literal "548" to a Number and assigns it to value
text = "32.592";
value = Number(text); // converts the String variable to a Number and assigns it to value
```

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
