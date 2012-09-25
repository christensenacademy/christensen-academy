#CSS Basics Reference Guide

* [Overview](#overview)
* [Three Types of CSS: Inline, Embedded, and External](#three-types-of-CSS)
* [CSS Comments](#css-comments)
* [CSS Rules](#css-rules)
* [Properties and Values](#properties-and-values)
* [Class and Id Attributes](#class-and-id-attributes)
* [More CSS Selectors](#more-css-selectors)
* [](#)
* [](#)
* [](#)
* [](#)

##Overview
CSS is used to add style to HTML. A key idea for Web developers to understand is that content (HTML) and style (CSS) should be as separate as possible. [CSS Zen Garden](http://www.csszengarden.com/) is a great example of this principle. Each CSS Zen Garden page has the *exact same HTML*. The difference between the HTML documents is one line of code: a link to an external CSS file.

In this module, you will learn the basics of CSS for controlling the visual aspects of your webpages.

###CSS Comments
Type a `/*`, then type your comment, then type a `*/`

```css
/* Comments in code are ignored by browsers but can be helpful when you want to leave yourself
or a teammate a note.*/
```

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

/*
Amost exactly the same as the previous one, but the opening curly brace is in a different place.
This is merely a coding preference. Both are fine, but you should be consistent in which one you use.
*/
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
* Don't forget semi-colons!!!
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
```

**Note:** Class and id names cannot have spaces in them. Instead of spaces, it is common practice to use hyphens (e.g., class="lorem-ipsum").

##More CSS Selectors

