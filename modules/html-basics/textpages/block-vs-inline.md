#Block vs. Inline

**Note:** This may make more sense once you learn CSS and the box model.

All HTML elements in the `<body>` of the webpage display either *block* or *inline*. Most elements display block, which means that they display on their own line on the webpage. A few elements, like `<a>` and `<img>` display inline, which means that they don't display on their own line; rather, inline elements display alongside text and other inline elements.

Examine how this example displays in the browser to understand the difference between the block-level elements `<h1>` and `<p>` and the inline elements `<a>` and `<img>`:
```html
<h1>Lorem Ipsum</h1>
<p>
  Lorem <a href="http://christensenacademy.org">ipsum</a> dolor sit amet, consectetur 
  <img src="http://christensenacademy.org/img/logo.png">adipiscing elit.
</p>
```

###The code above displays as the following:
#Lorem Ipsum

Lorem [ipsum](http://christensenacademy.org) dolor sit amet, consectetur ![](http://christensenacademy.org/img/logo.png) adipiscing elit.
