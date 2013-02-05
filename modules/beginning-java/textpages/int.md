#Integers
`byte`, `short`, `int`, and `long` are used to store integer values--which, if you're interested, uses the two's compliment encoding scheme for signed integers. The only difference between these types is the number of bits used for each:

* byte: 8 bits (duh!) [-128, 127] 
* short: 16 bits [-32,768, 32,767]
* int: 32 bits [-2,147,483,648, 2,147,483,647]
* long: 64 bits [-9,223,372,036,854,775,808, 9,223,372,036,854,775,807]

For most of the programs you write, you'll use `int`, and sometimes you'll use `long`. Most Java programmers that I know don't use `short` and `byte` very often if at all.

The important thing is to make sure you always choose a type that's big enough. If, for example, you were to use an `int` to store the value of the current U.S. national debt, it wouldn't be large enough, and you would get very strange, unpredictable results due to [integer overflow](http://en.wikipedia.org/wiki/Integer_overflow).

Believe it or not, but some numbers are even too big to even fit in a `long`. [Project Euler](http://projecteuler.net/) often presents problems that stretch the limits of modern computers. Sometimes this involves working with really, really large numbers.

###Truncation
The term truncation refers to the process of "chopping off" the digits after the decimal point in a floating point number. Sometimes this is also described as taking the "floor" of a number. Here are some examples:

* 4.5 truncates to 4
* 0.07 truncates to 0
* 2.99999 truncates to 2
* -3.892 truncates to -3

In Java, there are two situations in which you need to realize trucation is happening:

1. When dividing an int by an int, if the result is not an integer, it will be become one: `5/2` is not `2.5`; instead, the result truncates to `2`.
2. When casting a floating point value to an int: `(int)4.9` truncates to `4`

###Integer Literals
In our code, we call things like `3`, `-5`, and `834` "literals". As Java programmers, we use integer literals quite a bit. Consider the following examples:

```java
int x = 4; // Assign a literal to a variable
x = x + 3; // Use a literal as part of a math expression
```

Interestingly, while there are four primitive data types for integers, there are only two types of integer literals. The first type is just a normal integer value, such as `7` or `-55`. These values are of type `int` and can be assigned to all four types of integer variables:

```java
byte w = 10; // the int 10 is "narrowed" to a byte
short x = 10; // the int 10 is "narrowed" to a short
int y = 10;
long z = 10; // the int 10 is "widened" to a long
```

The second integer literal type is only used for integer values bigger than the max int size: 2147483647. For such literals, the Java language requires you to add the suffix `L` to the literal. Note: You can also add the suffix `l` (lowercase `L`), but this looks like the digit one, so I'd avoid using it if I were you.

```java
long x = 2147483647; // Compiles
long y = 2147483648; // Does not compile
long z = 2147483648L; // Compiles
```

####Other Bases
I'm not quite sure why you'd ever want to do this, but you are allowed to specify integers in binary and hexadecimal form as follows:

```java
// add "0b" to the front of a binary number to let the compiler
// know this is a binary number, not a decimal number.
int x = 0b110011;

// add "0x" to the front of a hexadecimal number to let the compiler
// know this is a hexadecimal number, not a decimal number
int y = 0xfa078d;
```

For a nice recap of all of the things you can do with integer literals, check out the [Wikipedia Page on Java Syntax](http://en.wikipedia.org/wiki/Java_syntax#Literals).
