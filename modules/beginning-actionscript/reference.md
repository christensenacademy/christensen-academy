#Reference Guide for Beginning ActionScript (FIRST DRAFT)

* [Intro to ActionScript](#intro-to-actionscript)
* [Basic Commands](#basic-commands)
* [SWFs and Compilers](#swfs-and-compilers)
* [Comments](#comments)
* [Playhead Commands on Instances](#playhead-commands-on-instances)
* [Buttons](#buttons)
* [Movie Clip Properties](#movie-clip-properties)
* [Registration Points](#registration-points)
* [Creating Instances from Code](#creating-instances-from-code)
* [Variables](#variables)
* [camelCase and UpperCamelCase](#camelcase-and-uppercamelcase)
* [Functions](#functions)
* [Parameters (Arguments) of Functions](#parameters-arguments-of-functions)
* [Returning Values from Functions](#returning-values-from-functions)
* [Code Formatting](#code-formatting)
* [Working with Numbers](#working-with-numbers)
* [Math Functions](#math-functions)
* [Working with Strings](#working-with-strings)
* [String Methods](#string-methods)
* [Operators](#operators)
* [If Statements](#if-statements)
* [Events](#events)
* [While Loops](#while-loops)
* [For Loops](#for-loops)
* [Timer Events](#timer-events)
* [Frame Events](#frame-events)
* [Review](#review)

##Intro to ActionScript

If you're navigating this module, it may very well be your first time doing any computer programming. If so, you may be wondering what exactly computer programming is and what the ActionScript 3.0 programming language is. The following is a quick, introductory explanation.

###What is Computer Programming
Computer programming is basically just telling the computer what to do. When you program, you write commands for the computer to follow. The computer will always do EXACTLY what you say, so you'll need to be very carefull and pay really close attention to small details.

Also, I should point out that programs are more than just sequences of commands. Programs use *logic*, which means that they behave differently under different circumstances. For example, whenever you click on you computer screen, a program has to decide what to do based on your click. If you click on [this link](http://www.youtube.com/watch?v=oHg5SJYRHA0)... point being, programs behave in different ways based on conditions. If you want to become a great programmer, you'll need to get ready to use lots and lots of logic.

###What is ActionScript?

ActionScript is the programming language for Flash. ActionScript can't be used outside of Flash, and Flash content can't be developed with any programming language but ActionScript. If you want to make games and other interactive things in Flash, then you need to learn how to program in ActionScript.

In this module, you will learn ActionScript 3.0, which came after--believe it or not--ActionScript 2.0! I mention this up front so that you make sure to always create new Flash projects using ActionScript 3.0. If you accidentally start a new project in ActionScript 2.0, things won't work.

We'll start out writing what you might call *frame script*. The idea is pretty simple; we'll be writing ActionScript code in individual frames on the timeline. We'll be creating a special layer called "Actions" that we'll use exclusively for writing our code in.

![An example of the Actions Layer]()

Notice the 

In the next module, you'll have a chance to tackle more advanced methods of writing ActionScript that don't require you to write your code in individual frames using *frame script*, but you don't need to worry about that for now.

###What does it take to be good at programming?

* **Perseverence:** Everyone encounters challenges when programming, even very talented and experienced programmers do. Your success as a programmer has everything to do with your willingness to tackle difficult problems and work through real challenges. I believe Albert Einstein once said, "It's not that I'm so smart, it's just that I stay with problems longer." The same is true, I think, of all really good programmers. Becomming an expert won't just magically happen. It takes hard work, dedication, and above all, perseverence in the face of failure. This module is just an introduction to programming, but sometimes starting out can be the hardest part.
* **Joy of Problem Solving:** I highly doubt anyone can become a really good programmer without deeply enjoying solving difficult problems that stretch their abilities to the max. The longer you stick with a problem before getting it, the greater the thrill when you finally do.
* **Play and Curiosity:** Great programmers love playing around with code. As they learn, they try new things out on hunches just to see what might work. Even when they get something right, they play around with it a bit more until it stops working again, always learning through experimentation. This is similar to how babies learn to stand and walk. They fall over and over and over again. Eventually, when they finally get it, they don't stop. They keep going just a little bit more until they fall again, learning every step (literaly) of the way.
* **Logic:** The types of problems you'll encounter in programming are very logical in nature. There's a reason for everything, and if you ever feel confused, it's just because you haven't understood things thoroughly enough yet. There's a logic to everything, and your goal is to find it.
* **Creativity:** Programming is an exceptionally creative process. Programmers enjoy designing and building new things.

##Basic Commands

**Video:** [Basic Commands](http://www.youtube.com/watch?v=1LrtSkcqcZE)

```java
/* Pay close attention to small details like spaces, capital letters, and semicolons.*/

stop(); /* stops the playhead in the current timeline */
play(); /* starts a stopped playhead in the current timeline */
gotoAndPlay(56); /* commands the playhead to jump to the frame whose number is in parenthesis */
trace("Hello World"); /* writes a message to the Output panel */
```

**Note:** These commands are often referred to as "statements" by programmers. Notice how each statement ends with a semicolon.

The commands above all tell the computer to do different things. In Flash, we can write commands like these inside of frames. Here's how:

1. Create a new layer called "actions". You'll use this layer to hold ALL of your ActionScript code.
2. Add a keyframe on this layer where you'd like to put some code.
3. Right click on the keyframe and select "Actions" to open the Actions panel. Note: wherever you right click is where your code will end up, so be careful. If you don't right click on a keyframe, the code will be inserted in the nearest keyframe to the left of where you clicked.
4. Type the commands you with the computer to follow.

**Key Idea:** The computer executes (follows) your commands when the playhead gets to the frame you inseted them on. If you put more than one command in a single frame, both will execute, and they will do so in order from top to bottom. It's important to understand that your commands are executed one after the other, not all at once. Computer programs follow a precise logic, and the order of your commands will be very important later on.

##SWFs and Compilers

**Video:** [SWFs, Compilers, and Fixing Errors](http://www.youtube.com/watch?v=dyoRl2LikIQ)

When you run your program--ctrl+enter (Windows) or command+return (Mac)--an SWF file is created that will be run by the Flash Player. When this happens, the computer "compliles" your ActionScript code. It's probably not worth it at this point to try to go into specifics here. Just realize that it is durring this process of generating an SWF file that the computer finds "[compiler errors](#compiler-errors)".

###Compiler Errors

Whe you make a mistake writing code, you'll get a compiler error. These errors mean your program won't work, at least not completely correctly, so it's absolutely essential to fix them. These errors will appear in the Compiler Errors panel where the timeline usually displays. Each error will provide a short description you should read to try to understand the error. Then, **double click on the error to see it in the Actions panel** where you can try to fix it.

**Friendly Advice:** Whenever you need to fix an error--that is, debug your code--take the time to try to fully understand your mistake. Every error you make is a learning opportunity. If you take full advantage of these learning opportunities, you'll find much more success farther down the road.

##Comments

**Video:** [Comments](http://www.youtube.com/watch?v=OmHvHoWYjJM)

Comments are not commands for the computer to follow. In fact, the computer completely ignores them. Comments are intended for programmers' eyes only. They are used most often by programmers to leave each other or themselves useful notes about the code. In ActionScript, comments can be written in two ways:

1. * **Single Line Comment:** Type `//` followed by your comment onto a single line of code.
2. * **Multiple Line Comment:** Type `/*` followed by your comment, which can be spread across multiple lines, followed by `*/` to end the comment.

##Playhead Commands on Instances

**Video:** [Playhead Commands on Instances](http://www.youtube.com/watch?v=2zPBWkNcRKM)

When animating in Flash, you've created symbols, which appear in the library. When you drag copies of a symbol onto the stage, you're creating **instances** of that symbol. By default, these instances don't have names, and, if we want to be able to write code that affects instances, we need to be able to somehow refer to them in the code. Here's how we do it:

1. Select an instance on the stage.
2. Go to the Properties panel.
3. Give the instance a name making sure not to include spaces in the name or start the name with a number. I strongly recommend following the "[camelCase](#camelcase)" convention described below.
4. Use the instance name in the code to change the instance's properties, stop it from playing, and do other interesting things with it.

```java
/* The following code assumes there is an instance of a movie clip symbol named "shootingStar"
   that has an animation of a shooting star inside of it. */

shootingStar.gotoAndPlay(3); // tells the playhead of the instance to jump to frame three
shootingStar.stop(); // tells the playhead of the instance to stop
shootingStar.play(); // tells the playhead of the instance to play 
```

##Buttons

My definition of a button: *any instance on the stage that does something when clicked on*.

There is, however, such a thing as a button symbol that changes its appearance when it is being hovered over and clicked on. Like a movie clip symbol, you give instances of buttons instance names, which can then be referred to in the code to do stuff.

**Note:** I recommend against using button symbols for a variety of reasons. You can do everything you need to without them. And, if you're clever, you can get movie clip symbols to have hover effects just by using some `stop()` and `gotoAndPlay()` commands.

No matter whether you have an instance of a button symbol or a movie clip symbol, you can use *code snippets* to help you quickly generate code that will execute only when a user clicks on the instance. Here's how:

1. Select the instance on the stage.
2. Give the instance an instance name.
3. Go to the Code Snippets panel.
4. Choose "Event Handlers" -> "Mouse Click Event".
5. Edit the code inside the function to your heart's delight.

###Stop, Play, and Restart Buttons

**Video:** [Stop, Play, and Restart Buttons](http://www.youtube.com/watch?v=6To3XOAyY9A)

Once you've used code snippets, add code to control the playhead. Here's an example of what your code might look like for a restart button:

```java
restartButton.addEventListener(MouseEvent.CLICK, fl_MouseClickHandler);

function fl_MouseClickHandler(event:MouseEvent):void
{
	gotoAndPlay(1);
}

```

##Movie Clip Properties

**Video:** [Movie Clip Properties]()

We can do a whole lot more with instances than just control their playheads. Instances have lots of properties we can change.

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

// The following lines of code write the values of various properties of the instance in the output panel.
trace(blueSquare.x);
trace(blueSquare.y);
trace(blueSquare.alpha);
// and so on and so forth
```

##Creating Instances from Code

**Video:** [Creating Instances from Code](http://www.youtube.com/watch?v=wRpG-OzPins)

You know how you usually created instances of symbols by dragging out copies of symbols from the library? Well, you can actually just create new instances straight from the code. Here's how:

1. Add a linkage name to the symbol in the library. You can do this by double clicking in the linkage column of the library where the symbol resides. This might seem like a strange, uneccessary step, so I've provided an additional short explanation of [why we need linkage](#why-we-need-linkage).
2. Create a new instance and add it to the "display stack" as shown below.

```java
//Note: The following code assumes that there is a symbol in the library with a linkage name "Spaceship"

var milleniumFalcon:Spaceship = new Spaceship(); //Note: "milleniumFalcon" is the instance name for this instance
addChild(milleniumFalcon); //This line adds the instance to the "display stack"
```

**Note:** It's pretty easy to forget the line of code where you add the instance to the display stack. Realize that if you forget this line of code, your newly created instance will never actually appear even though you technically created it.

Your instance will have all of the same properties that any of your previous instances had before. For example, typing `milleniumFalcon.x = 100;` would change the x-coordinate of the ship as you would expect.

###Why We Need Linkage

First of all, I personally think that the designers of Flash would have been wise to not make the linkage name necessary, but this would have required them to enforce stricter naming conventions for the common names we give symbols. Such restrictions include things like not allowing spaces in names and not allowing names to start with numbers. Alas, because our common names for symbols are not forced to conform to these more rigid standards, we must supply a secondary name (a "linkage" name) that actually does conform to those more rigid standards. In addition to not having spaces and not starting with numbers, linkage names should be "[UpperCamelCase](#uppercamelcase)". Here are some examples:

```
Spaceship
BlueSpaceship
FloatingButterfly
MaleFigureSkater
ThreeBillyGoats
```

##Variables
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

Every program stores information of some kind. Think about a computer game. A game needs to store things like health, points, and the time remaining in the game. All of this information or data is stored in **variables**. When you think of variables in programming, try not to think of them in the same way as you might think of variables in math class. In math, variables represent something that is unknown. In programming, variables are like little buckets or containers that store something. Sometimes variables store numbers, but they can also store text, sounds, and other objects like instances of movie clip symbols. The reason they're called *variables* is that what they contain may *vary* or change throughout the program. For example, if you made a game in which the player tried to earn points, you would need to have a variable for keeping track of the points, and the value stored in that variable would change throughout the game.

Of course, a variable doesn't store anything unless we tell it to. In the examples above, we created lots of new variables, but they haven't been *assigned* any values yet. That is, they aren't actually storing anything. Here's how we might go about *assigning values to variables*:

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

In the examples above, notice how the value on the right were assigned to the values on the left. This is very important to remember. Unlike in math, you can't switch this around. That is, writing `5 = score` makes no sense in programming. The "=" sign is actually called the *assignments operator* because it takes the value of the expression on the right side of the "=" sign and *assigns* it to the variable on the left side of the equals sign.

###Variable Types

You'll notice that there are different types of variables that store different types of data. So far, you've seen variables that store numbers, text (called "strings"), and instances of movie clips. When creating a new variable, you are really *declaring* a new variable that will store a certain type of data. For example, `var count:Number` declares a variable named "count" of type Number. Once you have declared a variable, you can assign it values.

```java

```

###Why are they called "strings"?

There's really no good answer here. Some people thinks it makes sense to use the phrase "string of characters" because strings just store a sequence (string) of letters, numbers, spaces, and other characters that people can type on their keyboards. Personally, I think the name "string" was a bad choice and that it would have made much more sense to call these things "text". Oh well, we're stuck with what we've got. Whenever you're programming and you want to store or work with text in some way, you'll be working with *strings*.

###Assignment Statements

##Literals




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




* [Functions](#functions)
* [Parameters (Arguments) of Functions](#parameters-arguments-of-functions)
* [Returning Values from Functions](#returning-values-from-functions)


* [Code Formatting](#code-formatting)
