#The Anatomy of a Webpage

Webpages are composed of an interesting mix of HTML, CSS, JavaScript and some other resources like images. The job of a Web browser is to interpret all of this "stuff" and display the webpage to the user.

###HTML
HTML stands for HyperText Markup Language and is the code the specifies the *content* of a webpage.

In the very early days of the Web, webpages were written almost entirely in HTML. Nowadays, HTML is still at the core of each webpage, but it's more accurate to think of the HTML as the *content and structure* of the webpage as opposed to the entirety of the webpage. Here is an example of what a bit of HTML code might look like:

```html
<h1>Jokes</h1>
<h3>Why shouldn't you write with a broken pencil?</h3>
<p>BECAUSE IT'S POINTLESS!</p>
<h3>Why did the cookie cry?</h3>
<p>Because his mother was a wafer so long!</p>
```

###CSS
CSS stands for Cascading Style Sheets and is the code that specifies the *style* of a webpage.

Good Web developers try hard to keep the style of their webpages (CSS) separate from the content of their webpages (HTML). Sometimes CSS are written in separate files. Sometimes they are written in the same file. Here's an example of what a bit of CSS code might look like:

```css
body {
  margin:0;
  background:#432fa3;
}
p {
  font-size: 33px;
}
```

###JavaScript

###Other Resources

###Exploring with Developer Tools
If you'd like to explore the "stuff" that composes your webpage, I recommend using the Google Chrome Web browser and using the [developer tools](https://developers.google.com/chrome-developer-tools/docs/overview) and poking around a bit. Can you find the images that came with the webpage? Can you find the HTML, CSS, and JavaScript files? Can you see how long it took each part of the page to load?

###Conclusion

Webpages are rendered by Web browsers that interpret HTML, CSS, and JavaScript code. What's more, webpages often make use of other resources like images. All of this "stuff" gets sent to our browsers (the clients) from Web servers whenever we browse the Web.

Webpages can be very complex. Originally, webpages 
