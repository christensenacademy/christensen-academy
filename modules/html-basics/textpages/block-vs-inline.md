#Block vs. Inline
This will make more sense once you learn CSS and the box model. For now, realize that image and anchor elements display *inline* while other elements display *block*. Basically, block level elements carve out their own space on the page by putting a line break above and below themselves. Inline elements do not do this, which is why you can have a link (anchor element) or image in the middle of, say, a paragraph. Test this code to see how it displays.

```html
<h1>Lorem Ipsum</h1>
<p>
  Lorem <a href="http://christensenacademy.org">ipsum</a> dolor sit amet, consectetur 
  <img src="http://christensenacademy.org/img/logo.png">adipiscing elit.
</p>

```
Notice how the `h1` and `p` elements each carve out their own space while the `img` and `a` elements display inline. Also, realize that you'll be able to change how elements display once you learn CSS.
