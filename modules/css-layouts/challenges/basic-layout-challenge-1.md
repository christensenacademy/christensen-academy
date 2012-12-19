**Estimated Time:** 60 minutes

Your challenge is laid out for you in [this video](http://www.youtube.com/watch?v=NuUDce1UC04), which also shows the solution. The second half of the solution can be found in [this video](http://www.youtube.com/watch?v=bxJetHA3ZeY).

You should obviously try this without looking at the solution, but if you're interested, here is the [solution itself](https://github.com/christensenacademy/christensen-academy/blob/master/modules/css-layouts/challenges/basic-layout-challenge-1.html).

Here is a picture of what the final product should look like (exactly), though you should realize that a photo doesn't tell the whole story with regards to widths of elements, which can have values of auto (the default), something in pixels, or a percent:

![This picture shows what your page should look like](http://christensenacademy.org/modules/css-layouts/challenges/basic-layout-challenge-1.png)

##Starter Code

```html

<!DOCTYPE html>
<html>
  <head>
    <title>Basic Layout Challenge 1</title>
    <style>
      body
      {
        background-color:#333;
        color:#888;
        margin-top:0;
      }
    </style>
  </head>
  <body>
    <div id="top">
      <h1>Lorem Ipsum</h1>
      <h3>Aliquam varius tellus non tellus fringilla eu</h3>
    </div>
    <p>Lorem ipsum dolor sit amet, <span>consectetur adipiscing</span> elit. Aenean ut tincidunt urna. Integer faucibus nisl at tellus cursus at mollis elit tincidunt. Fusce quis tellus sed nulla fermentum aliquam a sodales lorem. Praesent vehicula ornare nibh, sit amet bibendum turpis volutpat eu. In scelerisque, dolor in condimentum adipiscing, nunc dolor tristique sapien, ut cursus nisi ipsum ut justo. Curabitur cursus nisi eget lorem hendrerit porttitor.</p>
    <p>Vestibulum pellentesque felis ut sapien tempus mollis. Proin mollis, nulla nec venenatis sodales, libero lorem suscipit dolor, vel ullamcorper velit metus in augue. Nam at diam mi, non tincidunt nisi. Quisque at quam ligula, a porta risus. Sed congue pellentesque tortor eget euismod. Nullam ut nisi eget risus varius pharetra quis ut leo. Duis sagittis diam id eros aliquet consectetur ullamcorper tellus euismod. Nullam id nunc et mi aliquet suscipit. Nunc varius, urna eu feugiat convallis, nulla felis semper turpis, quis pharetra neque erat quis velit. Maecenas vel elementum ligula.</p>
    <div id="footer">&copy; Proin Mollis</div>
  </body>
</html>
```