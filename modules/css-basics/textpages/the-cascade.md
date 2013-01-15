#The Cascade
Basically, "the cascade" is a set of rules for figuring out which styles apply when there are conflicting styles. For example, what happens when one piece of CSS turns the color of some text blue and another piece of CSS turns the same text orange? How does the browser choose which styles to actually apply?

##Step 1: Sort by Specificity
The most important thing to understand about the cascade is that more specific pieces of CSS always take precedence over less specific pieces of CSS.

###Inheritance
Most (but not all) CSS properties are inherited from parents to children. Consider the following example:

#####CSS
```css
body {color:blue;}
```

#####HTML
```html
<body>
  <h1>Lorem Ipsum</h1>
  <p>Lorem ipsum...</p>
</body>
```

In this example, all elements that are children of the body element will display blue in color because they inherited that style from their parent, the body element.

Of course, inheritance can be *overridden* by more specific CSS. Consider the following example:
#####CSS
```css
body {color:blue;}
p {color:orange;}
```

#####HTML
```html
<body>
  <h1>Lorem Ipsum</h1>
  <p>Lorem ipsum...</p>
</body>
```

In this case, the h1 element would still display blue because it inherited that style from its parent, but the p element would display orange because, even though it inherited styles from its parent, it had more specific styles applied to it that overrode the inherited styles.

###Selector Specificity
A very related idea to inheritance is the idea of how specific a selector is. A normal element selector (`p {color:green;}`) is less specific than a selector using a class name (`.green-paragraph {color:green;}`). Likewise, a selector using an id name is more specific than a selector using a class name. Consider the following example:

#####CSS
```css
body {color:yellow;}
#first-paragraph {color:orange;}
.green-paragraph {color:green;}
p {color:blue;}
```
#####HTML
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

###Inline CSS
Inline CSS is written for a specific HTML element. No selector can get any more specific than that, so inline styles always trump embedded and external styles.

##Step 2: Sort by Order
Every once in a while (but rarely), you may have styles that are equally specific. In such cases, the style the browser reads last will take precedence. Consider the following example:

#####CSS in External File example.css
```css
p {color:green;}
p {
  color:blue;
  color:red;
}
```
#####HTML
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

###Exact Rules
If you really want to know *exactly* how the cascade works, I recommend reading [the official specification from the W3C](http://www.w3.org/TR/CSS2/cascade.html#cascade).
