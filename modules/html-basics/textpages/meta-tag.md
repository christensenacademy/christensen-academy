#Meta Element
Many people are confused by `<meta>` elements becasue they in no way impact the appearance of the webpage. The `<meta>` element is found only as a child of the `<head>` element because its only purpose is to provide extra information about the page. It is an empty (void) element. Here are some examples:
```html
<!-- Lets the browser know what character encoding your HTML file is using. This will probably always be UTF-8... -->
<meta charset="utf-8"> 

<!-- Provides keywords that might be looked at by search engines -->
<meta name="keywords" content="computer science, programming, learning, html">

<!-- Provides a description of the page that will display below the title in a search result. -->
<meta name="description" content="Learn about computers and computer programming for free!">
```

###Example

The following is an image of Google search results. How Google know what description to place below the title of each page? The answer, it turns out, is that Google's Web crawlers looked at the `<meta>` elements of these webpages.

![](http://christensenacademy.org/modules/html-basics/textpages/meta-example.png)


![](http://christensenacademy.org/img/signature.png)
