#Java Platform vs. Java Programming Language
Understanding the differences between the Java Platform and the Java Programming language won't help you write your first program, but it may help you understand *why* you'd want to use Java in the first place and provide you with a deeper understanding of Java in general.

**Note:** Should you start reading this article and find it exceptionally confusing, just skip it for the time being. You might want to come back to these ideas later after you've gained more programming experience.

##Portability
*"Write once, run anywhere."*

In everyday language, we use the term *portable* to describe those things that can easily be transported from one place to another. My luggage, for example, is portable; my house, in contrast, is less portable.

Something similar applies to software with regards to portability. Some programs can run on many different computers; these programs are very portable. Other programs can only run on a small number of computers; these programs are seen as being less portable.

For example, if I were to develop a computer game using C++ on Windows, I would be able to create an executable file (my_awesome_game.exe) and give it to other people with Windows computers. They should be able to play it without any problems. However, if I gave the same file to someone with a Mac, it would not work on their computer. In this way, my game's portability was limited to Windows computers.

**In my opinion, the best thing about Java is its portability.** That is, you can write a program in Java and it should work on Windows, Mac, Android, iOS, and any other operating system that has the Java platform installed.

Understanding why Java programs are portable requires us to understand how Java programs work in comparison with how other programming languages work. For the purposes of this document, I'll discuss programming languages in three broad categories: traditional, virtual machine, and interpreted. Java is among the virtual machine variety.

##How Programs Work
###Step 1: Writing a Program
Here are some examples of code for computer programs written in three different languages. The job of a programmer is to write code like the following:

**Example Program in C++ (a Traditional Language)**
```c++
#include <iostream>
using namespace std;
void main()
{
  cout << "Hello World!" << endl;   cout << "Welcome to C++ Programming" << endl; }
```

**Example Program in Java Programming Language (a Virtual Machine Language)**
```java
public class HelloWorld {
  public static void main(String[] args) {
    System.out.println("Hello, World");
  }
}
```

**Example Program in Ruby (an Interpreted Language)**
```ruby
puts "Hello World"
```

###Step 2: Compile a Program
The code in the examples above is what we call *plain text*. This text does nothing on its own and must be *compiled*--actually, this is not true for interpreted languages, which don't need to be compiled. Compiling turns plain text into a form that the computer can actually use. This works differently in traditional languages than it does in java.

In traditional languages like C++, code is compiled into machine language code. This code is able to be executed (run) directly by the computer's processor, which has certain performance benefits but makes the program less portable.

In Java, code is compiled into special bytecode, not machine language code. This is necessary to employ the folloing clever trick: bytecode is not run directly by the processor of the computer as machine code would be. Instead, another program called the JRE (Java Runtime Environment) runs the bytecode. This trick is what allows Java programs to be portable. As long as a computer has the JRE installed on it, that computer can run Java bytecode.

**Note:** The JVM (Java Virtual Machine) is part of the JRE and is essentially a computer program that pretends to be a processor.

**Note:** Other programming languages, not just Java, can be compiled into Java bytecode. These languages are called [JVM languages](http://en.wikipedia.org/wiki/List_of_JVM_languages). A great example is JRuby, which is Ruby code that can be compiled into Java bytecode. Cool stuff!

**Note:** A language very similar to Java is C# (pronounced "C Sharp"). It is controlled by Microsoft, whereas Java is currently in Oracle's control. Whereas Java bytecode runs on the JRE, which can be installed on almost every computer, C# runs on the .NET framework, which is only available on Windows computers. Both languages and platforms are very popular and widely used.

Similar to how Java uses a special program (i.e., the JRE) to run bytecode, interpreted languages use special programs (i.e., interpreters) to run their plain-text (i.e., uncompiled) code. Three notable examples of interpreted languages are JavaScript, Python, and Ruby. In the case of JavaScript, which is NOT the same as Java, the interpreter is the Web browser. In the case of Ruby and Python, each has its own interpreter that runs whenever you need to run a Ruby or Python program. This is very different from how "traditional" programming languages like C and C++ work, or even Java for that matter. These languages need to be compiled into machine language code before they can be run. Interpreted languages don't have this middle step.

###Step 3: Run the Program
I basically already explained this, but here's a quick recap:

* Traditional Languages: Machine language code was created at compile time. The processor of the computer can run this code directly, which makes programs fast but lacking in portability.
* Virtual Machine Languages (e.g., Java): Bytecode is created at compile time. A special program must run this bytecode, which makes programs slightly slower but much more portable.
* Interpreted Languages (e.g. Ruby, Python, and JavaScript): No compilation necessary. A special program must interpret the plain text, which makes programs slower but portable similar to Java.

##APIs
The term API (Application Programming Interface) is used whenever a programming language interfaces with another piece of running software. In the case Java, programs must interface with the JRE; hence, there is a Java API. In the case Python, programs must interface with the Python interpreter; hence, there is a Python API. In the case of JavaScript, programs must interface with webpages; hence, there is the DOM API.

APIs are very common in the programming world. Anytime software interacts with other software, you'll see an API. Well-designed APIs tend to make programming easier and more productive. For the time being, I'll reserve judgement on the Java API.

##Why Use Java
If you've read the rest of this document, I hope you can see the ambiguity inherent in the question, "Why use Java?" In this question, does "Java" refer to the platform or the programming language?

###Why Use The Java Platform?
This could be a very complicated answer, but for now I'll leave you with a one-word answer: portability.

###Why Use/Learn The Java Programming Language?
#####Pros
* Easier than C++
* Garbage Collection: A feature of Java that allows programmers to not worry about deleting unused objects from memory. This makes programming simpler.
* Speed: In the past, people have criticized Java for being slow. I don't think that's a very valid criticism for 99.9% of programs. Also, Java is tremendously faster than interpreted languages like Ruby, which treat performance as an afterthought.
* Great for Learning Computer Science: Java doesn't hide much from you. Learning Java will force you to think about how the computer actually works. Interpreted languages like Ruby might be easier to learn, but you also wouldn't learn as much about how computers actually work.

####Cons
* Verbosity: Look at the example code towards the start of the docuement. Can you see how much simpler the Ruby code is? You'll find this throughout Java; Java programs require lots or writing.
* The API: My first language was Java, but after using some other languages, I've been amazed at how unweildly the Java API can be at times. In Ruby, for example, everything just seems much, much simpler.