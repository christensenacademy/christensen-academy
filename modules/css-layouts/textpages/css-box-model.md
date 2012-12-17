#CSS Box Model
The big idea behind the CSS Box Model is that every element on the page is rendered by the browser as a box (rectangle) composed of four components: content, padding, border, and margin. Understanding how this box model works is essential to understanding how to display.

![Box Model Diagram](http://www.w3.org/TR/CSS2/images/boxdim.png)

**Note:** Understanding the box model is essential to understanding how to create nice page layouts.

##Content
In HTML, we think of elements as having an opening tag (e.g., `<p>`), some content, and a closing tag (e.g., `</p>`). In the case of the paragraph element, the content would be some text. While this is true, when speaking about the CSS box model, we use the word "content" to specifically refer to the box surrounding, in this case, the paragraph.

When specifying width and height in CSS, you are specifying the dimensions of the content area of the box model.

**Note:** Height by default is auto, which means that an element will be only tall enough to hold the stuff inside it. If there's no stuff inside it, its height will be zero.

**Note:** Width by default is auto, which means that an element will be as wide as its parent. This is close to the same as setting the width to be 100%, but not quite. Experiment with the two to discover the subtle differences.

####HTML
```html
<body>
  <h1>Lorem Ipsum</h1>
  <p>
    Donec vehicula felis eget nibh consequat aliquet. Proin purus nisi, porttitor ac tincidunt in, consectetur 
    eu nisi. Donec et sodales leo. Nullam enim nunc, viverra in pellentesque vitae, placerat elementum tortor.
  </p>
  <div></div>
</body>
```

####CSS
```css
h1 {width: auto; height: 100px;} /* width of auto means that the element is the size of the parent element */
p {width: 50%;} /* percents are based off of the width of the parent element. */
div {background: green; height: auto;} /* since the div has no content, the height will become zero */
```

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