#Static Methods

The purpose of this textpage is to explain how static methods work in Java. At the end, I'll also provide an exteremly brief explanation of why the term "static" actually makes sense.

**Aside:** While studying Java in college, I explicitly remember this being something that tripped me up. The whole concept of a static method or static instance variable escaped me for some reason. My hope is that it comes a bit more intuitively to you after reading this textpage. So, um... good luck! My only advice besides reading this document is to play around with some code in your IDE until everything makes sense. At least for me, there's nothing better for truly understanding a concept than to simply play around with code for a while.

##How Normal Methods Work

Consider how "normal" (non-static) methods work: 

1. Create a new object
2. Call methods on that new object

An example:

```java
Kangaroo myKangaroo = new Kangaroo();
myKangaroo.hop(3);
```

Now, imagine that the following is the source code for the Kangaroo class:

```java
public class Kangaroo {
  private int position = 0;
  
  public void hop(int distance){
    position += distance;
  }
}
```

As you can see, the instance variable `position` is being increased by the `distance` parameter each time the `hop()` method is called.

**Note:** What's important to realize here is that the instance variable `position` is unique to each object of type `Kangaroo`.

Consider the following example:

```java
Kangaroo jim = new Kangaroo();
myKangaroo.hop(4);
// now jim has a position of 4

Kangaroo patrick = new Kangaroo();
myKangaroo.hop(2);
// now patrick has a position of 2, while jim still has a position of 4
```

Notice two key things about the previous example:

* Each instance of the Kangaroo class has it's own instance variables. That is, each object has a unique *state*.
* The *state* of each object can change at runtime (i.e., while the program runs).


##How Static Mehtods Work

As opposed to "normal" methods, static methods cannot interact with or change the state of an object. Static methods can be thought of as belonging to the whole class, not individual objects deriving from that class. They're good only for providing some generally useful function that doesn't relate to the specific state of an object. Really good examples of this are the methods in Java's `Math` class, which perform basic numerical calculations that are generally useful, such as the following:

* `Math.abs(double a)`
* `Math.max(double a, double b)`

What you should notice immediately about both of these is that you didn't have to instantiate a new `Math` object using the "new" operator before calling the `abs()` and `max()` methods. Also, you should notice that `Math` starts with a capital letter because it is a class name.

Here's what a stripped-down version of the `Math` class actually looks like:

```java
public class Math {
  public static double abs(double a) {
    return (a < 0) ? -a : a;
  }
  public static double max(double a, double b) {
    if (a != a) return a;   // a is NaN
    if ((a == 0.0d) && (b == 0.0d)
      && (Double.doubleToLongBits(a) == negativeZeroDoubleBits)) {
      return b;
    }
    return (a >= b) ? a : b;
  }
}
```

Notice the keyword *static* in the signature of both methods above.

This is very different from the way we're used to working with "normal" methods, which went something like this:

```java
// NOTE: This doesn't work!
Math myMath = new Math();
double myValue = myMath.abs(-2.5); // myValue should now hold the double 2.5
```

###Complete Static vs. Non-Static Example

#####Dog.java
```java
public class Dog {
  private int bonesCollected = 0;
  
  // a static method
  public static void makeNoise(){
    System.out.println("BARK!");
  }
  
  // a non-static ("normal") method
  public void chaseCat(){
    System.out.println("Chasing cat...");
  }
  
  public static collectBone(){
    bones++; // compiler error because you aren't allowed to alter the state of an object in a static method
  }
}
```
#####Example.java
```java
public class Example {
  public static void main(String[] args){
    Dog.makeNoise();
    Dog.chaseCat(); //compiler error because chaseCat() is not a static method
    Dog.collectBone(); // compiler error: see the Dog class
    
    Dog myDog = new Dog();
    myDog.makeNoise(); // NetBeans gives a warning, but this isn't technically an error
    myDog.chaseCat();
  }
}
```

Notice the errors in the code above. I recommend copying this code into your IDE and playing around with it. Fix the errors and try to get a handle on how static methods work.

##Why Static Methods are Called "Static"

The term "static" has to do with the fact that static methods are resolved at compile time as opposed to runtime like other methods. This will only really make sense if you understand inheritance and polymorphism (fancy word...) and how "normal" methods can be overridden in a subclass.

The most important things to remember about static methods are as follows:

1. You can call them directly from a class (e.g., `Math.abs(-3.45);`)
2. The belong to the whole class, not an individual object. Hence, they cannot interact with or change the state of an individual object like normal methods can.

![](http://christensenacademy.org/img/signature.png)
