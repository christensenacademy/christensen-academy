#Methods Basics
Methods are reusable pieces of code. Imagine a video game with a jumping character. Each time the character jumps, the same reusable piece of code runs on the computer. In Java, we call these reusable pieces of code **methods**.

Conceptually speaking, objects have methods that allow them to do things. If I were an object, my most notable methods would be `eat()`, `sleep()`, and `takeLongWalksOnTheBeach()`. A kangaroo, on the other hand, might have methods like `hop()`, `kick()`, and so on. A video game character might have methods like `run()`, `jump()`, and `shootFireball()`.

A big key to learning Java programming is getting good at organizing your programs around classes and methods. The goal of this textpage is to explain the basics of how methods work with a focus on parameters and return types.

**Note:** Anytime you see something like `foo()` or `foo(int x)`, you can be sure that you're dealing with a method--notice the parenthesis after the method name, "foo."

**Note:** In other programming languages, methods are often called "functions." Java calls them methods instead of functions to emphasize the fact that Java is an object-oriented language, and that methods belong to classes.


##Parameters and Return Types

##Anatomy of a Method
When writing a method, you need to understand the method's **signature**. The signature of the `sayHello` method looked like this: `public void sayHello()`. The signature of the `isPrime` method looked like this: `public boolean isPrime(int n)`.

Just by looking at the signature of a method, we know a lot about the method.

The first part of the signature is an "access modifier", which can be `public`, `private`, `protected`, or `static`. I'll discuss each of these in detail later. For now, you can ignore this part.

The second part is the **return type** of the method. The `sayHello` method had `void` as a return type, which essentially means that it doesn't have a return type, so let's ignore that one for now. The second method example, `isPrime`, was much more interesting. Its return type was `boolean`, which is why you see the `return true;` and `return false;` statements inside of the method.

**KEY IDEA:** When we call a method, a value is returned (unless the return type for that method is `void`). In the case of the `isPrime` method, writing `isPrime(89)` will evaluate to `true` because the `isPrime` method "returns" the value `true`.

The third part of the method signature is the name of the method itself. You are free to name methods however you'd like as long as you don't break any of the naming rules, which are the same for methods as they are for variables. Basically, just remember to use the `camelCase` naming convention and never start variable names with numbers.

Also, try hard give your methods names that imply what those methods actually do. `sayHello` and `isPrime` were two very good method names because it was pretty clear just by reading the name of the method what the method actually did. If `sayHello` had just been named `hello`, for example, it would not have been as clear what the method was actually doing. Similarly, if `isPrime` had just been named `prime`, it would have been unclear what to exect as a return type from the method.

The last part of the 

##Overloading Methods

###Example
```java
public class Integer() {
  public int n;
  
  // This is a special type of method called a constructor that is called when a new Integer object is created
  public Integer(int a){
    n = a;
  }
  
  // This method computes the number of 
  public int numberOfDigits(){
    return (int)Math.log10(n)+1;
  }
  
  // This method returns true if the number is prime. Note: There are much more efficient ways of writing this.
  public boolean isPrime(){
    if(n < 2) return false;
    if(n == 2) return true;
    int counter = 3;
    while(counter < n){
      if(n%counter == 0){
        return false;
      }
      counter = counter + 2;
    }
    return true;
  }
  
  // This method increments the value of n by 1 and returns nothing.
  public void increment(){
    n = n+1;
  }
  
  // This method decrements the value of n by 1 and returns nothing.
  public void decrement(){
    n = n-1;
  }
  
}
```

##Why Methods are Awesome
1. Methods allow you to write a useful bit of code then reuse it over and over.
2. Methods prevent you from repeating the exact same code in multiple parts of your program. This is awesome because code duplication is a maintainance nightmare. Imagine having to fix an error in 20 parts of the code as opposed to just fixing it in a single method. 
3. Methods allow us to keep large programs organized.


![](http://christensenacademy.org/img/signature.png)
