#Units (em, %, px, pt)
These units can be used for more than just font sizes. They can be used, for example, for the height and widths of elements on the page.

```css
font-size: 200%; /*This would double the size of the font.*/
font-size: 50em; /*This would cut the size of the font in half.*/
font-size: 16px; /*Characters in this font would be rendered 16 pixels high.*/
font-size: 12pt; /*This appear the same size as a 12 point font in Microsoft Word would appear.*/
width: 50%; /*This element would be half as wide as its parent.*/
width: 500px; /*This element would be exactly 500 pixels wide.*/
```

**Note:** You can use something like `16pt`, but most Web designers don't do this. `pt` stands for "point", which is how font size is tradiitonally measured in printed media. Websites, however, generally aren't intended to be printed, and `em`, `%`, and `px` generally make much more sense to use than `pt`.
