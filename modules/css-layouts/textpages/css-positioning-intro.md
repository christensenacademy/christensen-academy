#CSS Positioning Intro

Considering what you already know about the CSS box model (i.e., that all elements are really boxes with width, height, padding, border, and margin), the next step is to start moving these boxes into different *positions* to create interesting page layouts.

![example of what a page layout might look like](http://christensenacademy.org/modules/css-layouts/textpages/page-layout-example.png)

There are several positioning techniques to learn, such as how to use floating elements, relative positioning, and absolute positioning. In my opinion, these techniques are best understood in terms of how they deviate from "normal flow," which is a term we use to describe the way elements display on a page in the absence of position-altering CSS.

I like to think of normal flow this way: each (block-level) element is actively trying to get as far up and left as possible without overlapping the elements that came before it.

###Relative Positioning Intro (Shift from Normal Flow)
Relative positioning is the simplest type of positioning to understand, but it's also the least useful. When using relative positioning on an element, the only element affected is the element you're moving around. Basically, all relative positioning involves is shifting an element (up, right, down, or left) from its position in normal flow. Other elements behave as if the repositioned element were still in its regular position in normal flow.

If you can find a good use for relative positioning, you're a better developer than I. Honestly, absolute positioning and floating elements are much more useful.

####[jsFiddle](http://jsfiddle.net/cameron89/kMah2/)

###Absolute Positioning Intro (Remove from Normal Flow and Position Inside Parent)
Absolute positioning more or less gives you the ability to remove an element from normal flow and place it anywhere on your page. If used properly, absolute positioning can be a very useful tool for laying out webpages.

####[jsFiddle](http://jsfiddle.net/cameron89/uTS92/)

###Float Intro (Remove from Normal Flow and "Float" to Either Side)
Floating elements are a great tool for creating page layouts. In the example above, the menu was created using a bunch of floating elements. The basic idea behind a floating element is that it can "float" to either the right or left side of the page. Similar to how things work with absolute positioning, a floating element is removed from normal flow. Unlike how things work with absolute positioning, floating elements interact with their surroundings in interesting (and sometimes confusing) ways.

####[jsFiddle](http://jsfiddle.net/cameron89/r5GEZ/)

