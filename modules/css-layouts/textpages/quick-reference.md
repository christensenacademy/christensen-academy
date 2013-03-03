#Properties Reference
```css
width: 500px;
width: 40%;
width: auto;
height: 40px;
height: auto;

margin: 0 10px 30px 10px; /* top, right, bottom, left */
margin: 10px auto; /* top-bottom, left-right */
margin: 10px; /* applies to all margins */
margin-top: 10px;
margin-right: 10px;
margin-bottom: 10px;
margin-left: 10px;

padding: 0 10px 30px 10px; /* top, right, bottom, left */
padding: 10px auto; /* top-bottom, left-right */
padding: 10px; /* applies to all paddings */
padding-top: 10px;
padding-right: 10px;
padding-bottom: 10px;
padding-left: 10px;

border-width: 5px; /* individual properties follow form border-top-width */
border-color: #FF00C8; /* individual properties follow form border-top-color */
border-style: dotted; /* other values: dashed, solid, double, groove, ridge, inset, outset */
border: 10px #AB0477 solid; /* shorthand property applies to all borders */
border-top: 10px #AB0477 solid;
border-right: 10px #AB0477 solid;
border-bottom: 10px #AB0477 solid;
border-left: 10px #AB0477 solid;

background-image: url("lorem.png");
background-repeat: repeat; /* other values: repeat-x, repeat-y, no-repeat */
background: #F8E088 url("lorem.png") repeat-y; /* the shorthand property (order doesn't matter) */

position: relative; /* move out of normal flow leaving empty space behind */
top: 20px; /* oddly, this actully moves the element downwards */
bottom: 20px;
right: 20px; /* oddly, this actually moves the element leftwards */
left: 20px;

float: right; /* anchor element to the right side of the page while siblings that follow fill space */
float: left;
clear: both; /* clears all previous floats so that they won't impact the positioning of this element */
clear: left; /* clears only pervious left floats */
clear: right;

position: absolute; /* move out of normal flow while siblings that follow fill space */
/* Position with respect to the nearest ancestor that is positioned relative or absolute.
   If this isn't possible, position with respect to the browser window. */
top: 20px; /* moves the absolutely positioned element down from the top of its "parent" (see above) */
bottom: 20px;
right: 20px; /* moves the absolutely positioned element down from the right of its "parent" (see above) */
left: 20px;
/* If both top and bottom properties are specified and a height is not specified, the element will "stretch
   to fill the space. The same applies to right and left */
   
position: fixed; /* Basically the same as position absolute except that it always attaches
                    to the viewport (browser window)--scrolling has no impact on a fixed element */
```
