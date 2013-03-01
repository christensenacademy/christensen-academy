#Absolute Positioning Challenge

* **Estimated Time:** 25 minutes

##Finished Page Should Look like This
![](http://christensenacademy.org/modules/css-layouts/challenges/absolute-positioning-challenge.png)

**Note:** You must make sure that `position:relative` or `position:absolute` is set on the big black box so that the four absolutely positioned elements stay inside of it. In my opinion, this is a wierd part of CSS. By default, absolutely positioned elements will position themselves with respect to the entire window unless they are children of a relatively or absolutely positioned element.

###What the Image does not Show

As the browser window resizes...

* the four black boxes stay in the four corners of the browser window.
* the big black box stays centered on the page.
* the white boxes inside the black box keep their positions.

##Starter Code
```html
<!DOCTYPE html>
<html>
  <head>
    <title>Absolute Positioning Challenge</title>
  </head>
  <body>
    <div id="b1"></div>
    <div id="b2"></div>
    <div id="b3"></div>
    <div id="b4"></div>
    <div id="big">
      <div id="s1"></div>
      <div id="s2"></div>
      <div id="s3"></div>
      <div id="s4"></div>
    </div>
  </body>
</html>
```
