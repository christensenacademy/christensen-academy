#Java Objects and Classes Intro

Java is an "object oriented" programming language. Fully understanding what this means will take some time, but hopefully you will find this non-technical introduction helpful.

##Objects: State and Behavior
In Java (and other object-oriented languages) programmers are constantly working with *objects.* All objects come from corresponding *classes*.

You can think of objects in Java much like you think about the objects you see in your everyday life. I'm currently looking at a pair of headphones and stapler on the desk next to my computer. As I examine these objects, I notice things about them, such as their size, color, and position on the desk. In a sense, these properties can be thought of as the *state* of these objects. Perhaps what's most interesting about these objects is that they can **do** things, such as staple papers or produce sound. In this way, objects also have *behavior* or "stuff" we can do with them.

In Java, every object has both *state* and *behavior*. The state of an object is really just the data surrounding that object. When we program, we use *variables* to keep track of the state of an object. The behavior of an object is really just the things we can have objects do. When we program, we write *methods* to specify what objects can do.

##Classes

In a sense, a class is a mold from which objects are created. The state and behavior of each object is specified in a class. Another way of saying this is that an object is an *instance* of a class. A class literally defines the variables and methods that an object of that class can have.

###Example
```java
Scanner sc = new Scanner(System.in); // Create a new object (i.e., make an instance of the Scanner class).
String line = sc.nextLine(); // Have it DO something.
```

**Note:** This is just an example of creating an object from a class. The code for the class itself, which would describe the state and behavior of the object, would be quite a bit longer.

##Primitive Data Types
While objects and classes are at the heart of the Java language, it is nearly impossible to study them in more depth without first developing an understanding of *primitive data types*. Primitive data types are used to store basic numerical and character data. Often, the state of an object is little more than a collection of "primitive" data.

##Conclusion

If you're new to learning Java, I encourage you to place your initial focus on learning about primitive data types and basic program logic before worrying much about classes and objects.


![](http://christensenacademy.org/img/signature.png)
