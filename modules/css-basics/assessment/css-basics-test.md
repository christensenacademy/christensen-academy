#CSS Basics Test

This test is structured around a series of challenges. You will have 45 minutes to complete as many challenges as possible.

Other important things to note about this test:

* Partial credit is awarded for each problem.
* Proper indentation of code counts.
* You may look things up that you don't know, but you will not be given extra time beyond the 45 minutes.

##Problem 1 (8 Points): A Bit of Inline CSS

Working from the starter code provided below, add the following inline CSS:

* Make the text in the heading 72 pixels high.
* Make the background color of the heading black, and the text color of the heading white.
* Make the background of the entire page grey.
* Make the background of both paragraphs white.
* Make the second paragraph's text slightly larger than the first paragraph's text.
* Make the first paragraph's text italic.

```html
<!DOCTYPE html>
<html>
  <head>
    <title>Problem 1</title>
  </head>
  <body>
    <h1>Consectetur Adipiscing</h1>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sit amet metus
      dui. Nunc gravida nibh eget elit dictum dictum. Vivamus posuere ante sit amet neque
      egestas vehicula. Praesent sollicitudin iaculis diam, nec blandit risus sodales fringilla.
    </p>
    <p>
      Nunc gravida nibh eget elit dictum dictum. Vivamus posuere ante sit amet neque egestas
      vehicula. Praesent sollicitudin iaculis diam, nec blandit risus sodales fringilla.
    </p>
  </body>
</html>
```


##Problem 2 (8 Points): Inline-Embedded Combo

Working from the starter code provided below, use inline CSS to do the following:

* Change the font of the first paragraph to be Impact.
* Change the font of the second paragraph to be Helvetica.
* Add extra space between each of the letters of the heading.

Use embedded CSS to do the following:

* Make the background for the entire page black.
* Make the font color for the entire page white.
* Center all of the text on the page except for the first paragraph.
  * There's more than one way to do this, so in addition to achieving this effect, you need to leave a comment in your CSS explaining why you chose your method.

```html
<!DOCTYPE html>
<html>
  <head>
    <title>Problem 2</title>
  </head>
  <body>
    <h1>Consectetur Adipiscing</h1>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sit amet metus
      dui. Nunc gravida nibh eget elit dictum dictum. Vivamus posuere ante sit amet neque
      egestas vehicula. Praesent sollicitudin iaculis diam, nec blandit risus sodales fringilla.
    </p>
    <p>
      Nunc gravida nibh eget elit dictum dictum. Vivamus posuere ante sit amet neque egestas
      vehicula. Praesent sollicitudin iaculis diam, nec blandit risus sodales fringilla.
    </p>
  </body>
</html>
```

##Problem 3 (8 points): Hover and Active

Create a webpage with five paragraphs on it. Then, use embedded CSS to do the following:

* Write CSS that impacts just one of the five paragraphs in the following manner:
  * When not hovering or clicked down, the paragraph has a red background and black text.
  * When hovering over the paragraph, its background color becomes a lighter shade of red.
  * When clicking down on the paragraph (i.e., when the paragraph is "active"), the background color should become a darker shade of red than the original background color.

##Problem 4 (8 points): Website

Create a website where the homepage presents the user with a question and gives them four possible answers to click on. This question can be about whatever you want. If the user clicks on the correct answer, he or she is taken to a special page that says "CONGRATULATIONS!" If the user clicks on an incorrect answer, he or she is taken to a page that says "FAILURE."

That's a total of three webpages. You may style these pages however you like as long as you use only external CSS and have a single CSS file that's used across all three webpages.