#CSS Box Model
The big idea behind the CSS Box Model is that every element on the page is rendered by the browser as a box (rectangle) composed of four components: content, padding, border, and margin. Understanding the box model is essential to understanding how elements display on pages, which will ultimately help you to create nice page layouts.

![Box Model Diagram](http://www.w3.org/TR/CSS2/images/boxdim.png)

Image taken from the official [CSS 2.1 Specification](http://www.w3.org/TR/CSS21/box.html)

##Content (Width and Height)
The most important thing to understand about the content box is that when specifying `width` and `height` in CSS, you are specifying the dimensions of the content area of the box model.

The initial (default) values of the CSS `height` and `width` properties are `auto`. In the case of width, this means that the element will be as wide as possible. In the case of height, this means that the element will be as short as possible.

Width can be specified as pixels or percents (e.g., `width:30%` or `height:400px`). Percents are generally based on the width of the parent element. Because such values change as the browser resizes, percents are said to be "fluid." On the other hand, pixel values never change, and are thus said to be "fixed."

Height, on the other hand, is really only specified in pixels. Note: normally it is best to leave the `height` property at its default value of `auto`.

####[Width Examples](http://jsfiddle.net/cameron89/GbwFJ/1/)

####[Height Examples](http://jsfiddle.net/cameron89/qHLQC/2/)

####[Width and Height Don't Work for Inline Elements](http://jsfiddle.net/cameron89/wL64c/1/)

##Margin
Margins create empty space on the outside of an element. Margins can be specified in the following ways:

```css
margin: 0 10px 30px 10px; /* top, right, bottom, left */
margin: 10px auto; /* top-bottom, left-right */
margin: 10px; /* applies to all margins */
margin-top: 10px;
margin-right: 10px;
margin-bottom: 10px;
margin-left: 10px;
```

###Centering Elements
Centering text (and inline elements) can be done using the text-align property, but if you want to center an entire block-level element, you'll need to employ the following trick: set the left and right margins to "auto".

```css
margin-left:auto;
margin-right:auto;
```

I usually just use the shorthand property `margin: 0 auto;`.

###Collapsing Margins
When margins from different elements "touch" each other vertically, they collapse. This makes some sense when the two margins come from sibling elements, but when the touching margins are in a parent-child relationship, this "feature" of CSS doesn't make much sense (in my humble opinion).

##Padding
The important thing to remember about padding is that it displays the background color (or image) of the element. Use padding when you want some extra space between the content and border of an element.

```css
padding: 0 10px 30px 10px; /* top, right, bottom, left */
padding: 10px auto; /* top-bottom, left-right */
padding: 10px; /* applies to all paddings */
padding-top: 10px;
padding-right: 10px;
padding-bottom: 10px;
padding-left: 10px;
```

##Border
Unlike the other parts of the box model, borders require three values: width (size), color, and style. Surprisingly, specifying the style is essential. You might assume that the default style is a solid line, but in actuality the default style is nothing at all. If you want your borders to show up, make sure you specify the style.

```css
border-width: 5px; /* individual properties follow form border-top-width */
border-color: #FF00C8; /* individual properties follow form border-top-color */
border-style: dotted; /* other values: dashed, solid, double, groove, ridge, inset, outset */
border: 10px #AB0477 solid; /* shorthand property applies to all borders (order doesn't matter) */
border-top: 10px #AB0477 solid;
border-right: 10px #AB0477 solid;
border-bottom: 10px #AB0477 solid;
border-left: 10px #AB0477 solid;
```
