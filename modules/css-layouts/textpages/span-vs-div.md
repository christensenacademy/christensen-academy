#Span vs. Div

`<span>` elements are generic inline elements, while `div` elements are generic block-level elements. I say they're "generic" elements because unlike other elements, such as the `<p>` (paragraph) element, `<div>` and `<span>` don't carry any special *semantic meaning*.

For example, semantically speaking, the `<p>` element should have a paragraph of text as content. Similarly, the `<h1>` element should be used to create a very important heading on a webpage. While we could theoretically use a `<p>` element for a heading and adjust its style with CSS to look like a heading, semantically speaking this would be an aweful idea. In HTML, we should use elements for their semantic meaning.

However, `<div>` and `<span>` don't really have any semantic meaning. We use them purely to help us style our pages using CSS, not for any semantic meaning they hold. Because of this, I like to refer to them as "generic" block-level and inline elements.

###Quick Review of Block-Level and Inline

Block-level elements are elements like `<h1>`, `<p>`, and `<li>`. These elements notably have a line break automatically inserted above and below them on the webpage. Inline elements are elements like `<a>`, `<img>`, `<em>`, and `<strong>`. These elements should be used inside of block-level elements. Unlike block-level elements, inline elements don't have line breaks above and below them. Thus, they can be used "inline" with other content.

##Div Elements
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

Without any CSS, this would display rather boring, and the fact that we're using div elements would be pointless. Here's what the code above would look like without CSS:

![](http://christensenacademy.org/modules/css-layouts/textpages/purpose-of-div1.png)

However, with a bit of CSS applied to our `div` elements, we can make the page look quite a bit different:

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

##Span Elements

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
