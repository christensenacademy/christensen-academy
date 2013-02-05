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

The purpose of this textpage is to explain `boolean`s in greater depth.

###Boolean Variables







