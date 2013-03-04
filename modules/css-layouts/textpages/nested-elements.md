#Nested Elements (Boxes in Boxes)

One key idea with the CSS box model is that child elements display inside the content box of their parents. Consider the following example, which uses nested `div` elements.

```html
<div class="parent">
    Parent
    <div class="child">
        Child 1
        <div class="grandchild">Grandchild 1</div>
        <div class="grandchild">Grandchild 2</div>
        <div class="grandchild">Grandchild 3</div>
    </div>
    <div class="child">
        Child 2
        <div class="grandchild">Grandchild 4</div>
    </div>
</div>
```

Visually, the child boxes will display inside of their parents. Exactly what this looks like depends on the CSS you use. For this example, I'll use the following CSS:

```css
div {
    padding:10px;
    margin:5px;
    color:#fff;
}

.parent {width:200px; background:#222;}
.child {background:#555;}
.grandchild {background:#888;}
```

![a picture showing how elements are nested on a webpage](http://christensenacademy.org/modules/css-layouts/textpages/nested-elements.png)
