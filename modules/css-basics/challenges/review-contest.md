#CSS Basics: Review Contest 1

**Time:** 60 minutes (exact)

Your challenge is to correctly solve as many of the following problems as you can in 60 minutes. To be considered correct, each answer must be free of error and exhibit proper indentation. Partially correct answers will be given no credit.

##Inline

###Problem 1

* Add inline CSS to the following page to do the following:
  * Make the heading font just 8 pixels high.
  * Make the heading font orange.
  * Make the background of the heading black.
  * Make both paragraphs have red text.
  * Make the first line of the first paragraph display indented.
  * Make the second paragraph italic.

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

###Problem 2: 

* Add inline CSS to the code below to do the following:
  * Make the font size of the heading be twice its original size. This may be harder than you expect--200% or 2em is not the solution.
  * Center all of the text on the page.
  * Space the letters in the second paragraph farther apart from each other than they are by default.
  * Change the font of the to be Helvetica instead of whatever the default font used by the browser is.
  * Make the first paragraph bold.
  * Make the background of the first paragraph grey.

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

##Embedded

###Problem 3: CSS Comments
* Create a simple webpage with a heading and a paragraph.
* Use embedded CSS to turn the background of the whole page black and all of the text white. Note: Only use one CSS rule.
* Add a CSS comment below your CSS rule in your embedded CSS.

###Problem 4: Hover Effects
* Create a simple webpage with two paragraphs.
* The first paragraph should have a blue background with white text.
* The second paragraph should have a white background with blue text.
* When hovering over either element, their background color and text color should swap. For example, when hovering over the first paragraph, its background should become white and its text should become blue.

###Problem 5: List

* Create a webpage using the following code.
* Add embedded CSS to it to style every other row differently as follows:
  * Each "Ipsum Lorem" row should have an pink background. You must use the `rgb(0,25,255)` syntax for specifying this color.
  * Each "Lorem Ipsum" row should have a orange background. You must use a hexadecimal color code for specifying this color.

```html
<!DOCTYPE html>
<html>
  <head>
    <title>Problem 5</title>
  </head>
  <body>
    <h1>Lists</h1>
    <ul>
      <li>Lorem Ipsum</li>
      <li>Ipsum Lorem</li>
      <li>Lorem Ipsum</li>
      <li>Ipsum Lorem</li>
      <li>Lorem Ipsum</li>
      <li>Ipsum Lorem</li>
      <li>Lorem Ipsum</li>
      <li>Ipsum Lorem</li>
      <li>Lorem Ipsum</li>
      <li>Ipsum Lorem</li>
      <li>Lorem Ipsum</li>
      <li>Ipsum Lorem</li>
      <li>Lorem Ipsum</li>
      <li>Ipsum Lorem</li>
      <li>Lorem Ipsum</li>
      <li>Ipsum Lorem</li>
    </ul>
  </body>
</html>
```

##External

###Problem 6: Simple Website
* Create a simple website with three pages. Each page only needs a heading saying "Page 1," "Page 2," or "Page 3."
* Create an external CSS file that turns the text of headings blue.
* Add link tags to each HTML file so that they can use the external CSS file.

###Problem 7: Headings <-> Paragraphs
* Create two webpages using the HTML below.
* Use a single externall CSS file to make each paragraph look like a heading and each heading look like a paragraph.

```html
<!DOCTYPE html>
<html>
  <head>
    <title>Problem 7 Page 1</title>
  </head>
  <body>
    <h1>Problem 7 Page 1</h1>
    <p>
      Nunc gravida nibh eget elit dictum dictum. Vivamus posuere ante sit amet neque egestas
      vehicula. Praesent sollicitudin iaculis diam, nec blandit risus sodales fringilla.
    </p>
  </body>
</html>

```html
<!DOCTYPE html>
<html>
  <head>
    <title>Problem 7 Page 2</title>
  </head>
  <body>
    <p>Problem 7 Page 2</p>
    <h1>
      Nunc gravida nibh eget elit dictum dictum. Vivamus posuere ante sit amet neque egestas
      vehicula. Praesent sollicitudin iaculis diam, nec blandit risus sodales fringilla.
    </h1>
  </body>
</html>
```
