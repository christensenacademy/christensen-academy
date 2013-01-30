#Meta Element
Many people are confused by `<meta>` elements becasue they in no way impact the appearance of the webpage. The `<meta>` element is found only as a child of the `<head>` element because its only purpose is to provide extra information about the page. It is an empty (void) element. Here are some examples:
```html
<meta charset="utf-8"> <!-- Lets the browser know what character encoding your browser is using. -->

<!-- Provides keywords that might be looked at by search engines -->
<meta name="keywords" content="computer science, programming, learning, html">

<!-- Provides a description of the page that will display below the title in a search result. -->
<meta name="description" content="Learn about computers and computer programming for free!">
```

###Example

The following is an image of Google search results. What's interesting here is how Google know what description to place below the title of each page. The answer, it turns out, is that Google's Web crawlers looked at the meta tags of these webpages.

![](http://christensenacademy.org/modules/html-basics/textpages/meta-example.png)
