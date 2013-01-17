#Span vs. Div

###Div Elements
Sometimes you may find yourself wanting to add style to an entire *division* or section of your webpage. In such cases, it is often best to use a `div` element. `div` elements are block-level elements that you can use in clever ways to alter the layout of your page. Consider this example:

```html
<div id="blog-posts">
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
</div>
```

Without any CSS, this would display rather boring, and the fact that we're using div elements would be pointless. Here's what the code above would look like without CSS:

![](http://christensenacademy.org/modules/css-layouts/textpages/purpose-of-div1.png)

However, with a bit of CSS applied to our `div` elements, we can make the page look quite a bit different:

![](http://christensenacademy.org/modules/css-layouts/textpages/purpose-of-div2.png)

Even a simple layout like this where we're seeing two groups of elements side by side is only possible through the use of `div` elements. Most Web designers make heavy use of `div` elements when laying out their pages.

###Span Elements

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
