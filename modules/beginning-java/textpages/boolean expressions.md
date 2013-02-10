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
```java
// The following boolean variables might be useful if you were developing a video game
boolean hasBossKey = false; // "hasBossKey" is a good name because it clearly implies storing boolean data.
boolean boomerang = true; // "boomerang" is a bad name because it does not imply storing boolean data.
boolean isWalking = false; // also a good name...
```

###Boolean Expressions
All boolean expressions evaluate to `true` or `false`.

```java
// Some variables to be used in boolean expressions
boolean hasCash = true;
int dollars = 30;
double tax = 0.08;

// Some boolean expressions
System.out.printn( true ); // true, duh
System.out.printn( hasCash ); // true, duh
System.out.printn( !hasCash ); // false (! means "not")
System.out.printn( dollars ); > 20 // evaluates to t
```

###Logical Operators



![](http://christensenacademy.org/img/signature.png)

