#CSS Layouts Reference Guide

* [Properties Reference] (#properties-reference)
* [Block-Level vs. Inline](#block-level-vs-inline)
* [Span vs. Div](#span-vs-div)
* [CSS Box Model](#css-box-model)
* [Background Images](#background-images)
* [Relative Positioning](#relative-positioning)
* [Float Property](#float-property)
* [Absolute Positioning](#absolute-positioning)
* [Case Study 1](#case-study-1)
* [Case Study 2](#case-study-2)

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
background: #F8E088 url("lorem.png") repeat-y;


```

##Block-Level vs. Inline
Web browsers display elements in one of two ways: block-level or inline. Block-level elements are given their own vertical space on the page. That is, a line break is automatically placed above and below a block-level element. Inline elements, on the other hand, display inline with whatever content surrounds them, such as the text of a paragraph. The only time inline elements are given their own line on a page is when they are immediately preceded and followed by block-level elements. 

Examples of inline elements include `span`, `img`, `em`, `strong`, and `a`.
Examples of block-level elements include `p`, `div`, `h2`, `li`, ul `hr`.

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
  accumsan eget arcu. Fusce <span style="color:red;">feugiat</span> sagittis erat quis pharetra. Vestibulum bibendum sem nec augue
  dictum sit amet luctus enim tempor. Cras adipiscing varius dolor id pulvinar. Morbi dolor leo, interdum
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

**Note:** Every element in the body element has a content box, but if the box has no content (i.e., text or images inside of it) or no explicity height (i.e., `height: 100px;`), then the box will not appear on the webpage.

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
h1 {width: 500px; height: 100px;}
p {width: 50%;}
div {background: green; height: 20px;}
```

###Margin
Margins the outermost part of the box model.