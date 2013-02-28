#Box Model Basics Challenge

**Estimated Time:** 40 minutes

**Prerequisite Knowledge:** There's a lot you need to know for this first challenge...

* `span` and `div` elements
* Box model basics
* Width and height of elements
* `%` vs. `px` vs. `auto` for widths and heights
* Margins
* Padding
* Borders
* How to center elements

###Make a Webpage that Looks like This 

![This picture shows what your page should look like](http://christensenacademy.org/modules/css-layouts/challenges/box-model-basics-challenge.png)

####What the Picture doesn't Show

* The top box adjusts its width as the browser resizes (i.e., its width is specified as a percent).
* The left and right margins on the top box also resize as the browser width adjusts (i.e., they must be specified as `auto`, which is the default).
* The margin on the right of the dotted box always stays exactly the same size as the browser adjusts size. 
* The bottom white box appears to be centered, but when the browser width adjusts, the margin on the left of the white box always stays the same.
* The height of the dotted box is fixed. If the width of the browser becomes too small, text begins to spill out the bottom of this box--we call this overflow.

###Friendly Advice
While you should focus on precise replication of the picture above, don't forget to experiment as you go. Even if you miraculously get things to work the first time around, test yourself and your knowledge of how the box model works by trying something different. Take time to play around with things and really figure out how they work.

###Starter Code

```html
<!DOCTYPE html>
<html>
  <head>
    <title>Box Model Basics</title>
    <style>
      body { 
        margin: 0; /* The body element has margins by default. I like to turn them off. */
        background: #ccc;
      }
    </style>
  </head>
  <body>
    <h1>Lorem Ipsum</h1>
    <p>
      Aliquam elit leo, aliquet quis mattis eu, ultricies in odio. Sed porttitor, ligula 
      in placerat tempus, tellus nunc accumsan nisi, a laoreet nulla diam sed neque. Praesent 
      felis orci, <span>dignissim</span> non consectetur ac, fermentum id lectus. Duis neque tortor, 
      molestie vel dictum vitae, lacinia nec nisi. Proin ut est eros. Proin commodo est vitae dui 
      scelerisque semper. Integer ut tortor eu nisl interdum aliquet ac sit amet odio. Proin ut 
      neque dolor. In non elementum massa. In non fringilla nibh. Suspendisse a tortor neque.
    </p>
    <div></div>
  </body>
</html>

```
