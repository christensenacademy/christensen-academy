#CSS Basics Reference Guide

* [Properties Reference] (#properties-reference)
* [Overview](#overview)
* [Three Types of CSS: Inline, Embedded, and External](#three-types-of-css)
* [CSS Comments](#css-comments)
* [CSS Rules](#css-rules)
* [Properties and Values](#properties-and-values)
* [Class and Id Attributes](#class-and-id-attributes)
* [More CSS Selectors](#more-css-selectors)
* [Colors](#colors)
* [The Cascade](#the-cascade)
* [Font and Text Properties](#font-and-text-properties)
* [Controlling White Space](#controlling-white-space)
* [Block-Level vs. Inline](#block-level-vs-inline)
* [Span vs. Div](#span-vs-div)
* [CSS Box Model](#css-box-model)
* [CSS Positioning](#css-positioning)
* [CSS Layouts](#css-layouts)

##Properties Reference
```css
color: red;
color: rgb(150,0,75);
color: #AF810B;

background-color: #77CC5A;
background-image: url("logo.png");
background-repeat: repeat; /* other values: repeat-x, repeat-y, no-repeat */
background-attachment: scroll; /* other value: fixed */
background-position: 50% 0%; /* horizontal and vertical position */
background: #7810FA repeat url("lorem.jpg"); /* shorthand property can do everything at once */

font-family: Arial, "Helvetica Neue", Helvetica, sans-serif; /* suggestion: use CSS font stack */
font-style: italic;
font-variant: small caps;
font-weight: bold;
font-size: 200%;
font-size: 2em;
font-size: 30px;
font: italic bold 30px Arial, "Helvetica Neue", Helvetica, sans-serif; /* shorthand property */

text-indent: 30px;
text-align: center; /* other values: left, right, justify */
text-decoration: underline; /* other values: overline, line-through */
letter-spacing: 5px;
word-spacing: 10px;
text-transform: capitalize; /* other values: uppercase, lowercase */

list-style-type: none; /* other values: disc, circle, square, decimal, decimal-leading-zero, ... */
list-style-image: url("lorem.png");

width: 500px;
width: 40%;
width: auto;
height: 40px;
height: auto;

margin: 0 10px 30px 10px; /* top, right, bottom, left */
margin: 10px auto; /* top-bottom, left-right */
margin: 10px; /* applies to all margins */
margin-top: 10px;
margin-right: 10px;
margin-bottom: 10px;
margin-left: 10px;

padding: 0 10px 30px 10px; /* top, right, bottom, left */
padding: 10px auto; /* top-bottom, left-right */
padding: 10px; /* applies to all paddings */
padding-top: 10px;
padding-right: 10px;
padding-bottom: 10px;
padding-left: 10px;

border-width: 5px; /* individual properties follow form border-top-width */
border-color: #FF00C8; /* individual properties follow form border-top-color */
border-style: dotted; /* other values: dashed, solid, double, groove, ridge, inset, outset */
border: 10px #AB0477 solid; /* shorthand property applies to all borders */
border-top: 10px #AB0477 solid;
border-right: 10px #AB0477 solid;
border-bottom: 10px #AB0477 solid;
border-left: 10px #AB0477 solid;
```

##Overview
CSS is used to add style to HTML. A key idea for Web developers to understand is that content (HTML) and style (CSS) should be as separate as possible. [CSS Zen Garden](http://www.csszengarden.com/) is a great example of this principle. Each CSS Zen Garden page has the *exact same HTML*. The difference between the HTML documents is one line of code: a link to an external CSS file.

In this module, you will learn the basics of CSS for controlling the visual aspects of your webpages.

###CSS Comments
Type a `/*`, then type your comment, then type a `*/`

```css
/* Comments in code are ignored by browsers but can be helpful when you want to leave yourself
or a teammate a note.*/
```

###CSS Validator
Like HTML, CSS has a [validator from the W3C](http://jigsaw.w3.org/css-validator/). Like the HTML validator, this tool will help you find errors in your code.

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


##CSS Rules
When writing CSS, you are writing *rules* for the browser to follow.

###Inline CSS Rules
When writing inline CSS, a rule is simply contained in a style attribute for an element:

```html
<p style="color:blue;background-color:red;font-size:200%">Lorem ipsum...</p>
```

Notice that each little "piece" of CSS follows the format `foo:bar;` where "foo" is a property name and "bar" is a value. Each CSS rule can have many property-value pairs as illustrated in the example above.

###Embedded and External CSS Rules
When writing embedded (internal) or external CSS, rules are specified a bit differently:

```css
/*This is an example of embedded or external CSS*/
p {
  color:blue;
  background-color:red;
  font-size:200%;
}

h1 {
  font-style:italic;
  text-decoration:underline;
}
```

In the example above, there are two CSS *rules*, one for paragraphs and one for h1 elements. Just like inline CSS, each CSS rule can have multiple property-value pairs.

####3 Ways to Write Embedded and External CSS Rules
Lastly, it should be noted that there are multiple ways to write CSS rules, all of which are equally correct, though some are easier to read than others.

```css
/*All of the following CSS rules are equivalent in their effects.*/

/*Compact and orderly but hard to read if there are lots of property-value pairs*/
p {color:blue;background-color:red;font-size:200%;}
h1 {font-style:italic;text-decoration:underline;}

/*Less compact, but easy to read.*/
p {
  color:blue;
  background-color:red;
  font-size:200%;
}

/*Amost exactly the same as the previous one, but the opening curly brace is in a different place.
This is merely a coding preference. Both are fine, but you should be consistent in which one you use.*/
p
{
  color:blue;
  background-color:red;
  font-size:200%;
}
```

##Properties and Values
In CSS, properties appear on the left side of the colon and values appear on the right.

```css
/*In this example, "color" is the property and "orange" is the value.*/
p
{
  color:orange;
}
```

###Points to Remember about Properties and Values
* Properties cannot have spaces in their names, and there should not be a space between a property name and the colon. Instead of spaces in names, properties use hyphens (e.g., font-style, text-decoration, background-color, etc.).
* All properties have many possible values. For example, the color property has over 16 million possible color values.
* A space is allowed after the colon before the value.
* Don't forget semi-colons. If you do, the code that follows the missing semi-colon often will not work.
* If a property-value pair is invalid, the browser will ignore it. For example, if I tried to write `color:christensen;` in my code, the browser would ignore it because the browser knows there is no such value as "christensen" that goes with the color property.

###Multiple Values (Shorthand Properties)
Some properties accept multiple values separated by spaces. Often this is a form of CSS shorthand to help save you, the developer, time, effort, and sanity. Here are a couple of examples:

```css
border: 4px solid black;
margin: 0 5px 0 10px;
```

Whenever a value needs to have a space, the value is placed in quotes. Here is an example: `font-family: "Times New Roman", Times, Baskerville, Georgia, serif;` You'll also notice that this example has multiple values separated by commas and not spaces. This is a special feature of the way the [font-family property](#font-family-property) works and is highly abnormal.

##Basic Selectors
Consider the following examples:

```css
p
{
  color:white;
  background-color:black;
  font-family: TimesNewRoman, "Times New Roman", Times, Baskerville, Georgia, serif;
}

h1
{
  font-size:200%;
}
```
Looking at the code above, it should be clear that some of the CSS is being applied to *p* elements and some of it is being applied to *h1* elements. In the examples above, *p* and *h1* are called selectors because they *select* what elements to style. Selectors that use HTML element names are just one type of CSS selector. The next sections will demonstrate many more.

*Note:* Styles (property-value pairs) for selectors are then written between "{" and "}" (curly bracket) symbols.

##Class and Id Attributes.
Class and id attributes help you have greater precision over which elements you select to style. For example, instead of styling *all* paragraphs the same using the *p* selector, you could style only some (using class attributes) or exactly one (using an id attribute) of the paragraphs.

####HTML
```html
<h2 class="foo">Lorem Ipsum</h2>
<h2 class="foo foobar">Lorem Ipsum</h2> <!-- it's possible to have multiple class names -->
<h2 id="bar" class="foo">Sed Semper</h2>
<h2>Sed Rutrum</h2>
```
####CSS
```css
/*The h2 selector selects all h2 elements. In this case, all h2 elements would display in italics.*/
h2 {font-style:italic;}

/*The .foo selector selects all elements with a class attribute of "foo". In this case, the top two h2 elements
would display in orange.*/
.foo {color:orange;font-weight:bold;}

/*The #bar selector (technically) selects all elements with id attributes of "bar", but really this should
only ever be a single element. You shouldn't assign the same id name to multiple elements. That's what the
class attribute is for.*/
#bar {font-size:300%;text-decoration:underline;} 

/*The .foobar selector selects all elements with a class attribute of "foobar". In this case, the second element
would display with a black background.*/
.foobar {background-color:black;}
```

**Note:** Class and id names cannot have spaces in them. Instead of spaces, it is common practice to use hyphens (e.g., class="lorem-ipsum").

##More CSS Selectors

##Colors
There are three ways of specifying colors in CSS. Each method has it's own benefits and drawbacks.

**Note:** Regardless of the way you specify colors in CSS, your browser interprets them in terms of varying levels of [RGB](http://en.wikipedia.org/wiki/SRGB) in order to display them on your screen.

###Color Names
You can specify colors in CSS using color names.
```css
p {color:green;}
```

####Drawbacks
* There are a very [limited number color names a browser knows about](http://en.wikipedia.org/wiki/Web_colors#HTML_color_names).

####Benefits
* Easy to remember
* Useful when quickly prototyping the design of a site

###RGB Function
In the following example, three values are given, each of which can range in value from 0 to 255. 
```css
/*20 red, 123 green, and 97 blue*/
p {color:rgb(20,123,97)}
```

**Note:** Make sure not to have a space in between `rgb` and `(x,y,z)`.
**Note:** 255 for each value makes white. 0 for each value makes black. The same number for each value makes a shade of gray.

####Drawbacks
* The syntax is more verbose and takes longer to write.
* Unless you have an incredible ability to predict what colors will look like based on the amount of red, green, and blue they have, this syntax isn't all that useful.

####Benefits
* It is more human-readable than hexadecimal color codes are.

###Hexadecimal Codes
Colors can be specified using a sequence of six characters that are either the digits 0-9 or the letters a-f. Here are some examples:
```css
p {color:#770060;} /*dark magenta*/
p {color:#99EE6B;} /*light green*/
p {color:#FFEF00;} /*briht, saturated yellow*/
```

**Note:** You should realize that these codes work on the same RGB color model, and if you understand how hexadecimal numbers work, you'll realize that this way of specifying CSS is exactly the same as using the `rgb(x,y,z)` function. Basically, the first two characters specify the amount of red, the middle two specify the amount of green, and the last two specify the amount of blue.

####Drawbacks
* Unless you have a very strong understanding of hexadecimal numbers, the codes themselves will not make any sense.

####Benefits
* The codes are short, and unlike the `rgb(x,y,z)` function, they are easy to copy and paste.
* There are plenty of great online tools for finding colors and creating color schemes that will give you the hexadecimal codes. If you can actually see the color, you don't really need to know what the hexadecimal digits stand for anyway.

##The Cascade
CSS stands for Cascading Style Sheets. It's easy to understand that "style sheets" refers to the idea of using external CSS files. "Cascading," however, is a bit trickier to understand. Basically, "the cascade" is a set of rules for figuring out which styles apply when there are conflicting styles. For example, what happens when one piece of CSS turns the color of some text blue and another piece of CSS turns the same text orange? How does the browser choose which styles to actually apply?

###Step 1: Sort by Specificity
The most important thing to understand about the cascade is that more specific pieces of CSS always take precedence over less specific pieces of CSS.

####Inheritance
Most (but not all) CSS properties are inherited from parents to children. Consider the following example:

######CSS
```css
body {color:blue;}
```

######HTML
```html
<body>
  <h1>Lorem Ipsum</h1>
  <p>Lorem ipsum...</p>
</body>
```

In this example, all elements that are children of the body element will display blue in color because they inherited that style from their parent, the body element.

Of course, inheritance can be *overridden* by more specific CSS. Consider the following example:
######CSS
```css
body {color:blue;}
p {color:orange;}
```

######HTML
```html
<body>
  <h1>Lorem Ipsum</h1>
  <p>Lorem ipsum...</p>
</body>
```

In this case, the h1 element would still display blue because it inherited that style from its parent, but the p element would display orange because, even though it inherited styles from its parent, it had more specific styles applied to it that overrode the inherited styles.

####Selector Specificity
A very related idea to inheritance is the idea of how specific a selector is. A normal element selector (`p {color:green;}`) is less specific than a selector using a class name (`.green-paragraph {color:green;}`). Likewise, a selector using an id name is more specific than a selector using a class name. Consider the following example:

######CSS
```css
body {color:yellow;}
#first-paragraph {color:orange;}
.green-paragraph {color:green;}
p {color:blue;}
```
######HTML
```html
<body>
  <h1>Lorem Ipsum</h1>
  <p class="green-paragraph" id="first-paragraph">Lorem ipsum...</p>
  <p class="green-paragraph">Lorem ipsum...</p>
  <p>Lorem ipsum...</p>
</body>
```

In the example above:
* The heading would be yellow.
* The first paragraph would be orange.
* The second paragraph would be green.
* The last paragraph would blue.

####Inline CSS
Inline CSS is written for a specific HTML element. No selector can get any more specific than that, so inline styles always trump embedded and external styles.

###Step 2: Sort by Order
Every once in a while (but rarely), you may have styles that are equally specific. In such cases, the style the browser reads last will take precedence. Consider the following example:

######CSS in External File example.css
```css
p {color:green;}
p {
  color:blue;
  color:red;
}
```
######HTML
```html
<!DOCTYPE html>
<html>
  <head>
    <title>Example Webpage</title>
    <style>
      p {color:orange;}
      p {color:purple;}
    </style>
    <link href="example.css" rel="stylesheet">
  </head>
  <body>
    <p>Lorem Ipsum</p>
  </body>
</html>
```

In this (admittedly silly) example, what color would the paragraph be? The key idea is that the browser reads from top to bottom, and the thing it sees last is what it will display. In this case, since the embedded styles came before the external styles, the browser reads the embedded styles first, then it reads the external styles. Looking in the external file, we see that red is the last color specified, so that is what displays.

**Note:** Order rarely matters because it is generally silly to have two CSS rules of equal specificity.

####Exact Rules
If you really want to know *exactly* how the cascade works, I recommend reading [the official specification from the W3C](http://www.w3.org/TR/CSS2/cascade.html#cascade).

##Font and Text Properties

###Units (em, %, px, pt)
These units can be used for more than just font sizes. They can be used, for example, for the height and widths of elements on the page.

```css
font-size: 200%; /*This would double the size of the font.*/
font-size: 50em; /*This would cut the size of the font in half.*/
font-size: 16px; /*Characters in this font would be rendered 16 pixels high.*/
font-size: 12pt; /*This appear the same size as a 12 point font in Microsoft Word would appear.*/
width: 50%; /*This element would be half as wide as its parent.*/
width: 500px; /*This element would be exactly 500 pixels wide.*/
```

###List of Text Properties
```css
text-align: center; /*centers text inside of this element*/
text-indent: 20px; /*indent text inside of this element 20px on the first line*/
line-height: 2em; /*each line of text in this element has 2em worth of vertical space*/
letter-spacing: 2px; /*two pixels of space between each letter of text*/
```

###List of Font Properties
```css
font-weight: bold;
font-style: italic;
font-variant: small-caps;

/*Font values are separated by commas. Names with spaces are put in quotes. The browser uses the first font it has.*/
font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
```

**Note:** With font families, using a site like [CSS Font Stack](http://cssfontstack.com/) is often the easiest and best option.

##Controlling White Space
Use the `pre` element if you'd like your text to not ignore whitespace. "Pre" stands for "preformatted text."
```html
<pre>
The     spaces
      in      this text
      
      
      will be preserved
 when it is displayed
 
 
 on the webpage. This can be useful at times, so give it a try!
</pre>
```

##Block-Level vs. Inline
Web browsers display elements in one of two ways: block-level or inline. Block-level elements are given their own vertical space on the page. That is, a line break is automatically placed above and below a block-level element. Inline elements, on the other hand, display inline with whatever content surrounds them, such as the text of a paragraph. The only time inline elements are given their own line on a page is when they are immediately preceded and followed by block-level elements. 

Examples of inline elements include `span`, `img`, `em`, `strong`, and `a`.
Examples of block-level elements include `p`, `div`, `h2`, `li`, ul `hr`.

##Span vs. Div
Sometimes you may find yourself wanting to add style to an entire section (division) of your webpage. In such cases, it is often best to use a div element, which can be thought of as a generic block-level element.

```html
<div class="blog-post">
  <h2>Lorem Ipsum</h2>
  <p>...</p>
  <p>...</p>
  <p>...</p>
</div>
<div class="blog-post">
  <h2>Lorem Ipsum</h2>
  <p>...</p>
  <p>...</p>
  <p>...</p>
</div>
```

**Note:** Div elements are often used primarily to control page layouts. Look at the souce of any popular website, and you'll see lots of div elements. I guarantee it. 

Sometimes you may find yourself wanting to add style a small portion (span) of an existing element. In such cases, it is often best to use a span element, which can be thought of as a generic inline element.

```html
<p>
  Sed ultricies massa sit amet risus sollicitudin eu hendrerit tellus lacinia. Aliquam erat volutpat.
  Duis placerat molestie mi, in condimentum arcu elementum at. Fusce massa ante, convallis ut sagittis et,
  accumsan eget arcu. Fusce <span style="color:red;">feugiat</span> sagittis erat quis pharetra. Vestibulum bibendum sem nec augue
  dictum sit amet luctus enim tempor. Cras adipiscing varius dolor id pulvinar. Morbi dolor leo, interdum
  vitae tristique euismod, venenatis nec enim. Pellentesque sapien neque, hendrerit ac sollicitudin vitae,
  aliquam sed nisi.
</p>
```

##CSS Box Model
The big idea behind the CSS Box Model is that every element on the page is rendered by the browser as a box (rectangle) composed of four components: content, padding, border, and margin. Understanding how this box model works is essential to understanding how to display.

**Note:** Understanding the box model is essential to understanding how to create nice page layouts.

###Content
In HTML, we think of elements as having an opening tag (e.g., `<p>`), some content, and a closing tag (e.g., `</p>`). In the case of the paragraph element, the content would be some text. While this is true, when speaking about the CSS box model, we use the word "content" to specifically refer to the box surrounding, in this case, the paragraph.

**Every element in the body element has a content box.** Each of these content boxes has a height and a width.

#####HTML
```html
<body>
  <h1>Lorem Ipsum</h1>
  <p>
    Donec vehicula felis eget nibh consequat aliquet. Proin purus nisi, porttitor ac tincidunt in, consectetur 
    eu nisi. Donec et sodales leo. Nullam enim nunc, viverra in pellentesque vitae, placerat elementum tortor.
  </p>
</body>
```

#####CSS
```css
h1
{
  width: 500px;
  height: 100px;
}

p
{
  width: 50%;
}
```