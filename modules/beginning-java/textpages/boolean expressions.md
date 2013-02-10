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

###Boolean Operators
All boolean expressions evaluate to `true` or `false`. Boolean expressions involving primitive data types typically use the following boolean operators:

* `<` for "less than"
* `>` for "greater than"
* `==` for "equal to" (notice the double "=" sign)
* `<=` for "less than or equal to"
* `>=` for "greater than or equal to"
* `!=` for "not equal to"

```java
3<4 // true
4<3 // false
3==3 // true
3==4 // false
4>=4 // true
5>=4 // true
4!=4 // false
```

###Logical Operators
In order to add more complex logic to your programs, you may need to combine boolean expressions together with the followig so-calle "logical operators:"

* `||` means "OR"
* `&&` means "AND"

```java
3<4 && 5<4 // False. Both boolean expressions, 3<4 AND 5<4 would need to BOTH be true, but one of them isn't.
3<4 || 5<4 // True. Either 3<4 OR 5<4 would need to be true, and one of them is.
```

In general:
```java
true && true == true;
true && false == false;
false && true == false;
false && false == false;

true || true == true;
true || false == true;
false || true == true;
false || false == false;
```

![](http://christensenacademy.org/img/signature.png)

