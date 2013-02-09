#Double

In Java, the primitive data type `double` is used to store floating point values, which are essentially all of the numbers that aren't integers, such as 3.4 and -45.298.

Tchnically speaking `double` stores a 64-bit floating point number (IEEE 754). `Double`s kid brother, `float`, stores a 32-bit floating point number. The standard convention is to use `double` instead of `float` unless you have a good reason for doing otherwise. The basic difference between `double` and `float` is that a `double` can (a) hold larger numbers and (b) maintain greater precision.

###Floating Point Literals
In the code, we call things like `12.3` and `4.5` *literals*. Here are some interesting facts about Java floating point literals:

* The default type of a literal is a `double`. Interestingly, while `double x = 3.3;` works just fine, `float y = 3.3` does not. If you want to specify a literal as a `float`, you must add the suffix `F`; for example, `float y = 3.3F`.
* You can  write floating point literals in scientific notation as follows: `double x = 1.2e8;`

##Int vs. Double


![](http://christensenacademy.org/img/signature.png)
