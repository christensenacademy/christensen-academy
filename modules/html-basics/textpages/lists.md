#Lists
Lists in HTML come in a few different varieties. The main two types are *ordered* and *unordered*.

Ordered lists display as numbered lists like this:

1. apple
2. banana
3. orange

Unordered lists display as bulleted lists like this:

* apple
* banana
* orange

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
Lists can occur inside of lists.

* Item 1
* Item 2
  * subitem 1
  * subitem 2
* Item 3

When this happens, simply put the inner list inside of one of the list items of the outer list.
```html
<ul>
  <li>Item 1</li>
  <li>
    Item 2
    <ul>
      <li>subitem 1</li>
      <li>subitem 2</li>
    </ul>
  </li>
  <li>Item 3</li>
</ul>
```
