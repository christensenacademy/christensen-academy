#Java Objects and Classes Intro

Java is an "object oriented" programming language. Fully understanding what this means will take some time, but hopefully you find this non-technical introduction helpful.

##Objects: State and Behavior
In Java (and other object-oriented languages) programmers are constantly working with *objects.* All objects come from corresponding *classes*.

You can think of objects in Java much like you think about the objects you see in your everyday life. I'm currently looking at a pair of headphones and stapler on the desk next to my computer. As I examine these objects, I notice things about them, such as their size, color, and position on the desk. In a sense, these properties can be thought of as the *state* of these objects. Perhaps what's most interesting about these objects is that they can **do** things, such as staple papers or produce sound. In this way, objects also have *behavior* or "stuff" we can do with them.

In Java, every object has both *state* and *behavior*. The state of an object is really just the important data surrounding an object. When we program, we use *variables* to keep track of the state of an object. The behavior of an object is really just the things we can have objects do. When we program, we write *methods* to specify what objects can do.

###Classes

In a sense, a class is a mold from which objects are created. The state and behavior of each object is specified in a class. Another way of saying this is that an object is an *instance* of a class. A class literally defines the variables and methods that an object of that class can have.

##Code Example
This is an example of what code might look like for a simple Stapler class in Java.
```java
public class Stapler {
  // Each instance (object) of the Stapler class will have these three properties
  private int staplesRemaining;
  private int maxStaples;
  public String color;
  
  // Each stapler will have a method called staple that 
  public void staple(){
    /*  Code for what happens when a Stapler staples goes here. For example, the number
        staples remaining would decrease by 1.*/
  }
  
  public void refillStaples(){
    staplesRemaining=maxStaples;
  }
}
```

Then, in another file, we could create objects of this class as follows:

```java
Stapler officeStapler = new Stapler(); // This creates a new object, an instance of the Stapler class.
officeStapler.refillStaples(); // This tells the officeStapler object to refill its staples
```

##Primitive Data Types
If you haven't actually written any programs yet, this probably sounds quite confusing. To make matters worse, Java isn't a completely object-oriented language. Almost everything in Java revolves around classes and objects, except for *primitive data types*, which are things like numbers and characters.

##Conclusion

Because classes and objects are so foundational to the Java programming language, I encourage you to start writing your own classes as early as possible. However, please realize that you'll need a solid understanding of *primitive data types* before you're able to do much of anything with classes.


![](http://christensenacademy.org/img/signature.png)
