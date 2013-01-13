#Lists
Lists in HTML come in a few different varieties. The main two types are *ordered* and *unordered*.
```html
<!-- This is an ordered list -->
<ol>
  <li>Lorem Ipsum</li> <!-- This is a list item element. -->
  <li>Lorem Ipsum</li>
  <li>Lorem Ipsum</li>
  <li>Lorem Ipsum</li>
  <li>Lorem Ipsum</li>
</ol>

<!-- This is an unordered list -->
<ul>
  <li>Lorem Ipsum</li>
  <li>Lorem Ipsum</li>
  <li>Lorem Ipsum</li>
  <li>Lorem Ipsum</li>
  <li>Lorem Ipsum</li>
</ul>
```
###Nested (Multi-Level) Lists
Lists can occur inside of lists. When this happens, simply put the child list inside of one of the list items of the parent.
```html
<ul>
  <li>Lorem Ipsum</li>
  <li>
    Lorem Ipsum
    <ul>
      <li>Lorem Ipsum</li>
      <li>Lorem Ipsum</li>
      <li>Lorem Ipsum</li>
      <li>Lorem Ipsum</li>
      <li>Lorem Ipsum</li>
    </ul>
  </li>
  <li>Lorem Ipsum</li>
  <li>Lorem Ipsum</li>
  <li>Lorem Ipsum</li>
</ul>
```
