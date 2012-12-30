#Instances of Movie Clips

When you create movie clip symbols, they appear in the library. When you drag copies of a movie clip symbol onto the stage, you're creating **instances** of that symbol. By default, these instances don't have names, but we can give them names. If we do, we can then do stuff with them in the code.

###Providing Instance Names

![picture showing how to add an instance name](http://www.christensenacademy.org/modules/beginning-actionscript/textpages/instance-name.png)

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

##Creating Instances from Code

You know how you usually created instances of symbols by dragging out copies of symbols from the library? You can actually create new instances straight from the code. Here's how:

![Picture showing how to create a new instance from code](http://www.christensenacademy.org/modules/beginning-actionscript/textpages/linkage-name.png)

1. Add a linkage name to the symbol in the library. You can do this by double clicking in the linkage column of the library where the symbol resides. This might seem like a strange, uneccessary step, so I've provided an additional short explanation of [why we need linkage](#why-we-need-linkage).
2. Create a new instance and add it to the "display stack" as shown below.

```java
//Note: The following code assumes that there is a symbol in the library with a linkage name "Spaceship"

var milleniumFalcon:Spaceship = new Spaceship(); //Note: "milleniumFalcon" is the instance name for this instance
addChild(milleniumFalcon); //This line adds the instance to the "display stack"
```

**Note:** Linkage names should be in UpperCamelCase. Otherwise, they follow the same naming conventions as variables.

**Note:** It's pretty easy to forget the line of code where you add the instance to the display stack. Realize that if you forget this line of code, your newly created instance will never actually appear even though you technically created it.

Your instance will have all of the same properties that any of your previous instances had before. For example, typing `milleniumFalcon.x = 100;` would change the x-coordinate of the ship as you would expect.

###Why We Need Linkage

First of all, I personally think that the designers of Flash would have been wise to not make the linkage name necessary, but this would have required them to enforce stricter naming conventions for the common names we give symbols. Such restrictions include things like not allowing spaces in names and not allowing names to start with numbers. Alas, because our common names for symbols are not forced to conform to these more rigid standards, we must supply a secondary name (a "linkage" name) that actually does conform to those more rigid standards.

Kowabunga,

Cam