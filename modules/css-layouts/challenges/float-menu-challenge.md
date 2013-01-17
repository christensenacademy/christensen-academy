#Float Menu Challenge

* **Challenge:** Create a webpage that looks like the image below.
* **Estimated Time:** 25 minutes

###Your page should look like this

![](https://raw.github.com/christensenacademy/christensen-academy/master/modules/css-layouts/challenges/float-menu-challenge.png)

###Starter Code

```html
<!DOCTYPE html>
<html>
  <head>
    <title>Float: Menu Challenge</title>
    <style>
      body {
        background-color:#888;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        margin:0;
      }
      
      #container {
        width:800px;
        margin:0 auto;
      }
      
      #top #nav a {
        display:block; /* so the links don't display inline... */
      }
      #top #nav a:hover {color:#000;}
    </style>
  </head>
  <body>
    <div id="container">
      <div id="top">
        <div id="nav">
          <a href="#">Nullam</a>
          <a href="#">Luctus</a>
          <a href="#">Donec</a>
          <a href="#">Sodales</a>
          <a href="#">Faucibus</a>
        </div>
        <h1>Float: Menu Challenge</h1>
      </div>
    </div>
  </body>
</html>
```
