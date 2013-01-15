#Complex Selectors

In adition to element selectors (`p {color:blue}`), class selectors (`.lorem {color:blue}`), and ID selectors (`#ipsum {color:blue}`), there are many other ways to write more complex selectors for CSS rules. This textpage will explain two of the most common (and hopefully useful) or these more advanced and complex selectors.

###Selecting Descendents

If you want to apply css to an element only if that element is a descendent (child) of another element, you'll start by writing the selector for the parent element, then you'll put a space, then you'll put the selector for the descendent element. Here are some examples:

```css
/* In this example, the CSS applies to all elements of type "a" that are descendents (children,
   grandchildren, etc.) of the element with ID "lorem" */
#lorem a {
   text-decoration:none;
}

/* In this example, the CSS applies to all elements of class "menu-item" that are descendents of the element 
   with ID "header" */
#header .menu-item {
  background:#333;
}

/* In this example, the CSS applies to all elements of type "span" that are descendents of elements of type "p" */
p span {
  color:green;
}
```
