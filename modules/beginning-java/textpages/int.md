#Integers
`byte`, `short`, `int`, and `long` are used to store integer values--which, if you're interested, uses the two's compliment encoding scheme for signed integers. The only difference between these types is the number of bits used for each:

* byte: 8 bits (duh!) [-128, 127] 
* short: 16 bits [-32,768, 32,767]
* int: 32 bits [-2,147,483,648, 2,147,483,647]
* long: 64 bits [-9,223,372,036,854,775,808, 9,223,372,036,854,775,807]

For most of the programs you write, you'll use `int`, and sometimes you'll use `long`. Most Java programmers that I know don't use `short` and `byte` very often if at all.

The important thing is to make sure you always choose a type that's big enough. If, for example, you were to use an `int` to store the value of the current U.S. national debt, it wouldn't be large enough, and you would get very strange, unpredictable results due to [integer overflow](http://en.wikipedia.org/wiki/Integer_overflow). **Question:** What data type should we use for currency? This is actually a tricky question...

Believe it or not, but some numbers are even too big to even fit in a `long`. [Project Euler](http://projecteuler.net/) often presents problems that stretch the limits of modern computers. Sometimes this involves working with really, really large numbers.

###Integer Literals

We use the term "literal" to refer to when we literally type numbers into our programs. For example, in the statement `int students = 12`, `students` is the variable, and `12` is the integer literal.

##Floating Point Numbers

##Booleans
A `boolean` stores one of two values: `true` or `false`.

###Boolean Literals
`true` and `false`. That's it.

##Characters

##Strings
In Java, a sequence of characters is called a String. Strings in Java are strange in that they aren't exactly primitive types and they aren't exactly objects either. One of the main things that makes Strings more like primitive types than objects is that you can use string literals like `"Hello World"`. Regular objects don't have literals. Just primitive data types and Strings have literals.


