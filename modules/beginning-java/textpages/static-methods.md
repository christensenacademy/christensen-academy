#Static Methods

In everyday life, the adjective "static" has a variety of meanings, but the most common one involves the idea of something being fixed or immovable (i.e., not dynamic). I believe that Java's use of the term "static" was intended to evoke this notion of a thing unchanging, which isn't obvious at first, even if you understand how static methods work. The purpose of this textpage is to explain how static methods (and instance variables) work in Java and also to explain why the term "static" actually makes sense.

**Note:** While studying Java in college, I explicitly remember this being something that tripped me up. The whole concept of a static method or instance variable escaped me for some reason. My hope is that it comes a bit more intuitively to you after reading this textpage. Good luck!

##How Normal Methods Work

Consider how "normal" (non-static) methods work. Basically, to use a method, you must first have an object. Then, you simply use that object to call the method. An example:

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

Alas! Although this process makes sense, it doesn't mesh with our experience of how Java programs work! Consider the `System.out.println();` statement. `println()` is clearly a method, but we clearly don't need to instantiate an object (i.e., make a new object) to use it; we just use the strange `System.out` thingy before calling the `println()` method. Further consider `Math.random()`, which returns (i.e., gives you) a double between 0 and 1. Again, somehow we were able to call a method--in this case, `random()`--without creating a new instance of the Math class!?!

The explanation for this seeming craziness has to do with the idea of static methods. In the case of `Math.random()`, the `random()` method is "static," which allows it to be called striaght from the Math class: `Math.random()`. If `random()` were not a static method, you would have to do something like this:

```java
Math myMath = new Math();
double myRandomNumber = myMath.random();
```

This would be a pain, so instead `random()` was defined to be a static method in the `Math` class, so that we can more simply type the following:

```java
double myRandomNumber = Math.random();
```

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
