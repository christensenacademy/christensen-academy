#HTML Basics
HTML (Hypertext Markup Language) is code that a web designer or developer writes to create the basic content of a webpage. Most webpages are also composed of CSS and JavaScript, which enhance basic HTML by providing style and interactivity respectively. This document focuses only on basic HTML.

**Key Idea:** HTML, CSS, and JavaScript are code (plain text) that has specific meaning to the Web browsers that read it--common browsers include IE, Firefox, Safari, Chrome, and Opera. In a sense, developing webpages is nothing more than writing out a bunch of instructions for browsers to follow. In HTML, these instructions take the form of [tags](#markup-tags-and-elements) and [attributes](#attributes).

##Markup, Tags, and Elements
HTML (Hypertext *Markup* Language) is built on the ideas of tags and elements, which can more generally be called "markup." In HTML, a tag looks like `<*>`, where the * can be any number of characters. For example, in HTML there is a `<body>` tag that has special meaning to a browser. I could invent my own tags--`<dakota>`, `<mountaindew code="red">`, and `<kowabunga dudes>`--but tags I make up that aren't part of the official HTML specification wouldn't mean anything to a browser.

Tags provide meaning to a browser by creating HTML elements. Most elements require two tags, an opening and a closing tag, as shown below.

###Some Examples of "Normal" Elements
```html
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
<h1>Nam Ut Orci</h1>
<ul>
  <li><a href="index.html">Lorem</a></li>
  <li>Ipsum</li>
  <li>Dolor</li>
</ul>
```

Closing tags are easy to spot because they have a forward slash before their name (e.g., `</p>`). You'll also notice that it is possible to have HTML elements inside of other HTML elements. In the example above, there are several *child* `li` elements inside of a *parent* `ul` element. Whenever we have a hierarchical system of children inside of parents like this, we use the word *nested* to describe the structure. In this example, the `li` elements were *nested* inside of the `ul` elements. Whenever nesting occurs, it is important to [indent your code](#indentation) correctly.

###Some Examples of "Empty" (Void) Elements
```html
<img src="smiley.jpg">
<hr>
<br>
<meta name="author" content="Cameron Christensen">
```

Not all elements have both opening and closing tags. Some just have opening tags. In the examples above, notice that these opening tags have no closing tags. Because of this, there is no possible way to put any content (either text nodes or other elements) "in" these elements. Normal elements have text or other elements in them, but empty (void) elements in HTML have no content whatsoever, which is why they're called empty.

##Lorem Ipsum
[Lorem Ipsum](http://www.lipsum.com/) text was used in moderate amounts in the examples above. It looks a bit like latin but is really just dummy text. It has no meaning, but its purpose is to serve as a placeholder during the web development process until the real cotent for the website is created.

##HTML Comments
Comments in html are completely ignored by browsers. Developers use them to leave notes to themselves and to other developers.

Comments always start with `<!--` and end with `-->`.

###Examples of Comments
```html
<!-- TODO: Fix broken links -->
<p>
  The best soda is <a href="http://christensenacademy.org/mountaindew.hmlt">Mountain Dew</a>.
</p>
```

##Basic Structure of a Webpage
```html
<!-- The DOCTYPE tag lets the browser know which version of HTML you page was written in. -->
<!DOCTYPE html> <!-- This is the HTML5 doctype -->

<!-- The html element is the parent element to all other elements on your page. NOTE: It only has 
two direct children (head and body), but these children have many children within them. -->
<html>
  
  <!-- The head element is the parent element to elements that provide extra information about the 
  page but that don't actually display on the page. Examples of such elements include title and meta
  elements -->
  <head>
  
    <!-- The title element displays in the tab of the browser above the webpage. It is also used by 
    search engines to return search results -->
    <title>Example Webpage</title>
  </head>
  
  <!-- The body element contains all of the elements that will display on the page. -->
  <body>

  </body>
</html>
```

##Basic HTML Elements

```html
<p>Lorem Ipsum</p>    <!-- The paragraph element is used whenever you want a paragraph of text on your webpage. -->
<h1>Lorem Ipsum</h1>  <!-- The h1 element is used whenever you want a very important heading on your page.
                          By default it displays the largest of all of the headings. -->
<h2>Lorem Ipsum</h2>  <!-- The h2 element is interpreted to have slightly less importance than an h1 element.
                          By default it displays slightly smaller than an h1. -->
<h3>Lorem Ipsum</h3>
<h4>Lorem Ipsum</h4>
<h5>Lorem Ipsum</h5>
<h6>Lorem Ipsum</h6>  <!-- The h2 element is the least significant (displays smallest) heading element. -->
<hr>                  <!-- Horizontal Rule: Creates a horizontal rule (line) across the page. -->
<br>                  <!-- Break: Creates an extra vertical space on the page. -->
<ul>                  <!-- Unordered List: Creates a bulleted list. -->
  <li>lorem</li>      <!-- List Item: Creates a list item inside of a list. -->
  <li>ipsum</li>
</ul>
<ol>                  <!-- Ordered List: Creates a numbered list. -->
  <li>lorem</li>
  <li>ipsum</li>
</ol>
<a href="ipsum.html"> <!-- Anchor: Creates a hyperlink to another resources on the Web (usually another webpage). -->
  Lorem
</a>
<img src="ipsum.png"> <!-- Image: Makes an image appear on the page -->
```

##Whitespace
Browsers ignore whitespace when they interpret your code. The term "whitespace" refers to spaces, tabs, newlines, and all other characters that don't visibly appear in your code.

###Two Examples that would Display the Same
####Example 1
```html
<body>
        <p>This                             is    
        
        
       a sentence.
              </p></body>
```
####Example 2
```html
<body><p>This is a sentence.</p></body>
```

##Indentation
Although browsers don't care about whitespace, you should. Properly indenting is essential for developers to understand their own code and avoid making basic syntax errors, such as forgetting or mistyping a closing tag.

Also, indenting is easy once you get used to it. The only rule is that child elements are indented inside of their parent elements.

###Good Indentation Example
```html
<!DOCTYPE html>
<html>
  <head>
    <title>
      Example Webpage
    </title>
  </head>
  <body>
    <!-- NOTE: If an element only contains text, you can format it like this h1 -->
    <h1>Lorem Ipsum</h1>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="http://christensenacademy.org">
      Quisque vulputate</a> odio id odio posuere sit amet gravida turpis ultrices. Sed pharetra arcu 
      sit amet augue bibendum tempus. Etiam iaculis dui eu mauris pellentesque fringilla interdum elit 
      euismod. Praesent in lacinia arcu.
    </p>
    <!-- NOTICE: Look how easy it is to find the closing tag for this ul element. Because the indentation 
    is correct, just look straight down and it'll be the first thing you see! -->
    <ul>
      <li>lorem</li>
      <li>
        lorem
        <ul>
          <li>elit</li>
          <li>odio</li>
          <li>gravida</li>
        </lu>
      </li>
      <li>ipsum</li>
      <li>euismod</li>
      <li>lacinia</li>
    </ul>
  </body>
</html>
```
###Bad Indentation Example
```html
<!DOCTYPE html>
<html>
<head>
<title>
  Example Webpage</title>
</head>
  <body>
    <h1>Lorem Ipsum</h1>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="http://christensenacademy.org">
      Quisque vulputate</a> odio id odio posuere sit amet gravida turpis ultrices. Sed pharetra arcu sit 
      amet augue bibendum tempus. Etiam iaculis dui eu mauris pellentesque fringilla interdum elit euismod.
      Praesent in lacinia arcu.</p>
        <ul>
         <li>lorem</li>
          <li>
            lorem
            <ul>
            <li>elit</li>
             <li>odio</li>
            <li>gravida</li>
            </lu>
          </li>
          <li>ipsum</li>
          <li>euismod</li>
        <li>lacinia</li>
          </ul>
          </body>
</html>
```

##Common Mistakes
These are four common mistakes you should watch out for. Most of thes occur because of bad indentation.
###Elements Outside of Head and Body
```html
<!DOCTYPE html>
<html>
  <head>
    <title>Example Webpage</title>
  </head>
  <h1>Hello World</h1> <!-- This h1 is in the wrong place. It should be in the body. -->
  <body>

  </body>
</html>
```
###Overlapping Elements
```html
<!-- To prove to yourself that this is wrong, I recommend trying to indent this code. It's impossible! -->
<h1>
<a href="lorem.html">
</h1>
</a>
```
###Forgotten Tags
```html
<!-- there is no closing ul tag -->
<ul>
  <li>lorem</li>
  <li>ipsum</li>
  <li>dolor</li>
```
###Unclosed Tags
```html
<img src="lorem.png" <!-- There should be a closing > here -->
<p>
  Etiam iaculis dui eu mauris pellentesque fringilla interdum elit euismod. Praesent in lacinia arcu. 
  Duis a magna quis elit tincidunt pulvinar. Nulla aliquam nibh sed dolor molestie volutpat. Nullam 
  molestie euismod mattis.
</p>
```
###Mispellings and Capital Letters
```html
<img scr="Lorem.png"> <!-- In this example, the attribute should be "src" not "scr". Also, it's possible 
                           that the file name was "lorem.png" instead of "Lorem.png" -->
```

##Lists
List in HTML come in a few different varieties. The main two types are *ordered* and *unordered*.
```html
<!-- This is an ordered list -->
<ol>
  <li>Lorem Ipsum</li> <!-- This is a list item element. -->
  <li>Lorem Ipsum</li>
  <li>Lorem Ipsum</li>
  <li>Lorem Ipsum</li>
  <li>Lorem Ipsum</li>
</ol>

<!-- This is an unordered list -->
<ul>
  <li>Lorem Ipsum</li>
  <li>Lorem Ipsum</li>
  <li>Lorem Ipsum</li>
  <li>Lorem Ipsum</li>
  <li>Lorem Ipsum</li>
</ul>
```
###Nested (Multi-Level) Lists
Lists can occur inside of lists. When this happens, simply put the child list inside of one of the list items of the parent.
```html
<ul>
  <li>Lorem Ipsum</li>
  <li>
    Lorem Ipsum
    <ul>
      <li>Lorem Ipsum</li>
      <li>Lorem Ipsum</li>
      <li>Lorem Ipsum</li>
      <li>Lorem Ipsum</li>
      <li>Lorem Ipsum</li>
    </ul>
  </li>
  <li>Lorem Ipsum</li>
  <li>Lorem Ipsum</li>
  <li>Lorem Ipsum</li>
</ul>
```