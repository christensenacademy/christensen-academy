#Strings

In programming, strings are simply sequences of characters. Characters are the symbols we find on our keyboards, such as letters, numerical digits, punctuation marks, spaces, tabs, and more.

In Java, `char` is the primitive data type used to store individual characters, while `String` is a class used to store sequences of `char`s.

###Example
```java
char punctuation = 'h'; // Assign the letter 'h' to the variable punctuation.
String sentence = "Hello, World!"; // Assign the String "Hello, World!" to the variable sentence.
```

##Char

In Java, the `char` primitive data type is used for storing simple character data. If you're interested in how exactly character data is encoded, Java characters are stored as [16-bit unicode characters](http://en.wikipedia.org/wiki/UTF-16).

*Note:* Although we sometimes work with the `char`s, we more often work with `String`s, which are sequences of characters.

###Literals
`char` literals look like `'a'`, `'b'`, `'c'`, `'1'`, `'2'`, `'3'`, `'!'`, and so on. Basically, just type a character between single quotes to form the literal.

Considering the fact that there are over 100,000 unique characters we can store in a `char` (think of all of the Chinese characters...), there obviously must be another syntax for specifying `char` literals. What we can do is use [unicode values](http://en.wikipedia.org/wiki/List_of_Unicode_characters) as follows: `char x = '\u1581';`. This character displays as a backwards-facing "C" shape.

##String Literals
Strings are technically objects in Java, but unlike other objects, objects of type `String` have a literal notation much like primitive data types have literal notations. `String` literals are simply a bunch of characters inside of quotes, such as `"Hello World"`, `":-)"`, and `"If I had a nickel for each time a woman complimented my programming skills..."`.

##Concatenation
Concatenation is a fancy term for joining two strings together. Consider this example of concatenation:

```java
String name = "Cam";
String message = "Hello, " + name + "!"; // Concatenate three strings and assign them to the message variable.
// The message variable now stores the string "Hello, Cam!"
```

**Note:** In the example above we use the `+` operator for concatenation. Quite honestly, this is a bit confusing because we also use the `+` operator for adding numbers together. Just realize that if a String is involved in the operation, Java will be concatenating things together, not adding.

###Concatenation with Primitives
```Java
int people = 8;
double poundsOfChicken = 3.12;
String 
```

###toString()

##Length

##Substring

###Immutable


![](http://christensenacademy.org/img/signature.png)
