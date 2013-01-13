#Block vs. Inline
**Note:** This will make more sense once you learn CSS and the box model.

All HTML elements in the `<body>` of the webpage display either *block* or *inline*. Most elements display block, which means that they display on their own line on the webpage. A few elements, like `<a>` and `<img>` display inline, which means that they don't display on their own line.

To better understand the 
```html
<h1>Lorem Ipsum</h1>
<p>
  Lorem <a href="http://christensenacademy.org">ipsum</a> dolor sit amet, consectetur 
  <img src="http://christensenacademy.org/img/logo.png">adipiscing elit.
</p>

```
Notice how the `h1` and `p` elements each carve out their own space while the `img` and `a` elements display inline. Also, realize that you'll be able to change how elements display once you learn CSS.
