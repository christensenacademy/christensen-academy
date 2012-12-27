#Java Objects and Classes Intro

Java was the first programming language I learned. I knew nothing about computer science and programming when I started, so when I started hearing people use the term *object-oriented* to describe Java as if this somehow made Java special, I was quite confused. From my perspective, I just sort of assumed that all languages must work more or less like Java in how they use objects, classes, methods, and so on. It turns out that I was wrong. There's actually an incredible variety of programming paradigms out there, and each language is unique in it's own way.

The purpose of this textpage is to explain what objects and classes are in Java. This is an introductory explanation only. I hope you realize that your understanding of objects and classes will necessarily be limited until you begin writing your own complex Java programs. You'll get there eventually. Just stick with it.

##Objects and Classes
In Java (and other object-oriented languages) programmers are constantly working with *objects.* All objects come from corresponding *classes*.

You can think of objects in Java much like you think about the objects on the desk in front of you. I'm currently looking at a pair of headphones and stapler next to my computer. If I examine them closely, I notice the various properties of these objects. I notice their size, shape, color, age, and so on. Like real-world objects, Java objects also have *properties*. Sometimes we refer to these properties as the *state* of the object. Try not to get hung up on the terminology just yet. The important thing to remember right now is that objects have properties that tell us something useful about them.

If I think about the headphones and stapler in front of me, I realize that they're more than just objects with properties; they can actually do stuff. Namely, the headphones can play sound and the stapler can staple things. In Java, objects can also *do* things, and the things objects can do are called *methods*.

In this way, we can say that objects have both *state* (i.e., properties) and *behavior* (i.e., methods). Again, try not to get hung up on the terminology just yet. The important thing to realize is that each object has both properties and--for the lack of a better phrase--stuff it can do.

###So, what are classes?

It turns out that every object comes from a class. Another way of saying this is that an object is an *instance* of a class. The class literally defines the properties and methods that an object of that class can have. For example, if there were a Stapler class in Java, it might the following properties and methods:

* **Properties:** Color, size, the number of staples remaining, the number of pages that can be stapled at once.
* **Methods** (the stuff a stapler can do): Staple, refill staples, use as a paperweight.

Each Stapler *object* would then have its own values for each of the properties of the stapler. You might have a green, 1 Kg stapler with 11 staples remaining and the ability to staple up to 15 sheets of paper at once. You might also have an orange, 0.5 Kg stapler with 50 staples remaining and the ability to staple up to 10 sheets of paper at once. Each of these staplers would be an *object* of the Stapler *class*.

In a sense, the class is like the mold from which objects are created.

As a Java programmer, you will find yourself frequently creating new objects of classes to do interesting things.

##Conclusion

As you first start programming in Java, you'll find yourself mostly relying on the classes provided by the Java API. That is, you won't be writing your own classes. Instead, you'll mostly be working with objects from classes that have already been written for you. Later on, you'll start writing your own classes. Honestly, I think it's pretty much impossible to have a thorough understanding of what classes and objects are until you've written and used your own classes.

In the meantime, I recommend just trying your best to learn the basics of the Java programming language. Your understanding of classes and objects will evolve over time. Don't worry if things seem a bit vague at this point. They probably should. Just keep programming and your understanding will emerge as you gain experience.
