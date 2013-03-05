#CSS Positioning Intro

Considering what you already know about the CSS box model (i.e., that all elements are really boxes with width, height, padding, border, and margin), the next step is to start moving these boxes into different *positions* to create interesting page layouts.

![example of what a page layout might look like](http://christensenacademy.org/modules/css-layouts/textpages/page-layout-example.png)

There are several positioning techniques to learn, such as how to use floating elements, relative positioning, and absolute positioning. In my opinion, these techniques are best understood in terms of how they deviate from "normal flow," which is a term we use to describe the way elements display on a page in the absence of position-altering CSS.

I like to think of normal flow this way: each (block-level) element is actively trying to get as far up and left as possible without overlapping the elements that came before it.

###Relative Positioning Intro
Relative positioning is the simplest type of positioning to understand. When using relative positioning on an element, the only element affected is the element you're moving around. Basically, all relative positioning involves is shifting an element (up, right, down, or left) from its position in normal flow. Other elements behave as if the repositioned element were still in its regular position in normal flow.

####[jsFiddle](http://jsfiddle.net/cameron89/kMah2/)

###Absolute Positioning Intro
Absolute positioning can be tricky for two reasons:

1. Using absolute positioning on an element impacts how the subsequent elements display. Basically, subsequent elements display as if the absolutely positioned element never existed.
2. An absolutely positioned element is positioned with respect to the edges of its nearest parent that has absolute or relative positioning.

####[jsFiddle](http://jsfiddle.net/cameron89/uTS92/)


###Float Intro
The basic idea behind a floating element is that it can "float" to either the right or left side of the page. This turns out to be exceptionally useful but somewhat difficult to explain in a brief paragraph, so I'll leave it at that for now.

####[jsFiddle](http://jsfiddle.net/cameron89/r5GEZ/)

