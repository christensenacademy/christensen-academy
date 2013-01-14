#Image Element
The image element uses links just like the anchor element, but instead of creating a hyperlink, it displays the image on the page.

```html
<img src="img/logo.png"> <!-- Notice that this is a void (empty) element -->
<img src="http://christensenacademy.org/img/logo.png"> <!-- links in images can be relative or
                                                            absolute just like anchor elements -->
```

###Alt Attribute
The alt attribute is used to provide a short description of the image. This might seem unnecessary, but it is essential in order to make your page accessible to blind people.

```html
<img src="img/logo.png" alt="Logo for the website.">
```