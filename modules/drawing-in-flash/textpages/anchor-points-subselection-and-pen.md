#Anchor Points
All shapes are composed of anchor points. Generally, these anchor points create a closed path so that a fill can be applied to inside of the shape.

As a general rule, you should try to minimize the number of anchor points in your shapes. This reduces file size and makes your shapes look better. It also gives you greater control over manipulating your shapes later on.

##Subselection Tool
The subselection tool allows you to manipulate anchor points. It allows you to select anchor points and do things to them:

* Delete anchor points
* Move anchor points (with the mouse or keyboard)
* Adjust curves in between anchor points

###Handlebars
When you have curves between anchor points (as opposed to straight lines), you will see handlebars coming out of the anchor points. You can adjust these handlebars with the subselection tool to manipulate the curves.

Note: If an anchor point does not have handlebars, simply hold alt and drag them out. Doing this creates a smoother curve through the anchor point. Also note that you can do this even if an anchor point already has handlebars.

Note: If you want to manipulate one handlebar and not the other, hold down alt before clicking the handlebar. Doing this will create a corner at the anchor point as opposed to a smooth curve through the anchor point.

##Pen Tool
This tool has many purposes, but I'll limit this discussion to the two most useful ones.
###Creating Shapes
Creating a shape with the pen tool is like playing a game of connect the dots. Every time you click the pen tool, a new anchor point is created. Lines automatically connect these anchor points. Click back on the first anchor point you made to finish your shape.
###Adding Anchor Points
With the pen tool (or the "add anchor point tool"), you can add an anchor point to a part of a curve that already exists.