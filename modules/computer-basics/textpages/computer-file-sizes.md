#Computer File Sizes

###First, a bit of history...

In the 1830's, a man named Charles Babbage invented and attempted to build the first computer. This computer, however, didn't work the same as computers do today. There were two major differences:

1. Babbage's "analytical engine", as it was called, was mechanical and did not use electricity. His machine was never actually completed, and his ideas were more or less lost for nearly a century. It wasn't until the late 1930's and early 1940's that people first began to build computers using electricity.
2. Babbage's machine also worked on the decimal system, the one we use in when learning mathematics. The decimal system has ten digits: 0, 1, 2, 3, 4, 5, 6, 7, 8, and 9. This makes sense because the prefix "deci" literally means ten. Modern computers don't use the decimal system. Instead, they use a simpler system called the binary system. Instead of using ten digits, binary numbers use only two: 0 and 1. It turns out that two digits is all we need to do math and everything else a computer is capable of doing.

Everything a computer does involves 1s and 0s. Every program your computer runs is nothing more than 1s and 0s. Every instruction your CPU (processor) follows is nothing more than 1s and 0s. Every file your computer stores is nothing more than 1s and 0s. Numbers, images, videos, songs, and everything else on your computer exists on your computer as nothing more than 1s and 0s. Every message sent over the Internet is really nothing other than 1s and 0s.

With this incredible fact in mind, we're ready, I think, to discuss computer file sizes

##Computer File Sizes

We use the term `bit` to refer to a 0 or 1 in a computer. We use the term `byte` to refer to a sequence of 8 bits. The following are all examples of bytes:

```
10011101
11100011
00000000
10011100
01110001
```

Even small files on your computer, such as Word documents, are often thousands of bytes. We use the term `kilobyte` or `KB` to refer to a thousand bytes.

Medium-size files, such as songs and programs (apps), are often millions of bytes. We use the term `megabyte` or `MB` to refer to millions of bytes.

Large-size files, such as videos, are often billions of bytes. We use the term `gigabyte` or `GB` to refer to billions of bytes.

You'll notice that the prefixes kilo, mega, and giga work exactly the same with computer file sizes as they do with any SI units (i.e., the metric system). For example, a kilometer is a thousand meters just as a kilobyte is a thousand bytes.

Kowabunga,

Cam


####A technical point that will probably never impact your life... but I find it interesting, so here you go:

Interestingly, these prefixes are all somewhat ambiguous when it comes to computer file sizes. This has to do with the fact that computers use the binary system, which uses powers of 2 instead of powers of 10. Whereas kilo usually means 10^3 (1000), many people in computer science take it to mean 2^10 (1024). It's actually unclear what people mean when they use the term kilobyte.

The following table attempts to highlight the fact that these prefixes could refer to a number based on the decimal system or a number based on the binary system. When your computer tells you the size of a file, realize that it is usually using the binary system (power of 2) value.

```
Prefix      Power of 10               Power of 2
kilo (K)    10^3  (1,000)             2^10 (1,024)
mega (M)    10^6  (1,000,000)         2^20 (1,048,576)
giga (G)    10^9  (1,000,000,000)     2^30 (1,073,741,824)
tera (T)    10^12 (1,000,000,000,000) 2^40 (1,099,511,627,776)
```

In my opinion, this is more confusing than it needs to be. I think that computer science should have embraced a new set of prefixes based on the binary number system instead of adopting the old SI prefixes that really only make sense with decimal numbers. Other people apparently feel the same way, which is why relatively recently new [binary prefix](http://en.wikipedia.org/wiki/Binary_prefix) names have been created. I doubt people will ever actually start using them, but they are fun to say; basically, just add "ebi" or "ibi" after the first letter of each of the old prefixes. For example, a megabyte (2^20 or 10^6) is now a mebibyte (2^20). I like this because it removes the ambiguity inherent in our current use of the SI prefixes to describe file sizes.


![](http://christensenacademy.org/img/signature.png)
