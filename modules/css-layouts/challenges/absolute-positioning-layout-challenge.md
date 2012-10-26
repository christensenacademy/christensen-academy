#Absolute Positioning Layout Challenge

* **Challenge:** Use absolute positioning to get the following HTML to look like the picutre below by absolutely positioning the column.
* **Estimated Time:** 35 minutes.

**HINT:** Try negative values

```html
<!DOCTYPE html>
<html>
  <head>
    <title>Absolute Positioning Layout Challenge</title>
    <style>
      body {margin:0;background:#444;}
    </style>
  </head>
  <body>
    <div id="container">
      <div id="top">
        <h1>Absolute Positioning Layout Challenge</h1>
      </div>
      <div id="column">
        <p>Ut euismod, tellus ut hendrerit egestas, nunc arcu consequat sem, vel ultricies libero est quis lectus. Morbi laoreet lorem id orci consectetur scelerisque. Curabitur feugiat, sem sit amet fermentum iaculis, enim turpis malesuada risus, in dictum purus ligula eget nulla. Morbi at tempus felis. Phasellus non ipsum eget lacus tristique fermentum. Duis sapien sapien, commodo at vehicula quis, condimentum vel lectus. Quisque ullamcorper laoreet cursus. Pellentesque mauris ante, auctor nec euismod a, imperdiet et nulla. Morbi a laoreet odio. Quisque vel mauris mi.</p>
      </div>
      <div id="main">
        <p>Donec vitae ipsum mi. Sed ut odio enim, non consequat lorem. Aenean nibh arcu, luctus a luctus volutpat, porttitor vitae ligula. Proin gravida eros ut sapien eleifend ullamcorper semper quam iaculis. Duis et sapien tellus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec vel sodales arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
        <p>Erat, eget porta nunc imperdiet quis. Phasellus nec massa dui, quis venenatis elit. Nullam non suscipit nisi. Maecenas varius consectetur nisl, non consequat tellus sollicitudin sed. Curabitur imperdiet egestas semper. Phasellus tempus dapibus mi, vitae interdum quam consequat quis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur imperdiet leo sed velit consequat id dictum tellus hendrerit. Aliquam bibendum dictum lectus, eget egestas odio sodales consectetur. Aliquam erat volutpat. Cras eu lectus justo, vitae mollis leo. In hac habitasse platea dictumst. Vivamus egestas sagittis neque euismod ultricies.</p>
        <p>Ut euismod, tellus ut hendrerit egestas, nunc arcu consequat sem, vel ultricies libero est quis lectus. Morbi laoreet lorem id orci consectetur scelerisque. Curabitur feugiat, sem sit amet fermentum iaculis, enim turpis malesuada risus, in dictum purus ligula eget nulla. Morbi at tempus felis. Phasellus non ipsum eget lacus tristique fermentum. Duis sapien sapien, commodo at vehicula quis, condimentum vel lectus. Quisque ullamcorper laoreet cursus. Pellentesque mauris ante, auctor nec euismod a, imperdiet et nulla. Morbi a laoreet odio. Quisque vel mauris mi.</p>
        <p>Vivamus lectus tortor, placerat non porta in, rutrum non nulla. Nunc auctor faucibus porttitor. Curabitur vel elit nec ligula porttitor eleifend. Vestibulum et ligula semper nibh viverra scelerisque eu et enim. Suspendisse potenti. In hac habitasse platea dictumst.</p>
      </div>
    </div>
  </body>
</html>
```

##Finished Page Should Look like This
![](https://raw.github.com/christensenacademy/christensen-academy/master/modules/css-layouts/challenges/absolute-positioning-layout-challenge.png)

###What the Image does not Show

As the browser window resizes:

* The container stays centered and does not change width. Its width is 800px.
* The container adapts to the height of its children, and so does the main div.
* The column has a fixed height.
* The bottom element stays fixed to the bottom of the browser window even when scrolling.

##Friendly Advice
Pay close attention to the parent-child structure of the HTML elements. I've created it for you in this challenge, but eventually you'll need to be able to do this on your own. Is there another way the HTML could have been structured to achieve the same result? Is the main element even necessary?