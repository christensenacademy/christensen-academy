#Markup, Tags, and Elements
HTML stands for Hypertext **Markup** Language. The word *markup* refers to the extra "stuff" we add to the basic content of our webpage.

####Content without Markup
```
A Poem Roses are red Violets are blue
```
####Content with Markup
```html
<h1>A Poem</h1>
<p>
  Roses are <span style="color:red">red</span>
  <br>
  Violets are blue
</p>
```

Notice how the two examples above are *exactly the same* except that the second one has markup added to it. The markup *describes* the content and lets the Web browser know more info about the content so that the browser can display the page properly.

**Note:** There are other types of markup besides HTML. The term "markup" really just refers to the general idea of adding extra code to plain text to describe that text in some way. HTML is a special type of markup that is used to describe webpages.


##Tags and Elements
HTML is composed of *tags*, which mark the start and end of *elements*.

###Tags
In HTML, a tag looks like `<*>`, where the * can be any number of characters. For example, in HTML there is a `<body>` tag that has special meaning to a browser. I could invent my own tags--`<dakota>`, `<mountaindew code="red">`, and `<kowabunga>`--but tags I make up that aren't part of the official HTML specification wouldn't mean anything to a browser.

###Elements
Tags provide meaning to a browser by creating HTML elements. Most elements require two tags, an opening and a closing tag, as shown below.

####Some Examples
```html
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
<h1>Nam Ut Orci</h1>
<ul>
  <li><a href="index.html">Lorem</a></li>
  <li>Ipsum</li>
  <li>Dolor</li>
</ul>
```

###Closing Tags
Closing tags are easy to spot because they have a forward slash before their name (e.g., `</p>`).

**Note:** It is very important not to forget the forward slash in your closing tags. I encourage you to experiment writing code with and without the closing tag so that you can get a feel for what might happen if you accidentally forget the forward slash in the future.

####Parents and Children
You'll also notice that it is possible to have HTML elements inside of other HTML elements. In the example above, there are several *child* `li` elements inside of a *parent* `ul` element.
