#Java Objects and Classes Intro

Java was the first programming language I learned. I knew nothing about computer science and programming when I started, so when I started hearing people use the term *object-oriented* to describe Java as if this somehow made Java special, I was quite confused. From my perspective, I just sort of assumed that all languages must work more or less like Java. When I learned about objects, classes, and methods in Java, I assumed that other languages would have these things too. It turns out that I was wrong. To be fair, a lot of languages are object-oriented in some fashion nowadays, but there's actually an incredible variety of programming paradigms out there, and object-oriented is just one of them.

The purpose of this textpage is to give you a basic idea what objects and classes are in Java. This is an introductory explanation only. I hope you realize that your understanding of objects and classes will necessarily be limited until you begin writing your own complex Java programs. You'll get there eventually. Just stick with it.

##Objects and Classes
In Java (and other object-oriented languages) programmers are constantly working with *objects.* All objects come from corresponding *classes*.

You can think of objects in Java much like you think about the objects on the desk in front of you. I'm currently looking at a pair of headphones and stapler next to my computer. If I examine them closely, I notice the various properties of these objects. I notice their size, shape, color, age, and so on. Like real-world objects, Java objects also have *properties*. Sometimes we refer to these properties as the *state* of the object. Try not to get hung up on the terminology just yet. The important thing to remember right now is that objects have properties that tell us something useful about them.

If I think about the headphones and stapler in front of me, I realize that they're more than just objects with properties; they can actually do stuff. Namely, the headphones can play sound and the stapler can staple things. In Java, objects can also *do* things, and the things objects can do are called *methods*.

In this way, we can say that objects have both *state* (i.e., properties) and *behavior* (i.e., methods). Again, try not to get hung up on the terminology just yet. The important thing to realize is that each object has both properties and--for the lack of a better phrase--stuff it can do.

###So, what are classes?

In a sense, the class is like the mold from which objects are created.

It turns out that every object comes from a class. Another way of saying this is that an object is an *instance* of a class. The class literally defines the properties and methods that an object of that class can have. For example, if there were a Stapler class in Java, it might the following properties and methods:

* **Properties:** Color, the number of staples remaining, the maximum staples able to held in the stapler.
* **Methods:** (the stuff a stapler can do): Staple, refill staples.

Each Stapler *object* would then have its own values for each of the properties of the stapler. You might have a green, 1 Kg stapler with 11 staples remaining and the ability to staple up to 15 sheets of paper at once. You might also have an orange, 0.5 Kg stapler with 50 staples remaining and the ability to staple up to 10 sheets of paper at once. Each of these staplers would be an *object* of the Stapler *class*.

##Code Example
This is an example of what code might look like for a simple Stapler class in Java.
```java
public class Stapler {
  // Each instance (object) of the Stapler class will have these three properties
  private int staplesRemaining;
  private int maxStaples;
  private String color;
  
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
