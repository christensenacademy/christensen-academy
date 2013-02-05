#Char

In Java, the `char` primitive data type is used for storing simple character data. If you're interested, Java characters are stored as 16-bit unicode characters.

*Note:* Although we sometimes work with the `char` data type, we more often work with `String`s, which are sequences of characters.

###Literals
`char` literals look like `a`, `b`, `c`, `1`, `2`, `3`, `!`, and so on.

Considering the fact that there are over 100,000 unique characters we can stor in a `char`, there obviously must be another syntax for specifying `char` literals. What we can do is use [unicode values](http://en.wikipedia.org/wiki/List_of_Unicode_characters) as follows: `char x = '\u1581;`.
