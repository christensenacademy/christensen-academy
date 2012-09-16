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

###Pencil
This tool creates a stroke wherever you draw. If you want a smooth line created, make sure to have the smooth option selected in the tool options.
###Paintbrush
I recommend staying away from this tool. 

##Anchor Points
###Subselection Tool
###Handlebars
###Types of Anchor Points

##Pen Tool
##Layers
##Transform Tool

##Symbols and Instances

###Editing Symbols

###Editing Instances

###Symbols Inside of Symbols

##Flash Coordinate System

###Registration Points

###Transformation Points

###Rulers, Grids, and Alignment
####Rulers
####Grids
####Alignment

##Gradients

##Text
