#Primitive Data Types in Java

While Java is an object-oriented programming language, there are still some things in it that have nothing to do with objects; namely, Java has *primitive types*.

Primitive data types are used to store integers, floating point numbers, booleans, and characters. If you're unsure what these things are or are merely in need of a refresher, I recommend you visit the module on [binary](http://christensenacademy.org/#binary).

##Integers
`byte`, `short`, `int`, and `long` are used to store integer values using the two's compliment encoding scheme. The only difference between these types is the number of bits used for each:

* byte: 8 bits, duh [-128, 127] 
* short: 16 bits [-32,768, 32,767]
* int: 32 bits [-2,147,483,648, 2,147,483,647]
* long: 64 bits [-9,223,372,036,854,775,808, 9,223,372,036,854,775,807 ]

Make sure you always choose a type you're sure will be big enough. If, for example, you were to use an `int` to store the value of the current U.S. national debt, it wouldn't be large enough, and you would get very strange, unpredictable results. **Note:** You really shouldn't be storing money using an int in the first place unless you don't care about cents.

Believe it or not, but some numbers are even too big to even fit in a `long`. [Project Euler](http://projecteuler.net/) often presents problems that stretch the limits of modern computers. Sometimes this involves working with really, really large numbers.

###Integer Literals

##Floating Point Numbers

##Booleans
A `boolean` stores one of two values: `true` or `false`.

###Boolean Literals
`true` and `false`. That's it.

##Characters

##Strings
In Java, a sequence of characters is called a String. Strings in Java are strange in that they aren't exactly primitive types and they aren't exactly objects either. One of the main things that makes Strings more like primitive types than objects is that you can use string literals like `"Hello World"`. Regular objects don't have literals. Just primitive data types and Strings have literals.


