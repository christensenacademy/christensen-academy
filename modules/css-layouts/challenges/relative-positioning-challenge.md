#Relative Positioning Challenge

[Challenge Video](http://www.youtube.com/watch?v=QlbSVUnSFI0) (with solution)

Your challenge is to use relative positioning to make the following webpage look like the "after" picture shown below:

```html
<!DOCTYPE html>
<html>
  <head>
    <title>Relative Positioning Challenge</title>
    <style>
      p {background:red;}
      h1 {background:blue;}
      h2 {background:green;}
      div {
        background:black;
        padding: 8px;
        margin: 8px;
      }
    </style>
  </head>
  <body>
    <h1>Lorem Ipsum</h1>
    <div id="intro">
      <h2>Nam Condimentum</h2>
      <p>Vivamus lectus tortor, placerat non porta in, rutrum non nulla. Nunc auctor faucibus porttitor. Curabitur vel elit nec ligula porttitor eleifend. Vestibulum et ligula semper nibh viverra scelerisque eu et enim. Suspendisse potenti. In hac habitasse platea dictumst.</p>
    </div>
    <div>
      <p>Donec vitae ipsum mi. Sed ut odio enim, non consequat lorem. Aenean nibh arcu, luctus a luctus volutpat, porttitor vitae ligula. Proin gravida eros ut sapien eleifend ullamcorper semper quam iaculis. Duis et sapien tellus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec vel sodales arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
      <p>Ut euismod, tellus ut hendrerit egestas, nunc arcu consequat sem, vel ultricies libero est quis lectus. Morbi laoreet lorem id orci consectetur scelerisque. Curabitur feugiat, sem sit amet fermentum iaculis, enim turpis malesuada risus, in dictum purus ligula eget nulla. Morbi at tempus felis. Phasellus non ipsum eget lacus tristique fermentum. Duis sapien sapien, commodo at vehicula quis, condimentum vel lectus. Quisque ullamcorper laoreet cursus. Pellentesque mauris ante, auctor nec euismod a, imperdiet et nulla. Morbi a laoreet odio. Quisque vel mauris mi.</p>
    </div>
    <div id="conclusion">
      <h2>Proin Ullamcorper Bibendum</h2>
      <p>Erat, eget porta nunc imperdiet quis. Phasellus nec massa dui, quis venenatis elit. Nullam non suscipit nisi. Maecenas varius consectetur nisl, non consequat tellus sollicitudin sed. Curabitur imperdiet egestas semper. Phasellus tempus dapibus mi, vitae interdum quam consequat quis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur imperdiet leo sed velit consequat id dictum tellus hendrerit. Aliquam bibendum dictum lectus, eget egestas odio sodales consectetur. Aliquam erat volutpat. Cras eu lectus justo, vitae mollis leo. In hac habitasse platea dictumst. Vivamus egestas sagittis neque euismod ultricies.</p>
    </div>
  </body>
</html>
```

##Before

![](https://raw.github.com/christensenacademy/christensen-academy/master/modules/css-layouts/challenges/relative-positioning-challenge_before.png)

##After

**NOTE:** The middle div does not move at all even though the elements above it have shifted out of place with relative positioning. Remember, relatively positioned elements are placed in normal flow first then moved leaving an empty space where they used to be.

![](https://raw.github.com/christensenacademy/christensen-academy/master/modules/css-layouts/challenges/relative-positioning-challenge_after.png)

##Mastery
Precise replication is the key. Yours should look just like what's shown in the after picture above.