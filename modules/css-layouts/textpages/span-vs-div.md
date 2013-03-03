#Span vs. Div

`<span>` elements are generic inline elements, while `div` elements are generic block-level elements.

###Quick Explanation of Block-Level and Inline

Block-level elements are elements like `<h1>`, `<p>`, and `<li>`. These elements notably have a line break automatically inserted above and below them on the webpage.

Inline elements are elements like `<a>`, `<img>`, `<em>`, and `<strong>`. These elements should be used inside of block-level elements. Unlike block-level elements, inline elements don't have line breaks above and below them. Thus, they can be used "inline" with other content.

Check out [this jsFiddle](http://jsfiddle.net/cameron89/bpNWN/) example to see the difference between block-level and inline elements more clearly.

##Div (Generic Block-Level Element for Creating a "Division")
Sometimes you may find yourself wanting to add style to an entire *division* or section of your webpage. In such cases, it is often best to use a `div` element. `div` elements are block-level elements that you can use in clever ways to alter the layout of your page. Consider this example:

```html
<div>
  <div>
    <h2>Lorem Ipsum</h2>
    <p>Lorem ipsum et dolor</p>
    <p>sit amet verbatum</p>
  </div>
  <div>
    <h2>Lorem Ipsum</h2>
    <p>Lorem ipsum et dolor</p>
    <p>sit amet verbatum</p>
  </div>
</div>
```

###Without CSS, the Divs are Pointless
![](http://christensenacademy.org/modules/css-layouts/textpages/purpose-of-div1.png)

###With CSS, the Divs Allow Us to Style Entire "Divisions" of a Page

![](http://christensenacademy.org/modules/css-layouts/textpages/purpose-of-div2.png)

Even a simple layout like this where we're seeing two groups of elements side by side is only possible through the use of `div` elements. Consider the code once more:

```html
<div> <!-- the outer dark box -->
  <div> <!-- the left inner box -->
    <h2>Lorem Ipsum</h2>
    <p>Lorem ipsum et dolor</p>
    <p>sit amet verbatum</p>
  </div>
  <div> <!-- the right inner box -->
    <h2>Lorem Ipsum</h2>
    <p>Lorem ipsum et dolor</p>
    <p>sit amet verbatum</p>
  </div>
</div>
```

##Span (Generic Inline Element for Styling a Small Bit of Content)

Sometimes you may find yourself wanting to add style a small portion (span) of an existing element. In such cases, it is often best to use a span element, which is an inline element.

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

In the example above, the word "feugiat" would display in the color red on the webpage. Here's a picture of what this would look like in the browser:

![](http://christensenacademy.org/modules/css-layouts/textpages/purpose-of-span.png)

Notice how a span element is useful when you want to apply CSS specifically to just a small bit of content.

Also notice how span elements are inline elements and don't display on a new line as block elements would. For example, here's what would happen if you changed the span tags to div tags in the previous example:

![](http://christensenacademy.org/modules/css-layouts/textpages/purpose-of-span2.png)

##Semantics
`<span>` elements are generic inline elements, while `div` elements are generic block-level elements. I say they're "generic" elements because they don't carry any special *semantic meaning*.

Allow me to explain. Semantically speaking, the `<p>` element should have a paragraph of text as content. Similarly, the `<h1>` element should be used to create a very important heading on a webpage.

However, `<div>` and `<span>` don't really have any semantic meaning. Because of this, I like to refer to them as "generic" block-level and inline elements. You can use them for pretty much anything, but you should only use them if there isn't a better semantic option. For example, if you wanted to, you could start using the `<div>` element every time you wanted a heading or paragraph on your page. Using CSS, you could customize those `<div>` elements to look however you want them to look. However, this is highly frowned upon. Instead of using the `<div>` element, you should really use the `<h1><h2>...<h6>` elements for heading and the `<p>` element for paragraphs.
