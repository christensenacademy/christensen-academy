#Parents Challenge

**Estimated Time:** 25 minutes

**Prerequisite Knowledge:**

* `span` and `div` elements
* Box model basics: width, height, padding, border, margin
* The relationship between parent and child elements

###Make a Webpage that Looks like This 

![This picture shows what your page should look like](https://raw.github.com/christensenacademy/christensen-academy/master/modules/css-layouts/challenges/parents-challenge.png)

####What the Picture doesn't Show

* The purple parent boxes have widths of "auto" (the default), not 100%. There's a subtle difference; see if you can spot it.
* Top grey child box has a fluid (percent-based) width. As the broswer window's width adjust, so will the width of this elemetn.
* The paragraph inside of the top grey child box has a fluid (percent-based) width. As its parent (the top grey child box) grows and shrinks, it grows and shrinks proportionally. Simply put: use a percent.
* Other widths are fixed (pixel values).
* Heights are all auto except for the last one, which needs a height to be explicitly set because it lacks content.

###Starter Code

```html
<!DOCTYPE html>
<html>
  <head>
    <title>Parents (Boxes in Boxes) Challenge</title>
    <style>
      body { 
        margin: 0; /* The body element has margins by default. I like to turn them off. */
        background: #ccc;
      }
    </style>
  </head>
  <body>
    <!-- My advice is to set up your HTML first. Think carefully about the parent-child relationships 
    you see on the page and structure your HTML accordingly. Hint: unless a box just has text in it, it is a div. -->
  </body>
</html>

```
