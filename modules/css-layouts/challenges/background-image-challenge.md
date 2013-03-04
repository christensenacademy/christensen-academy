#Background Image Challenge

**Estimated Time:** 40 minutes

**Prerequisite Knowledge:**

* How to create, repeat, and position background images in CSS.

###Your Page Should Look like This
![](http://christensenacademy.org/modules/css-layouts/challenges/background-image-challenge.png)

###Images to Use

![](http://christensenacademy.org/modules/css-layouts/challenges/gradient.png)

![](http://christensenacademy.org/modules/css-layouts/challenges/abstract3.png)

##Starter Code

```html
<!DOCTYPE html>
<html>
  <head>
    <title>Background Image Challenge</title>
    <style>
      body {
        background: #222;
        color:#bbb;
      }
      div {
        background: #888;
        width: 200px;
        height: 150px;
        margin: 8px;
      }
      #gradient {
        background: url("gradient.png") repeat-x;
        width:auto;
      }
      #horizontal-repeat {background-repeat:repeat-x;}
      #vertical-repeat {}
      #both-repeat {}
      #top-center-position {width:auto;}
      #bottom-right-position {width:auto;}
    </style>
  </head>
  <body>
    <div id="gradient">
      <h1>Lorem Ipsum</h1>
    </div>
    <div id="horizontal-repeat"></div>
    <div id="vertical-repeat"></div>
    <div id="both-repeat"></div>
    <div id="top-center-position"></div>
    <div id="bottom-right-position"></div>
  </body>
</html>
```
