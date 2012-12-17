#Span vs. Div
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