#Functions
*"In software engineering, Don't Repeat Yourself (DRY) is a principle of software development aimed at reducing repetition [...]" --Wikipedia entry on the DRY principle*

Functions are reusable segments of code that we can "call" whenever we need them.

Check out this example:

```java
// declare a function named helloWorld
function helloWorld():void
{
  trace("Hello World!");
  trace("My name is Cam!");
}

helloWorld(); //call the helloWorld function
```

**Big Idea:** The code for the function (i.e., the stuff written between `{` and `}`) only executes when the function is called by writing `helloWorld()`.

**Note:** Naming conventions are the same for functions as they are for variables.

**Note:** Functions are "processed" at compile time and can be called before or after they are declared. That is, even if you declare a function on frame 300, you can still call it on frame 1.

####Two Ways to Write Curly Brackets for Functions
```java
function example1():void {
  //code goes here
}

function example2():void
{
  //code goes here
}
```

Both of the examples above are perfectly valid. Choose which one you like best then do your best to stick with it.

###Give it a try!
Play around with [this example](http://www.christensenacademy.org/modules/beginning-actionscript/textpage/functions-example.fla) to help you understand how functions work.

###Built-In Functions
Whenever you find yourself typing parenthesis, such as when you tell the playhead to stop by typing `stop()`, you're actually calling a function. In the case of `stop()`, you're calling a function named stop. Realize that even though you didn't write the stop function, somebody else did. Functions like the stop function are "built-in" and you can call them any time you need to.

###Arguments
Some functions require *arguments* or *parameters*, which can be thought of as input. Here are some examples:

```java
//the gotoAndPlay function takes a number as a parameter
gotoAndPlay(3);

//the trace function can take a string or a number as a parameter
trace("Hello World");
trace(3);

//here's how to make a function with a String as a parameter
function thankYou(recipient:String):void
{
  trace("Thank you, " + recipient);
}

thankYou("Brooke");

//here's how to make a function that takes two parameters--first a string, then a number
function happyBirthday(person:String, age:Number):void
{
  trace("Happy Birthday, " + person + ", on turning " + age + "!");
}

happyBirthday("Eric", 28); 
```

###Return Types
Functions can *return* values when called.

```java
var lotteryTicket:Number = randomLotteryNumber();
```

In the example above, we're assuming that calling the `randomLotteryNumber` function returns a value, and that that value gets assigned to the variable `lotteryTicket`. Said another way, the code `randomLotteryNumber()` will evaluate to a number, which will then get assigned to the `lotteryTicket` variable.

**Note:** Every function has a return type. However, so far you've mostly seen functions with a return type of void (e.g., `function example():void`). A function with this return type evaluates to `undefined` when called.

####Example function returning a number
```java
// What is 1+2+3+...+n? This function returns the answer
function triangleNumber(n:Number):Number
{
  var answer = n*(n+1)/2;
  return answer;
}

var example1:Number = triangleNumber(6);
trace(example1); //prints 21
trace(triangleNumber(10)); //prints 55
var example2:Number = triangleNumber(6) - triangleNumber(5);
trace(example2); //prints 6
```
####Example function returning a string
```java
function login(username:String, password:String):String
{
  if(username=="cam" && password=="kowabunga")
  {
    return "Login successful";
  }
  else
  {
    return "Login failed";
  }
}
trace(login("cam","strawberryshake"));
trace(login("cam","kowabunga"));
```
####Example function returning nothing (void)
```java
function activateBonus():void
{
  score = score + 8;
  health = health + 12;
}
```

**Note:** Whereas you can have multiple parameters for a single function, you can only have one return type.

**Note:** The line of code that says `return` followed by an expression should almost always be the last line of your function. It terminates the execution of the function, so any code that might come after it is pretty pointless most of the time.

Kowabunga,

Cam
