#Hover Effects

If you want to specify the way an element should look when the user is hovering the mouse over that element, you need to append `:hover` to the selector.

```css
/* turns paragraphs green when the user hovers over them */
p:hover {
  color:green;
}

/* removes underlining from "a" elements that are descendents of "h1" elements when the user hovers over them */
h1 a:hover {
  text-decoration:none;
}
```
