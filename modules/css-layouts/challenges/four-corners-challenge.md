#Four Corners Challenge

Your challenge is to use absolute positioning--and other CSS--to get the following HTML to look like the picutre below.

NOTE: You must make sure that *position:relative* is set on the big black box so that the four absolutely positioned elements stay inside of it. In my opinion, this is a wierd part of CSS. By default, absolutely positioned elements will position themselves with respect to the entire window unless they are children of a relatively positioned element--or another absolutely positioned element.

```html
<!DOCTYPE html>
<html>
  <head>
    <title>Four Corners Challenge</title>
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

##Finished Page Should Look like This
![](https://raw.github.com/christensenacademy/christensen-academy/master/modules/css-layouts/challenges/four-corners-challenge.png)

##Mastery
Precise replication is the key.