#Binary, Octal, Decimal, and Hexadecimal Numbers

Note: Whenever I refer to a number by writing out its name, you may assume that that number is a base 10 (i.e., "normal") number.

###Number Systems
Probably because we have ten fingers on our hands, we also have ten digits in our number system. In fact, sometimes fingers are even called digits. The ten digits we use when writing numbers are 0, 1, 2, 3, 4, 5, 6, 7, 8, and 9. Pretty much every human being has grown up learning how to count using these digits, so most of accept this system counting without wondering if there are other, different ways of going about it.

In computer science, it turns out that the binary system, which only uses the digits 0 and 1, works very well. In fact, all computers use the binary system. Octal, which has eight digits, and Hexadecimal, which has sixteen digits, are also useful in computer science. The purpose of this textpage is to explain how each of these number systems works.

Let's start with some concrete examples of the numbers "one" through "twenty."

```
Base 2      Base 8      Base 10     Base 16
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

Sound crazy? It's not as crazy as you might think, and when working with computers, its often useful to have a basic understanding of how different number systems work, especial binary (base 2), octal (base 8), and hexadecimal (base 10).

The key is understanding how place value works. Once you've done that, you'll easily be able to work with any number system and even invent your own.

**Note:** Unless indicated otherwise, you should assume that all numbers in this document are the same as the ones you're used to. That is, assume they are base 10 (the decimal system) numbers. Because base 10 numbers are so ingrained in our way of thinking, we often need to translate numbers from other number system back into the base 10 number system in order to really understand them.

###Digits
The basic difference between number systems is in the number of digits they use to represent numbers. Here are some examples of the digits used in a few different number systems:

```
Binary (Base 2): 0 1
Octal (Base 8): 0 1 2 3 4 5 6 7
Decimal (Base 10): 0 1 2 3 4 5 6 7 8 9
Hexadecimal (Base 16): 0 1 2 3 4 5 6 7 8 9 a b c d e f
```

Amazingly, even though the binary number system only uses two digits (0 and 1), you can still represent all of the same numbers in binary as you can in any of the other number system. Here a quick comparison of the numbers 1-10 in decimal and binary:

```
(Decimal, Binary)
(1, 1)
(2, 10)
(3, 11)
(4, 100)
(5, 101)
(6, 110)
(7, 111)
(8, 1000)
(9, 1001)
(10, 1010)
```

###Place Value

No matter what number system we're using, when we write numbers, each digit has a certain *place value*. For example, the decimal (base 10) number 32592 has five digits, each of which is worth a different amount. Here's a quick breakdown of what each digits is worth:

```
32592 = 30000 + 2000 + 500 + 90 + 2
```

Notice digits on the left are worth far more than the digits on the right. In the base 10 number system, we calculate the value of each digit based on the number 10 (duh!). Each "place" in a number is worth ten times more than the place to the right. Hence, in the decimal number system, we have the "ones place", "tens place", "hundreds place", "thousands place", and so on.

In other number systems, place value is not based off the number 10. Instead, place value is based off whatever the base of the number system is.

Let's take the octal number system (base 8) as an example. Place value in this system is based off of eight, so each "place" in a number is worth eight times more than the place to the right. So, instead of having "ones place", "tens place", "hundreds place", and so on, we have "ones place", "eights place", "sixty-fours place", and so on. To find the value of the next place, just multiply by eight.

With this in mind, lets think about what the value of this octal number is in base 10: 1582.

Ha! Gotcha! Just seeing if you're awake. 1582 isn't an octal number because octal numbers only use the digits 0-7! 

Let's try this octal number instead: 736

```
If 736 is an octal number (base 8), what is the equivalent in decimal (base 10)?

Since the 6 is in the ones place, it is worth 6

Since the 3 is in the eights place, it is worth 3*8, which is 24

Since the 7 is in the sixty-fours place, it is worth 64*7, which is 448

6 + 24 + 448 = 578 in decimal

Thus, 736 (base 8) is the same as 578 (base 10). These are just two different ways of representing the same number!
```

###Binary
Binary works the same way, but it only has two digits: 0 and 1. Thus, place value is calculated so that each place is twice as bit as the one before it.

![](http://christensenacademy.org/img/signature.png)
