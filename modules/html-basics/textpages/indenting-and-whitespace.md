#Indenting and Whitespace
Browsers ignore whitespace when they interpret your code. The term "whitespace" refers to spaces, tabs, newlines, and all other characters that don't visibly appear in your code.

###Two Examples that would Display the Same

####Example 1
```html
<body>
        <p>This                             is    
        
        
       a sentence.
              </p></body>
```

####Example 2
```html
<body><p>This is a sentence.</p></body>
```

##Indentation
Although browsers don't care about whitespace, you should. Properly indenting is essential for developers to understand their own code and avoid making basic syntax errors, such as forgetting or mistyping a closing tag.

Also, indenting is easy once you get used to it. The only rule is that child elements are indented inside of their parent elements.

##Good Indentation Example
```html
<!DOCTYPE html>
<html>
  <head>
    <title>
      Example Webpage
    </title>
  </head>
  <body>
    <!-- NOTE: If an element only contains text, you can format it like this h1 -->
    <h1>Lorem Ipsum</h1>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="http://christensenacademy.org">
      Quisque vulputate</a> odio id odio posuere sit amet gravida turpis ultrices. Sed pharetra arcu 
      sit amet augue bibendum tempus. Etiam iaculis dui eu mauris pellentesque fringilla interdum elit 
      euismod. Praesent in lacinia arcu.
    </p>
    <!-- NOTICE: Look how easy it is to find the closing tag for this ul element. Because the indentation 
    is correct, just look straight down and it'll be the first thing you see! -->
    <ul>
      <li>lorem</li>
      <li>
        lorem
        <ul>
          <li>elit</li>
          <li>odio</li>
          <li>gravida</li>
        </lu>
      </li>
      <li>ipsum</li>
      <li>euismod</li>
      <li>lacinia</li>
    </ul>
  </body>
</html>
```
##Bad Indentation Example
```html
<!DOCTYPE html>
<html>
<head>
<title>
  Example Webpage</title>
</head>
  <body>
    <h1>Lorem Ipsum</h1>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="http://christensenacademy.org">
      Quisque vulputate</a> odio id odio posuere sit amet gravida turpis ultrices. Sed pharetra arcu sit 
      amet augue bibendum tempus. Etiam iaculis dui eu mauris pellentesque fringilla interdum elit euismod.
      Praesent in lacinia arcu.</p>
        <ul>
         <li>lorem</li>
          <li>
            lorem
            <ul>
            <li>elit</li>
             <li>odio</li>
            <li>gravida</li>
            </lu>
          </li>
          <li>ipsum</li>
          <li>euismod</li>
        <li>lacinia</li>
          </ul>
          </body>
</html>
```
