#Scanner Challenge

**Estimated Time:** 35 (60 with bonus) minutes, assuming that you already know a thing or two about the Java Scanner class.

There are three parts to this challenge, the third of which is an optional bonus problem. Each part will require you to use a scanner in a new way.

##Portfolio
Although there are three parts to the challenge, you should accomplish everything in a single file named `ScannerChallenge.java`.

##Part 1: Scanning a String

Consider the following string, which lists names and ages separated by spaces: `"Eric 28 Brooke 20 Cam 26"`

Your challenge is to create a new scanner that reads this string: `new Scanner("Eric 28 Brooke 20 Cam 26")`. Use the scanner to find the three integers and save them to `int` variables. Then, add them up and print out the answer. 

##Part 2: Scanning Standard Input

Create a new scanner that reads from standard input: `new Scanner(System.in);`. Assume that the form of the input will be the same as it was in the last example. That is, assume the user of your program will type a name, a space, an integer, a space, a name, a space, an integer, a space, a name, a space, an integer, then press enter.

As before, your program should add up the numbers and print out the result.

##Part 3 (BONUS): Scanning a Text File

First, you'll need to copy and paste the following text into a new file named `scanner-challenge.txt`.

```
Eric 28 Brooke 20 Cam 26
Matt 25 Ryan 24 Casey 18
JP 26 Jeff 25 Laura 21
Dom 1 Levi 2 Jonas 4
Nancy 54 Tom 53 Lucy 78
```

Then, you'll need to create a new scanner that reads from this file: `new Scanner(new File("scanner-challenge.txt"))`. This is a bit tricky for two reasons:

1. You need to make sure you modify the `public static void main(String[] args) {` line of your program to be `public static void main(String[] args) throws IOException {`.
2. You need to make sure that your `scanner-challenge.txt` file is in the right location. If you're using a simple IDE like Dr. Java, just make sure that the file is in the same folder as the .java and .class files. If you're using NetBeans, you may need to specify a "working directory." Usually, you can do this by right-clicking on the project, choosing properties, and finding where NetBeans lets you specify a working directory. Once you have your working directory specified, put your `scanner-challenge.txt` file there, and you should be good to go!

Once all of that is working and you can actually compile and run your program, then try to write code to print out five sums, one for each line.

**Note:** There is an easier but more advanced way of doing this using a while loop and the `.hasNextLine()` scanner method.
