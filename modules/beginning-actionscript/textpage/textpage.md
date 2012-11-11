#Beginning ActionScript
###by Cameron Christensen (2012)

**Goal:** By the end of the module, you should be able to create your own unique computer game. This will not be an easy journey, but if you stick with it, you'll be amazed at what you can accomplish.

####Programming Basics
* [Intro to ActionScript](#intro-to-actionscript)
* [Getting Started](#getting-started)
* [Fixing Errors](#fixing-errors)
* [Variables](#variables)
* [Functions](#functions)

####Instances and Events
* [Instances of Movie Clips](#instances-of-movie-clips)
* [Instances of Text Fields](#instances-of-text-fields)
* [Creating Instances from Code](#creating-instances-from-code)
* [Instances of Sounds](#Instances of Text Fields)
* [Events](#events)

####Coding Conventions
* [camelCase and UpperCamelCase](#camelcase-and-uppercamelcase)
* [Semicolons](#semicolons)
* [Indenting](#indenting)

####Working with Numbers and Strings
* [Working with Numbers](#working-with-numbers)
* [Working with Strings](#working-with-strings)

####Control Structures
* [If Statements](#if-statements)
* [While Loops](#while-loops)
* [For Loops](#for-loops)
* [Timer Events](#timer-events)
* [Frame Events](#frame-events)

#Programming Basics
##Intro to ActionScript
*"Most good programmers do programming not because they expect to get paid or get adulation by the public, but because it is fun to program." --Linus Torvalds*

If you're navigating this module, it may very well be your first time doing any computer programming. If so, you may be wondering what exactly computer programming is and what the ActionScript 3.0 programming language is. The following is a quick, introductory explanation.

###What is Computer Programming?
Computer programming is basically just telling the computer what to do. When you program, you write commands for the computer to follow. The computer will always do EXACTLY what you say, so you'll need to be very carefull and pay close attention to small details.

###What is ActionScript?

ActionScript is the programming language for Flash. ActionScript can't be used outside of Flash, and Flash content can't be developed with any programming language other than ActionScript. If you want to make games and other interactive things in Flash, then you need to learn how to program in ActionScript.

In this module, you will learn the basics of ActionScript 3.0, which came after--believe it or not--ActionScript 2.0! I mention this up front so that you make sure to always create new Flash projects using ActionScript 3.0. If you accidentally start a new project in ActionScript 2.0, things won't work.

We'll start out writing what you might call *frame script*. The idea is pretty simple; we'll be writing ActionScript code in individual frames on the timeline. We'll be creating a special layer called "Actions" that we'll use exclusively for writing our code in.

![An example of the Actions layer](http://www.christensenacademy.org/modules/beginning-actionscript/textpage/actions-layer.png)

Notice the "a" symobl in the keyframes of the Actions layer. This symbol lets you know that code has been written for that frame. To see and edit the code, right-click and go to Actions to open the Actions panel, which will display the code for that frame. Alternatively, you can press F9 to open the Actions panel.

![An example of the Actions panel](http://www.christensenacademy.org/modules/beginning-actionscript/textpage/actions-panel.png)

**Side Note:** The Actions panel is an example of what's known as a *text editor*. When writing ActionScript, you'll use the Actions panel, but if you someday write computer code in another language, you'll end up using a different text editor. Unlike Word Processors, such as Microsoft Word, text editors only allow you to edit *plain text*, which is what computer programs are written in.

###What does it take to be good at programming?

* **Perseverence:** Everyone encounters challenges when programming. Your success as a programmer has everything to do with your willingness to tackle difficult problems and work through them til completion. This takes time. You may encounter problems that stump you for 30 minutes, an hour, a day, and even longer! Albert Einstein once said, "It's not that I'm so smart, it's just that I stay with problems longer." The same is true, I think, of all really good programmers. Becomming an expert won't just magically happen. It takes hard work, dedication, and above all, perseverence in the face of failure. This module is just an introduction to programming, but sometimes just starting out can be the hardest part. Stick with it, and you'll succeed.
* **Joy of Problem Solving:** I highly doubt anyone can become a really good programmer without deeply enjoying solving difficult problems that stretch their abilities to the max. The longer you stick with a problem before getting it, the greater the thrill you'll have and the deeper your learning will be.
* **Play and Curiosity:** Great programmers love playing around with code. As they learn, they try new things out on hunches just to see what might work. Even when they get something right, they play around with it a bit more just to see what happens. This is similar to how babies learn to stand and walk. Babies fall down over and over again as they try to stand. Eventually, when they finally get it, they don't stop; instead, they try to walk, which inevitably leads to more falling. Yet, they keep at it, driven by some strange playful curiosity about the world around them. Never satisfied with their progress, they press on, eventually learning to walk and even run. This, I think, is the way to approach learning programming--with a playful and unquenchable curiosity.
* **Logic:** The types of problems you'll encounter in programming are very logical in nature. The type of logic you'll encounter doesn't come naturally to most people, but the more you practice, the easier it becomes. Have patience and take the time to think logically and reason through different scenarios until you discover the answer. You'll get better at it as you go, but only if you invest the time and energy to really *think*.
* **Creativity:** Programming is an exceptionally creative process. Programmers enjoy designing and building new things. If writing computer programs were something routine and mechanical, computers could probably write their own programs.





##Getting Started

*"When I say jump, you say, 'How high?'" --My father's early attempts at programming me...*

###Comments

All programming languages have a way to write *comments*. Comments are not actual code. They're just notes programmers leave themselves and each other to explain their code.

Here is an example:

```java
stop(); //this is a comment
```

In the example above, `run();` was an actual piece of code, while `//this is a comment` was a comment. Of course, normally the comment would actually say something useful about the code. The following is a more realistic example:

```java
stop(): // this command stops the playhead
```

In ActionScript, comments can be written in two ways:

```java
/* This comment can span
multiple lines */

// This comment must stay on this line
```

####Should I write lots of comments?
Having lots of comments isn't always good because they clutter up the rest of the code. Most teachers encourage novice programmers to write lots of comments. I don't necessarily agree. My pragmatic advice: do what works for you. Your focus should be on learning programming. If you love writing comments in your code to make things more clear, then go for it. Otherwise, don't worry about writing many comments early on.

I'll be writing lots of comments in my examples throughout this document because I'm trying to help you learn. I normally would not write quite so many comments.

####Adding ActionScript to a Frame
In Flash, we write ActionScript code inside of frames. Here's how:

![](http://www.christensenacademy.org/modules/beginning-actionscript/textpage/adding-actionscript-to-a-frame.png)

1. Create a new layer called "Actions". You'll use this layer to hold **all** of your ActionScript code.
2. Add a keyframe on this layer where you'd like to put some code.
3. Right click on the keyframe and select "Actions" to open the Actions panel. **Note:** Wherever you right-click is where your code will end up, so be careful. If you don't right-click on a keyframe, the code will be inserted in the nearest keyframe to the left of where you clicked.
4. Type the commands you want the computer to follow.

**Tip:** Use F9 on the keyboard to open the ActionsPanel more quickly.

#####Editing ActionScript on an Existing Frame
Right-click on the frame and go to Actions or, if the Actions panel is already open, you can find the correct frame on the left side of the panel. This is easier and faster than right-clicking on a frame in the timeline.

![](http://www.christensenacademy.org/modules/beginning-actionscript/textpage/editing-existing-actionscript.png)

####Some Examples of Basic Code
```java
// Pay close attention to small details like spaces, capital letters, and semicolons.*/

stop(); // stops the playhead in the current timeline
play(); // starts a stopped playhead in the current timeline
gotoAndPlay(56); // commands the playhead to jump to the frame whose number is in parenthesis
trace("Hello World"); // writes a message to the Output panel
```

**Note:** Each line of code above can be thought of as a command telling the computer to do something. I think this is a good way to think about it for the time being, but realize that technically what's going in each line is that [functions](#functions) are being called.

####Give It a Try
Play around with [this example](http://www.christensenacademy.org/modules/beginning-actionscript/textpage/basic-code-1.fla) to see if you can figure out what the code is doing. To test the program press ctrl+enter on PC or command+return on Mac. Look at the code for each frame. Try changing up some of the commands and predict the results.




##Fixing Errors
*"Everybody makes mistakes. Everybody has those days." --Miley Cyrus*

####Compiler Errors
When you run your program--ctrl+enter (Windows) or command+return (Mac)--your ActionScript code gets *compiled* and an SWF file is generated. What exactly "compiling" means is somewhat irrelevant right now. Just realize that Flash attempts to find compiler errors before your program actually runs. These errors will be shown to you in the Compiler Errors panel.

![An example of the Actions layer](http://www.christensenacademy.org/modules/beginning-actionscript/textpage/compiler-error.png)

**Key Idea:** Compiler errors mean your program won't work correctly. You must **fix all compiler errors before doing anything elese**.

Each compiler error will provide a short description you should read to try to understand the error. Then, **double click on the error to see it in the Actions panel** where you can try to fix it.

**Friendly Advice:** Whenever you need to fix an error, take the time to try to fully understand your mistake. Every error you make is a learning opportunity. If you take full advantage of these learning opportunities, you'll find much more success farther down the road.

####Runtime Errors
Some errors aren't caught at "compile time" and instead appear during "run time". Runtime errors are a little trickier to fix in general because you only discover them when your program actually runs your code. For example, if there is a runtime error on frame 203, you won't even know it exists until the playhead gets to frame 203. These errors show up in the Output panel and can be harder to decipher than compiler errors.

![An example of the Actions layer](http://www.christensenacademy.org/modules/beginning-actionscript/textpage/runtime-error.png)

####Logic Errors
The last type of error is a logic error. When your program has a logic error, it runs without compiler or runtime errors, but it doesn't do what it's supposed to. These can be the most difficult errors to fix because Flash won't give you any hints or even tell you that an error exists. If you play computer games, you may be familiar with logic errors already; perhaps you know them as *glitches*.

####Bugs
Programmers often refer to runtime and logic errors as "bugs". Debugging code is a skill all programmers naturally develop as they continue writing programs.





##Variables

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

**Important:** You should use [camelCase](#camelcase) for naming variables. This isn't strictly required, but I highly recommend it.

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
Play around with [this example](http://www.christensenacademy.org/modules/beginning-actionscript/textpage/variable-declaration-and-assignment.fla) to help you understand how variables work.


##Functions
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

#Instances and Events
##Instances of Movie Clips

When you create movie clip symbols, they appear in the library. When you drag copies of a movie clip symbol onto the stage, you're creating **instances** of that symbol. By default, these instances don't have names, but we can give them names. If we do, we can then do stuff with them in the code.

###Providing Instance Names

![picture showing how to add an instance name](http://www.christensenacademy.org/modules/beginning-actionscript/textpage/instance-name.png)

1. Select an instance on the stage.
2. Go to the Properties panel.
3. Give the instance a name making sure not to include spaces in the name or start the name with a number. **Note:** I strongly recommend following the "[camelCase](#camelcase)" convention. As you'll see in a bit, instance names are really no different from variable names.


###Controlling an Instance's Playhead
```java
/* The following code assumes there is an instance of a movie clip symbol named "shootingStar"
   that has an animation of a shooting star inside of it. */

shootingStar.gotoAndPlay(3); // tells the playhead of the instance to jump to frame three
shootingStar.stop(); // tells the playhead of the instance to stop
shootingStar.play(); // tells the playhead of the instance to play 
```

###Movie Clip Properties

We can do a whole lot more with instances than just control their playheads. Instances have lots of properties we can change. You can think of these properties as varaibles that are attached specifically to each instance. We can use assignment statements to assign new values to property.

```java
// The following code assumes there is an instance of a movie clip symbol named "blueSquare."

// The following lines of code set the instance's various properties to new values.
blueSquare.x = 55; // other values: any positive or negative number
blueSquare.y = 400;
blueSquare.rotation = 180; // (works in degrees) other values: any positive or negative number
blueSquare.alpha = 0.5; // other values: 0.0 (transparent) to 1.0 (opaque)
blueSquare.width = 100; // other values: any positive number
blueSquare.height = 100;
blueSquare.scaleX = 1.5; // (works as a percent where 1.0 = 100%) other values: any positive number
blueSquare.scaleY = 2;
blueSquare.visible = false; // other values: true

trace(blueSquare.x);
trace(blueSquare.y);
trace(blueSquare.alpha);
```

##Instances of Text Fields
The following only describes how to work with classic text fields, not TLF text. 

![](http://www.christensenacademy.org/modules/beginning-actionscript/textpage/classic-text.png)

There are three types of classic text you can create--static, dynamic, and input. If you play around with these three types, you'll notice that Flash doesn't let you add an instance name to static text. This makes sense, I think, because static text won't change, so you shouldn't be able to manipulate it in the code. Dynamic and input text, however, can have instance names because we would like to be able to get the values from input text fields and assign new values to dynamic text fields.

![picture showing how to add an instance name](http://www.christensenacademy.org/modules/beginning-actionscript/textpage/text-field-instance-name.png)

**Note:** I highly recommend using [camelCase](#camelcase) for these instance names as well.

###Retrieving Input
```java
//The following example assumes an input text field named passwordBox exists on the same frame as this code.
var password:String = passwordBox.text;
```

####But, what if the input is a number?
```java
//The following examples assume an input text field named difficultyInput exists on the same frame as this code
var difficulty:Number = difficultyInput.text; //this will fail

//here's how to do it
var difficulty:Number = Number(difficultyInput.text);
```

In this example, the built-in function `Number` took a string as a parameter and returned a number.

###Assigning a Dynamic Text Field a New Value
```java
//The following examples assume dynamic text fields named outputScore and outputName
outputName.text = playerName; //assume playerName is a variable of type String
outputScore.text = "" + score; //assume score is a variable of type Number.
```

**Note:** Writing `"" + score` concatenates an empty string with a number, which essentially converts the number into a String. This is necessary to do because the text property is of type String, not Number.


##Creating Instances from Code

You know how you usually created instances of symbols by dragging out copies of symbols from the library? You can actually create new instances straight from the code. Here's how:

![Picture showing how to create a new instance from code](http://www.christensenacademy.org/modules/beginning-actionscript/textpage/linkage-name.png)

1. Add a linkage name to the symbol in the library. You can do this by double clicking in the linkage column of the library where the symbol resides. This might seem like a strange, uneccessary step, so I've provided an additional short explanation of [why we need linkage](#why-we-need-linkage).
2. Create a new instance and add it to the "display stack" as shown below.

```java
//Note: The following code assumes that there is a symbol in the library with a linkage name "Spaceship"

var milleniumFalcon:Spaceship = new Spaceship(); //Note: "milleniumFalcon" is the instance name for this instance
addChild(milleniumFalcon); //This line adds the instance to the "display stack"
```

**Note:** Linkage names should be in [UpperCamelCase](#uppercamelcase). Otherwise, they follow the same naming conventions as variables.

**Note:** It's pretty easy to forget the line of code where you add the instance to the display stack. Realize that if you forget this line of code, your newly created instance will never actually appear even though you technically created it.

Your instance will have all of the same properties that any of your previous instances had before. For example, typing `milleniumFalcon.x = 100;` would change the x-coordinate of the ship as you would expect.

###Why We Need Linkage

First of all, I personally think that the designers of Flash would have been wise to not make the linkage name necessary, but this would have required them to enforce stricter naming conventions for the common names we give symbols. Such restrictions include things like not allowing spaces in names and not allowing names to start with numbers. Alas, because our common names for symbols are not forced to conform to these more rigid standards, we must supply a secondary name (a "linkage" name) that actually does conform to those more rigid standards.

##Instances of Sounds

In the same way that you can work with instances of movie clips and text fields in ActionScript code, you can also work with instances of sounds. 

![Picture showing how to create a new instance of a sound in code](http://www.christensenacademy.org/modules/beginning-actionscript/textpage/sound-instance.png)

The first thing you need to do to play a sound in your code is create a linkage name in the library for the sound you wish to use. You should use [UpperCamelCase](#uppercamelcase) for the linkage name.

Then, here are some examples of how you would write the code:

```java
//The following code assumes that a sound in the library has a linkage name SonicBoom
var exampleSound:SonicBoom = new SonicBoom();
exampleSound.play();

//The following code assumes that a sound in the library has a linkage name Buzzer
var exampleSound2:Buzzer = new Buzzer();
exampleSound2.play();
```

##Events
Think about any computer or video game you've ever played. When you press buttons, stuff happens. Knowing about variables, functions, and instances enables us to have our programs do lots of stuff, but so far we have no way of having this stuff happen in response to a user doing something. What we need are *events*.

**Key Idea:** We can attach events to specific movie clips or the the entire stage. 

**Key Idea:** There are really two parts to an event: an event listener, and a corresponding function.

###Mouse Example 
```
//assume a movie clip instance named button exists on the stage this frame
button.addEventListener(MouseEvent.CLICK, doStuff);

function doStuff(event:MouseEvent):void
{
	// Do some stuff.
  // This is a normal function that will get called when the user clicks on the button instance
}
```

Notice the code that says `MouseEvent.CLICK` and the code that says `event:MouseEvent`. There are other types of events than mouse events, such as keyboard events. Furthermore, there are many types of mouse events. The example above is for when the user clicked the mouse over the instance. Here are some other mouse events you might find useful:

```java
MouseEvent.CLICK
MouseEvent.DOUBLE_CLICK
MouseEvent.MIDDLE_CLICK
MouseEvent.MOUSE_DOWN
MouseEvent.MOUSE_UP
MouseEvent.MOUSE_MOVE
MouseEvent.MOUSE_OVER
MouseEvent.MOUSE_OUT
MouseEvent.RIGHT_CLICK
```

###Keyboard Example
Instead of adding keyboard event listeners to individual instances, we can instead add them to the stage.
```java
stage.addEventListener(KeyboardEvent.KEY_DOWN, keyPressed);

function keyPressed(event:KeyboardEvent):void
{
  if(event.keyCode == 32)
  {
    // Code for for what should happen if the spacebar was pressed
  }
  else if(event.keyCode == 38)
  {
    // Code for what should happen if the up arrow was pressed
  }
}

stage.addEventListener(KeyboardEvent.KEY_UP, keyReleased);

function keyReleased(event:KeyboardEvent):void
{
  if(event.keyCode == 32)
  {
    // Code for for what should happen if the spacebar was released
  }
  else if(event.keyCode == 38)
  {
    // Code for what should happen if the up arrow was released
  }
}
```

**Note:** Dealing with keyboard events requires you to use [if statements](#if-statements) to check which key was pressed. We can write `event.keyCode` to tell us what key triggered the event.

####Key Codes
```
Backspace = 8
Tab = 9
Enter = 13
Shift = 16
Control = 17
CapsLock = 20
Esc = 27
Spacebar = 32
PageUp = 33
PageDown = 34
End = 35
Home = 36
LeftArrow = 37
UpArrow = 38
RightArrow = 39
DownArrow = 40
Insert = 45
Delete = 46
NumLock = 144
ScrLk = 145
Pause/Break = 19
A = 65
B = 66
C = 67
D = 68
E = 69
F = 70
G = 71
H = 72
I = 73
J = 74
K = 75
L = 76
M = 77
N = 78
O = 79
P = 80
Q = 81
R = 82
S = 83
T = 84
U = 85
V = 86
W = 87
X = 88
Y = 89
Z = 90
a = 65
b = 66
c = 67
d = 68
e = 69
f = 70
g = 71
h = 72
i = 73
j = 74
k = 75
l = 76
m = 77
n = 78
o = 79
p = 80
q = 81
r = 82
s = 83
t = 84
u = 85
v = 86
w = 87
x = 88
y = 89
z = 90
0 = 48
1 = 49
2 = 50
3 = 51
4 = 52
5 = 53
6 = 54
7 = 55
8 = 56
9 = 57
;: = 186
=+ = 187
-_ = 189
/? = 191
`~ = 192
[{ = 219
\| = 220
]} = 221
"' = 222
, = 188
. = 190
/ = 191
Numpad 0 = 96
Numpad 1 = 97
Numpad 2 = 98
Numpad 3 = 99
Numpad 4 = 100
Numpad 5 = 10
Numpad 6 = 102
Numpad 7 = 103
Numpad 8 = 104
Numpad 9 = 105
Numpad Multiply = 106
Numpad Add = 107
Numpad Enter = 13
Numpad Subtract = 109
Numpad Decimal = 110
Numpad Divide = 111
F1 = 112
F2 = 113
F3 = 114
F4 = 115
F5 = 116
F6 = 117
F7 = 118
F8 = 119
F9 = 120
F10 = nokey
F11 = 122
F12 = 123
F13 = 124
F14 = 125
F15 = 126
```

###Code Snippets
I'm not going to explain code snippets right here, but if you're already familiar with them for some reason, I'd like to caution against using them. Once you understand how to write set up events by adding event listeners and writing your own functions, you're better of avoiding code snippets and just writing everything yourself. It's a little more work up front, but you'll have more control over your code, and you can make sure your functions are given reasonable names.







#Coding Conventions
##camelCase and UpperCamelCase
###camelCase
When naming instances, variables, and functions in ActionScript, you should use what's called "camel case", or, as I like to write it, camelCase. In camelCase, there are no spaces all characters are lower case except for the first letters of words after the first. Notice how the capital letters add "humps" like a camel to the names. Here are some examples:
```
missile
flower
badGuy
redHat
smallHammer
fryingPan
flyingSquirrelWithSupermanCape
```

**Friendly Advice:** It's a good idea to make names for your instance, variable, and function names descriptive. It's a bad idea to give names that are hard to remember or confusing.

###UpperCamelCase
When creating linkage names for symbols, you should follow the UpperCamelCase naming convention. Here are some examples:
```
Missile
Flower
BadGuy
RedHat
SmallHammer
FryingPan
FlyingSquirrelWithSupermanCape
```

**Friendly Advice:** It's a good idea to make your linkage names descriptive. If the symbol is a picture of a hammer, you should probably name it "Hammer".

##Semicolons
Semicolons go at the end of most lines of code. The only exceptions to this rule is for lines of code that come just before blocks of code in `{` and `}` symbols, such as [functions](#functions), [if statements](#if-statements), and other control structures.

**Note:** Each line of code that ends in a semicolon is technically called a *statement*.

**Note:** In ActionScript 3.0, most of the time your program will still work even if you forget semicolons. This seems silly to me. Why would the language technically require something then not strictly enforce it? As good practice, don't leave off the semicolons. There are a few edge cases where this will cause your code not to work.

##Indenting
You may have noticed how the code inside of a function is indented. The basic rule of thumb is that any time you have a code block (i.e., some code in between `{` and `}` symbols) you should indent the code inside of the block.

```
function bestSoda(soda:String):String
{
  // notice how this code is indented
  if(soda == "Mountain Dew")
  {
    // notice how this code is indented even further!
    return "Yes, indeed!";
  }
  else
  {
    return "No way! Get out of town!";
  }
}
```

#Working with Numbers and Strings
##Working with Numbers
As you saw previously, you can use number variables and literals to perform basic mathimatical operations. This section just covers a few more useful things you can do with numbers.

###Advanced Assignment
```java
var pebbles:Number = 1;
pebbles += 2; // pebbles now has a value of 3
pebbles += 2; // pebbles now has a value of 5

var luckyCharms:Number = 1;
luckyCharms *= 3; // luckyCharms now has a value of 3
luckyCharms *= 3; // luckyCharms now has a value of 9

var slicesOfToast:Number = 8;
slicesOfToast -= 4; // slicesOfToast now has a value of 4

var bananas:Number = 5;
bananas /= 2; // bananas now has a value of 2.5

bananas++; // bananas now has a value of 3.5
bananas--; // bananas now has a value of 2.5
```
###Using Built-In Math Functions
```java
Math.abs(-3); // returns the absolute value of -3
Math.ceil(2.3); // returns the "ceiling" of 2.3, which is 3
Math.floor(2.7); // returns the "floor" of 2.7, which is 2. This is sometimes known as truncation
Math.round(2.5); // returns 3 as you would expect
Math.max(2, 5, 9, 4.6); // returns 9, which is the largest number
Math.min(2, 5, 9, 4.6); // returns 2, which is the smallest number
Math.pow(2, 3); // returns 8, which is the value of 2 raised to the third power
Math.sqrt(81); // returns 9, which is the square root of 81

Math.random(); // returns a pseudo-random value between 0 and 1
Math.random()*10; // returns a pseudo-random value between 0 and 10
Math.ceil(Math.random()*10); // returns a random integer between 1 and 10
Math.ceil(Math.random()*10 + 5); // returns a random integer between 6 and 15
```

**Note:** These built-in functions are all part of the Math class. The [official ActionScript 3.0 reference](http://help.adobe.com/en_US/FlashPlatform/reference/actionscript/3/Math.html) has a complete list of everything you can do with Math.

##Working with Strings
There are a lot of things we can do with strings. You already learned two of the most important ones: concatenation and converting to and from numbers. Here's a quick review:

```java
// concatenation
"Gr" + 8 + "!" // this expression evaluates to "Gr8!"

// converting numbers to strings
"" + 4 // this expression evaluates to "4"

// converting strings to numbers
Number("89") // this expression evaluates to 89
```

###String Methods
Remember how movie clip instances have properties like `alpha` and `height`? We were able to do things like `ghost.alpha = 0.5`, which assigned a new value to the alpha property of an instance named ghost. Like movie clip instances, strings have a property too:

```java
var example:String = "Hello World";
trace(example.length); // prints 11 because there are 11 characters in the string
```
**Note:** Unlike the properties of instances, the length property of Strings cannot be set directly; all it's good for is telling you how long the string is.

It turns out that `length` is the only property of strings. Instead of properties, strings have a lot of *methods*. Just as properties are variables attached to an instance, methods are functions attached to an instance. Here are some examples of useful string methods:

```java
var example:String = "Hello World";

example.indexOf("llo"); // returns 2, which is the position of the first occurrence of "llo" in "Hello World"
// Note: Each character has a position in the string. Numbering starts at zero with the leftmost character
example.lastIndexOf("o"); // returns 7, which is the position of the last occurrence of "o" in "Hello World"
example.lastIndexOf("kowabunga"); // returns -1 because "kowabunga" does not occur in "Hello World"
example.substr(0,5); // returns "Hello", which is the substring from position 0 up to but not including position 5
example.toUpperCase(); // returns "HELLO WORLD"
example.toLowerCase(); // returns "hello world"
```

**Note:** These methods do not change the value of the string variable; they just return a new string. If you wanted to change the value of a string variable, you'd have to do something like `example = example.toUpperCase();`.

**Note:** These are just some of the methods for strings. The [official ActionScript 3.0 reference](http://help.adobe.com/en_US/FlashPlatform/reference/actionscript/3/String.html) has a complete list of everything you can do with String.

