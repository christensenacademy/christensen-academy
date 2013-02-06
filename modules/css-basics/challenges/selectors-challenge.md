#Selectors Challenge

**Estimated Time:** 25 minutes

Your challange is to add selectors to the CSS rules in the following webpage. Comments have been left above each rule explaining what elements each rule should apply to.

```html
<!DOCTYPE html>
<html>
  <head>
    <title>Lorem Ipsum</title>
    <meta charset="utf-8">
    <style>
      /* this rule should be applied to all paragraph elements */
      {
        font-style:italic;
        color:green;
      }
      
      /* this rule should be applied to the element with the id super-important-element */
      {
        font-size:300%;
      }
      
      /* this rule should be applied to all elements of class big-yellow and all list items */
      {
        background:yellow;
        color:black;
      }
      
      /* this rule should be applied to all h1 elements when the mouse is hovering over them */
      {
        background:green;
        color:white;
      }
      
      /* this rule should be applied to all list items that are descendents of ordered lists */
      {
        color:white;
        background:yellow;
      }
    </style>
  </head>
  <body>
    <h1 id="super-important-element">Lorem Ipsum</h1>
    <h2 class="big-yellow">Lorem Ipsum</h2> 
    <hr>
    <p>
      Sed orci tortor, lobortis vitae ultricies a, <span class="big-yellow">vivamus</span> euismod eget nibh. Vivamus urna lacus, 
      faucibus id aliquam vitae, elementum dignissim lectus. Etiam sed mauris eros, placerat 
      tincidunt urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames 
      ac turpis egestas.
    </p>
    <p>
      This is another paragraph.
    </p>
    <ul>
      <li>Item 1</li>
      <li>Item 2</li>
      <li>Item 3</li>
    </ul>
    <ol>
      <li>Item 1</li>
      <li>Item 2</li>
      <li>Item 3</li>
    </ol>
  </body>
</html>
```

If done correctly, your page should display like this (with a hover effect for the main heading):

![](http://christensenacademy.org/modules/css-basics/challenges/selectors-challenge.png)
