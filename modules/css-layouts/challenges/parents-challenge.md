#Parents (Boxes in Boxes) Challenge

* **Challenge:** Make a webpage (shown below) that exercises your understanding of parent and child elements.
* **Estimated Time:** 25 minutes.

##Prerequisite Knowledge

I recommend you watch [videos](http://christensenacademy.org/index.html#css-layouts) on the following topics before you attempt this challenge:

* Span vs. Div
* Width and Height
* Margins
* Centering Elements with Auto Margins
* Padding
* Borders

##Make a Webpage that Looks like This 

![This picture shows what your page should look like](https://raw.github.com/christensenacademy/christensen-academy/master/modules/css-layouts/challenges/parents-challenge.png)

###What the Picture doesn't Show

* The purple parent boxes have widths of "auto" (the default), not 100%. There's a subtle difference; see if you can spot it.
* Top grey child box has a fluid (percent-based) width. As the broswer window's width adjust, so will the width of this elemetn.
* The paragraph inside of the top grey child box has a fluid (percent-based) width. As its parent (the top grey child box) grows and shrinks, it grows and shrinks proportionally. Simply put: use a percent.
* Other widths are fixed (pixel values).
* Heights are all auto except for the last one, which needs a height to be explicitly set because it lacks content.

##Friendly Advice
While you should focus on precise replication of the picture above, don't forget to experiment as you go. Even if you miraculously get things to work the first time around, test yourself and your knowledge of how the box model works by trying something different. Take time to play around with things and really figure out how they work.

##Starter Code

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
  </body>
</html>

```

##Solution Video
I haven't made this yet, but I plan on making a video where I complete the challenge myself and talk through how I would do it.