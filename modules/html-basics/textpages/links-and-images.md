#Anchor Element
Use this element for creating hyperlinks to resources on the World Wide Web. If the resource is another webpage, the new page will appear in the browser. If the resource is something else, say a PDF document or computer program, the browser will likely download the document and allow an external application to open it, but that is up to the browser. For example, some browsers open PDF documents and display them themselves while others have an external program (Adobe Reader) open them.

The anchor element's name is just the letter `a`. Every anchor element needs an href attribute with a link (relative or absolute) as a value.

##Examples of the Anchor Element
```html
<!-- an example of turning text into a hyperlink -->
If you want to learn about programming, go to the <a href="http://christensenacademy.org"> Christensen Academy </a>

<!-- an example of turning an image into a hyperlink -->
<a href="index.html">
  <img src="img/logo.png">
</a>
```

##Email Link
```html
<a href="mailto:lorem@ipsum.com?subject=Kowabunga!"> <!-- the ?subjet= part is optional -->
  Email Homer
</a>
```

#Image Element
The image element uses links just like the anchor element, but instead of creating a hyperlink, it displays the image on the page.

```html
<img src="img/logo.png"> <!-- Notice that this is a void (empty) element -->
<img src="http://christensenacademy.org/img/logo.png"> <!-- links in images can be relative or
                                                            absolute just like anchor elements -->
```

##Alt Attribute
The alt attribute is used to provide a short description of the image. This might seem unnecessary, but it is essential in order to make your page accessible to blind people.

```html
<img src="img/logo.png" alt="Logo for the website.">
```