#Binary, Octal, Decimal, and Hexadecimal Numbers

**Note:** Whenever I refer to a number by writing out its name in the following text, you may assume that that number is a base ten (i.e., "normal") number.

##Intro
Probably because we have ten fingers on our hands, we also have ten digits in our primary number system, the base ten number system. In fact, sometimes we even refer to our fingers as "digits."

The ten digits we use when writing numbers are 0, 1, 2, 3, 4, 5, 6, 7, 8, and 9. Pretty much every human being has grown up learning how to count using these digits, so most of accept this system counting without wondering if there are other, different ways of going about it.

In computer science, it turns out that the binary number system, which only uses the digits 0 and 1, works very well. In fact, all computers use the binary system. Octal, which has eight digits, and Hexadecimal, which has sixteen digits, are also useful in computer science, mainly because of how easy it is to convert numbers between binary, octal, and hexadecimal. The purpose of this textpage is to explain how each of these number systems works.

Let's start with some concrete examples of the numbers "one" through "twenty."

```
Base Two    Base Eight  Base Ten    Base Sixteen
Binary      Octal       Decimal     Hexadecimal

00000       00          00          00
00001       01          01          01
00010       02          02          02
00011       03          03          03
00100       04          04          04
00101       05          05          05
00110       06          06          06
00111       07          07          07
01000       10          08          08
01001       11          09          09
01010       12          10          0a
01011       13          11          0b
01100       14          12          0c
01101       15          13          0d
01110       16          16          0e
01111       17          15          0f
10000       20          16          10
10001       21          17          11
10010       22          18          12
10011       23          19          13
10100       24          20          14

.           .           .           .
.           .           .           .
.           .           .           .

1011001     131         89          59
```

Look crazy? It's not as crazy as you might think, and when working with computers, its often useful to have a basic understanding of how different number systems work, especial binary (base 2), octal (base 8), and hexadecimal (base 10). I'm assuming that if you passed the 2nd grade you already know how decimal (base ten) numbers work :-)

**Note:** The prefixes "bi," "oct," "deci," and "hex" all have meaning. "Bi" means "two." "Hex" means "six." "Oct" means "eight." And, "deci" means "ten."

##Base Ten ("Normal" Numbers)

Understanding "place value" is essential to understanding number systems. Consider the following example of a "normal" base ten (decimal) number.

```
32592

= 30000 + 2000 + 500 + 90 + 2
```

Notice digits on the left are worth more than the digits on the right. This is place value. The rightmost digit is always in the "one's place." Then, moving leftwards, we have the "ten's," "hundred's," "thousand's," and "ten-thousand's" places. Each place in the decimal system (base ten) is ten times greater than the spot to its right.

**Note:** Some people prefer to think of place value in terms of exponents. If you prefer, you can think about place value this way:

```
         One's place --> 10^0
         Ten's place --> 10^1
     Hundred's place --> 10^2
    Thousand's place --> 10^3
Ten-Thousand's place --> 10^4
```

**Key Idea:** In other number systems, place value is not based off the number ten. The binary system (base two), for example, has place values that are powers of two, not ten.

##Base Two (Binary Numbers)

**Key Idea:** Computer operate entirely on the binary system, and although we can type base ten numbers into our computers, the computer stores and manipulates all numbers in binary.

