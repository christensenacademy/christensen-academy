#Position Relative

Applying `position:relative;` to an element allows you to shift that element out of normal flow. The `top`, `right`, `bottom`, and `left` properties are used to specify the nature of this shift.

**Note:** Shifting an element out of normal flow using relative positioning has no impact on the elements that come after it. An empty space remains where the element would normally have been.

```css
position: relative;
top: 20px;
right: 20px;
/* other possible properties include bottom and left */
```

####[jsFiddle](http://jsfiddle.net/cameron89/kMah2/)

**Note:** The `top`, `right`, `bottom`, and `left` properties behave opposite of what you might expect. Specifying `right:20px`, for example, actually shifts the element 20 pixels to the left. This actually makes sense if you think of the element **moving inwards from the right** instead of **moving to the right**.
