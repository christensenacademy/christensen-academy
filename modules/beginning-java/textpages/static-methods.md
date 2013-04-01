#Static Methods

In everyday life, the adjective "static" has a variety of meanings, but the most common one involves the idea of something being fixed or immovable (i.e., not dynamic). I believe that Java's use of the term "static" was intended to evoke this notion of a thing unchanging.

Consider how "normal" (non-static) methods work. Basically, to use a method, you must first have an object; then, you simply use that object to call the method. An example:

```java
Kangaroo myKangaroo = new Kangaroo();
myKangaroo.hop(3);
```

Inside of the Kangaroo class, the `hop()` method might look something like this:

```java
public void hop(int distance){
  this.position += distance;
}
```

As you can see, the instance variable `position` is being increased by the `distance` parameter each time the `hop()` method is called.

What's important to realize here is that the instance variable `position` is unique to each object of type `Kangaroo`. Consider the following example:

```java
Kangaroo myKangaroo = new Kangaroo();
myKangaroo.hop(3);
```

At least in my mind, this seems like a pretty straightforward 2-step process:

1. Create the object (e.g. new Kangaroo()), making sure to assign it to a variable.
2. Call the object's methods (e.g. hop()) to have it do stuff.

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
![](http://christensenacademy.org/img/signature.png)
