#Background Image Challenge

* **Challenge:** Use background images to make a webpage that looks like the image below.
* **Estimated Time:** 40 minutes

![](https://raw.github.com/christensenacademy/christensen-academy/master/modules/css-layouts/challenges/background-image-challenge.png)

##Images to Use

![](https://raw.github.com/christensenacademy/christensen-academy/master/modules/css-layouts/challenges/gradient.png)

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
        background: #888 url("abstract3.png") no-repeat;
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