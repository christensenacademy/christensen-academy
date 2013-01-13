#Common Mistakes
These are four common mistakes you should watch out for. Most of thes occur because of bad indentation.
##Elements Outside of Head and Body
```html
<!DOCTYPE html>
<html>
  <head>
    <title>Example Webpage</title>
  </head>
  <h1>Hello World</h1> <!-- This h1 is in the wrong place. It should be in the body. -->
  <body>

  </body>
</html>
```
##Overlapping Elements
```html
<!-- To prove to yourself that this is wrong, I recommend trying to indent this code. It's impossible! -->
<h1>
<a href="lorem.html">
</h1>
</a>
```
##Forgotten Tags
```html
<!-- there is no closing ul tag -->
<ul>
  <li>lorem</li>
  <li>ipsum</li>
  <li>dolor</li>
```
##Unclosed Tags
```html
<img src="lorem.png"
<p>
  Etiam iaculis dui eu mauris pellentesque fringilla interdum elit euismod. Praesent in lacinia arcu. 
  Duis a magna quis elit tincidunt pulvinar. Nulla aliquam nibh sed dolor molestie volutpat. Nullam 
  molestie euismod mattis.
</p>
```
##Mispellings and Capital Letters
```html
<img scr="Lorem.png"> <!-- In this example, the attribute should be "src" not "scr". Also, it's possible 
                           that the file name was "lorem.png" instead of "Lorem.png" -->
```
