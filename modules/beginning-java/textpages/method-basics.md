#Methods Basics
Methods are reusable pieces of code. Imagine a video game with a jumping character. Each time the character jumps, the same reusable piece of code runs on the computer. In Java, we call these reusable pieces of code **methods**.

Conceptually speaking, objects have methods that allow them to do things. If I were an object, my most notable methods would be `eat()`, `sleep()`, and `takeLongWalksOnTheBeach()`. A kangaroo, on the other hand, might have methods like `hop()`, `kick()`, and so on. A video game character might have methods like `run()`, `jump()`, and `shootFireball()`.

A big key to learning Java programming is getting good at organizing your programs around classes and methods. In this textpage, I'll be walking through the creation of a Spaceship class, which can be used to hold the state (i.e., instance variables) and control the behavior (i.e., public methods) of a spaceship character in a video game.

**Note:** In other programming languages, methods are often called "functions." Java calls them methods instead of functions to emphasize the fact that Java is an object-oriented language, and that methods belong to classes.

##Setting the Stage: Building a Spaceship Class

In an effort to avoid talking about methods, parameters, and return types out of context, I'm going to take some time up front to build a larger example. This will take a bit of time, but I hope it helps you connect all of the dots between classes, methods, parameters, and return types.

Imagine we're creating a video game in which a spaceship flys around shooting alien ships. What methods would our spaceship need? Here's a quick list I came up with:

* moveRight();
* moveLeft();
* shoot();
* takeDamage();
* getHealth();
* draw();

The other thing we need to think about is the state of the spaceship. That is, what instance variables will we need to store info about the spaceship? Again, here's a quick list I came up with:

* int health
* int xPosition

I'm sure we'll come up with more methods and instance variables later, but let's start with this small list.

Okay, now consider the following two classes:

Spaceship.java:
```java
public class Spaceship {
  public int health = 100;
  public int xPosition = 200; // the ship can only move left and right
  
  public void moveRight(int amount){
    xPosition += amount;
  }
  
  public void moveLeft(int amount){
    xPosition -= 2;
  }
  
  public void shoot(){
    // this method would be a bit more complex, so I've left it blank for now
  }
  
  public void takeDamage(int damage){
    health -= damage;
  }
  
  public int getHealth(){
    return health;
  }
  
  public void draw(){
    // this method would draw the spaceship on the screen and has been left out
    // for simplicity's sake
  }
}
```

AlienInvasion.java:
```java
public class AlienInvasion {
  public static void main(String[] args){
    Spaceship player1 = new SpaceShip();
                            // player1 state:     health      xPosition
                            //                    100         200
    player1.moveRight(3);   //                    100         203
    player1.moveRight(0);   //                    100         203
    player1.moveLeft(10);   //                    100         193
    player1.takeDamage(10); //                    90          200
    
    System.out.println( player1.getHealth() ); // prints out 90
  }
}
```

Okay, so this game isn't any good yet. The only thing a user would see is the number 90 printed out on the screen. But, the point isn't to make a good game, it's to learn the ins and outs of methods, so here we go:

The first thing I want to discuss in the code obove is the overall structure. Notice that there are two separate files at play. One of them has the `public static void main()` method, which can be thought of as the entry point of the program. Inside of this method, we see code where we create a new instance of the `Spaceship` class by typing `new Spaceship()`, making sure to assign the new instance to a variable of type `Spaceship`.

Okay, I think we've set the stage for learning about parameters and return types, so hopefully that didn't bore you too much.

##(Parameters, Arguments) Go in Parenthesis

Examine the line of our program that reads `player1.moveRight(3);`. If we want to really understand what's going on here, we need to jump...



##Anatomy of a Method
When writing a method, you need to understand the method's **signature**. The signature of the `sayHello` method looked like this: `public void sayHello()`. The signature of the `isPrime` method looked like this: `public boolean isPrime(int n)`.

Just by looking at the signature of a method, we know a lot about the method.

The first part of the signature is an "access modifier", which can be `public`, `private`, `protected`, or `static`. I'll discuss each of these in detail later. For now, you can ignore this part.

The second part is the **return type** of the method. The `sayHello` method had `void` as a return type, which essentially means that it doesn't have a return type, so let's ignore that one for now. The second method example, `isPrime`, was much more interesting. Its return type was `boolean`, which is why you see the `return true;` and `return false;` statements inside of the method.

**KEY IDEA:** When we call a method, a value is returned (unless the return type for that method is `void`). In the case of the `isPrime` method, writing `isPrime(89)` will evaluate to `true` because the `isPrime` method "returns" the value `true`.

The third part of the method signature is the name of the method itself. You are free to name methods however you'd like as long as you don't break any of the naming rules, which are the same for methods as they are for variables. Basically, just remember to use the `camelCase` naming convention and never start variable names with numbers.

Also, try hard give your methods names that imply what those methods actually do. `sayHello` and `isPrime` were two very good method names because it was pretty clear just by reading the name of the method what the method actually did. If `sayHello` had just been named `hello`, for example, it would not have been as clear what the method was actually doing. Similarly, if `isPrime` had just been named `prime`, it would have been unclear what to exect as a return type from the method.

The last part of the 


##Why Methods are Awesome
1. Methods allow you to write a useful bit of code then reuse it over and over.
2. Methods prevent you from repeating the exact same code in multiple parts of your program. This is awesome because code duplication is a maintainance nightmare. Imagine having to fix an error in 20 parts of the code as opposed to just fixing it in a single method. 
3. Methods allow us to keep large programs organized.


![](http://christensenacademy.org/img/signature.png)
