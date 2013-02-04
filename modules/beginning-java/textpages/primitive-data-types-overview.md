#Primitive Data Types Overview

While Java is an object-oriented programming language, there are still some things in it that have nothing to do with objects; namely, Java has *primitive data types*, which some people refer to simply as *primitives*.

Primitive data types are used to store integers, floating point numbers, booleans, and characters. If you'd like a more detailed discussion of these concepts, or if you have never heard of integers, floating point numbers, booleans, and characters before, please visit the [binary module](http://christensenacademy.org#binary).

###No State or Behavior
It's important to realize that these primitive data types only serve the purpose of storing simple data. Unlike objects, they do not have **state** and **behavior**. Primitives certainly can't *do* anything, and the only "state" they maintain is the single value they hold, which is either an integer, floating point number, character, or boolean value.

###Literals
Every primitive type has a "literal" representation of values of that type.

* For integer values, we simply type numbers: `0`, `-8`, `12452`, and so on.
* For floating point values, we simply type numbers with decimal points: `2.34`, `-8.8883`, and so on.
* For character values, we simply type the character in between single quotes: `'a'`, '`b'`, `'c'`, `'1'`, `'2'`, `'3'`, `'!'`
* For boolean values, we simply type `true` or `false`

Interestingly, the only object (i.e., non-primitive data type) that also has a literal representation is a String, which is just a sequence of characters inside of double quotes: `"This is a string!!!"`
