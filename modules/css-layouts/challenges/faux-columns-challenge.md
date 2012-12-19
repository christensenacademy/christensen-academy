Your challenge is to achieve the result shown in the picture below without setting an explicit height for the "container", the "main", or the "column". In addition, you must create your column using a float, not absolute positioning. In order to achieve this, you'll need to employ a trick: faux columns. The idea is that you can add a background image to the "container" and have it repeat vertically. Don't give "column" or "main" a background color or image. This will give the illusion of having both columns extend equally far down the page.

Note: This trick also relies on clearing the float with the following code `<div style="clear:both;visibility:hidden;"></div>`. Try taking this code out to see what happens.

```html
<!DOCTYPE html>
<html>
  <head>
    <title>Menu Challenge</title>
    <style>
      body {margin:0;}
      #container {width:960px;margin:0 auto;}
    </style>
  </head>
  <body>
    <div id="container">
      <div id="column">
        <p>Maecenas in ante arcu. Vivamus at metus dui. Nunc tempor, erat ac hendrerit hendrerit, felis elit ultrices magna, facilisis suscipit tortor diam in nibh. Nullam nibh magna, rutrum malesuada varius eget, molestie eget enim. In in sem velit, at rutrum risus. Phasellus vitae lorem nisi, vitae commodo quam. Donec in convallis leo.</p><p>Maecenas in ante arcu. Vivamus at metus dui. Nunc tempor, erat ac hendrerit hendrerit, felis elit ultrices magna, facilisis suscipit tortor diam in nibh. Nullam nibh magna, rutrum malesuada varius eget, molestie eget enim. In in sem velit, at rutrum risus. Phasellus vitae lorem nisi, vitae commodo quam. Donec in convallis leo.</p>
      </div>
      <div id="main">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur elementum accumsan risus ac suscipit. Donec volutpat eros quis elit porttitor bibendum. Suspendisse id quam sed enim dignissim laoreet non nec sem. Nam fermentum pellentesque urna eget mattis. Vivamus pellentesque consectetur nulla, ut consectetur sapien dignissim quis. Integer ultrices, mi quis hendrerit aliquam, lorem risus accumsan turpis, id blandit tortor turpis non leo. Cras dignissim aliquet sem, a tempor odio vehicula vel. Praesent euismod fermentum dapibus. Cras eros massa, vestibulum ultricies vehicula eget, vehicula fermentum nisi. Aliquam a eros sapien. Suspendisse potenti.</p>
        <p>Vivamus bibendum dictum sapien, vitae ullamcorper nulla congue ut. Integer dignissim tempor felis, sit amet hendrerit nisl porta sit amet. Aenean quis erat magna. Nunc placerat malesuada mi, vitae auctor tellus suscipit lobortis. Nullam scelerisque quam cursus libero faucibus sit amet facilisis mauris sagittis. Proin vitae lacus quis tortor viverra molestie ac facilisis eros. Nulla ut accumsan purus. Praesent quis erat nec justo lobortis posuere. Curabitur ut sem vel ipsum molestie venenatis congue in massa. Ut elementum metus a lacus accumsan eget aliquet lorem pretium. Vivamus facilisis, nisl non sagittis dapibus, erat mi rutrum sem, vitae posuere odio sapien ut diam. Pellentesque pharetra imperdiet enim in volutpat. Proin mi massa, blandit sodales pellentesque vitae, mattis in risus. Curabitur at augue a eros tincidunt vulputate. Quisque suscipit consequat ipsum, nec convallis massa tristique volutpat. Vestibulum ut tellus et leo porta elementum ut ac erat.</p>
      </div>
      <div style="clear:both;visibility:hidden;"></div>
    </div>
  </body>
</html>
```
###Gradient Image

![](https://raw.github.com/christensenacademy/christensen-academy/master/modules/css-layouts/challenges/horizontal-gradient.png)

###Finished Page Should Look like This
![](https://raw.github.com/christensenacademy/christensen-academy/master/modules/css-layouts/challenges/faux-columns-challenge.png)