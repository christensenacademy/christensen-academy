#Reference Guide for Beginning ActionScript (FIRST DRAFT)

* [Intro to ActionScript](#intro-to-actionscript)
* [Basic Commands](#basic-commands)
* [Comments](#comments)
* [Playhead Commands on Instances](#playhead-commands-on-instances)
* [Buttons](#buttons)
* [Movie Clip Properties](#movie-clip-properties)
* [Variables and Assignment Statements](#variables-and-assignment-statements)
* [Functions](#functions)
* [Parameters (Arguments) of Functions](#parameters-arguments-of-functions)
* [Returning Values from Functions](#returning-values-from-functions)
* [Code Formatting](#code-formatting)

##Intro to ActionScript

**Video:** [Intro to ActionScript]()

If you're navigating this module, it may very well be your first time doing any computer programming. If so, you may be wondering what exactly computer programming is and what the ActionScript 3.0 programming language is. The following is my introductory explanation. Realize, however, that really understanding what programming is requires a pretty deep understanding of how computers actually work. For that, I recommend spending time on the [computer basics module](#http://www.christensenacademy.org/index.html#computer-basics).

###What is Computer Programming
Computer programming is basically just telling the computer what to do. When you program, you write commands for the computer to follow. It's kind of like writing a recipie, but even more precise. There's very little room for error. The computer will always do EXACTLY what you say, and it takes your commands very literally. This leads to all sorts of bugs in computer code where the computer ends up following seemingly nonsensical instruction. Believe it or not, but it's actually possible to command the computer to do the same thing over and over again forever. It never stops; it just keeps doing the same task over and over. This bug is referred to as an infinite loop, and it happens because the computer lacks what we might call common sense. It just does what it's told, no matter what.

The main idea behind computer programs is this: computers are good at following simple commands and executing them very, very quickly. A common computer can execute around one billion instructions (commands) in a single second--don't worry, this doesn't mean that you'll be writing billions of instructions in your computer code! Your job will be to provide good instructions that get the computer doing exactly what you want it to do.

Lastly, you'll find that computer programming requires a lot of logic. Think about the programs you use on a daily basis. They need to adapt and respond to the humans using them. When you click on buttons, things happen. Whey you type on the keyboard, things happen. At some point, some programmer--or, more likely, some group of programmers--wrote code to tell the computer what to do if people click on things, type on the keyboard, and so on. This sort of thing requires programs to have logic. That is, their behavior changes based on conditions.

###What is ActionScript?

ActionScript is the programming language Flash developers use. It was created specifically for Flash, and people don't really use it for any other purpose. It is considered a "scripting" or "interpreted" language because it requires the Flash Player to interpret it. That is, a computer without the flash player installed will not be able to use ActionScript code. This is different from many other programming languages that don't require an interpreter like the Flash Player. For example, Microsoft Word doesn't require an interpreter; it just runs on your computer. Thus, Microsoft Word was definitely not written in ActionScript or any other language that requires an interpreter, such as Python, Ruby, and so on. Most other programs you use on a daily basis are similarly not interpreted. Interestingly, Flash Programs often run in Web browsers that have the Flash Player plugin installed. Many of the online games you see on the Internet are Flash Programs.

In this module, you will learn ActionScript 3.0, which came after--believe it or not--ActionScript 2.0. AS3 (ActionScript 3.0) was created to improve upon AS2. One of the main differences between the two is that AS3 is "object oriented," which is something you'll learn about in another module.

If all of that feels confusing, don't worry too much. The only way to really understand a language is to actually write programs with it. So, let's get started!

###What is Frame Script?
There are two ways to write ActionScript code in Flash. The easiest way is called *frame script*; this is what we'll be using in this module. In frame script, you associate code with individual frames on the timeline.

A more advanced way to write ActionScript is *class-based script*. We'll be using this method in the next module, but not this one.

**Note:** The difference between frame and class-based script is really inconsequential for now. For better or worse, I felt compelled to mention the basic fact up front. Feel free to forget about it until next module.

###What does it take to be good at programming?

* **Perseverence:** Everyone encounters challenges when programming, even very talented and experienced programmers do. Your success as a programmer has everything to do with your willingness to tackle difficult problems and work through real challenges. I believe Albert Einstein once said, "It's not that I'm so smart, it's just that I stay with problems longer." The same is true, I think, of all really good programmers. Becomming an expert won't just magically happen. It takes hard work, dedication, and above all, perseverence in the face of failure. This module is just an introduction to programming, but sometimes starting out can be the hardest part.
* **Joy of Problem Solving:** I highly doubt anyone can become a really good programmer without deeply enjoying solving difficult problems that stretch their abilities to the max. The longer you stick with a problem before getting it, the greater the thrill when you finally do.
* **Play and Curiosity:** Great programmers love playing around with code. As they learn, they try new things out on hunches just to see what might work. Even when they get something right, they play around with it a bit more until it stops working again, always learning through experimentation. This is similar to how babies learn to stand and walk. They fall over and over and over again. Eventually, when they finally get it, they don't stop. They keep going just a little bit more until they fall again, learning every step (literaly) of the way.
* **Logic:** The types of problems you'll encounter in programming are very logical in nature. There's a reason for everything, and if you ever feel confused, it's just because you haven't understood things thoroughly enough yet. There's a logic to everything, and your goal is to find it.
* **Creativity:** Programming is an exceptionally creative process. Programmers enjoy designing and building new things.

##Basic Commands

**Video:** [Basic Commands]()

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

**Video:** [SWFs, Compilers, and Fixing Errors]()

When you run your program--ctrl+enter (Windows) or command+return (Mac)--an SWF file is created that will be run by the Flash Player. When this happens, the computer "compliles" your ActionScript code. It's probably not worth it at this point to try to go into specifics here. Just realize that it is durring this process of generating an SWF file that the computer finds "[compiler errors](#compiler-errors)".

###Compiler Errors

Whe you make a mistake writing code, you'll get a compiler error. These errors mean your program won't work, at least not completely correctly, so it's absolutely essential to fix them. These errors will appear in the Compiler Errors panel where the timeline usually displays. Each error will provide a short description you should read to try to understand the error. Then, **double click on the error to see it in the Actions panel** where you can try to fix it.

**Friendly Advice:** Whenever you need to fix an error--that is, debug your code--take the time to try to fully understand your mistake. Every error you make is a learning opportunity. If you take full advantage of these learning opportunities, you'll find much more success farther down the road.

##Comments

**Video:** [Comments]()

Comments are not commands for the computer to follow. In fact, the computer completely ignores them. Comments are intended for programmers' eyes only. They are used most often by programmers to leave each other or themselves useful notes about the code. In ActionScript, comments can be written in two ways:

1. * **Single Line Comment:** Type `//` followed by your comment onto a single line of code.
2. * **Multiple Line Comment:** Type `/*` followed by your comment, which can be spread across multiple lines, followed by `*/` to end the comment.

##Playhead Commands on Instances

**Video:** [Playhead Commands on Instances]()

When animating in Flash, you've created symbols, which appear in the library. When you drag copies of a symbol onto the stage, you're creating **instances** of that symbol. By default, these instances don't have names, and, if we want to be able to write code that affects instances, we need to be able to somehow refer to them in the code. Here's how we do it:

1. Select an instance on the stage.
2. Go to the Properties panel.
3. Give the instance a name making sure not to include spaces in the name or start the name with a number. I strongly recommend following the "[camel case](#camel-case)" convention described below.
4. Use the instance name in the code to change the instance's properties, stop it from playing, and do other interesting things with it.

```java
/* The following code assumes there is an instance of a movie clip symbol named "shootingStar"
   that has an animation of a shooting star inside of it. */

shootingStar.gotoAndPlay(3); // tells the playhead of the instance to jump to frame three
shootingStar.stop(); // tells the playhead of the instance to stop
shootingStar.play(); // tells the playhead of the instance to play 
```

###Camel Case

When naming instances and variables in ActionScript, you should use what's called "camel case". Basically, there are no spaces, all words are lowercase, and the only capital letters are those at the start of words that come after the first word. Here are some examples:

```
missile
flower
badGuy
redHat
smallHammer
fryingPan
flyingSquirrelWithSupermanCape
```

**Friendly Advice:** It's a good idea to make names for your instances and variables descriptive. It's a bad idea to give names that are hard to remember or confusing.

##Buttons

My definition of a button: *any instance on the stage that does something when clicked on*.

There is, however, such a thing as a button symbol that changes its appearance when it is being hovered over and clicked on. Like a movie clip symbol, you give instances of buttons instance names, which can then be referred to in the code to do stuff.

**Video:** [Button Symbols]()

**Note:** I recommend against using button symbols for a variety of reasons. You can do everything you need to without them. And, if you're clever, you can get movie clip symbols to have hover effects just by using some `stop()` and `gotoAndPlay()` commands.

No matter whether you have an instance of a button symbol or a movie clip symbol, you can use *code snippets* to help you quickly generate code that will execute only when a user clicks on the instance. Here's how:

1. Select the instance on the stage.
2. Give the instance an instance name.
3. Go to the Code Snippets panel.
4. Choose "Event Handlers" -> "Mouse Click Event".
5. Edit the code inside the function to your heart's delight.

###Stop, Play, and Restart Buttons

**Video:** [Stop, Play, and Restart Buttons]()

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

##Creating Instance from Code

You know how you usually created instances of symbols by dragging out copies of symbols from the library? Well, you can actually just create new instances straight from the code. Here's how:

1. Add a linkage name to the symbol in the library. You can do this by double clicking in the linkage column of the library where the symbol resides. This might seem like a strange, uneccessary step, so I've provided an additional short explanation of [why we need linkage](#why-we-need-linkage).
2. Create a new instance and add it to the *[display stack](#display-stack)* as shown below.

```java
//Note: The following code assumes that there is a symbol in the library with a linkage name "Spaceship"

var milleniumFalcon:Spaceship = new Spaceship(); //Note: "milleniumFalcon" is the instance name for this instance
addChild(milleniumFalcon);
```

**Note:** It's pretty easy to foget the line of code where you add the instance to the display stack

Your instance will have all of the same properties that any of your previous instances had before. For example, typing `milleniumFalcon.x = 100;` would change the x-coordinate of the ship as you would expect.

###Why We Need Linkage

First of all, I personally think that the designers of Flash would have been wise to not make the linkage name necessary, but this would have required them to enforce stricter naming conventions for the common names we give symbols. Such restrictions include things like not allowing spaces in names and not allowing names to start with numbers. Alas, because our common names for symbols are not forced to conform to these more rigid standards, we must supply a secondary name (a "linkage" name) that actually does conform to those more rigid standards. In addition to not having spaces and not starting with numbers, linkage names should be upper [camel case](#camel-case). Here are some examples:

```
Spaceship
BlueSpaceship
FloatingButterfly
MaleFigureSkater
ThreeBillyGoats
```

###Display Stack


##Variables and Assignment Statements

Variables can be thought of as containers that store things...

###Variable Types
####Strings
####Numbers
###Assignment Statements






* [Functions](#functions)
* [Parameters (Arguments) of Functions](#parameters-arguments-of-functions)
* [Returning Values from Functions](#returning-values-from-functions)
* [Code Formatting](#code-formatting)
