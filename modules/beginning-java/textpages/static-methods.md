#Static Methods

In everyday life, the adjective "static" conjures up the idea of something being fixed or immovable (i.e., not dynamic). I believe that Java's use of the term "static" was intended to evoke this notion of a thing (object) unchanging. This isn't obvious at first, even if you understand how static methods work. The purpose of this textpage is to explain how static methods work in Java and also to explain why the term "static" actually makes sense.

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
* The *state* of each object (i.e., each object's instance variables) can change. That is, the state of each object is **dynamic**, not **static**.


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

Notice the keyword *static* after in the signature of both methods above.

All of this should seem somewhat strange. This is very different from the way we're used to working with methods, which went something like this:

```java
Math myMath = new Math();
double myValue = myMath.abs(-2.5); // myValue should now hold the double 2.5
```

Alas, this isn't the right way to use the static `abs()` methods--and in fact this example actually doesn't work because it's impossible to instantiate the `Math` class, whose only methods are static methods.

###Complete Static vs. Non-Static Example

#####Dog.java
```java
public class Dog {

  // a static method
  public static void makeNoise(){
    System.out.println("BARK!");
  }
  
  // a non-static ("normal") method
  public void chaseCat(){
    System.out.println("Chasing cat...");
  }
}
```
#####Example.java
```java
public class Runner {
  public static void main(String[] args){
    Dog.makeNoise();
    Dog.chaseCat(); //compiler error because chaseCat() is not a static method
    
    Dog myDog = new Dog();
    myDog.makeNoise(); // NetBeans gives a warning, but this isn't technically an error
    myDog.chaseCat();
  }
}
```


##Why Static Methods are Called "Static"


In object-oriented programming, we use objects for their *state* and *behavior*. "Normal" (non-static) methods are capable of behavior that changes the state of an object, just as the `hop()` method did in the example above. Static methods, on the other hand, cannot change the state of an object. In fact, they cannot interact with any other members of a class at all, unless those members are static.




![](http://christensenacademy.org/img/signature.png)
