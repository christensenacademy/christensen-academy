#Position Relative
Elements that are positioned relatively shift out of their normal flow position leaving an empty space behind. The "top", "right", "bottom", and "left" properties are used to move the relatively positioned element.

```css
position: relative;
top: 20px; /* oddly, this actully moves the element downwards */
right: 20px; /* oddly, this actually moves the element leftwards */

/* Note: If top and bottom are specified, top "wins". If left and right are specified, left "wins" */
```

Interestingly, relative positioning isn't actually used much on real webpages. Even more interestingly, when relative positioning is actually used, the top-right-left-bottom properties are usually not, which is strange because the relatively positioned element doesn't actually move. At first glance, this seems ludicrous, until you understand absolute positioning...
