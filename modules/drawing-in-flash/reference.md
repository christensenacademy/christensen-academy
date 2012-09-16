#Drawing in Flash Reference Guide
Flash can be used as a drawing tool to create vector graphics.
##Overview
* [Vector vs. Bitmap](#vector-vs-bitmap)
* [Stroke and Fill](#stroke-and-fill)
* [Primitive Shapes vs. Object Drawings](#primitive-shapes-vs-object-drawings)
* [Color Basics](#color-basics)
* [Line, Pencil, and Paintbrush Tools](#line-pencil-and-paintbrush-tools)
* [Anchor Points](#anchor-points)
* [Pen Tool](#pen-tool)
* [Layers](#layers)
* [Transform Tool](#transform-tool)
* [Symbols and Instances](#symbols-and-instances)
* [Flash Coordinate System](#flash-coordinate-system)
* [Gradients](#gradients)
* [Text](#text)

##Vector vs. Bitmap
Unlike most drawing programs that create graphics pixel by pixel, Flash uses vector graphics, which describe shapes in terms of anchor points and curves.

###Advantages of Vector Graphics
* Small file sizes
* Clean, precise shapes
* Zooming in does not lead to pixelation
* Good for graphics like logos and cartoons

###Disadvantages of Vector Graphics
* Drawing vector graphics requires patience and a greater level of expertise than drawing with pixels.
* Photorealistic graphics are not possible

##Stroke and Fill
Shapes in flash can have a stroke, a fill, or a stroke and a fill. A stroke is the outline of a shape. A fill is the inside part.

Note: Fills are not possible in shapes that are not closed. 

###Ink Bottle and Paint Bucket
The Ink Bottle tool will add a stoke to a shape that doesn't have one or change the color of an existing stroke.

The Paint Bucket tool will add a fill to a shape that doesn't have one or change the color of an existing fill.

##Primitive Shapes vs. Object Drawings
###Telling Primitives and Object Drawings Apart
Primitives show a dotted pattern when selected. Object drawings show a blue box around them when selected.

###Important Facts about Primitives
* Primitive shapes "eat" each other.
* Primitive shapes "join" each other at intersection points.
* Primitive shapes can be combined into object drawings

###Important Facts about Object Drawings
* Object drawings contain primitive shapes. To access the primitive shapes, simply double-click on the object.
* Object drawings can be broken apart into primitive shapes.
* Object drawings do not "eat" each other or "join" each other at intersection points. Each object drawing is completely separate from other object drawings.

###Ordering Objects on the Stage
Assuming all primitive shapes and object drawings are in the same layer...
* Object drawings will always be on top of primitives.
* The primitive currently selected will be on top of other primitives.
* It is possible to arrange objects on top of one another by sending objects forward and backward.

##Color Basics
It is possible to change the stoke and fill colors of objects in several ways:
* through the tools panel
* through the properties panel
* through the colors panel

###Alpha
Alpha is a property of all colors. When alpha is 100, the color is completely opaque. When alpha is 0, the color is completely transparent. 

###Eyedropper
The eyedropper tool allows you to select a color by clicking on any part of the Flash workspace. This is very convenient.

Note: the eyedropper automatically appears when you attempt to change a color through the properties or tools panels.

##Line, Pencil, and Paintbrush Tools
###Line
The line tool is great for drawing objects of all sorts, especially those with straight lines or simple curves. Very complex shapes, such as the outline of a guitar or a car, can be created with the line tool.

Hint: After drawing a line with the line tool, the line can be curved using the selection tool.

###Pencil
This tool creates a stroke wherever you draw. If you want a smooth line created, make sure to have the smooth option selected in the tool options.

###Paintbrush
I recommend staying away from this tool. Realize that all it is doing is creating a shape with a fill (no stroke). There are better ways to create shapes.

##Anchor Points
All shapes are composed of anchor points. Generally, these anchor points create a closed path so that a fill can be applied to inside of the shape.

As a general rule, you should try to minimize the number of anchor points in your shapes. This reduces file size and makes your shapes look better. It also gives you greater control over manipulating your shapes later on.

###Subselection Tool
The subselection tool allows you to manipulate anchor points. It allows you to select anchor points and do things to them:

* Delete anchor points
* Move anchor points (with the mouse or keyboard)
* Adjust curves in between anchor points

####Handlebars
When you have curves between anchor points (as opposed to straight lines), you will see handlebars coming out of the anchor points. You can adjust these handlebars with the subselection tool to manipulate the curves.

Note: If an anchor point does not have handlebars, simply hold alt and drag them out. Doing this creates a smoother curve through the anchor point. Also note that you can do this even if an anchor point already has handlebars.

Note: If you want to manipulate one handlebar and not the other, hold down alt before clicking the handlebar. Doing this will create a corner at the anchor point as opposed to a smooth curve through the anchor point.

##Pen Tool
This tool has many purposes, but I'll limit this discussion to the two most useful ones.
###Creating Shapes
Creating a shape with the pen tool is like playing a game of connect the dots. Every time you click the pen tool, a new anchor point is created. Lines automatically connect these anchor points. Click back on the first anchor point you made to finish your shape.
###Adding Anchor Points
With the pen tool (or the "add anchor point tool"), you can add an anchor point to a part of a curve that already exists.

##Layers
The timeline in Flash allows you to add layers. This is helpful for organizing your work. For example, you can add an image to a background layer and lock it in place to make sure it doesn't more. What's more, you can hide layers you don't want to see at the moment.

##Transform Tool
Once you've selected the objects (primitives, object drawings, symbols, etc.) you'd like to transform, take out the transform tool and examine your options. You can:
* rotate
* skew
* resize

Hint: If you'd like to keep your graphics from distorting, hold down shift as you resize them to constrain the aspect ratio (i.e., keep things proportional).

###Transformation Points
When you rotate objects with the transformation tool, you'll notice that they move about a point indicated by a white circle on the stage. This is the transformation point, and it is unique to each instance on the stage. You can move it with the transformation tool.

##Symbols and Instances
It's very smart to organize your drawings into symbols in Flash. Symbols are stored in the library panel. Once a drawing is a symbol, you can create copies of it called *instances*. This helpful for several reasons:

* When editing a symbol, all of the instances of that symbol are automatically updated to reflect those changes.
* Keeping your objects in symbols will allow them to be animated.
* Instances of symbols can be accessed with ActionScript code, which will be important when you create games or other interactive things. 

###Editing Symbols
There are two ways to edit a symbol:
1. Double-click on an instance. When you do this, everything else on the stage gets greyed out.
2. Double-click on the symbol in the library. When you do this, the symbol appears on the stage alone.

Note: It's extremely important to know what you're editing at any given time. Just look at the menu above the stage to find out if you're on the stage or if you're editing a symbol.

###Editing Instances
When you select an instance, you'll see various properties associated with it in the properties panel. You can change these properties and the instance will still remain an instance of whatever symbol it came from. Likewise, you can use the transform tool on instances to edit them.

Note: If you need to edit an instance beyond what the basic controls that the properties panel and transform tool offer, you'll need to break the instance apart. If you do this, it will no longer be an instance of the symbol it came from. Instead, it will just be a normal object on the stage that you can do with as you please. You'll have full control over it as if you had just drawn it.

###Symbols Inside of Symbols
It is possible to have many symbols in your library. What's more, it's possible to put symbols inside of other symbols. For example, I might have a monster symbol that is composed of a head symbol, a torso symbol, two arm symbols, and two leg symbols. Taking things a step further, a leg symbol might be composed of an uppper leg symbol, a knee symbol, a lower leg symbol, and a foot symbol.

##Flash Coordinate System
The coordinate system in flash starts in the top-left corner (i.e., the point where x=0 and y=0 is in the top-left corner). It's important to remember that x-values moving to the right and y-values increase moving downwards.

###Registration Points
Each symbol has a registration point--it looks like a plus sign. Each instance of a symbol inherits the same registration point, which is used to determine the x- and y-values of the instance. The registration point of an instance must be changed by editing the symbol itself.

###Rulers, Grids, and Alignment
If you find yourself wanting to precisely align things on the stage, rulers, grids, and the alignment panel might help.
####Rulers
Turn these on through the view menu. You'll be able to drag out guides from the rulers onto the stage, which can be helpful.
####Grids
Turn these on through the view menu as well. Like rulers, grids are there to help you organize your content and line things up correctly.
####Alignment
The alignment panel may be of use to you if you want to ensure that multiple objects are all aligned together.
##Gradients
Gradients in Flash require patience. When creating gradients, you'll be working with the color panel (to choose the colors) and the gradient transform tool.
##Text
Text objects in Flash allow you to create text and control sizes and fonts like you would in a word processor like Microsoft Word. However, remember that text in flash is vector graphics just like everything else. You can actually break text apart a couple of times to get back to the primitive shapes that describe the objects.
