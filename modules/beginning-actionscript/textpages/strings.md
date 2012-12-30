#Strings
```java
// concatenation
"Gr" + 8 + "!" // this expression evaluates to "Gr8!"

// converting numbers to strings
"" + 4 // this expression evaluates to "4"

// converting strings to numbers
Number("89") // this expression evaluates to 89
```

###String Properties and Methods
```java
var example:String = "Hello World";
example.length; // evaluates to 11 because "Hello World" has 11 characters
example.indexOf("llo"); // returns 2, which is the position of the first occurrence of "llo" in "Hello World"

// Note: Each character has a position in the string. Numbering starts at zero with the leftmost character

example.lastIndexOf("o"); // returns 7, which is the position of the last occurrence of "o" in "Hello World"
example.lastIndexOf("kowabunga"); // returns -1 because "kowabunga" does not occur in "Hello World"
example.substr(0,5); // returns "Hello", which is the substring from position 0 up to but not including position 5
example.toUpperCase(); // returns "HELLO WORLD"
example.toLowerCase(); // returns "hello world"
```

**Note:** These methods do not change the value of the string variable; they just return a new string. If you wanted to change the value of a string variable, you'd have to do something like `example = example.toUpperCase();`. Unlike most objects in ActionScript 3.0, Strings are immutable (i.e., they cannot be changed).

**Note:** These are just some of the methods for strings. The [official ActionScript 3.0 reference](http://help.adobe.com/en_US/FlashPlatform/reference/actionscript/3/String.html) has a complete list of everything you can do with String.
