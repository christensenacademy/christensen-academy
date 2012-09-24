#CSS Basics Reference Guide

* [Overview](#overview)
* [Three Types of CSS](#three-types-of-CSS)
  * [Inline CSS](#inline-css)
  * [Embedded (Internal) CSS](#embedded-internal-css)
  * [External CSS](#external-css)
* [CSS Comments](#css-comments)
* [CSS Rules](#css-rules)
  * [Properties and Values](#properties-and-values)
  * [Basic Selectors](#basic-selectors)
  * [Advanced Selectors](#advanced-selectors)
* [](#)
* [](#)
* [](#)
* [](#)
* [](#)

##Overview
CSS is used to add style to HTML. A key idea for Web developers to understand is that content (HTML) and style (CSS) should be as separate as possible. [CSS Zen Garden](http://www.csszengarden.com/) is a great example of this principle. Each CSS Zen Garden page has the *exact same HTML*. The difference between the HTML documents is one line of code: a link to an external CSS file.

In this module, you will learn the basics of CSS for controlling the visual aspects of your webpages.

##Three Types of CSS
There are three different ways of writing CSS code for a webpage: inline, embedded (also called internal), and external. External CSS is the best because a single CSS file can be used to provide styles to multiple webpages. This has two **huge** benefits:
* Site Maintenance: Change a few lines of code in your CSS and watch as your entire site automatically reflects those changes. Compare this to editing styles for each individual page--or worse, for every element on every page.
* HTML Readability: Remember, your HTML should only hold the content of the page, nothing more. This keeps the HTML simple, neat, and readable.

Inline CSS doesn't have either of these benefits. Embedded has both benefits to an extent, but it is less maintainable because it cannot be used across multiple webpages. For example, if you developed a website using only embedded CSS and you wanted to change the look and feel of your website, you would need to update each and every webpage because you have "embedded" the CSS into each and every webpage. External CSS solves this problem.

###Inline CSS
Inline CSS is written in individual HTML elements with the style attribute. Here are some examples:

```html
<!DOCTYPE html>
<html>
  <head>
    <title>Example Webpage</title>
  </head>
  <body style="margin:0;">
    <h1 style="background-color:black;color:white;">Lorem Ipsum</h1>
    <p style="color:blue;font-size:200%;">
      Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis 
      tristique elit vitae augue tincidunt scelerisque.
    </p>
    <p style="color:blue;font-size:200%;">
      Vivamus rutrum, sem scelerisque accumsan interdum, turpis elit dignissim lectus, id auctor velit 
      purus sit amet felis. Donec volutpat augue at nisi semper vel accumsan tellus ultricies.
    </p>
  </body>
</html>
```

Notice how the CSS is hard to read, how it is mixed in with the HTML, and how it must be specified element by element. For these reasons, inline CSS is a maintenance nightmare. My recommendation is to use inline CSS only if you want to experiment with some CSS quickly and temporarily. It should not be a permanent solution to your styling needs.

###Embedded (Internal) CSS

Embedded CSS (also called internal CSS) is written in an HTML document in the style element, which is a child of the head element.

```html
<!DOCTYPE html>
<html>
  <head>
    <title>Example Webpage</title>
    <style>
      body
      {
        margin:0;
      }
      
      h1
      {
        background-color:black;
        color:white;
      }
      
      p
      {
        color:blue;
        font-size:200%;
      }
    </style>
  </head>
  <body>
    <h1>Lorem Ipsum</h1>
    <p>
      Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis 
      tristique elit vitae augue tincidunt scelerisque.
    </p>
    <p>
      Vivamus rutrum, sem scelerisque accumsan interdum, turpis elit dignissim lectus, id auctor velit 
      purus sit amet felis. Donec volutpat augue at nisi semper vel accumsan tellus ultricies.
    </p>
  </body>
</html>
```

Notice how much readable the HTML is when using embedded CSS as opposed to [inline CSS](#inline-css). The other major benefit is in maintainability. Imagine you're trying to update the styles associated with each paragraph in the examples above. With embedded CSS, this is easy because you can make all of your changes in one single location. Imagine if your page had 10 paragraphs... or, what if you had 10 pages each with 10 paragraphs?!?!? Then, I think you might need [external CSS](#external-css).

###External CSS
External CSS is the best of the [three type of CSS](#three-types-of-css) for reasons previously discussed, the most important of which is site maintainability. External CSS offers complete separation of content (HTML) and style/presentation (CSS) in your webpage, as demonstrated beautifully on [CSS Zen Garden](http://www.csszengarden.com/).

In external CSS, you write your CSS in one or more CSS files (text files that end in .css as opposed to .html or some other extension). Then, inside of your HTML files, you provide one line of code for each CSS file (stylesheet) you wish to link to:

```html
<!DOCTYPE html>
<html>
  <head>
    <title>Example Webpage</title>
    <link href="lorem.css" rel="stylesheet">
    <link href="ipsum.css" rel="stylesheet">
  </head>
  <body>
     ...
  </body>
</html>
```

Each of you external stylesheets (.css files) is simply a collection of CSS rules. The following is an example of what a simple external style sheet might look like:

```css
body
{
  margin:0;
}

h1
{
  background-color:black;
  color:white;
}

p
{
  color:blue;
  font-size:200%;
}
```

##CSS Comments
Comments in CSS are written in two ways:
* **Single line**: type two forward slashes `//` preceding your comment
* **Multiple lines**: type a `/*`, then type your comment, then type a `*/`

```css
p {color:blue;} //Comments like this must stay on a single line.

/*
This is also a comment.
Comments like this can be multi-line.
*/
```

Like HTML comments, CSS comments are completely ignored by browsers. They are intended to help developers understand their code by leaving themselves notes.

##CSS Rules
When writing CSS, you are writing *rules* for the browser to follow. When writing inline CSS, a rule is simply contained in a style attribute for an element:

```html
<p style="color:blue;background-color:red;font-size:200%">Lorem ipsum...</p>
 ```

###Properties and Values
###Basic Selectors
###Advanced Selectors
