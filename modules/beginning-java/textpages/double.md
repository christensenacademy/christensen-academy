#Double

In Java, the primitive data type `double` is used to store floating point values, which are essentially all of the numbers that aren't integers, such as 3.4 and -45.298.

`double` stores a 64-bit floating point number, and `Double`s kid brother, `float`, stores a 32-bit floating point number. `double` is almost always used instead of `float` because it holds larger numbers and maintains greater precision.

##Floating Point Literals
In the code, we call things like `12.3` and `4.5` *literals*. The default type of a literal is a `double`. Interestingly, while `double x = 3.3;` works just fine, `float y = 3.3` does not. If you want to specify a literal as a `float`, you must add the suffix `F`; for example, `float y = 3.3F`.

**Note:** You can  write floating point literals in scientific notation as follows: `double x = 1.2e8;`

##Int vs. Double
`double` is considered a more "inclusive" type than `int` because it is easier to convert form `int` to `double` than `double` to `int`. For example, `int x = 10.3;` will not compile, but `double x = 4` will compile just fine, which makes sense considering that data would be lost converting from a `double` to an `int`.

Furthermore, when performing basic math operations on `int`s and `double`s, if both an `int` and a `double` are involved in the same operation, such as when we divide 3.0 by 2 (`3.0/2`), the `int` (in this case, 2) will first get converted to a double before the division takes place. The expression will evaluate to a double, which in this case would be 1.5.

##Why Would You Ever Want to Use Int Instead of Double?
If you understand how floating point numbers work, you'll understand that they are not perfectly precise and that wierd things can happen when working with them. Consider the following classic example of the pitfalls of limited precision in floating point numbers:

```java
System.out.println(0.1+0.1+0.1); // The answer should be 0.3, right?
```

The output of the above program is actually `0.30000000000000004`. Seem crazy? It actually makes sense if you think deeply about how floating point numbers are actually stored in the computer, but I'll save that discussion for another time and place.

![](http://christensenacademy.org/img/signature.png)
