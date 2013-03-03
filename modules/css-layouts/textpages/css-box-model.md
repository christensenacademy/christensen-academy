#CSS Box Model
The big idea behind the CSS Box Model is that every element on the page is rendered by the browser as a box (rectangle) composed of four components: content, padding, border, and margin. Understanding the box model is essential to understanding how elements display on pages, which will ultimately help you to create nice page layouts.

![Box Model Diagram](http://www.w3.org/TR/CSS2/images/boxdim.png)

Image taken from the official [CSS 2.1 Specification](http://www.w3.org/TR/CSS21/box.html)



##Content (Width and Height)
The most important thing to understand about the content box is that when specifying `width` and `height` in CSS, you are specifying the dimensions of the content area of the box model.

The initial (default) values of the CSS `height` and `width` properties are `auto`. In the case of width, this means that the element will be as wide as possible. In the case of height, this means that the element will be as short as possible.

Width can be specified as pixels or percents (e.g., `width:30%` or `height:400px`). Percents are generally based on the width of the parent element. Because such values change as the browser resizes, percents are said to be "fluid." On the other hand, pixel values never change, and are thus said to be "fixed."

Height, on the other hand, is really only specified in pixels. Note: normally it is best to leave the `height` property at its default value of `auto`.

###Examples

* [Width](http://jsfiddle.net/cameron89/GbwFJ/)
* [Height](http://jsfiddle.net/cameron89/qHLQC/)
* [Width and Height Don't Work for Inline Elements](http://jsfiddle.net/cameron89/wL64c/)

##Margin
Margins create empty space on the outside of an element. Margins can be specified in the following ways:

```css
/* shorthand versions */
margin: 10px; /* applies to all margins (top, right, bottom, and left) */
margin: 0 10px 20px 30px; /* top right bottom left */
margin: 0 10px 10px; /* top right-left bottom */
margin: 10px auto; /* top-bottom right-left */

/* "regular," single-property versions */
margin-top: 10px;
margin-right: 10px;
margin-bottom: 10px;
margin-left: 10px;
```

Centering text (and inline elements) can be done using the text-align property, but if you want to center an entire block-level element, you'll need to employ the following trick: set the left and right margins to "auto".

```css
margin-left:auto;
margin-right:auto;
```

**Note:** I usually just use the shorthand property `margin: 0 auto;` to center elements.

When margins from different elements "touch" each other vertically, they "collapse," which basically means that the two margins merge together. This leads to some strange and confusing situations (see example below).

###Margin Examples

* [Basic Margins](http://jsfiddle.net/cameron89/bmEWU/)
* [Centering Elements](http://jsfiddle.net/cameron89/C3prj/)
* [Collapsing Margins: Adjacent Siblings](http://jsfiddle.net/cameron89/tA9tn/)
* [Collapsing Margins: Parent-Child](http://jsfiddle.net/cameron89/RUPUZ/)
* [Collapsing Margins: Empty Block](http://jsfiddle.net/cameron89/nUjhK/)


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

###Padding Examples

* [Basic Padding](http://jsfiddle.net/cameron89/m6RF5/)

##Border
Unlike the other parts of the box model, borders require three properties: width (size), color, and style. If a color is not specified, the color of the text (i.e., the `color` property) will be used. However, border style and width must be explicity specified or the border will not show up. You might assume that the default style is a solid line, but in actuality the default style is nothing at all.

```css
/* This shorthand property applies to all four borders
   and allows you to specify width, color, and style all at once. */
border: 10px #AB0477 solid;

/* These shorthand properties allow you to specify width, color, and style for an individual border. */
border-top: 10px #AB0477 solid;
border-right: 10px #AB0477 solid;
border-bottom: 10px #AB0477 solid;
border-left: 10px #AB0477 solid;

/* These let you set a single property for all four borders. */
border-width: 5px; 
border-color: #FF00C8;
border-style: dotted;

/* These let you set a single property for a single border. */
border-left-style: solid;
border-left-width: 5px;
border-left-color: #444;
```

###Border Examples

* [Basic Borders](http://jsfiddle.net/cameron89/yYWHh/)
