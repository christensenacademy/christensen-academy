#Java Platform vs. Language
Understanding the differences between the Java Platform and the Java Programming language won't help you write your first program, but it may help you think about why you'd want to use Java in the first place and provide you with a deeper understanding of Java in general.

##Portability
*"Write once, run anywhere."*

In everyday language, we use the term portable to describe those things that can easily be transported from one place to another. My luggage, for example, is portable; my house, in contrast, is less portable.

Something similar applies to software with regards to portability. Some programs can run on many different computers; these programs are very portable. Other programs can only run on a small number of computers; these programs are seen as being less portable.

Java burst onto the programming scene in the 90s with its "write once, run anywhere" slogan. Understanding why Java programs are portable requires us to understand how Java works in terms of the platform and the programming language.


##How Programs (Not Just Java Programs) Work in General

###Step 1: Writing a Program
As a programmer, the first thing you need to do is write some code. In this step, Java is really no different from other--what we call--high level languages.

Here are some examples of code for computer programs written in three different languages:

#####Example C++ Program
```cpp	
#include <iostream>
using namespace std;
void main()
{
  cout << "Hello World!" << endl;   cout << "Welcome to C++ Programming" << endl;
}
```

#####Example Java Program
```java	
public class HelloWorld {
  public static void main(String[] args) {
    System.out.println("Hello, World");
  }
}
```

#####Example Ruby Program
```ruby
puts "Hello World"
```

###Step 2: Compile a Program
The code in the examples above is what we call plain text. This text does nothing on its own and must be compiled into a form that the computer can actually use.

In traditional languages like C++, plain text code written by programmers must be compiled into machine language code. Think of machine language code as the binary instructions--the actual 1s and 0s--that computer processor knows how to run.

This process of writing plain text code and compiling it into machine language was how nearly all programming languages used to work. Java, however, is different.

In Java, plain text code is not compiled into machine language code. Instead, Java employs a clever trick. This trick is at the heart of understanding the difference between the Java platform and the Java programming language, which in turn is at the heart of understanding why Java is more portable than traditional programming languages.

Java programs are still compiled, but they aren't compiled directly into machine language. Instead, they are compiled into special Java bytecode. I want to emphasize the fact that Java bytecode is not machine language code and cannot be run directly by a processor (CPU). Instead, Java bytecode must be run by a virtual machine, which is essentially another program running on the computer. This special program, or virtual machine, is part of the JRE (Java Runtime Environment) and goes by the name JVM (Java Virtual Machine).

So, what's the payoff of this clever trick? What's the benefit of compiling into bytecode instead of machine language code? The answer is portability. Any computer with the JRE installed can run Java programs (i.e., bytecode).

When people talk about the "Java platform", they're really talking about the JRE, which is the supporting software that runs Java programs (i.e., runs the bytecode).

Note: Other programming languages, not just the Java programming language, can be compiled into Java bytecode. These languages are called JVM languages. A great example is JRuby, which is Ruby code that can be compiled into Java bytecode. Another great example is Scala, a language designed specifically for the JVM.

Note: A language very similar to Java is C# (pronounced "C Sharp"). It is controlled by Microsoft--Java is currently in Oracle's care, though it was created and originally maintained by Sun Microsystems. Whereas Java bytecode runs on the JRE, which can be installed on almost every computer, C# runs on the .NET framework, which is also a proprietary Microsoft product and is only available on Windows computers. Both languages and platforms are very popular and widely used.

#####Interpreted Languages
Similar to how Java uses a special program (i.e., the JRE) to run Java bytecode, interpreted languages use special programs (i.e., interpreters) to run their plain-text (i.e., uncompiled) code. That is, interpreted languages like Ruby, Python, JavaScript, and many others don't actually need to be compiled. Because of this, interpreted languages are also highly portable, though they often poorer performance (speed) than other languages.

In the case of JavaScript, which is NOT the same as Java, the interpreter is a Web browser, such as Chrome, Firefox, Safari, IE, or Opera.

In the case of Ruby and Python, each has their own interpreter that runs whenever you need to run a Ruby or Python program.

###Step 3: Run the Program
This section is basically a review and summary of what's already been said.

* **Traditional Languages:** Machine language code is created at compile time. The processor of the computer can run this code directly, which makes programs fast but lacking in portability.

* **Virtual Machine Languages (e.g., Java):** Bytecode is created at compile time. A special program must run this bytecode, which makes programs slightly slower but much more portable.

* **Interpreted Languages (e.g. Ruby, Python, and JavaScript):** No compilation necessary. A special program must interpret the plain text, which makes programs slower but portable similar to Java.

##Conclusion
As you program in Java, I encourage you to keep the fact that Java programs compile into bytecode in the back of your mind. Realize that your Java programs should work on any computer with the JRE installed.
