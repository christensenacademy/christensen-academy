#Boolean Expressions

Boolean values are either `true` or `false`. The term "boolean" was chosen to honor the mathematician [George Boole](http://en.wikipedia.org/wiki/George_Boole) who essentially developed what is now referred to as boolean logic, a system of logic involving just two values: `true` and `false`.

Although they are simple, booleans are essential for adding logic to our programs. Consider this example:

```java
Scanner sc = new Scanner(System.in);

System.out.println("Please enter the amount of money you would like to donate.");
double donationAmount = sc.nextDouble();

// check out this boolean logic!
if(donationAmount<10.0){
  System.out.println("You heartless person! Surely, you could give more than that!");
} else {
  System.out.println("Thank you very much for your generosity!");
}
```

The expression `donationAmount<10.0` is an example of a boolean expression. This type of expression is similar to a math expression except that it evaluates to a `boolean` value instead of a `double` or an `int`.

###Boolean Variables
In the same way that you can create variables of type `byte`, `short`, `int`, `long`, `float`, `double`, and `char`, you can also create variables of type `boolean`.

```java
boolean hasKey = false;
```
**Note:** When naming boolean variables, try to make the names you choose imply the fact that they are booleans. The name `hasKey` is good for a boolean because it implies that the value will either be true or false. The name `key` would be more confusing because it would not be immediately clear what types of values that variable would store.

In the example above, there is a boolean variable named `hasKey` holding the value `false`. It's not too hard to imagine that we might do this sort of thing if we were programming a video game in which the player either has or does not have a key to get into a room or something.


