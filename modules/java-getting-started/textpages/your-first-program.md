#Your First Program

Writing your first program is essentially the same no matter what IDE you're using, but the details can be tricky as you navigate your IDE for the first time. I've created a video for writing the HelloWorld program in four different IDEs, so hopefully you can get one of them to work.

Here is the code for the HelloWorld program:

```java
public class HelloWorld {
    public static void main(String[] args) {
        System.out.println("Hello, World");
    }
}
```

**Important:** This code must be saved in a file named HelloWorld.java, which must exactly match the name of the class in the first line of the program `public class HelloWorld {`.

Please realize that understading all the parts of this first program is actually quite difficult. You'll learn more and more as you go. For now, I'd focus on the center line: `System.out.println("Hello, World");`. The first part `System.out.println` is telling the computer to print out a message. The `("Hello World")` part is specifying what message should be printed out.

When you run the program in your IDE, you should see the message "Hello World" displayed somewhere in an output panel of some sort. It's not too fancy, but hey, it's your first program. Onward and upward, my friend.

##.class vs .java
When you write your code, you'll save it as a .java file. For example, your first program was saved as HelloWorld.java. When you compile your code--which is something some IDEs like NetBeans and Eclipse do automatically--a .class file will be created. In this case, a file named HelloWorld.class was created. The .class file is the Java bytecode and is the actual program that runs in the JVM (Java Virtual Machine) on your computer. After the .class file is created, you could delete the .java file, and your program would still work. You wouldn't want to do this, however, because then you could never edit and recompile your program again.