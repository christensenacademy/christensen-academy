#HTML Basics Reference
* [Overview](#overview)
* [Basic HTML Template](#basic-html-template)
* [Useful Keyboard Shortcuts](#useful-keyboard-shortcuts)
* [Markup, Tags, and Elements](#markup-tags-and-elements)
* [Lorem Ipsum](#lorem-ipsum)
* [HTML Comments](#html-comments)
* [Basic Structure of a Webpage](#basic-structure-of-a-webpage)
* [Basic HTML Elements](#basic-html-elements)
* [Whitespace](#whitespace)
* [Indentation](#indentation)
* [Block vs. Inline](#block-vs-inline)
* [Lists](#lists)
* [Attributes](#attributes)
* [Links](#links)
* [Anchor Element](#anchor-element)
* [Image Element](#image-element)

##Overview
HTML (Hypertext Markup Language) is code that a web designer or developer writes to create the basic content of a webpage. Most webpages are also composed of CSS and JavaScript, which enhance basic HTML by providing style and interactivity respectively. This document focuses only on basic HTML.

**Key Idea:** HTML, CSS, and JavaScript are code (plain text) that has specific meaning to the Web browsers that read it (IE, Firefox, Safari, Chrome, Opera). In a sense, developing webpages is nothing more than writing out a bunch of instructions for browsers to follow. In HTML, these instructions take the form of [tags](#markup-tags-and-elements) and [attributes](#attributes).

##Basic HTML Template
```
<!DOCTYPE html>
<html>
  <head>
    <title>Example Webpage</title>
  </head>
  <body>

  </body>
</html>
```

##Text Editors
Websites can be developed on any computer. All that's required is a simple program called a *text editor* in which to write your code. Unlike a word processing program, text editors only manipulate plain text, which makes them, in comparison to word processors like Microsoft Word, rather simple.

###Suggested Text Editors
Both Windows and Mac come with text editors already installed (Notepad and TextEdit respectively). However, I don't recommend using either of them. Instead, you should download a better one for free.

####Windows
* [Notepad++](http://notepad-plus-plus.org/)
* [Sublime Text 2](http://www.sublimetext.com/2)

####Mac
* [Text Wrangler](http://www.barebones.com/products/TextWrangler/)
* [Sublime Text 2](http://www.sublimetext.com/2)

####Linux
* [gedit](http://projects.gnome.org/gedit/)
* [Sublime Text 2](http://www.sublimetext.com/2)

###Syntax Highlighting
When writing computer code, the word syntax refers the rules of the language you're working in. In HTML, for example, the syntax for creating an element requires you to having an opening tag, some conent, then a closing tag:
```
<p>This is the content of the paragraph element.</p>
```

Most text editors attempt to display code in a colorful fashion that helps you, the developer, more easily spot errors. The following example is what the [basic HTML template](#basic-html-template) might look like in an editor that uses syntax highlighting:

```html
<!DOCTYPE html>
<html>
  <head>
    <title>Example Webpage</title>
  </head>
  <body>

  </body>
</html>
```

##Useful Keyboard Shortcuts
If using Mac, replace ctrl (control) with the command key.
```
ctrl + s = save
ctrl + a = highlight all
ctrl + x = cut
ctrl + c = copy
ctrl + v = paste
ctrl + r = refresh browser
ctrl + d = duplicate (only in Notepad++)
ctrl + alt + shift + r = open in browser (only in Notepad++)
alt + tab = switch windows (command + tab on Mac)
shift + arrows = highlight
shift + ctrl + arrows = turbo highlight (shift + option + arrows on Mac)
```

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
###Overlapping Elements
```html
<h1>
<p>
</h1>
</p>
```
###Forgotten Tags
```html
<ul>
  <li>lorem</li>
  <li>ipsum</li>
  <li>dolor</li>
```
###Unclosed Tags
```html
<img src="lorem.png"
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

##Block vs. Inline
This will make more sense once you learn CSS and the box model. For now, realize that image and anchor elements display *inline* while other elements display *block*. Basically, block level elements carve out their own space on the page by putting a line break above and below themselves. Inline elements do not do this, which is why you can have a link (anchor element) or image in the middle of, say, a paragraph. Test this code to see how it displays.

```html
<h1>Lorem Ipsum</h1>
<p>
  Lorem <a href="http://christensenacademy.org">ipsum</a> dolor sit amet, consectetur 
  <img src="http://christensenacademy.org/img/logo.png">adipiscing elit.
</p>

```
Notice how the `h1` and `p` elements each carve out their own space while the `img` and `a` elements display inline. Also, realize that you'll be able to change how elements display once you learn CSS.

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

##Attributes
HTML elements often have attributes in their opening tags. Attributes all follow the same basic format: `name="value"`. It's important to note that attributes are only found in opening tags (not closing tags) and can occur in any order.
###Examples of HTML Attributes
```html
<p id="conclusion">
  Praesent adipiscing justo id diam porta vel placerat lectus feugiat. Vivamus hendrerit 
  erat vitae tortor aliquet nec tincidunt libero dictum. Mauris porta vehicula pulvinar. Sed tristique 
  vestibulum elit, at suscipit metus pretium eu. Cum sociis natoque penatibus et magnis dis parturient 
  montes, nascetur ridiculus mus. Sed nec facilisis magna. Praesent non nisl ut ligula mattis mollis.
</p>
<meta charset="utf-8">
<img src="img/logo112.png" class="icon">
<img class="icon" src="img/logo112.png"> <!-- Notice that this element is exactly the same as the one before. -->
<a href="lorem.html" alt="Lorem ipsum dolor et">lorem ipsum</a>
```

##Links
Developers often specify links to resources on either their website or other websites. These information for these links is always found an attribute of an element. Here are some examples:
```html
<a href="http://www.google.com">Click this to go to Google!</a> <!-- a absolute hyperlink to another webpage -->
<img src="lorem.png"> <!-- a relative link to a picture file -->
<!-- a relative hyperlink to download a pdf document -->
<a href="reports/january_2013.pdf">Download the latest report.</a>
```
###URLs and Absolute Links
When you link to a resource on the World Wide Web that isn't on your own website, you'll need to specify the URL for that resource. We call this type of link an *absolute* link. Of course, you can also specify links to resources on your own site using absolute links, but when resources are on your own site, it usually makes more senes to use a [relative link](#relative-links) instead.

###URLs
URLs (Uniform Resource Locators), provide all of the information necessary to locate a resource on the World Wide Web.

Here is an example of a URL: `http://christensenacademy.org/img/logo.png`

We can break this URL up into two main parts. The first part, `http://christensenacademy.org`, provides the information for connecting to the correct Web server. Thanks to the magic of the Internet, this part of the URL will ensure that a request for the resource gets sent to the correct server, which in this case is the server for the Christensen Academy.

The second part, `img/logo.png` is the path to the resource on that server, which in this case is an image file. On the server for the Christensen Academy is a folder called img, and in that folder is the file logo.png. This should make a bit more sense if you understand how relative links work.

###Relative Links
Relative links specify the path to a resource on your site. When making a relative link, the goal is to describe how to get to the other resource. If the other resource is in the same folder as your HTML file, then just specify the file name (e.g., `href="lorem.png"`). If the other resource is in another folder, just follow these two rules:
* To go up to a parent folder, type `../`
* To go into a child folder, type `name_of_folder/`

All of the examples in this section will be based off of the following folder structure ([actual files found here](https://github.com/christensenacademy/web-design-intro/tree/master/1_HTML_basics/relative-links)):

```html
<!-- Note: Not real html. Think of this as a diagram describing a folder structure. -->
<folder name="relative-links">
  <folder name="employees">
    <resource type="webpage" name="cam.html">
    <resource type="webpage" name="eric.html">
  </folder>
  <folder name="products">
    <folder name="candy">
      <resource type="webpage" name="candy_bars.html">
      <resource type="webpage" name="twinkies.html">
    </folder>
    <folder name="electronics">
      <resource type="webpage" name="computers.html">
      <resource type="webpage" name="electric_violins.html">
    </folder>
  </folder>
  <resource type="webpage" name="about.html">
  <resource type="webpage" name="index.html">
</folder name="">
```
###Examples of Relative Links
A link from about.html to index.html: `index.html`
A link from candy_bars.html to twinkies.html: `twinkies.html`
A link from about.html to cam.html: `employees/cam.html`
A link from index.html to twinkies.html: `products/candy/twinkies.html`
A link from twinkies.html to index.html: `../../index.html`
A link from cam.html to twinkies.html: `../products/candy/twinkies.html`

##Anchor Element
Use this element for creating hyperlinks to resources on the World Wide Web. If the resource is another webpage, the new page will appear in the browser. If the resource is something else, say a PDF document or computer program, the browser will likely download the document and allow an external application to open it, but that is up to the browser. Some browsers, for example, open PDF documents and display them themselves.

The anchor element's name is just the letter `a`. Every anchor element needs an href attribute with a link (relative or absolute) as a value.

###Examples of the Anchor Element
```html
<!-- an example of turning text into a hyperlink -->
If you want to learn about programming, go to the <a href="http://christensenacademy.org"> Christensen Academy </a>

<!-- an example of turning an image into a hyperlink -->
<a href="index.html">
  <img src="img/logo.png">
</a>
```

###Alt Attribute


###Links to Other Resources

###Email Link

##Image Element


