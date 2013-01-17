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

![](http://christensenacademy.org/modules/css-layouts/textpages/purpose-of-div.png)

**Note:** Div elements are used primarily to control page layouts by acting as containers (parent elements) for groups of other elements.

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
