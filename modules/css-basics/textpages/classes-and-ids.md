#Class and Id Attributes
Class and id attributes help you have greater precision over which elements you select to style. For example, instead of styling *all* paragraphs the same using the *p* selector, you could style only some (using class attributes) or exactly one (using an id attribute) of the paragraphs.

###HTML
```html
<h2 class="foo">Lorem Ipsum</h2>
<h2 class="foo foobar">Lorem Ipsum</h2> <!-- it's possible to have multiple class names -->
<h2 id="bar" class="foo">Sed Semper</h2>
<h2>Sed Rutrum</h2>
```
###CSS
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
