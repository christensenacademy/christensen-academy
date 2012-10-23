#CSS Layouts Reference Guide

##Properties Reference
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
right: 20px; /* oddly, this actually moves the element leftwards */

float: right; /* anchor element to the right side of the page while siblings that follow fill space */

position: absolute; /* move out of normal flow while siblings that follow fill space */
/* Position with respect to the nearest ancestor that is positioned relative or absolute.
   If this isn't possible, position with respect to the browser window. */

position: fixed; /* attach to the viewport for life--scrolling has no impact on a fixed element */

```

##Menu
* [Properties Reference] (#properties-reference)
* [Block-Level vs. Inline](#block-level-vs-inline)
* [Span vs. Div](#span-vs-div)
* [CSS Box Model](#css-box-model)
* [Background Images](#background-images)
* [Normal Flow](#normal-flow)
* [Relative Positioning](#relative-positioning)
* [Float Property](#float-property)
* [Absolute Positioning](#absolute-positioning)
* [Case Study 1](#case-study-1)
* [Case Study 2](#case-study-2)

##Block-Level vs. Inline
Web browsers display elements in one of two ways: block-level or inline. Block-level elements are given their own vertical space on the page. That is, a line break is automatically placed above and below a block-level element. Inline elements, on the other hand, display inline with whatever content surrounds them, such as the text of a paragraph. The only time inline elements are given their own line on a page is when they are immediately preceded and followed by block-level elements. 

Examples of inline elements include `span`, `img`, `em`, `strong`, and `a`.

Examples of block-level elements include `p`, `div`, `h2`, `li`, `ul`, `hr`.

##Span vs. Div
Sometimes you may find yourself wanting to add style to an entire section (division) of your webpage. In such cases, it is often best to use a div element, which can be thought of as a generic block-level element.

```html
<div class="blog-post">
  <h2>Lorem Ipsum</h2>
  <p>...</p>
  <p>...</p>
  <p>...</p>
</div>
<div class="blog-post">
  <h2>Lorem Ipsum</h2>
  <p>...</p>
  <p>...</p>
  <p>...</p>
</div>
```

**Note:** Div elements are often used primarily to control page layouts. Look at the souce of any popular website, and you'll see lots of div elements. I guarantee it. 

Sometimes you may find yourself wanting to add style a small portion (span) of an existing element. In such cases, it is often best to use a span element, which can be thought of as a generic inline element.

```html
<p>
  Sed ultricies massa sit amet risus sollicitudin eu hendrerit tellus lacinia. Aliquam erat volutpat.
  Duis placerat molestie mi, in condimentum arcu elementum at. Fusce massa ante, convallis ut sagittis et,
  accumsan eget arcu. Fusce <span style="color:red;">feugiat</span> sagittis erat quis pharetra. Vestibulum 
  bibendum sem nec auguedictum sit amet luctus enim tempor. Cras adipiscing varius dolor id pulvinar. Morbi
  vitae tristique euismod, venenatis nec enim. Pellentesque sapien neque, hendrerit ac sollicitudin vitae,
  aliquam sed nisi.
</p>
```

##CSS Box Model
The big idea behind the CSS Box Model is that every element on the page is rendered by the browser as a box (rectangle) composed of four components: content, padding, border, and margin. Understanding how this box model works is essential to understanding how to display.

![Box Model Diagram](http://www.w3.org/TR/CSS2/images/boxdim.png)

**Note:** Understanding the box model is essential to understanding how to create nice page layouts.

###Content
In HTML, we think of elements as having an opening tag (e.g., `<p>`), some content, and a closing tag (e.g., `</p>`). In the case of the paragraph element, the content would be some text. While this is true, when speaking about the CSS box model, we use the word "content" to specifically refer to the box surrounding, in this case, the paragraph.

When specifying width and height in CSS, you are specifying the dimensions of the content area of the box model.

**Note:** Height by default is auto, which means that an element will be only tall enough to hold the stuff inside it. If there's no stuff inside it, its height will be zero.

**Note:** Width by default is auto, which means that an element will be as wide as its parent. This is close to the same as setting the width to be 100%, but not quite. Experiment with the two to discover the subtle differences.

#####HTML
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

#####CSS
```css
h1 {width: auto; height: 100px;} /* width of auto means that the element is the size of the parent element */
p {width: 50%;} /* percents are based off of the width of the parent element. */
div {background: green; height: auto;} /* since the div has no content, the height will become zero */
```

###Margin
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

####Centering Elements
Centering text (and inline elements) can be done using the text-align property, but if you want to center an entire block-level element, you'll need to employ the following trick: set the left and right margins to "auto".

```css
margin-left:auto;
margin-right:auto;
```

I usually just use the shorthand property `margin: 0 auto;`.

####Collapsing Margins
When margins from different elements "touch" each other vertically, they collapse. This makes some sense when the two margins come from sibling elements, but when the touching margins are in a parent-child relationship, this "feature" of CSS doesn't make much sense (in my humble opinion).

###Padding
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

###Border
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

##Background Images
Instead of (or in addition to) background colors, you can use background images on your webpages. [CSS Zen Garden](http://www.csszengarden.com/) makes extensive use of background-images.

```css
background-image: url("lorem.png");
background-repeat: repeat; /* other values: repeat-x, repeat-y, no-repeat */
background: #F8E088 url("lorem.png") repeat-y; /* the shorthand property (order doesn't matter) */
```

##Normal Flow
Elements (technically just block-level elements) on a webpage try to move as far up and as far left as possible. In addition, child elements appear inside of their parents. These two facts are what's known as "normal flow". If you want to make an interesting layout in CSS, you'll need to break out of normal flow by using some CSS positioning properties.

##Relative Positioning
Elements that are positioned relatively shift out of their normal flow position leaving an empty space behind. The "top", "right", "bottom", and "left" properties are used to move the relatively positioned element.

```css
position: relative;
top: 20px; /* oddly, this actully moves the element downwards */
right: 20px; /* oddly, this actually moves the element leftwards */

/* Note: If top and bottom are specified, top "wins". If left and right are specified, left "wins" */
```

Interestingly, relative positioning isn't actually used much on real webpages. Even more interestingly, when relative positioning is actually used, the top-right-left-bottom properties are usually not, which is strange because the relatively positioned element doesn't actually move. At first glance, this seems ludicrous, until you understand absolute positioning...

##Absolute Positioning
```css
position: absolute;


```

A really imp

###Position Fixed


###Stretch Effect

##Float Property
```css
float: right; /* anchor element to the right side of the page while siblings that follow fill space */
```


##Case Study 1

##Case Study 2