#Variables

Every program stores information of some kind. Think about a computer game. A game needs to store things like health, points, and the names of the players in the game. All of this information or data is stored in **variables**.

When you think of variables in programming, try not to think of them in the same way that you might think of variables in math class. In math, variables represent something that is unknown. In programming, variables are like little containers that store something. Sometimes variables store numbers, but they can also store text (called "strings"), sounds, and other objects like instances of movie clip symbols.

In ActionScript 3.0, you can *declare* (i.e., make) new variables by typing `var` followed by the name you want to give to the variable, a colon, and the type of data you want to store in the variable.

Some examples of *declaring variables*:
```java
var score:Number; //create a variable named "score" of type "Number"
var lives:Number;
var coinsCollected:Number;
var timeRemaining:Number;

var player1:String; //create a variable named "player1" of type "String", which is is for storing text.
var player2:String;
var helpMessage:String;

var badGuy:Tank; //create a variable named "badGuy" of type "Tank", where "Tank" is a linkage name for a symbol.
var cam:Teacher;
```

The reason they're called *variables* is that what they contain may *vary* or change throughout the program. For example, if you made a game in which the player tried to earn points, you would need to have a variable for keeping track of the points, and the value stored in that variable would change throughout the game.

Of course, a variable doesn't store anything unless we tell it to. In the examples above, we *declared* lots of new variables, but they haven't been *assigned* any values yet. That is, they aren't actually storing anything. Here's how we might go about assigning values to the variables we've already declared:

```java
score = 5; //assign the number 5 to the score variable.
lives = 3;
coinsCollected = 89;
timeRemaining = 500;

player1 = "cam"; //assign the text (string) "cam" to the player1 variable.
player2 = "eric";
helpMessage = "Press ESC to quit."

badGuy = new Tank(); //create a new instance of the Tank symbol and assign it to the badGuy variable
cam = new Teacher();
```

In the examples above, notice how the values on the right were assigned to the variables on the left. This is very important to remember. Unlike in math, you can't switch this around. That is, writing `5 = score` makes no sense in programming. The "=" sign is actually called the *assignments operator* because it takes the stuff (i.e., the value of the expression) on the right side of the "=" sign and *assigns* it to the variable on the left side of the equals sign.

It should also be noted that you can combine variable declaration and assignment onto a single line of code like this:

```java
var player1:Number = "Cam";
```


####Why are they called "Strings"?
There's really no good answers here. Some people thinks it makes sense to use the phrase "string of characters" because strings just store a sequence (i.e., string) of letters, numbers, spaces, and other characters that people can type on their keyboards. Personally, I think the name "string" was a bad choice and that it would have made much more sense to just call these things "text". Oh well, we're stuck with what we've got. Whenever you're programming and you want to store or work with text in some way, you'll be working with *strings*. All programming languages use them, not just ActionScript.

####Naming Variables
When naming variables, the following rules apply:
* No spaces
* No weird characters--just alphanumeric ones--though you'll sometimes see programmers use the "_" character as well.
* You can't start a name with a number
* You can't use a *reserved word* such as "var", "Number", "String, etc.
* You can't use the same name for two variables

**Important:** You should use camelCase for naming variables. This isn't strictly required, but I highly recommend it.

###Literals
Consider the following example:

```java
//assume that a Number variable named "score" was declared previously in the code
score = 3;
```

The variable named "score" has a type of "Number", which means that is can only be used to store numbers like 3, 5, 2.74, and -553.89222. When we write numbers like these directly in our code, we call them *number literals*. Using the word "literal" is really just a fancy piece of terminology, but I think it's a helpful one. If I just said "number" and not "number literal", I might be talking about a variable or a literal in the code. Here are some more examples of number literals:

```java
//notice that we don't use commas in large numbers
5
32592
3.14
-3.14
```

Just like there are number literals, there are *string literals*, which are used for text. Again, this may sound like overly fancy terminology, but I think it is helpful to call these things "string literals" instead of just "strings" because it helps clarify what we're talking about. Here are some examples:

```java
"Hello World"
"This is a string!!!"
"This is also a string."
"We can also put numbers and other symbols in strings: 898&*(*@#$979423"
"89" //note: this is not the same as the number literal 89
```

###Some Math
Try these:
```java
var pointsPossible:Number = 20;
var questionsMissed:Number = 3;
var pointsEarned:Number = pointsPossible - questionsMissed;
var percentage:Number = pointsEarned/pointsPossible;
trace(percentage);

var score1:Number = 44.6;
var score2:Number = 45.9;
var score3:Number = 42.1;
var average:Number = (score1 + score2 + score3)/3; 
//NOTE: Order of operations works as you'd expect
trace(average);
```

In addition to using `*`, `/`, `-`, and `+` symbols, you can use the `%` symbol, which gives a remainder. For example, `11%5` evaluates to `1` and `17%6` evaluates to `5`.

###Concatenation
When working with strings, `+` has a whole new meaning. Instead of adding numbers together, it "concatenates" strings, which is a fancy word that just means the strings join together.

```java
var name1:String = "Cam";
var name2:String = "Eric";
var newMessage:String = name1 + " is " + name2 + "'s younger brother."
trace(newMessage);
```

**Note:** If you put `+` in between a string and a number, concatenation occurs. For example, `4 + "ever"` evaluates to `"4ever"`.


###Give it a try!
Play around with [this example](http://www.christensenacademy.org/modules/beginning-actionscript/textpages/variable-declaration-and-assignment.fla) to help you understand how variables work.

Kowabunga,

Cam
