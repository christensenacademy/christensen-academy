#Strings

In programming, strings are simply sequences of characters. Characters are the symbols we find on our keyboards, such as letters, numerical digits, punctuation marks, spaces, tabs, and more.

In Java, `char` is the primitive data type used to store individual characters, while `String` is a class used to store sequences of `char`s.

###Example
```java
char punctuation = 'h'; // Assign the letter 'h' to the variable punctuation.
String sentence = "Hello, World!"; // Assign the String "Hello, World!" to the variable sentence.
```

##`char`

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

**Note:** In the example above we use the `+` operator for concatenation. Quite honestly, this is a bit confusing because we also use the `+` operator for adding numbers together. Just realize that if a String is involved in the operation, Java will be concatenating things together instead of somehow trying to add an `int` and a `String` together or something. `String` is the more inclusive type, so it makes sense, I think, that other types of data would get converted into `String` form as opposed to the other way around.

###Another Example of Concatenation
```Java
int people = 8;
double poundsOfChicken = 3.12;
char punctuation = '!';
String message = "There are " + people + " people coming to our house for dinner, so I bought " +
                 poundsOfChicken + " pounds of chicken for us to eat" + punctuation;

/* Note: You can split long string expressions like this onto multiple lines
   if you end each line with the "+" operator.*/

System.out.println(message);
// Output: There are 8 people coming to our house for dinner, so I bought 3.12 pounds of chicken for us to eat!
```
##Methods

For a full list of the methods of the `String` class, you can go to the [official documentation](http://docs.oracle.com/javase/7/docs/api/java/lang/String.html#method_summary).

###`.length()`
Because `String` objects are objects not primitives, they have **behavior**; that is, they can **do** things. In order for an object to do something, we need to "call its methods." One such method for `String` objects is the `length()` method, which simply returns an integer telling you how many characters are in the string.

#####Exampe 1
```java
String s = "Programming rocks (as opposed to programming computers...)!";
System.out.println(s.length() ); // Output: 59
```
#####Example 2
```java
int length = "Hello, World!".length(); // length = 13
```

###`.charAt(int index)`

If you want to get the value of a specific `char` in a string, use the `.charAt()` method making sure to provide the index of the character you're interested in as an argument to the method.

**Note:** Indexes start at 0, not 1 as some people might expect.

```java
String s = "Hello";
char c = s.charAt(0); // c = 'H'
c = s.charAt(4); // c = 'o'
c = s.charAt(s.length()); // Error! The length of the string is 5, but there are only characters in positions 0-4.
```

###`.substring(int start, int end)`
Another useful `String` method is `substring()`. This method will requires you to provide two values (i.e,. pass two "arguments"): a starting position and an ending position. 

```java
String s = "Hello";
System.out.println(s.substring(1,3) ); // Output: "el"
System.out.println(s.substring(0,3) ); // Output: "Hel"
System.out.println(s.substring(0, s.length() ) ); // Output: "Hello"
```

There are two strange things about the way this works:
1. Numbering of characters in a string starts at 0.
2. The starting position value is inclusive, but the ending position value is not.

###`.equals(String s)`
The `.equals()` method is used for comparing strings. It turns out that you cant use `==` as you would with primitive data types to compare Strings. Check out this example:

```java
String s = "Hello";
System.out.println(s == "Hi"); // ERROR! Cannot use "==" to compare strings
System.out.println(s.equals("Hi")); // This is the right way to compare strings
```

##Immutability
`String` objects in Java are "immutable," which means that no method is capable of changing the state of the string. The `substring()` method is a perfect example because it does not modify or "mutate" the contents of the string. All it does is return a new string that is a substring of the old one.

```java
String s = "Hello";
s.substring(1,3); // This expression returns a new String, "el", but the value of s is still "Hello"
s = s.substring(1,); // Now s has a new value.
```

![](http://christensenacademy.org/img/signature.png)
