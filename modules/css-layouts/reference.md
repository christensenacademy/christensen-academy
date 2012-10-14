#CSS Layouts Reference Guide

* [Block-Level vs. Inline](#block-level-vs-inline)
* [Span vs. Div](#span-vs-div)
* [CSS Box Model](#css-box-model)
* [Background Images](#background-images)
* [Relative Positioning](#relative-positioning)
* [Float Property](#float-property)
* [Absolute Positioning](#absolute-positioning)
* [Case Study 1](#case-study-1)
* [Case Study 2](#case-study-2)

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

**Note:** Understanding the box model is essential to understanding how to create nice page layouts.

###Content
In HTML, we think of elements as having an opening tag (e.g., `<p>`), some content, and a closing tag (e.g., `</p>`). In the case of the paragraph element, the content would be some text. While this is true, when speaking about the CSS box model, we use the word "content" to specifically refer to the box surrounding, in this case, the paragraph.

**Every element in the body element has a content box.** Each of these content boxes has a height and a width.

#####HTML
```html
<body>
  <h1>Lorem Ipsum</h1>
  <p>
    Donec vehicula felis eget nibh consequat aliquet. Proin purus nisi, porttitor ac tincidunt in, consectetur 
    eu nisi. Donec et sodales leo. Nullam enim nunc, viverra in pellentesque vitae, placerat elementum tortor.
  </p>
</body>
```

#####CSS
```css
h1
{
  width: 500px;
  height: 100px;
}

p
{
  width: 50%;
}
```