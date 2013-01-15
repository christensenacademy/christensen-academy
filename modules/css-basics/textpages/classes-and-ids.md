#CSS Rules
When writing CSS, you are writing *rules* for the browser to follow.

##Inline CSS Rules
When writing inline CSS, a rule is simply contained in a style attribute for an element:

```html
<p style="color:blue;background-color:red;font-size:200%">Lorem ipsum...</p>
```

Notice that each little "piece" of CSS follows the format `foo:bar;` where "foo" is a property name and "bar" is a value. Each CSS rule can have many property-value pairs as illustrated in the example above.

##Embedded and External CSS Rules
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

###3 Ways to Write Embedded and External CSS Rules
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

#Properties and Values
In CSS, properties appear on the left side of the colon and values appear on the right.

```css
/*In this example, "color" is the property and "orange" is the value.*/
p
{
  color:orange;
}
```

##Points to Remember about Properties and Values
* Properties cannot have spaces in their names, and there should not be a space between a property name and the colon. Instead of spaces in names, properties use hyphens (e.g., font-style, text-decoration, background-color, etc.).
* All properties have many possible values. For example, the color property has over 16 million possible color values.
* A space is allowed after the colon before the value.
* Don't forget semi-colons. If you do, the code that follows the missing semi-colon often will not work.
* If a property-value pair is invalid, the browser will ignore it. For example, if I tried to write `color:christensen;` in my code, the browser would ignore it because the browser knows there is no such value as "christensen" that goes with the color property.

##Multiple Values (Shorthand Properties)
Some properties accept multiple values separated by spaces. Often this is a form of CSS shorthand to help save you, the developer, time, effort, and sanity. Here are a couple of examples:

```css
border: 4px solid black;
margin: 0 5px 0 10px;
```

Whenever a value needs to have a space, the value is placed in quotes. Here is an example: `font-family: "Times New Roman", Times, Baskerville, Georgia, serif;` You'll also notice that this example has multiple values separated by commas and not spaces. This is a special feature of the way the [font-family property](#font-family-property) works and is highly abnormal.

#Basic Selectors
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
