#Full Page Layout Challenge

* **Challenge:** Achieve the result shown in the picture below. To create your column, you may use absolute positioning or a floating element. The choice is yours. Both ways will work.
* **Estimated Time:** 70 minutes.

##Images You'll Need

![](https://raw.github.com/christensenacademy/christensen-academy/master/modules/css-layouts/challenges/abstract3.png)

##Finished Page Should Look like This
![](https://raw.github.com/christensenacademy/christensen-academy/master/modules/css-layouts/challenges/full-page-layout-challenge.png)

###What the Picture does not Show

* The div at the very bottom (i.e., "footer") is fixed in position. For such an element, you'll need to use fixed positioning. Make sure to set a width and height for this element and tell it to go to the bottom of the window.
* The layout is a fixed, centered layout. Adjusting the width of the browser has no effect on the page other than to shrink or grow the outside margins.

##Starter Code

```html
<!DOCTYPE html>
<html>
  <head>
    <title>Full Page Layout</title>
    <style>
      body {
        background-color:#222;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        margin:0;
      }
      
      #container {
        width:800px;
        position:relative;
        margin:0 auto;
      }
    </style>
  </head>
  <body>
    <div id="container">
      <div id="top">
        <h1>Page Layout</h1>
        <div id="nav">
          <a href="#">Nullam</a>
          <a href="#">Luctus</a>
          <a href="#">Donec</a>
          <a href="#">Sodales</a>
          <a href="#">Faucibus</a>
        </div>
      </div>
      <div id="main">
        <div id="column">
          <ul>
            <li>faucibus</li>
            <li>orci</li>
            <li>luctus</li>
            <li>et</li>
            <li>ultrices</li>
            <li>faucibus</li>
            <li>orci</li>
            <li>luctus</li>
            <li>et</li>
            <li>ultrices</li>
            <li>faucibus</li>
            <li>orci</li>
            <li>luctus</li>
            <li>et</li>
            <li>ultrices</li>
          </ul>
        </div>
        <p>Donec nec nunc nunc, congue adipiscing magna. Fusce ac arcu risus, vel ornare sem. Nullam magna augue, varius nec elementum a, dictum ac velit. Sed rhoncus suscipit nisi vitae viverra. Etiam et ipsum ac sapien mattis fringilla at egestas lacus. Sed vulputate, nisi nec aliquet sollicitudin, erat lectus congue sapien, id volutpat lectus dolor id lorem. Vestible ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque felis neque, cursus eget tincidunt vel, fermentum id elit.</p>
        <p>Donec vitae ipsum mi. Sed ut odio enim, non consequat lorem. Aenean nibh arcu, luctus a luctus volutpat, porttitor vitae ligula. Proin gravida eros ut sapien eleifend ullamcorper semper quam iaculis. Duis et sapien tellus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec vel sodales arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
        <p>Erat, eget porta nunc imperdiet quis. Phasellus nec massa dui, quis venenatis elit. Nullam non suscipit nisi. Maecenas varius consectetur nisl, non consequat tellus sollicitudin sed. Curabitur imperdiet egestas semper. Phasellus tempus dapibus mi, vitae interdum quam consequat quis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur imperdiet leo sed velit consequat id dictum tellus hendrerit. Aliquam bibendum dictum lectus, eget egestas odio sodales consectetur. Aliquam erat volutpat. Cras eu lectus justo, vitae mollis leo. In hac habitasse platea dictumst. Vivamus egestas sagittis neque euismod ultricies.</p>
        <p>Ut euismod, tellus ut hendrerit egestas, nunc arcu consequat sem, vel ultricies libero est quis lectus. Morbi laoreet lorem id orci consectetur scelerisque. Curabitur feugiat, sem sit amet fermentum iaculis, enim turpis malesuada risus, in dictum purus ligula eget nulla. Morbi at tempus felis. Phasellus non ipsum eget lacus tristique fermentum. Duis sapien sapien, commodo at vehicula quis, condimentum vel lectus. Quisque ullamcorper laoreet cursus. Pellentesque mauris ante, auctor nec euismod a, imperdiet et nulla. Morbi a laoreet odio. Quisque vel mauris mi.</p>
      </div>
      <div id="footer">
        <p>Vesti ante ipsum primis in faucibus orci.</p>
      </div>
    </div>
  </body>
</html>
```

##Friendly Advice

* Work your way from the outside in. Add CSS to parents first, then children.
* Test, test, test. As you code, constantly view your page in the browser so you can see how it is coming along.