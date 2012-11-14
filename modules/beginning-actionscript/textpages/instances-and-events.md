#Beginning ActionScript
##Instances and Events
####by Cameron Christensen (2012)

**Goal:** By the end of the module, you should be able to create your own unique computer game.

* [Instances of Movie Clips](#instances-of-movie-clips)
* [Instances of Text Fields](#instances-of-text-fields)
* [Creating Instances from Code](#creating-instances-from-code)
* [Instances of Sounds](#Instances of Text Fields)
* [Events](#events)

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