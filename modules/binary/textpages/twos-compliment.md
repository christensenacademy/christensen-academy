#Two's Compliment

We know that computers use the binary number system, but that doesn't tell the whole story. There are still many unanswered questions, such as "How many bytes does each number actually take up?" and "How do we represent negative numbers when all a computer knows are 1s and 0s?" The purpose of this textpage is to answer these questions.

Another important unanswered question is "How do we represent non-integer values, such as 2.357, in binary?" Answering this question requires explaining how computers work with floating-point numbers, which I'll explain in a different textpage.

##Size of Integers
At first, you might assume that the binary number `110` would only take three bits to store in the computer. However, it turns out that this assumption would be false. For a variety of reasons, integers are actually one or more bytes. So, instead of just `110`, the computer would actually store `00000110`, or more likely `00000000 00000000 00000000 000001000`, which is a 32-bit (4-byte) integer.

If you ever find yourself writing Java programs, you will given the ability to choose what size of integer you want to work with. You might choose to work with a byte (8 bits), a short (16 bits), an int (32 bits), or a long (64 bits).

With this in mind, we should be ready to tackle the problem of storing negative numbers in a computer.

THIS DOCUMENT IS UNFINISHED